<?php
session_start();
include 'config.php';

$username = $_POST['username'];
$password = md5($_POST['password']);
 
$user = mysqli_query($koneksi, "select * from login where username='$username' and password='$password'");
$chek = mysqli_num_rows($user);

if($chek>0)
{
	// session_start();
    $row = mysqli_fetch_array($user);
    $_SESSION['admin_name'] = $row['admin_name'];
	$_SESSION['status'] = "login";
    header("location:admin/index.php");
}else
{
    header("location:index.php?pesan=gagal");
}
?>