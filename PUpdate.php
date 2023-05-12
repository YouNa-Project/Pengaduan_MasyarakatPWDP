<?php
include('Koneksi.php');

$ITanggapan = $_POST['txtIT'];
$pengaduan = $_POST['id_pengaduan'];
$TGL = $_POST['txtTGL'];
$Tanggapan = $_POST['txtT'];
$IPetugas = $_POST['id_petugas'];

$sqlSimpan = mysqli_query($kon, "UPDATE tanggapan SET
id_pengaduan='$pengaduan',
tgl_tanggapan='$TGL',
Tanggapan='$Tanggapan',
id_petugas='$IPetugas'
WHERE id_tanggapan='$ITanggapan'") or die (mysqli_error($kon));

include('PTampil.php');