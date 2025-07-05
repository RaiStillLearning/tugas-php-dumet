<?php
// Data ID dan Nama
$data = [
  "R001" => "Muhabbar Ratif",
  "R002" => "Lorem Ipsum",
  "R003" => "Lorem Ipsum"
];
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cetak ID</title>
</head>
<body>
  <h2>Daftar ID dan Nama</h2>
  <table border="1" cellpadding="10">
    <tr>
      <th>ID</th>
      <th>Nama</th>
    </tr>
    <?php foreach ($data as $id => $nama): ?>
      <tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $nama; ?></td>
      </tr>
    <?php endforeach; ?>
  </table>

  <br><hr><br>

  <h3>Cetak Berdasarkan ID</h3>
  <form method="POST" action="">
    <label for="id">Masukkan ID:</label><br>
    <input type="text" id="id" name="id" required><br><br>
    <button type="submit" name="cetak">Cetak</button>
  </form>

  <?php
  if (isset($_POST['cetak'])) {
    $inputId = strtoupper(trim($_POST['id'])); // Biar aman & fleksibel (misal user nulis r001)

    if (array_key_exists($inputId, $data)) {
      echo "<hr>";
      echo "<h3>Hasil Cetak:</h3>";
      echo "ID: " . $inputId . "<br>";
      echo "Nama: " . $data[$inputId];
    } else {
      echo "<hr>";
      echo "<p style='color: red;'>ID tidak ditemukan!</p>";
    }
  }
  ?>
</body>
</html>
