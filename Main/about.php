<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "vistaSembalun");

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="CSS/About.css">
    <!-- feather icon -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <nav class="navbar">
        <a href="#" class="logo">
            <img src="img/vistaLogo.png" alt="Logo">
        </a>
        <a href="#" class="navbar-logo">Vista Sembalun</a>
        <div class="navbar-nav">
            <a href="index.php">Home</a>
            <a href="gallery.php">Gallery</a>
            <a href="menu.php">Menu</a>
            <a href="contact.php">Kontak</a>
            <a href="About.php">About Us</a>
        </div>
        <div class="navbar-extra">
            <div class="search-container">
                <form id="logoutForm" method="post">
                    <button type="submit" class="logout" id="logout">Log Out</button>
                </form>
            </div>
        </div>
    </nav>

    <section class="about-section">
        <div class="content">
            <h1>About Us</h1>
            <p>Welcome to Vista Sembalun, where your dream vacation becomes a reality. We are dedicated to providing you with the best travel experience in Sembalun.</p>
            <p>Our mission is to offer exceptional service and unforgettable adventures. Whether you're here for the breathtaking landscapes or the rich cultural heritage, Vista Sembalun has something for everyone.</p>
            <p>Join us and explore the beauty of Sembalun. We look forward to making your stay an unforgettable one!</p>
        </div>
    </section>

    <script>
        feather.replace();
    </script>
    <script src="JS/scriptdash.js"></script>
</body>
<?php include "layout/footer2.php" ?>
</html>
<?php mysqli_close($koneksi); ?>
