@extends('layout.app')

@section('content')
    <section class="hero">
        <div class="hero-content">
            <!-- Replace the src with your transparent PNG image -->
            <img src="assets/img/1726105757097.png" alt="Your Image" class="hero-image">
            <h1>Hi, I'm Reyhan!</h1>
            <p>Welcome to my personal website. You could see all my works here.</p>
            <a href="/work" class="btn">View My Work</a>
        </div>
    </section>
    <section class="about">
        <h2>About Me</h2>
        <div class="about-card">
            <div class="about-image">
                <img src="assets/img/1726105757097.png" alt="Your Image">
            </div>
            <div class="about-details">
                <h3>Reyhan Nurqodri Ramadhani</h3>
                <p class="role">Student & Developer</p>
                <p class="bio">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ac justo nec nisl tincidunt tincidunt.
                    Vivamus euismod, nisi vel consectetur interdum, nisl nisi aliquet nunc, nec tincidunt nisl nisi nec nisl.
                </p>
                <div class="about-info">
                    <p><strong>Location:</strong> Jakarta, Indonesia</p>
                    <p><strong>Email:</strong> reyhan@example.com</p>
                    <p><strong>Interests:</strong> Web Development, Design, Photography</p>
                </div>
            </div>
        </div>
    </section>
@endsection