<?php 
include 'config.php';

$admin_name = $_POST['admin_name'];
$adm_email = $_POST['adm_email'];

$username = $_POST['username'];
$password = md5($_POST['password']);


if(isset($_POST['upload'])) {

mysqli_query($koneksi,"insert into login values('$admin_name', '$adm_email', '$username', '$password')");

}

header("location:index.php?pesan=ingat_login");
?>
