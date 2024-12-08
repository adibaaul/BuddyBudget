<?php
session_start();
include('../../konfig/config.php'); // Menghubungkan ke database
    $id = $_GET['id'];
    $jenis = $_GET['jenis'];
    $kategori = $_GET['kategori']
    $deskripsi = $_GET['deskripsi'];
    $amount = $_GET['amount'];
    $tanggal = $_GET['date'];

    // Query untuk menyimpan data ke database
    $query = mysqli_query($koneksi,"UPDATE tb_trans SET jenis='$jenis', kategori='$kategori', deskripsi='$deskripsi', amount='$amount', tanggal='$tanggal' WHERE id='$id'");
    header('Location: ../index.php?page=data-keuangan');
?>
