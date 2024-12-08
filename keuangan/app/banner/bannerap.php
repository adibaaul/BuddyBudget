<?php
include("../../konfig/config.php");
$month = date('m'); // Bulan (01-12)
$year = date('Y');

// Query untuk menghitung data transaksi
$query = mysqli_query($koneksi, "SELECT 
        COUNT(id) AS jumlahtrans,
        (SELECT COUNT(id) FROM tb_trans WHERE jenis = 'Expense' AND MONTH(tanggal) = '$month' AND YEAR(tanggal) = '$year') AS Expense,
        SUM(CASE WHEN jenis = 'Expense' THEN amount ELSE 0 END) AS outcome
    FROM tb_trans 
    WHERE MONTH(tanggal) = '$month' AND YEAR(tanggal) = '$year'");

$view = mysqli_fetch_array($query); ?>
          <div class="col-lg-4 col-md-6 mb-4">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $view['jumlahtrans'];?></h3>

                <p>Transaksi</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="adminar.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
          <div class="col-lg-4 col-md-6 mb-4">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
              <h3><?php echo $view['Expense'];?></h3>

                <p>Transaksi Pengeluaran</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->

            <div class="col-lg-4 col-md-6 mb-4">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
              <h3><?php echo $view['outcome'];?></h3>

                <p>Total Pengeluaran</p>
              </div>
              <div class="icon">
                <i class="ion ion-alert-circled"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
