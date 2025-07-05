<!DOCTYPE html>
<html>
<head>
    <title>Website Dinamis GET - PHP</title>
</head>
<body>
    <h1>Website Dinamis</h1>

    <nav>
        <a href="?page=home">Home</a> |
        <a href="?page=about">About</a> |
        <a href="?page=blog">Blog</a>
    </nav>

    <hr>

    <?php
    // Ambil halaman dari GET, default ke 'home'
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    // Cek apakah file halaman tersedia
    $file = "pages/$page.php";
    if (file_exists($file)) {
        include($file);
    } else {
        echo "<h3>Halaman tidak ditemukan!</h3>";
    }
    ?>
</body>
</html>
