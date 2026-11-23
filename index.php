<?php
session_start();
require_once __DIR__ . '/helpers/functions.php';
require_once __DIR__ . '/config/database.php';
$routes = [
    'dashboard' => __DIR__ . '/views/dashboard.php',
    'profil' => __DIR__ . '/views/profil.php',
    'kontak' => __DIR__ . '/views/kontak.php',
    'barang/list' => __DIR__ . '/modules/barang/list.php',
    'barang/add' => __DIR__ . '/modules/barang/add.php',
    'barang/edit' => __DIR__ . '/modules/barang/edit.php',
    'barang/delete' => __DIR__ . '/modules/barang/delete.php',
    'auth/login' => __DIR__ . '/modules/auth/login.php',
    'auth/logout' => __DIR__ . '/modules/auth/logout.php'
];

$page = $_GET['page'] ?? 'dashboard';
$protectedPages = [
    'barang/list',
    'barang/add',
    'barang/edit',
    'barang/delete'
];

if (in_array($page, $protectedPages) && empty($_SESSION['login'])) {
    setFlashMessage('Silakan login terlebih dahulu!', 'error');
    echo "<script>window.location='index.php?page=auth/login';</script>";
    exit;
}

if (!is_string($page) || !array_key_exists($page, $routes)) {
    http_response_code(404);
    $contentFile = __DIR__ . '/views/404.php';
} else {
    $contentFile = $routes[$page];
}

require_once __DIR__ . '/views/header.php';
require $contentFile;
require_once __DIR__ . '/views/footer.php';
