<?php
session_start();
include('../../konfig/config.php'); // Menghubungkan ke database

    $jenis = $_GET['jenis'];
    $id_kategori = $_GET['kategori'];
    $deskripsi = $_GET['deskripsi'];
    $amount = $_GET['amount'];
    $tanggal = $_GET['date'];

    // Query untuk menyimpan data ke database
    $query = mysqli_query($koneksi,"INSERT INTO tb_trans (id, jenis, kategori, deskripsi, amount, tanggal) VALUES ('','$jenis', '$kategori', '$deskripsi', '$amount', '$tanggal')");
    header('Location: ../index.php?page=data-keuangan');
?>
