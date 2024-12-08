<?php
include("../../konfig/config.php");
$month = date('m'); // Bulan (01-12)
$year = date('Y');

// Query untuk menghitung data transaksi
$query = mysqli_query($koneksi, "SELECT 
        COUNT(id) AS jumlahtrans,
        (SELECT COUNT(id) FROM tb_trans WHERE jenis = 'Income' AND MONTH(tanggal) = '$month' AND YEAR(tanggal) = '$year') AS Income,
        SUM(CASE WHEN jenis = 'Income' THEN amount ELSE 0 END) AS income
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
          <div class="col-lg-4 col-md-6 mb-4">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
              <h3><?php echo $view['Income'];?></h3>

                <p>Transaksi Pendapatan</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div> 

          <div class="col-lg-4 col-md-6 mb-4">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?php echo $view['income'];?></h3>

                <p>Total Pendapatan</p>
              </div>
              <div class="icon">
                <i class="ion ion-cash"></i>
              </div>
              <a href="adminar.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
