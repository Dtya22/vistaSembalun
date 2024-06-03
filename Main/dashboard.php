<?php
    // Start the session
    session_start();

if (!isset($_SESSION["is_login"])) {
    header("location: login.php");
    exit;
}

    $username = $_SESSION["username"]; // Retrieve the username from the session

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portofolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Anta&family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ita  l,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    <link href="https://fonts.googleapis.com/css2?family=Silkscreen:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Molle&family=Silkscreen:wght@400;700&family=Sofia&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Molle&family=Silkscreen:wght@400;700&family=Sofia&display=swap" rel="stylesheet">
    <!-- feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- my style -->
    <link rel="stylesheet" href="CSS/dashboard.css" />
    <link rel="stylesheet" href="footer.html" />
  </head>

  <body>
    <nav class="navbar">
        <a href="#" class="logo">
         <img src="img/vistaLogo.png" alt="Logo">
        </a>
        <a href="#" class="navbar-logo">Welcome, <?php echo $username; ?>.</a>
        <div class="navbar-nav">
        <a href="#home" id="home">Home</a>
        <a href="#">Galery</a>
       <a href="#menu">Menu</a>
        <a href="#kontak">Kontak</a>
        </div>
      </div>
      <div class="navbar-extra">
        <div class="search-container">
        <button type="submit" class="logout" id="logout">Log Out</button>
    </div>
    </div>
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
          <form action="searchForm">
          <input type="text" id="searchInput" class="search-input" placeholder="Cari...">
          <button type="submit" class="search-button">Cari</button></form>
        </div>
      </main>
    </section>
    <section class="hero-after">
    <div class="warning">
      <a href="#"><i class="icon" data-feather="alert-triangle"></i></a>
      <p>Check the latest COVID-19 restriction before you travel. <span>Learn more</span></p>
    </div>
    <div class="destinasi" id="gallery">
      <div class="wisata">
    <a href="#" class="wisata">
      <p class="title-wisata">Explore stays in trending destinations</p>
    </a>
  </div>
    </section>
    <section class="utama">  
    <div class="card-container">
          <div class="card">
              <img src="img/rinjani.png" alt="Gambar 1">
              <div class="card-content">
                 <h3>Mangku Sakti</h3>
                 <p class="text-icon">sembalun Lawang</p>
                 <a href="button">view</a>
              </div>
          </div>
          <div class="card">
              <img src="img/mangkuSakti.png" alt="Gambar 1">
              <div class="card-content">
                 <h3>Mangku Sakti</h3>
                 <p class="text-icon">sembalun Lawang </p>
                 <a href="button">view</a>
              </div>
          </div>
          <div class="card">
              <img src="img/paljepang.png" alt="Gambar 1">
              <div class="card-content">
                 <h3>Mangku Sakti</h3>
                 <p class="text-icon">sembalun Lawang </p>
                 <a href="button">view</a>
              </div>
          </div>
          <div class="card">
              <img src="img/mangkuKodek.png" alt="Gambar 1">
              <div class="card-content">
                 <h3>Mangku Sakti</h3>
                 <p class="text-icon">sembalun Lawang </p>
                 <a href="button">view</a>
              </div>
          </div>
          <div class="tittle">
          <p class="text-tittle">Waterfall recomendations</p>
          </div>    
    </div>
  <div class="card-container2">
    <div class="card">
              <img src="img/mangkuSakti.png" alt="Gambar 1">
              <div class="card-content">
                 <h3>Mangku sakti</h3>
                 <p class="text-icon">sembalun Lawang</p>
                 <a href="button">view</a>
              </div>
          </div>
          <div class="card">
              <img src="img/dewiS.png" alt="Gambar 1">
              <div class="card-content">
                 <h3>Dewi selendang</h3>
                 <p class="text-icon">sembalun Lawang </p>
                 <a href="button">view</a>
              </div>
          </div>
          <div class="card">
              <img src="img/mangkuKodek.png" alt="Gambar 1">
              <div class="card-content">
                 <h3>Mangku kodek</h3>
                 <p class="text-icon">sembalun Lawang </p>
                 <a href="button">view</a>
              </div>
          </div>
          <div class="card">
              <img src="img/umarMaya.png" alt="Gambar 1">
              <div class="card-content">
                 <h3>Umar maya</h3>
                 <p class="text-icon">sembalun Lawang </p>
                 <a href="button">view</a>
              </div>
          </div>
          <div class="tittle2">
          <p class="text-tittle">Mountain & hill recomendations</p>
          </div>
    </div>
    <div class="card-container3">
    <div class="card">
              <img src="img/rinjani.png" alt="Gambar 1">
              <div class="card-content">
                 <h3>Rinjani</h3>
                 <p class="text-icon">sembalun Lawang</p>
                 <a href="button">view</a>
              </div>
          </div>
          <div class="card">
              <img src="img/pergasingan.png" alt="Gambar 1">
              <div class="card-content">
                 <h3>Pergasingan</h3>
                 <p class="text-icon">sembalun Lawang </p>
                 <a href="button">view</a>
              </div>
          </div>
          <div class="card">
              <img src="img/anakDara.png" alt="Gambar 1">
              <div class="card-content">
                 <h3>Anak dara</h3>
                 <p class="text-icon">sembalun Lawang </p>
                 <a href="button">view</a>
              </div>
          </div>
          <div class="card">
              <img src="img/paljepang.png" alt="Gambar 1">
              <div class="card-content">
                 <h3>Pal jepang</h3>
                 <p class="text-icon">sembalun Lawang </p>
                 <a href="button">view</a>
              </div>
          </div>
    </div>
</div> 
</section>
    <script>
      feather.replace();
    </script>
<script src="JS/scriptdash.js"></script>
  </body>
  <body>
  <?php include "layout/footer2.php"?>
  </body>
</html>
