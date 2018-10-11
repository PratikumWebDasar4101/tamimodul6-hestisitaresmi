<?php
 session_start();
 require_once("db.php");
 if(isset($_POST['submit'])){

 	$nim 					= $_POST['nim'];
 	$_SESSION['nim'] 		=  $nim;

 	$nama 					= $_POST['nama'];
 	$_SESSION['nama'] 		=  $nama;

 	$kelas 					= $_POST['kelas'];
 	$_SESSION['kelas'] 		=  $kelas;

 	$jeniskelamin 			= $_POST['jeniskelamin'];
 	$_SESSION['jeniskelamin'] =  $jeniskelamin;

 	$hobi 					= $_POST['hobi'];
 	$_SESSION['hobi'] 		=  $hobi;

 	$fakultas 				= $_POST['fakultas'];
 	$_SESSION['fakultas']	=  $fakultas;

 	$alamat 				= $_POST['alamat'];
 	$_SESSION['alamat'] 	=  $alamat;
 }

?>

<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
</head>
<body>
	<table >
		<form action="ceklogin.php" colspan="3" method="POST" >
			<tr >
				<td align="center">LOGIN</td>
			</tr>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="Password" name="pass"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="KIRIM"></td>
			</tr>
		</form>
	</table>
</body>
</html>