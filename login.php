<?php
// error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Teknik Login MultiUser</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta http-equiv="Copyright" content="">
	<meta name="Author" content="Edi Sutanto">
	<link rel="shortcut icon" href="logo.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
	<!-- CSS -->
	<link rel="stylesheet" href="login.css" type="text/css">

<style>
	.alert {
	  text-shadow: 0 1px 0 rgba(255, 255, 255, 0.5);
	  background-color: #fcf8e3;
	  border: 1px solid #fbeed5;
	  -webkit-border-radius: 4px;
	  -moz-border-radius: 4px;
	  border-radius: 4px 4px 0 0;
	  color: #c09853;
	}
	.alert h4 {
	  margin: 0;
	}
	.alert .close {
	  position: relative;
	  top: -2px;
	  right: -21px;
	  line-height: 20px;
	}
	.alert-success {
      width:250px;
	  height:20px;
	  font-size:16px;
	  background-color: #dff0d8;
	  border-color: green;
	  color: green;
	  margin:auto;
	  margin-top:-35px;
	  padding:3px;
	  text-align:center;
	}
	.alert-danger,
	.alert-error {
	  width:250px;
	  height:20px;
	  font-size:16px;
	  background-color: #f2cdcd;
	  border-color: #b94a48;
	  color: #b94a48;
	  margin:auto;
	  margin-top:-35px;
	  padding-top:3px;
	  text-align:center;
	}

</style>
</head>

<body>

<!-- container -->
<div id = "container">

	<!-- header -->
	<div id = "header">
		<p>Login Administrator</p>
	</div>

	<!-- content -->
	<div id ="content">
		<a href='http://www.e-sutanto.blogspot.co.id' target='_blank'><img src='logo.png' width='100px' height='100px'></a>
		<form method="post" action="validate.php">
			<table border="0" class='table-login'>
				<tr>
					<td><label><select name='level' class='multilevel' required></label>
							<option value=''>-Pilih-</option>
							<option value='admin'>Admin</option>
							<option value='staf'>Staf</option>
							<option value='operator'>Operator</option>
						</select>
					</td>
				</tr>
				<tr>
					<td><label>Username</label></td>
				</tr>
				<tr>
					<td><input type="text" name="username" placeholder="username" class='input' maxlength='50' required /></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
				</tr>
				<tr>
					<td><input type="password" name="password" placeholder="********" class='input'  maxlength='50' required /></td>
				</tr>
				<tr>
					<td><input type="submit" name="submit" class="submit-login" value="Login" /></td>
				</tr>
			</table>
		</form>

		<?php
		if(@$_GET['code'] == 1) {
		?>
		<div class="alert alert-danger">
			Username or Password Wrong !!!
		</div>
		<?php
		}
		if(@$_GET['code'] == 2) {
		?>
		<div class="alert alert-success">
			Anda Telah Keluar (Logout)
		</div>
		<?php
		}
		if(@$_GET['code'] == 3) {
		?>
		<div class="alert alert-danger">
			Anda harus Login dulu !!!
		</div>
		<?php
		}
		?>
		
	</div>

	<!-- footer -->
	<div id = "footer">
		<p>&copy; by <a href='http://www.e-sutanto.blogspot.co.id' target='_blank'>Edi Sutanto</a></p>
	</div>

</div>
<!-- END container -->

</body>
</html>