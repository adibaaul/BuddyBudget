<!-- Main content -->
<?php
$id = $_GET['id']; // Mengambil ID dari URL
$query = mysqli_query($koneksi, "SELECT * FROM tb_trans WHERE id='$id'");
$view = mysqli_fetch_array($query);
$tanggal = $view['tanggal']; // Asumsikan tanggalnya '2024-11-10'

// Formatkan tanggal ke format yang diinginkan untuk input type="date"
$formattedDate = date("Y-m-d", strtotime($tanggal));
?>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
            <a href="../app/index_ar.php?page=data-keuangan"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-lg">
                  Kembali
                </button></a>
                <br></br>
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Transaksi</h3>
                    </div>
                    <!-- form start -->
                   
                    <form action="update/updated.php" method="get">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Jenis Transaksi</label>
                                <select class="form-control" style="width: 100%;" name="jenis" required>
                                    <option value="<?php echo $view['jenis'];?>" selected><?php echo $view['jenis'];?></option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?php echo $view['deskripsi'];?>" required>
                                <input type="text" class="form-control" id="deskripsi" name="id" value="<?php echo $view['id'];?>" hidden>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Transaksi</label>
                                <input type="text" class="form-control" id="amount" name="amount" value="<?php echo $view['amount'];?>" required>
                            </div>  
                            <div class="form-group">
                                <label for="date">Tanggal</label>
                                <input type="date" class="form-control" id="date" name="date" value="<?php echo $formattedDate; ?>" required>


                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-info" name="save">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>