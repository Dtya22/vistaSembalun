<?php
include "adminbase.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="css/admin.css">
</head>
<body>
  <header>
    <h1>Admin Dashboard</h1>
  </header>

  <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Users</a></li>
      <li><a href="#">Products</a></li>
      <li><a href="#">Orders</a></li>
      <li><a href="#">Settings</a></li>
    </ul>
  </nav>

  <main>
    <div class="card">
      <h2>Customer Information</h2>
      <table>
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Date</th>
            <th>Address</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
        <?php
            // Ambil data pesanan dari database
            $orders = get_orders();
            foreach ($orders as $order) {
              echo "<tr>";
              echo "<td>" . $order['id'] . "</td>";
              echo "<td>" . $order['customer_name'] . "</td>";
              echo "<td>" . $order['order_date'] . "</td>";
              echo "<td>$" . $order['total'] . "</td>";
              echo "<td>" . $order['status'] . "</td>";
              echo "<td>";
              echo "<a href='#'>View Update</a>";
           
              echo "</td>";
              echo "</tr>";
            }
          ?>
        </tbody>
      </table>
    </div>

    <div class="card">
      <h2>Order History</h2>
      <table>
        <thead>
          <tr>
            <th>Order ID</th>
            <th>Customer</th>
            <th>Date</th>
            <th>Total</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <?php
            // Ambil data pesanan dari database
            $orders = get_orders();
            foreach ($orders as $order) {
              echo "<tr>";
              echo "<td>" . $order['id'] . "</td>";
              echo "<td>" . $order['customer_name'] . "</td>";
              echo "<td>" . $order['order_date'] . "</td>";
              echo "<td>$" . $order['total'] . "</td>";
              echo "<td>" . $order['status'] . "</td>";
              echo "<td>";
              echo "<a href='#'>View</a>";
              echo "<a href='#'>Update</a>";
              echo "</td>";
              echo "</tr>";
            }
          ?>
        </tbody>
      </table>
    </div>
  </main>

  <script src="js/script.js"></script>
</body>
</html>