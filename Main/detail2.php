<?php
include "database.php";


// Periksa apakah parameter ID ada dalam URL
if(isset($_GET['id_destinasi'])) {
    $id = $_GET['id_destinasi'];
    
    // Ambil informasi tentang destinasi wisata dari database berdasarkan ID
    $sql = "SELECT * FROM destinasi_bukit WHERE id_destinasi = $id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nama_bukit = $row['nama_bukit'];
        $alamat_bukit = $row['alamat_bukit'];
        $deskripsi_bukit =$row['deskripsi_bukit'];
        $image_destinasi= $row['image_destinasi'];
        $harga_tiket = $row['harga_tiket']; // Asumsikan ada kolom harga_tiket di tabel images
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
    <title>Detail Destinasi Wisata - <?php echo $nama_bukit; ?></title>
    <link rel="stylesheet" href="CSS/detail.css">
</head>
<body>
    <header>
        <h1>Detail Destinasi Wisata</h1>
        <nav>
            <ul>
                <li><a href="index.php">Beranda</a></li>
                <li><a href="destinasi.php">Destinasi</a></li>
                <li><a href="kontak.php">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <div class="destination-detail">
        <img src="uploads/<?php echo $image_destinasi; ?>" alt="Gambar <?php echo $nama_bukit; ?>">
        <h2><?php echo $nama_bukit; ?></h2>
        <p><strong>Alamat:</strong> <?php echo $alamat_bukit; ?></p>
        <p><strong>Harga Tiket:</strong> <?php echo $harga_tiket; ?></p>
        <p><strong>deskripsi wisata:</strong> <?php echo $deskripsi_bukit; ?></p>
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

