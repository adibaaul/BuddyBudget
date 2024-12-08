<?php
session_start();
include('../../konfig/config.php'); // Menghubungkan ke database
    $id = $_GET['id'];
    $nama = $_GET['nama'];
    $username = $_GET['username'];
    $pass = $_GET['password'];

    // Query untuk menyimpan data ke database
    $query = mysqli_query($koneksi,"UPDATE tb_users SET nama='$nama', username='$username', password='$pass' WHERE id='$id'");
    header('Location: ../index.php?page=data-akun');
?>
