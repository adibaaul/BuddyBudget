<?php
include("../../konfig/config.php");

// Ambil bulan dan tahun saat ini
$month = date('m'); // Bulan (01-12)
$year = date('Y');

// Query untuk menghitung data transaksi
$query = mysqli_query($koneksi, "SELECT 
        COUNT(id) AS jumlahtrans,
        (SELECT COUNT(id) FROM tb_trans WHERE jenis = 'Expense' AND MONTH(tanggal) = '$month' AND YEAR(tanggal) = '$year') AS Expense,
        (SELECT COUNT(id) FROM tb_trans WHERE jenis = 'Income' AND MONTH(tanggal) = '$month' AND YEAR(tanggal) = '$year') AS Income,
        SUM(CASE WHEN jenis = 'Expense' THEN amount ELSE 0 END) AS outcome,
        SUM(CASE WHEN jenis = 'Income' THEN amount ELSE 0 END) AS income
    FROM tb_trans 
    WHERE MONTH(tanggal) = '$month' AND YEAR(tanggal) = '$year'
");

// Query untuk menghitung jumlah akun
$query2 = mysqli_query($koneksi, "SELECT COUNT(id) AS akun FROM tb_users");

// Fetch data hasil query
$view = mysqli_fetch_array($query);
$view2 = mysqli_fetch_array($query2);
?>

<div class="container mt-4">
    <div class="row">
        <!-- Total Transaksi -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3><?php echo $view['jumlahtrans']; ?></h3>
                    <p>Total Transaksi</p>
                </div>
                <div class="icon">
                    <i class="ion ion-bag"></i>
                </div>
                <a href="adminar.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- Transaksi Pendapatan -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3><?php echo $view['Income']; ?></h3>
                    <p>Transaksi Pendapatan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- Transaksi Pengeluaran -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3><?php echo $view['Expense']; ?></h3>
                    <p>Transaksi Pengeluaran</p>
                </div>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Jumlah Akun -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="small-box bg-danger">
                <div class="inner">
                    <h3><?php echo $view2['akun']; ?></h3>
                    <p>Total Akun</p>
                </div>
                <div class="icon">
                    <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- Total Pendapatan -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="small-box bg-primary">
                <div class="inner">
                    <h3><?php echo number_format($view['income'], 0, ',', '.'); ?></h3>
                    <p>Total Pendapatan</p>
                </div>
                <div class="icon">
                    <i class="ion ion-cash"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>

        <!-- Total Pengeluaran -->
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="small-box bg-secondary">
                <div class="inner">
                    <h3><?php echo number_format($view['outcome'], 0, ',', '.'); ?></h3>
                    <p>Total Pengeluaran</p>
                </div>
                <div class="icon">
                    <i class="ion ion-alert-circled"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>
