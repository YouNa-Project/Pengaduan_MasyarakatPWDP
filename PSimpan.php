<?php
include('Koneksi.php');

$ITanggapan = $_POST['txtIT'];
$pengaduan = $_POST['id_pengaduan'];
$TGL = $_POST['txtTGL'];
$Tanggapan = $_POST['txtT'];
$IPetugas = $_POST['id_petugas'];

$sqlSimpan = mysqli_query($kon, "INSERT INTO tanggapan (id_tanggapan,id_pengaduan,tgl_tanggapan,tanggapan,id_petugas) VALUES ('$ITanggapan','$pengaduan','$TGL','$Tanggapan','$IPetugas')") or die (mysqli_error($kon));
include('PTampil.php');
?>