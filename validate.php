<?php
// error_reporting(0);

//koneksi ke database
include "koneksi.php";
include "fungsi_injection.php";

$username = antiinjection($_POST['username']);
$password = antiinjection(md5($_POST['password']));
$level = antiinjection($_POST['level']);

// query untuk mendapatkan record dari username di table user
$query = $db->query("SELECT * FROM tes WHERE nama ='$username' AND password ='$password' AND level ='$level'  ");
$data = $query->fetch_array();

// cek kesesuian password t_users
if (($password== $data['password']) AND ($username==$data['nama']) AND ($level==$data['level']))
	{
	// echo "<h1>Login Sukses</h1><p>";
	
	// menyimpan username kedalam SESSION
	session_start();
	$_SESSION['username'] = $data['nama'];
	$_SESSION['level'] = $data['level'];
	
	header('location:index.php');
	}

// username and password salah
else
	{
	header('location:login.php?code=1');
	}

?>



