<!DOCTYPE html>
<html>
<head>
  <title>Looping Quantity dan Price</title>
</head>
<body>
  <h2>Tabel Quantity dan Price</h2>
  <table border="1" cellpadding="10">
    <tr>
      <th>No</th>
      <th>Quantity</th>
      <th>Price</th>
    </tr>

    <?php
    $no = 1;
    for ($qty = 10; $qty <= 100; $qty += 10) {
      $price = $qty * 30;
      echo "<tr>";
      echo "<td>$no</td>";
      echo "<td>$qty</td>";
      echo "<td>$price</td>";
      echo "</tr>";
      $no++;
    }
    ?>
  </table>
</body>
</html>
