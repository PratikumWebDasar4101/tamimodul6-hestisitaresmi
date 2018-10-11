<?php
 session_start();
 require_once("db.php");

?>

<?php
	
 	
 	$nim=strlen($_POST['nim']) ? $_POST['nim'] : "Inputan tidak boleh kosong" ;
	$pass=strlen($_POST['pass']) ? $_POST['pass'] : "Inputan tidak boleh kosong" ;
	$sql = mysqli_query("SELECT * FROM siswa where nim='$nim' && pass='$pass'");
	$num = mysqli_num_rows($sql);

 	if($nim == "$nim" && $pass == "$pass"){
 		$_SESSION['nim'] = $nim;
 		header("Location:simpan.php");
 	}else{
 		echo "Maaf, username dan password anda salah!";
 	}



?>