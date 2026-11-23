<?php
$page = $page ?? 'dashboard';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi PHP Modular</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <h1>Aplikasi PHP Modular</h1>
        <nav>
            <a href="index.php?page=dashboard"
               class="<?php echo $page === 'dashboard' ? 'active' : ''; ?>">
                Home
            </a>

            <a href="index.php?page=profil"
               class="<?php echo $page === 'profil' ? 'active' : ''; ?>">
                Profil
            </a>

            <a href="index.php?page=barang/list"
               class="<?php echo $page === 'barang/list' ? 'active' : ''; ?>">
                Data Barang
            </a>

            <a href="index.php?page=kontak"
               class="<?php echo $page === 'kontak' ? 'active' : ''; ?>">
                Kontak
            </a>
        </nav>
    </header>
    <main>