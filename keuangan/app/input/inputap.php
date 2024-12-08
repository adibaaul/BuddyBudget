<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
            <a href="../app/index_ap.php?page=dashboard"><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-lg">
                  Kembali
                </button></a>
                <br></br>
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Transaksi</h3>
                    </div>
                    <!-- form start -->
                   
                    <form action="add/add.php" method="get">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Jenis Transaksi</label>
                                <select class="form-control" style="width: 100%;" name="jenis" required>
                                    <option value="" disabled selected>Pilih jenis transaksi</option>
                                    <option value="Expense">Expense</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kategori Transaksi</label>
                                <select class="form-control" style="width: 100%;" name="skategori" required>
                                    <option value="" disabled selected>Pilih kategori transaksi</option>
                                    <option value="kategori">Operasional</option>
                                    <option value="kategori">Pajak</option>
                                    <option value="kategori">Pendapatan</option>
                                    <option value="kategori">Aset</option>
                                    <option value="kategori">Beban</option>
                                    <option value="kategori">Liabilitas</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" required>
                            </div>
                            <div class="form-group">
                                <label>Jumlah Transaksi</label>
                                <input type="text" class="form-control" id="amount" name="amount" required>
                            </div>
                            <div class="form-group">
                                <label for="date">Tanggal</label>
                                <input type="date" class="form-control" id="date" name="date" required>
                            </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary" name="save">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>