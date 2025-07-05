<!DOCTYPE html>
<html>
<head>
  <title>Form Cetak</title>
</head>
<body>
 <p><b>Jabatan:</b>Manager, Supervisor, Cashier, Sales Supervisor</p>
  <form method="POST" action="">
    <label for="nama">Nama Lengkap:</label><br>
    <input type="text" id="nama" name="nama" required><br><br>

    <label for="jabatan">Jabatan:</label><br>
    <select id="jabatan" name="jabatan" required>
      <option value="Manager">Manager</option>
      <option value="Supervisor">Supervisor</option>
      <option value="Cashier">Cashier</option>
      <option value="Sales Executive">Sales Executive</option>
    </select><br><br>

    <button type="submit" name="cetak">Cetak</button>
  </form>

  <?php
  if (isset($_POST['cetak'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $jabatan = htmlspecialchars($_POST['jabatan']);
    echo "<hr>";
    echo "Nama: " . $nama . "<br>";
    echo "Jabatan: " . $jabatan;
  }
  ?>
</body>
</html>
