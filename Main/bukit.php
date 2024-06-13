<?php
// Koneksi ke database
include "database.php";

// Query untuk mengambil data dari tabel Anda (misalnya tabel destinasi_wisata)
$sql = "SELECT * FROM images";
$result = $conn->query($sql);

$sql2 = "SELECT * FROM destinasi_bukit";
$result2 = $conn->query($sql2);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="CSS/admin.css">

	<title>Admin</title>
</head>
<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<span class="text">Vista Admin</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="admin1.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="bukit.php">
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">My Store</span>
				</a>
			</li>
			<li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->

	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu' ></i>
			<a href="#" class="nav-link">Categories</a>
			<form action="#">
				
			</form>
			<input type="checkbox" id="switch-mode" hidden>
			<label for="switch-mode" class="switch-mode"></label>
			<a href="#" class="profile">
				<img src="img/people.png">
			</a>
		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<table>
        <tr>
            <th>ID</th>
            <th>Nama Destinasi</th>
            <th>Alamat</th>
            <th>Deskripsi</th>
            <th>Action</th>
        </tr>
        <?php
        // Loop untuk menampilkan data dari tabel
        if ($result2->num_rows > 0) {
            while($row = $result2->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$row["id_destinasi"]."</td>";
                echo "<td class='nama_bukit'>".$row["nama_bukit"]."</td>";
                echo "<td>".$row["alamat_bukit"]."</td>";
                echo "<td>".$row["deskripsi_bukit"]."</td>";
                echo "<td><a href='edit2.php?id_destinasi=".$row["id_destinasi"]."'>Edit</a> | <a href='delete.php?id_destinasi=".$row["id_destinasi"]."' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Hapus</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>Tidak ada data</td></tr>";
        }
        ?>
    </table>
	<a href="gallery2.php" class="add-data-button">tambah data</a>

			

		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	

	<script src="JS/scriptadmin.js"></script>
</body>
</html>