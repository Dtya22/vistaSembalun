<?php
include "database.php";

// Periksa apakah parameter ID ada dalam URL
if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Ambil informasi tentang destinasi wisata dari database berdasarkan ID
    $sql = "SELECT * FROM images WHERE id = $id";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $nama_destinasi = $row['nama_destinasi'];
        $alamat = $row['alamat'];
        $image_name = $row['image_name'];
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
    <title>Detail Destinasi Wisata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .destination-detail {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
        }

        .destination-detail img {
            max-width: 100%;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        h3 {
            color: #333;
        }

        p {
            color: #666;
            margin-bottom: 10px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h2>Detail Destinasi Wisata</h2>
    <div class="destination-detail">
        <img src="uploads/<?php echo $image_name; ?>" alt="Gambar <?php echo $nama_destinasi; ?>">
        <h3><?php echo $nama_destinasi; ?></h3>
        <p><?php echo $alamat; ?></p>
        <p>Harga Tiket: <?php echo $harga_tiket; ?></p>
        <!-- Tombol untuk pembayaran -->
        <form action="pembayaran.php" method="post">
            <input type="hidden" name="id_destinasi" value="<?php echo $id; ?>">
            <input type="hidden" name="harga_tiket" value="<?php echo $harga_tiket; ?>">
            <button type="submit">Bayar Tiket</button>
        </form>
    </div>
</body>
</html>

