<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Portofolio</title>
    <!-- Memuat CSS -->
    <link rel="stylesheet" href="CSS/index.css"/>
    <!-- Memuat font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap" rel="stylesheet">
    <!-- Memuat feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
<nav class="navbar">
    <a href="#" class="logo">
        <img src="img/vistaLogo.png" alt="Logo">
    </a>
    <a href="#" class="navbar-logo">VistaSembalun</a>
    <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Gallery</a>
        <a href="#menu">Menu</a>
        <a href="#kontak">Kontak</a>
    </div>
    <div class="navbar-extra">
        <div class="search-container">
            <button class="register" id="register">Register</button>
            <button class="login" id="login">Sign In</button>
        </div>
    </div>
</nav>
<section class="hero" id="home">
    <main class="content">
        <div class="kotak">
            <img src="img/sembalun4.jpg" alt="Gambar" class="gambar"/>
            <div class="logo-dinpar">
                <img src="img/wonder.png" alt="Dinpar Logo"/>
            </div>
            <p class="text-hero">Enjoy Your Dream Vacation With Sembalun</p>
            <p class="text1-hero">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam quasi voluptatem laboriosam a dicta quam, eius sequi id aperiam sunt.</p>
            <p class="text2-hero">Trusted By</p>
        </div>
        <div class="search-bar">
            <input type="text" class="search-input" placeholder="Cari...">
            <button class="search-button">Cari</button>
        </div>
    </main>
</section>
<section class="hero-after">
    <div class="warning">
        <a href="#"><i class="icon" data-feather="alert-triangle"></i></a>
        <p>Check the latest COVID-19 restriction before you travel. <span>Learn more</span></p>
    </div>
</section>
<script>
    feather.replace();
</script>
<script src="JS/script.js"></script>
</body>
</html>
