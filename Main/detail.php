<?php
include "database.php";


// Periksa apakah parameter ID ada dalam URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Ambil informasi tentang destinasi wisata dari database berdasarkan ID
    $sql = "SELECT * FROM images WHERE id = $id";
    $result = $conn->query($sql);

    $sql2 = "SELECT latitude, longitude FROM locations";
    $result2 = $conn->query($sql2);

    $locations = [];

    if ($result2->num_rows > 0) {
        while($row = $result2->fetch_assoc()) {
            $locations[] = $row;
        }
    }
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nama_destinasi = $row['nama_destinasi'];
        $alamat = $row['alamat'];
        $deskripsi =$row['deskripsi'];
        $image_name = $row['image_name'];
        $harga_tiket = $row['harga_tiket']; 
        // Asumsikan ada kolom harga_tiket di tabel images
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID tidak ditemukan dalam URL.";
}


// Tutup koneksi
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Destinasi Wisata - <?php echo $nama_destinasi; ?></title>
    <link rel="stylesheet" href="CSS/detail.css">
</head>
<body>
        <h1>Detail Destinasi Wisata</h1>
        <nav class="navbar">
        <a href="#" class="logo">
         <img src="img/vistaLogo.png" alt="Logo">
        </a>
        <a href="dashboard.php" class="navbar-logo">VistaSembalun</a>
        <a href="dashboard.php" class="navbar-logo"></a>
        <div class="navbar-nav">
        <a href="#dashboard.php" id="home">Home</a>
        <a href="gallery_full.php">Galery</a>
       <a href="#menu">Menu</a>
        <a href="#kontak">Kontak</a>
        </div>
      </div>
      <div class="navbar-extra">
        <div class="search-container">
          <form action="logout.php" id="logoutForm" method="post">
            <button type="submit" class="logout" id="logout">Log Out</button>
          </form>
        </div>
    </div>
        </div>
      </div>
    </nav>
    <div class="destination-detail">
        <img src="uploads/<?php echo $image_name; ?>" alt="Gambar <?php echo $nama_destinasi; ?>">
        <h2><?php echo $nama_destinasi; ?></h2>
        <p><strong>Alamat:</strong> <?php echo $alamat; ?></p>
        <p><strong>Harga Tiket:</strong> <?php echo $harga_tiket; ?></p>
        <p><strong>deskripsi wisata:</strong> <?php echo $deskripsi; ?></p>
        <!-- Tombol untuk pembayaran -->
        <form action="pembayaran.php" method="post">
            <input type="hidden" name="id_destinasi" value="<?php echo $id; ?>">
            <input type="hidden" name="harga_tiket" value="<?php echo $harga_tiket; ?>">
            <button type="submit">Bayar Tiket</button>
        </form>
    </div>
</body>
<body>
  <?php include "layout/footer2.php"?>
  </body>
</html>

