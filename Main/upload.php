<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "vistas");

// Cek koneksi
if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}

// Cek apakah file telah diunggah
if(isset($_FILES['image'])){
    $image = $_FILES['image']['name'];
    $target = "uploads/".basename($image);
    $nama_destinasi = $_POST['nama_destinasi'];
    $alamat = $_POST['alamat'];
    $harga_tiket = $_POST['harga_tiket'];
    
    // Memeriksa ekstensi file
    $imageFileType = strtolower(pathinfo($target,PATHINFO_EXTENSION));
    if($imageFileType != "jpg" && $imageFileType != "png") {
        echo "Hanya file JPG dan PNG yang diizinkan.";
        exit();
    }

    // Simpan nama file ke database
    $query = "INSERT INTO images (image_name, nama_destinasi, alamat, harga_tiket) VALUES ('$image', '$nama_destinasi', '$alamat','$harga_tiket')";

    mysqli_query($koneksi, $query);

    // Pindahkan file yang diunggah ke folder uploads
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        echo "Gambar berhasil diunggah.";
    }else{
        echo "Terjadi kesalahan saat mengunggah gambar.";
    }
}
?>
