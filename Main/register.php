<?php
include "database.php";
if(isset($_POST['register'])) {
    // membuat koneksi
    $conn = new mysqli($servername, $username, $password, $dbname);

    // cek koneksi
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // menerima data dari form
    $name = isset($_POST['name']) ? $_POST['name'] : "";
    $password = isset($_POST['password']) ? $_POST['password'] : "";

    // hashing password

    // memasukkan data ke dalam database
    $sql = "INSERT INTO pengguna (nama_pengguna, kata_sandi) VALUES ('$name', '$password')";

    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="CSS/login.css">
</head>
<body>
    <div class="container">
        <h1>register</h1>
        <form action="register.php" method="POST">
            <div class="input-group">
                <input type="text" id="name" name="name" required>
                <label for="name">Username</label>
            </div>
            <div class="input-group">
                <input type="password" id="password" name="password" required>
                <label for="password">Password</label>
            </div>
            <button type="submit" name="register">Sign Up</button>
            <a href="login.php">login</a>

        </form>

    </div>
</body>

</html>
