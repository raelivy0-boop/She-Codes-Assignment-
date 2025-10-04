<?php
$host = "localhost";
$user = "root"; // default XAMPP user
$pass = "";     // default XAMPP password
$db = "fashion_store";

// Connect
$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query
$sql = "SELECT *, (price * sold) AS revenue FROM products";
$result = $conn->query($sql);

echo "<h2>Inventory & Sales Report</h2>";
echo "<table border='1' cellpadding='10'>
<tr>
    <th>Item</th>
    <th>Price</th>
    <th>Stock Left</th>
    <th>Sold</th>
    <th>Total Revenue</th>
</tr>";

$totalRevenue = 0;
while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>".$row['name']."</td>
            <td>$".$row['price']."</td>
            <td>".$row['stock']."</td>
            <td>".$row['sold']."</td>
            <td>$".$row['revenue']."</td>
          </tr>";
    $totalRevenue += $row['revenue'];
}

echo "</table>";
echo "<h3>Total Store Revenue: $".$totalRevenue."</h3>";
$conn->close();
?>
