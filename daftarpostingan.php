<?php
 	session_start();
	require_once("db.php");
?>


<html>
<table border="1" align="center">
<head >
	<p align="center"><b>DAFTAR POSTINGAN</b></p>
	
	<th>Cerita</th>
	<th>Gambar</th>
	
	
	
</head>
<body>


<?php
 $sql = "SELECT * FROM posting";

 $result = mysqli_query($conn, $sql);

 if(mysqli_num_rows($result) > 0){
 	//output data each row
 	while ( $row = mysqli_fetch_assoc($result)) {


 		# code...
 		$nim= $row['nim'];
 		echo "<tr>";
 		echo "<td>".$row['cerita']."</td>";
 		echo "<td><img width=300 src='upload/".$row['file']."'></td>";
 		echo "</tr>";
 		
 	}
 } else {
 	echo "0 results";
 }
mysqli_close($conn);

?>
<a href="awal.php">Kembali ke menu awal</a>

</body>
</table>
</html>