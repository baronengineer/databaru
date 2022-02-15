<?php

// cek session
// cek session sangat penting untuk USER yang ingin masuk/login tanpa proses login.
include "cek_login.php";

if ($_SESSION['level']=='admin') {
	header('location:admin.php');
}

elseif ($_SESSION['level']=='staf') {
	header('location:staf.php');
}

elseif ($_SESSION['level']=='operator') {
	header('location:operator.php');
}

else { header('location: login.php'); }

?>
