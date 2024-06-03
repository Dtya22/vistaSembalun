<?php
include "database.php";
session_start();

if(isset($_SESSION["is_login"])){
  header("location: login.php");
}
if(isset($_POST['login'])) {
  $name = isset($_POST['name']) ? $_POST['name'] : "";
  $password = isset($_POST['password']) ? $_POST['password'] : "";
    // Ambil data pengguna dari database
    $sql = "SELECT * FROM pengguna WHERE nama_pengguna='$name' AND kata_sandi='$password'" ;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $data = $result -> fetch_assoc();

        header("location: dashboard.php");
    }else{
          echo"akun tidak ditemukan";
        }
}
?>


<!DOCTYPE html>
<lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <div class="container">
        <h1>Login
            Admin
        </h1>
        <button id="btn">a</button>
        <form action="#" method="post">
            <div class="input-group">
                <input type="text" id="name" name="name" required>
                <label for="name">Username</label>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" required>
                <label for="password">Password</label>
            </div>
            <button type="submit" name="login">Login</button>
        </form>
        <div class="footer">
            Don't have an account? <a href="register.php">Sign up</a>
        </div>
    </div>
    <script src="JS/scriptdash.js"></script>
</body>

</html>
