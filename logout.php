<?php
$_SESSION = [];
session_destroy();

echo "<script>window.location='index.php?page=auth/login';</script>";
exit;
?>