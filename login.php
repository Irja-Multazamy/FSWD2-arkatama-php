<!DOCTYPE html>
<html>
<head>
    <title>LOGIN USER</title>
    <link rel="stylesheet" type="text/css" href="asset/login.css">
</head>
<body>
    <div class="login-form">
        <h1>Form Login</h1>
        <form action="" method="post">
            <p>Email</p>
            <input type="email" name="email" placeholder="Masukkan email terdaftar" autocomplete="off">
            <p>Password</p>
            <input type="password" name="password" placeholder="Masukkan password">
            <input type="submit" name="login" value="Login">
        </form>
    </div>
</body>
</html>

<?php
error_reporting(0);
include "koneksi.php";

if(isset($_POST['login'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    if(empty($_POST['email'])){
        echo "<div class='alert' style='background-color: red;'>Email Harus diisi !</div>";
    } else if(empty($_POST['password'])){
        echo "<div class='alert' style='background-color: red;'>Password Harus diisi !</div>";
    }

    // cek email & pass
    $cek_data = mysqli_query($koneksi, "SELECT * FROM users WHERE email = '$email' AND `password` = '$pass'");
    $hasil = mysqli_fetch_array($cek_data);
    $login_user = $hasil['email'];
    $row = mysqli_num_rows($cek_data);

    if ($row > 0) {
        session_start();
        $_SESSION['user'] = $login_user;

        header('location: show user.php');
        
    }else{
        echo "<div class='alert' style='background-color: red;'>Email dan Password tidak sesuai !</div>";
    }
}

?>