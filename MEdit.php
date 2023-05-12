<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PENGADUAN MASYARAKAT</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="template/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="template/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="template/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Aplikasi PeMa</span>
    </a>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item menu-open">
               <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Akun
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="Login.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="Register.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
</ul>
               <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Master Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="MTambah.php" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laporan Pengaduan</p>
                </a>
              </li>
              <li class="nav-item">
</ul>
              <li class="nav-item menu-open">
               <a href="Logout.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>
                Logout
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Daftar Pengaduan Masyarakat</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <div class="col-md-6">
        <div class="card">
        <?php
include ('Koneksi.php');
$pengaduan =  $_GET['id_pengaduan'];
$sql = mysqli_query($kon, "SELECT * FROM pengaduan WHERE id_pengaduan='$pengaduan'");
$dataPengaduan = mysqli_fetch_array($sql, MYSQLI_ASSOC);
?>
              <div class="card-header">
                <h3 class="card-title">Data Pengaduan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="MUpdate.php">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputidpengaduan">ID Pengaduan</label>
                    <input type="text" class="form-control" name="txtIP" placeholder="Masukkan ID Pengaduan" value ="<?php echo $dataPengaduan['id_pengaduan'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputTglPengaduan">TGL Pengaduan</label>
                    <input type="date" class="form-control" name="txtTP" placeholder="Masukkan TGL Pengaduan" value ="<?php echo $dataPengaduan['tgl_pengaduan'];?>">
                  </div>
                  <div class="form-group">
                  <label>NIK</label>
                        <select class="form-control" name="nik">
                          <option>NIK</option>
                          <?php 
                          include('Koneksi.php');
                          $sql = mysqli_query($kon, "SELECT * FROM pengaduan");
                          while ($data = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
                            if ($data['nik']==$data['nik']){
                              $select = "selected";
                            }else{
                              $select="";
                            }
                            echo "<option $select>".$data['nik']."</option>";
                          }
                          ?>
                        </select>
                        </div>
                  <div class="form-group">
                    <label for="exampleInputisilaporan">Isi Laporan</label>
                    <input type="text" class="form-control" name="txtIL" placeholder="Masukkan Isi Laporan" value ="<?php echo $dataPengaduan['isi_laporan'];?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputfoto">Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" name="txtF" value ="<?php echo $dataPengaduan['foto'];?>">
                        <label class="custom-file-label" for="exampleInputfoto">Pilih Foto</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                        <label>Status</label>
                        <select class="form-control" name="status">
                        <?php 
                          include('Koneksi.php');
                          $sql = mysqli_query($kon, "SELECT * FROM pengaduan");
                          while ($data = mysqli_fetch_array($sql, MYSQLI_ASSOC)){
                            if ($data['status']==$data['status']){
                              $select = "selected";
                            }else{
                              $select="";
                            }
                            echo "<option $select>".$data['status']."</option>";
                          }
                          ?>
                          <option>0</option>
                          <option>Proses</option>
                          <option>Selesai</option>
                        </select>
                      </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
           </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      XI RPL 1
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2023 <a href="#">Kelompok 1</a>.</strong> All rights reserved.
  </footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="template/dist/js/adminlte.min.js"></script>
</body>
</html>