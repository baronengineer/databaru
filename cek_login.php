<?php
session_start();

//cek login
if (!isset($_SESSION['username']) AND (!isset($_SESSION['level'])))
{
	header ('location:login.php?code=3');
}
?>
