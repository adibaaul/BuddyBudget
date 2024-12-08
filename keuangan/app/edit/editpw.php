<!-- Main content -->
<?php
$id = $_GET['id']; // Mengambil ID dari URL
$query = mysqli_query($koneksi, "SELECT * FROM tb_users WHERE id='$id'");
$view = mysqli_fetch_array($query);
// Formatkan tanggal ke format yang diinginkan untuk input type="date"
?>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
            <a href="../app/index.php?page=data-akun"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-lg">
                  Kembali
                </button></a>
                <br></br>
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Akun</h3>
                    </div>
                    <!-- form start -->
                   
                    <form action="update/updated_pw.php" method="get">
                        <div class="card-body">
                        <div class="form-group">
                                <label for="date">Nama Akun</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $view['nama'];?>" required>
                                <input type="text" class="form-control" id="nama" name="id" value="<?php echo $view['id'];?>" hidden>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" class="form-control" id="username" name="username" value="<?php echo $view['username'];?>" required>
                                <input type="text" class="form-control" id="username" name="id" value="<?php echo $view['id'];?>" hidden>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" class="form-control" id="password" name="password" value="<?php echo $view['password'];?>" required>
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