<!DOCTYPE html>
<html lang="en">

<?php 
session_start();
if (!$_SESSION['nama']){
  header('Location: ../');
}
include('header.php');?>
<?php include('../konfig/config.php'); ?>
<div class="wrapper">

  <!-- Preloader -->
  <?php include('preloader.php'); ?>

  <!-- Navbar -->
  <?php include('navbar.php'); ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <?php include('logo.php'); ?>

    <!-- Sidebar -->
    <?php include('sidebar.php'); ?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->
    <?php include('content_header.php'); ?>
    <!-- Main content -->
    <?php 
    if (isset($_GET['page'])){
      if($_GET['page']=='dashboard'){
      include('dashboard/dashboardar.php');
     }
      else if($_GET['page']=='data-keuangan'){
      include('ar/data_ar.php');
    }
    else if($_GET['page']=='input-data'){
      include('input/inputar.php');
    }
    else if($_GET['page']=='edit-data'){
      include('edit/edit.php');
    }
    else{
      include('notfound.php');
     }
  }
    else{
      include('dashboard/dashboardar.php');
     }?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<?php include('footer.php'); ?>

</body>
</html>