
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
        <a href="#" class="navbar-logo">VistaSembalun</a>
        <div class="navbar-nav">
        <a href="#home">Home</a>
        <a href="#about">Galery</a>
        <a href="#menu">Menu</a>
        <a href="#kontak">Kontak</a>
      </div>
      <div class="navbar-extra">
        <div class="search-container">
        <button class="login" id="logout">Log Out</button>
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
    </div>
    <div class="destinasi" id="gallery">
    <a href="#" class="wisata">
      <p class="title-wisata">Enjoy Your Dream Vacation</p>
         <img src="img/mangku.jpg" alt="wisata">
    </a>
    <p class="judul-wisata">Mangku Sakti</p>
    <p class="desk-wisata">Sembalun Bumbung , 28 Oktober 2000
    Rafli adalah seorang pendaki handal yang memiliki kecintaan mendalam terhadap kegiatan petualangan di alam bebas. Sebagai seorang pendaki yang berpengalaman, Rafli dikenal sebagai individu yang sangat disiplin, penuh semangat, dan memiliki keuletan tinggi dalam menghadapi berbagai tantangan alam.Rp. 700.000 /3 hari</p>
    <div class="button-view">
    <button href="index.php" class="view-dest" id="view">view</button></div>
    </section>
</section>
    <script>
      feather.replace();
    </script>
     <script src="scriptdash.js"></script>
  </body>


</html>
