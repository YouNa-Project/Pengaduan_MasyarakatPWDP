<?php
include ('Koneksi.php');
$pengaduan = $_GET['id_pengaduan'];
$sqlHapus = mysqli_query($kon, "DELETE FROM pengaduan WHERE id_pengaduan='$pengaduan'")
or die(mysqli_error($kon));
include('MTampil.php');