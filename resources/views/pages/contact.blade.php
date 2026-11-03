@extends('layouts.app')

@section('title', 'Contact & Feedback')

@section('content')
<section class="page-hero contact-hero">
    <div class="page-hero-content">
        <p class="eyebrow">WE WOULD LOVE TO HEAR FROM YOU</p>
        <h1>Your voice<br><span>makes a difference.</span></h1>
        <p>Have a question or an idea? Send us a message and rate your experience.</p>
    </div>
</section>

<section class="section contact-layout">
    <div class="contact-info">
        <p class="eyebrow">GET IN TOUCH</p>
        <h2>Let's start a<br><span>conversation.</span></h2>
        <p>Use the form to contact the CherrySurf team. Your feedback helps us make this community better.</p>
        <div class="contact-highlight"><span class="highlight-icon">✉</span><div><strong>Send us a message</strong><small>We welcome your questions, suggestions and feedback.</small></div></div>
        <div class="contact-highlight"><span class="highlight-icon">★</span><div><strong>Rate your experience</strong><small>Tell us how you feel about CherrySurf.</small></div></div>
    </div>

    <form class="feedback-form" method="POST" action="{{ route('feedback.store') }}">
        @csrf
        <h3>Contact & feedback</h3>
        <p class="form-intro">Fill in the details below.</p>

        @if (session('success'))
            <div class="success-message">{{ session('success') }}</div>
        @endif

        <label for="name">Your name</label>
        <input id="name" name="name" type="text" value="{{ old('name') }}" placeholder="Enter your name" required>
        @error('name') <small class="error-message">{{ $message }}</small> @enderror

        <label for="email">Email address</label>
        <input id="email" name="email" type="email" value="{{ old('email') }}" placeholder="Enter your email" required>
        @error('email') <small class="error-message">{{ $message }}</small> @enderror

        <label>Rate your experience</label>
        <div class="rating-options" role="radiogroup" aria-label="Rating from one to five stars">
            @for ($star = 5; $star >= 1; $star--)
                <label class="rating-option">
                    <input type="radio" name="rating" value="{{ $star }}" {{ old('rating') == $star ? 'checked' : '' }} required>
                    <span>{{ $star }} ★</span>
                </label>
            @endfor
        </div>
        @error('rating') <small class="error-message">{{ $message }}</small> @enderror

        <label for="message">Your message</label>
        <textarea id="message" name="message" rows="5" placeholder="Write your feedback here..." required>{{ old('message') }}</textarea>
        @error('message') <small class="error-message">{{ $message }}</small> @enderror

        <button class="button button-primary submit-button" type="submit">Submit Feedback <span>→</span></button>
    </form>
</section>

<section class="latest-feedback">
    <div class="feedback-heading">
        <p class="eyebrow">COMMUNITY VOICES</p>
        <h2>Latest <span>feedback.</span></h2>
        <p>Hear what our community has recently shared.</p>
    </div>

    <div class="feedback-grid">
        @forelse ($feedbacks as $feedback)
            <article class="feedback-card">
                <div class="feedback-card-top">
                    <span class="feedback-avatar">{{ strtoupper(substr($feedback->name, 0, 1)) }}</span>
                    <div>
                        <h3>{{ $feedback->name }}</h3>
                        <small>{{ $feedback->created_at->format('M j, Y') }}</small>
                    </div>
                </div>
                <div class="feedback-stars" aria-label="Rated {{ $feedback->rating }} out of 5">
                    @for ($star = 1; $star <= 5; $star++)
                        <span class="{{ $star <= $feedback->rating ? 'filled' : '' }}" aria-hidden="true">★</span>
                    @endfor
                </div>
                <p class="feedback-message">{{ $feedback->message }}</p>
            </article>
        @empty
            <p class="no-feedback">No feedback yet. Be the first to share your experience.</p>
        @endforelse
    </div>
</section>
@endsection
