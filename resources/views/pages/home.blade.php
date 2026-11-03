@extends('layouts.app')

@section('title', 'Home')

@section('content')
<section class="hero">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <p class="eyebrow">WELCOME TO THE SURFING COMMUNITY</p>
        <h1>Feel the wave.<br><span>Share your voice.</span></h1>
        <p class="hero-description">
            Discover the surfing lifestyle, explore ocean experiences and connect
            with people who share your passion for the waves.
        </p>
        <div class="hero-actions">
            <a class="button button-primary" href="{{ route('about') }}">Explore Surfing</a>
            <a class="button button-outline" href="{{ route('contact') }}">Share Your Feedback</a>
        </div>
    </div>
    <div class="hero-note">OCEAN • COMMUNITY • EXPERIENCE</div>
</section>

<section class="section intro-section">
    <div class="section-heading">
        <p class="eyebrow">WELCOME TO OUR WORLD</p>
        <h2>More than a sport.<br><span>It's a way of life.</span></h2>
    </div>
    <p class="section-copy">
        CherrySurf is a place to discover surfing, celebrate ocean culture and
        share your thoughts. Whether you are new to surfing or already love the
        waves, your voice belongs here.
    </p>
</section>

<section class="feature-grid">
    <article class="feature-card">
        <img src="./images/cherry01.jpg" alt="Surfer riding an ocean wave">
        <div><span>01 / DISCOVER</span><h3>Explore the waves</h3><p>Learn about surfing and the experiences that make it special.</p></div>
    </article>
    <article class="feature-card">
        <img src="./images/cherry02.jpg" alt="Ocean waves rolling towards the beach">
        <div><span>02 / CONNECT</span><h3>Join the community</h3><p>Celebrate the surfing lifestyle and connect through shared experiences.</p></div>
    </article>
    <article class="feature-card">
        <img src="./images/cherry03.jpg" alt="Beautiful tropical coastal landscape">
        <div><span>03 / SHARE</span><h3>Share your voice</h3><p>Send us your ideas, feedback and rating to help us improve.</p></div>
    </article>
</section>

<section class="cta-strip">
    <div><p class="eyebrow">YOUR EXPERIENCE MATTERS</p><h2>Be part of the conversation.</h2></div>
    <a class="button button-dark" href="{{ route('contact') }}">Contact Us</a>
</section>
@endsection
