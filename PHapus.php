<?php
include ('Koneksi.php');
$ITanggapan = $_GET['id_tanggapan'];
$sqlHapus = mysqli_query($kon, "DELETE FROM tanggapan WHERE id_tanggapan='$ITanggapan'")
or die(mysqli_error($kon));
include('PTampil.php');