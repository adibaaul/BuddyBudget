<?php
session_start();
include('../../konfig/config.php'); // Menghubungkan ke database

    $id = $_GET['id'];

    // Query untuk menyimpan data ke database
    $query = mysqli_query($koneksi,"DELETE FROM tb_trans WHERE id='$id'");
    header('Location: ../index.php?page=data-keuangan');
    ?>