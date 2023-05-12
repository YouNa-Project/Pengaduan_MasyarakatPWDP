<?php
include('Koneksi.php');

$pengaduan = $_POST['txtIP'];
$TGL = $_POST['txtTP'];
$NIK = $_POST['nik'];
$isi = $_POST['txtIL'];
$Foto = $_POST['txtF'];
$Status = $_POST['status'];

$sqlSimpan = mysqli_query($kon, "INSERT INTO pengaduan (id_pengaduan,tgl_pengaduan,nik,isi_laporan,foto,status) VALUES ('$pengaduan','$TGL','$NIK','$isi','$Foto','$Status')") or die (mysqli_error($kon));
include('MTampil.php');
?>