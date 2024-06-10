<?php 
// Memulai sesi
session_start();

// Menghapus semua data sesi
$_SESSION = array();

// Menghancurkan sesi
session_destroy();

// Mendapatkan parameter cookie
$cookie_params = session_get_cookie_params();

// Menghapus cookie sesi
setcookie(session_name(), '', time() - 42000,
    $cookie_params["path"], $cookie_params["domain"],
    $cookie_params["secure"], $cookie_params["httponly"]
);

// Menghapus cookie untuk username dan password
setcookie("cookie_username", "", time() - 3600, "/");
setcookie("cookie_password", "", time() - 3600, "/");

// Mengarahkan pengguna kembali ke halaman login
header("location: login.php");
exit();
?>
