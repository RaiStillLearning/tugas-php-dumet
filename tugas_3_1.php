<!DOCTYPE html>
<html>
<head>
    <title>Tugas dumet</title>
</head>
<body>

<form action="" method="post">
    <label>Nama</label><br>
    <input type="text" name="nama" placeholder="Nama lengkap" required
        value="<?php echo isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '' ?>">
    <br/><br/>

    <label>Jenis kelamin</label><br>
    <input type="radio" name="jenis_kelamin" value="Laki-laki" required
        <?php if (isset($_POST['jenis_kelamin']) && $_POST['jenis_kelamin'] == 'Laki-laki') echo 'checked'; ?>> Laki-laki
    <input type="radio" name="jenis_kelamin" value="Perempuan" required
        <?php if (isset($_POST['jenis_kelamin']) && $_POST['jenis_kelamin'] == 'Perempuan') echo 'checked'; ?>> Perempuan
    <br/><br/>

    <label for="pesan">Alamat:</label><br>
    <textarea id="pesan" name="pesan" rows="5" cols="40" placeholder="Masukkan Alamat..."><?php
        echo isset($_POST['pesan']) ? htmlspecialchars($_POST['pesan']) : '';
    ?></textarea>
    <br/><br/>

    <label>Hobby:</label><br>
    <?php
    $hobbies = ['Membaca', 'Menulis', 'Memancing', 'Coding', 'Traveling', 'Olahraga'];
    foreach ($hobbies as $hobby) {
        $checked = (isset($_POST['hobby']) && in_array($hobby, $_POST['hobby'])) ? 'checked' : '';
        echo "<input type='checkbox' name='hobby[]' value='$hobby' $checked> $hobby<br>";
    }
    ?>
    <br/>

    <button type="submit">Cetak</button>
    <button type="reset">Cancel</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<hr>";
    echo "<h2>Data yang terisi:</h2>";
    echo "Nama: " . htmlspecialchars($_POST['nama']) . "<br>";
    echo "Jenis Kelamin: " . htmlspecialchars($_POST['jenis_kelamin']) . "<br>";
    echo "Alamat: " . nl2br(htmlspecialchars($_POST['pesan'])) . "<br>";

    if (!empty($_POST['hobby'])) {
        echo "Hobby: " . implode(", ", array_map('htmlspecialchars', $_POST['hobby']));
    } else {
        echo "Hobby: Tidak ada hobby yang dipilih";
    }
}
?>

</body>
</html>
