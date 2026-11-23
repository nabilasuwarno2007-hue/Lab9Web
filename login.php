<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === 'admin' && $password === 'admin123') {
        $_SESSION['login'] = true;
        $_SESSION['username'] = $username;

        setFlashMessage('Login berhasil! Selamat datang, Admin.', 'success');
        echo "<script>window.location='index.php?page=dashboard';</script>";
        exit;
    } else {
        setFlashMessage('Username atau password salah!', 'error');
        echo "<script>window.location='index.php?page=auth/login';</script>";
        exit;
    }
}
?>

<section>
    <h2>Login</h2>

    <form method="post" action="">
        <label>Username</label>
        <input type="text" name="username" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit" name="login">Login</button>
    </form>
</section>