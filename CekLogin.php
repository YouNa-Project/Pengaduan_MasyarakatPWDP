<?php
SESSION_START();
include('Koneksi.php');
$user=$_POST['username'];
$pass=($_POST['password']);

$queryCekUser=mysqli_query($kon,"SELECT * FROM user WHERE username='$user' AND password='$pass'");
$dataUserLogin=mysqli_fetch_array($queryCekUser,MYSQLI_ASSOC);

if($user==$dataUserLogin['username'] && $pass==$dataUserLogin['password']){
	$_SESSION['user']=$dataUserLogin['username'];
	$_SESSION['level']=$dataUserLogin['level'];
	header('location:index.php');
} else {
	echo '<script>alert("Gagal Login")</script>';
	header('location:Login.php');
	
}
?>
