<?php
// Ini contoh proses login sederhana. Pastikan menyesuaikan dengan basis data atau metode autentikasi yang lebih aman.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Contoh autentikasi sederhana (sebaiknya gunakan basis data dan hash password yang aman)
    if ($username == "admin" && $password == "password123") {
        echo "Login berhasil! Selamat datang, $username.";
    } else {
        echo "Login gagal. Username atau password salah.";
    }
}
?>
