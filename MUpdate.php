<?php
include('Koneksi.php');

$pengaduan = $_POST['txtIP'];
$TGL = $_POST['txtTP'];
$NIK = $_POST['nik'];
$isi = $_POST['txtIL'];
$Foto = $_POST['txtF'];
$Status = $_POST['status'];

$sqlSimpan = mysqli_query($kon, "UPDATE pengaduan SET
tgl_pengaduan='$TGL',
nik='$NIK',
isi_laporan='$isi',
foto='$Foto',
status='$Status'
WHERE id_pengaduan='$pengaduan'") or die (mysqli_error($kon));

include('MTampil.php');