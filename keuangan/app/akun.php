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
              <!-- <a href="../app/index.php?page=input-data"><button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-lg">
                  Input Transaksi
                </button></a> -->
                <!-- <br></br> -->
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $query = mysqli_query($koneksi, "SELECT * FROM tb_users");
                    while($user = mysqli_fetch_array($query)){
                      $no++
                    ?>
                  <tr>
                    <td width='5%'><?php echo $no; ?></td>
                    <td><?php echo $user['nama'];?></td>
                    <td><?php echo $user['username'];?></td>
                    <td><?php echo $user['password'];?></td>
                    <td><a href="index.php?page=edit-pw&& id=<?php echo $user['id'];?>" class="btn btn-success">Edit Password</a>
                      </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  
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
    