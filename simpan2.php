<?php
 session_start();
 require_once("db.php");


 if(isset($_POST['submit'])){

 	$cerita 				= $_POST['cerita'];
 	$_SESSION['cerita'] 	=  $cerita;
 	$hasil					= str_word_count($cerita);
 	$nim					= $_SESSION['nim'];


	$file 					= $_FILES['file'];
	$nama_file 				= $file['name'];
	$nama_tmp 				= $file['tmp_name'];
	$upload_dir 			= "upload/";

	if(	move_uploaded_file($nama_tmp, $upload_dir.$nama_file)){
		$sql = "INSERT INTO posting VALUES ('','$cerita','$nama_file','$nim')";

		if(mysqli_query($conn, $sql)){
			if($hasil < 30){
				header("Location:daftarpostingan.php");
			}else{
			echo "Jumlah kata lebih dari 30 kata, silahkan isi ulang. klik link berikut "."<a href='posting.php'>KEMBALI</a>";	
			}
			
		}else{
			echo "Error: ".$sql. "<br>".mysqli_error($conn);
		}

		mysqli_close($conn);

		

	}



}
	

?>





