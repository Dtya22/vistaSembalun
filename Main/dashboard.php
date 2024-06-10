<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "vistas");

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Ambil data gambar dari database
$query = "SELECT * FROM images";
$result = mysqli_query($koneksi, $query);

// Cek apakah query berhasil
if (!$result) {
    echo "Terjadi kesalahan saat menjalankan query: " . mysqli_error($koneksi);
    exit();
}
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
        <a href="#" class="navbar-logo"></a>
        <div class="navbar-nav">
        <a href="#home" id="home">Home</a>
        <a href="#">Galery</a>
       <a href="#menu">Menu</a>
        <a href="#kontak">Kontak</a>
        </div>
      </div>
      <div class="navbar-extra">
        <div class="search-container">
        <form id="logoutForm" method="post">
    <button type="submit" class="logout" id="logout">Log Out</button>
</form>
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
    </section>
    <div class="gallery">
    <?php while($row = mysqli_fetch_assoc($result)): ?>
        <div class="card">
            <img src="uploads/<?php echo $row['image_name']; ?>" alt="Gambar">
            <div class="card-body">
                <h3><?php echo $row['nama_destinasi']; ?></h3>
                <p><?php echo $row['alamat']; ?></p>
                <a href="detail.php?id=<?php echo $row['id']; ?>" class="btn-view">View</a>
            </div>
        </div>
    <?php endwhile; ?>
</div>


    <script>
      feather.replace();
    </script>
<script src="JS/scriptdash.js"></script>
  </body>
  <body>
  <?php include "layout/footer2.php"?>
  </body>
</html>
<?php mysqli_close($koneksi); ?>
