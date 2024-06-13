<?php
include "database.php";


// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $lat = $_POST['lat'];
    $lng = $_POST['lng'];

    // Siapkan dan bind
    $stmt = $conn->prepare("INSERT INTO locations (latitude, longitude) VALUES (?, ?)");
    $stmt->bind_param("dd", $lat, $lng);

    // Eksekusi statement
    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
