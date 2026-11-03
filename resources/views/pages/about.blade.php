@extends('layouts.app')

@section('title', 'About Surfing')

@section('content')
<section class="page-hero about-hero">
    <div class="page-hero-content">
        <p class="eyebrow">GET TO KNOW THE OCEAN</p>
        <h1>Discover the<br><span>world of surfing.</span></h1>
        <p>Understand the sport, respect the ocean and enjoy every moment on the waves.</p>
    </div>
</section>

<section class="section split-section">
    <div>
        <p class="eyebrow">WHAT IS SURFING?</p>
        <h2>A connection between<br><span>people and the ocean.</span></h2>
    </div>
    <div class="section-copy">
        <p>Surfing is a water sport where a person rides a wave towards the shore
        using a surfboard. It takes balance, practice, patience and respect for
        the ocean.</p>
        <p>For many people, surfing is also a lifestyle. It brings adventure,
        friendship, fitness and a deeper appreciation of nature.</p>
    </div>
</section>

<section class="about-image-section">
    <img src="./images/cherry04.jpg" alt="Powerful ocean waves">
    <div class="image-caption"><span>RESPECT THE OCEAN</span><h2>Every wave is a new experience.</h2></div>
</section>

<section class="section tips-section">
    <p class="eyebrow">START WITH THE BASICS</p>
    <h2>Enjoy surfing <span>responsibly.</span></h2>
    <div class="tips-grid">
        <article><span>01</span><h3>Learn the basics</h3><p>Start with beginner lessons and learn how to handle a surfboard safely.</p></article>
        <article><span>02</span><h3>Know the conditions</h3><p>Check the waves, weather, currents and local beach guidance before entering the water.</p></article>
        <article><span>03</span><h3>Respect everyone</h3><p>Follow surf etiquette, respect other surfers and protect the marine environment.</p></article>
    </div>
</section>
@endsection
