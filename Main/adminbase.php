<?php
function get_orders() {
include "database.php";
  // Periksa koneksi
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT id, customer_name, order_date, total, status FROM orders";
  $result = $conn->query($sql);

  $orders = array();
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $orders[] = array(
        'id' => $row["id"],
        'customer_name' => $row["customer_name"],
        'order_date' => $row["order_date"],
        'total' => $row["total"],
        'status' => $row["status"]
      );
    }
  }

  $conn->close();
  return $orders;
}