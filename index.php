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
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
			   <?php
SESSION_START();
if(!isset($_SESSION['user'])){
	header("Location:Login.php");
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Pengaduan Masyarakat</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, inital-scale=1, shrink-to-fit=no"/>		
		<link href="template/bootstrap/css/bootstrap.css" rel="stylesheet"/>
	</head>
	<body>		
				<div class="collapse navbar-collapse" id="daftar-menu">
					<ul class="navbar-nav">
					<?php if ($_SESSION['level']=='admin') {?>
						<li class="navbar-item">
							<a class="nav-link" href="index.php?modul=index_admin">Data Pengaduan</a>
						</li>
						
					<?php }
					
					if ($_SESSION['level']=='petugas') {?>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Pengaduan</a>
							<div class="dropdown-menu">
								<a class="dropdown-item" href="index.php?modul=index_petugas">Pengaduan</a>
							</div>
					</li>
					<?php }
						 if ($_SESSION['level']=='masyarakat') {?>
						<li class="navbar-item">
							<a class="nav-link" href="index.php?modul=index_masyarakat">Pengaduan</a>
						</li>
						<?php } ?>
						
						<li class="navbar-item">
							<a class="nav-link" href="Logout.php">Logout</a>
						</li>
					</ul>
				</div>
			</nav>	
			
			<div class="container-fluid mt-2">
				<?php
				include('Koneksi.php');

				//include('fungsi.php');

				if(isset($_GET['modul'])){
					include($_GET['modul'].'.php');
				} else {
				  if($_SESSION['level']=='admin'){
					include('index_admin.php');					  
				  } else if ($_SESSION['level']=='petugas') {
					include('index_petugas.php');					  					  
				  }	else if ($_SESSION['level']=='masyarakat') {
					include('index_masyarakat.php');					  					  
				  }	else{
					header("Location: http://localhost/pengaduan_masyarakat/");
				  }		
				}
				?>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
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


