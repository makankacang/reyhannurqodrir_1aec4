<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - My Page</title>
    <link rel="stylesheet" href="assets/css/style.css?v=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css?v=1.0">
</head>
<body>
    <header>
        <nav>

            <ul class="nav-links">
                <li><a href="/">Home</a></li>
                <li><a href="/work">Work</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="hamburger" id="hamburger">
                <i class="fas fa-bars"></i>
            </div>
        </nav>
    </header>
    <main>
    @yield('content')
</main>
<footer id="contact">
    <div class="footer-content">
        <h3>Get in Touch</h3>
        <p>Feel free to reach out to me at <a href="mailto:nowyouseelone@gmail.com">nowyouseelone@gmail.com</a>.</p>
        <div class="social-links">
            <a href="#"><i class="fab fa-linkedin"></i></a>
            <a href="#"><i class="fab fa-github"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
    <p class="footer-bottom">&copy; 2023 Rey. All rights reserved.</p>
</footer>
<script src="assets/js/style.js"></script>
</body>
</html>