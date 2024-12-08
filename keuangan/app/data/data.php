<?php
include("../../konfig/config.php");
// Query to fetch all transactions
$query_transactions = mysqli_query($koneksi, "SELECT * FROM tb_trans ORDER BY id DESC LIMIT 5;");
?>

<section class="col-lg-12">
    <!-- Custom tabs (Charts with tabs)-->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-chart-pie mr-1"></i>
                Transaksi
            </h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <!-- Table of Transactions -->
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Jenis Transaksi</th>
                        <th>Deskripsi</th>
                        <th>Jumlah Transaksi</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($transaction = mysqli_fetch_array($query_transactions)) { ?>
                    <tr>
                        <td><?php echo $transaction['id']; ?></td>
                        <td><?php echo $transaction['jenis']; ?></td>
                        <td><?php echo $transaction['deskripsi']; ?></td>
                        <td><?php echo number_format($transaction['amount'], 2); ?></td>
                        <td><?php echo date('Y/m/d', strtotime($transaction['tanggal'])); ?></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
</section>
