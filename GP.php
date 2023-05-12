<?php
include('Koneksi.php');

$pengaduan = $_POST['id_pengaduan'];
$TGL = $_POST['txtTP'];
$NIK = $_POST['nik'];
$isi = $_POST['txtIL'];
$Foto = $_POST['txtF'];
$Status = $_POST['status'];
$Tanggapan = $_POST['txtT'];
$IPetugas = $_POST['id_petugas'];

$sqlPengaduan=mysqli_query($kon,"SELECT
        pengaduan.id_pengaduan,pengaduan.tgl_pengaduan,pengaduan.nik,pengaduan.isi_laporan,pengaduan.foto,pengaduan.status,
        tanggapan.tanggapan,tanggapan.id_petugas
        FROM pengaduan JOIN
        tanggapan ON
        tanggapan.id_pengaduan=pengaduan.id_pengaduan
        WHERE pengaduan.id_pengaduan='$pengaduan' ORDER BY tgl_pengaduan ASC") or die (mysqli_error($kon));

include('Generate.php');