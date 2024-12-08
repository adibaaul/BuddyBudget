<!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Transaksi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <a href="../app/index_ar.php?page=input-data"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Input Transaksi
                </button></a>
                <br></br>
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Jenis Transaksi</th>
                    <th>Kategori</th>
                    <th>Deskripsi</th>
                    <th>Jumlah Transaksi</th>
                    <th>Tanggal </th>
                    <th>ACTION</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_trans WHERE jenis = 'income'");
                    while($money = mysqli_fetch_array($query)){
                      $no++
                    ?>
                  <tr>
                    <td width='5%'><?php echo $no; ?></td>
                    <td><?php echo $money['jenis'];?></td>
                    <td><?php echo $money['kategori'];?></td>
                    <td><?php echo $money['deskripsi'];?></td>
                    <td><?php echo $money['amount'];?></td>
                    <td><?php echo date('Y/m/d', strtotime($money['tanggal']));?></td>
                    <td><a href="index_ar.php?page=edit-data&& id=<?php echo $money['id'];?>" class="btn btn-success">Edit</a>
                        <a onclick="hapus_data(<?php echo $money['id'];?>)" class="btn btn-danger">Hapus</a>
                      </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>
                    <th>ACTION</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>

    <script>
    function hapus_data(data_id){
      // alert('ok');
      //window.location=("delete/delete.php?id="+data_id);
      Swal.fire({
        title: "Apakah Datanya akan Dihapus?",
        // showDenyButton: false,
        showCancelButton: true,
        confirmButtonText: "Hapus Data",
        confirmButtonColor: "red",
        // denyButtonText: `Don't save`
      }).then((result) => {
        /* Read more about isConfirmed, isDenied below */
        if (result.isConfirmed) {
          window.location=("delete/delete.php?id="+data_id);
        }
      });
    }
</script>
    