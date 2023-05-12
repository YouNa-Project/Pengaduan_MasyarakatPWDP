
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>register</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="template/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="template/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="template/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="template/index2.html"><b>PENGADUAN</b>MASYARAKAT</a>
  </div>
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
    <form method="POST" action="user.php">
    <div class="form-group row">
    <label>ID User</label>
    <input type="text" name="id_user" class="form-control" placeholder="ID USER" autocomplete="off" autofocus>
    </div>
    <div class="form-group row">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control" placeholder="NAMA">
    </div>
    <div class="form-group row">
    <label>Username</label>
    <input type="text" name="username" class="form-control" placeholder="USERNAME" autocomplete="off" autofocus>
    </div>
    <div class="form-group row">
    <label>Password</label>
    <input type="text" name="password" class="form-control" placeholder="PASSWORD">
    </div>
    <div class="form-group">
                        <label>Level</label>
                        <select class="form-control" name="level">
                          <option>Admin</option>
                          <option>Petugas</option>
                          <option>Masyarakat</option>
                        </select>
                      </div>
    <div class="form-group row">
    <button type="submit" name="tbl_simpan" class="btn btn-danger btn-block">Register</button>
    </div>
            </div>
          </div>
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="template/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="template/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="template/dist/js/adminlte.min.js"></script>
</body>
</html>
