<?php
 session_start();

 require_once("db.php");
?>

<?php

$nim			= $_SESSION['nim'];
$nama 			= $_SESSION['nama'];
$kelas 			= $_SESSION['kelas'];
$jeniskelamin	= $_SESSION['jeniskelamin'];
$hobi			= implode(',', $_SESSION['hobi']);
$fakultas		= $_SESSION['fakultas'];
$alamat			= $_SESSION['alamat'];

$sql 			= " INSERT INTO siswa (nim, nama, kelas, jeniskelamin, hobi, fakultas, alamat)
				VALUES('$nim', '$nama', '$kelas', '$jeniskelamin', '$hobi', '$fakultas', '$alamat')";

// echo $sql;

if(mysqli_query($conn, $sql)){
	header("Location:awal.php");
}else{
	echo "Error: ".$sql. "<br>".mysqli_error($conn);
}

mysqli_close($conn);

?>