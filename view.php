<?php
 	session_start();
	require_once("db.php");
?>


<html>
<table border="1" align="center">
<head >
	<p align="center"><b>SEMUA POSTINGAN</b></p>
	
	<th>Nim</th>
	<th>Nama</th>
	<th>Kelas</th>
	<th>Jenis Kelamin</th>
	<th>Hobi</th>
	<th>Fakultas</th>
	<th>Alamat</th>
	<th>Cerita</th>
	<th>Foto</th>
	
	
</head>
<body>


<?php
 $sql = "SELECT siswa.nama,siswa.kelas,siswa.jeniskelamin,siswa.hobi,siswa.fakultas,siswa.alamat, posting.* FROM posting JOIN siswa ON posting.nim=siswa.nim";

 $result = mysqli_query($conn, $sql);

 if(mysqli_num_rows($result) > 0){
 	//output data each row
 	while ( $row = mysqli_fetch_assoc($result)) {
 		# code...
 		$nim= $row['nim'];
 		echo "<tr>";
 		echo "<td>".$row['nim']."</td>";
 		echo "<td>".$row['nama']."</td>";
 		echo "<td>".$row['kelas']."</td>";
 		echo "<td>".$row['jeniskelamin']."</td>";
 		echo "<td>".$row['hobi']."</td>";
 		echo "<td>".$row['fakultas']."</td>";
 		echo "<td>".$row['alamat']."</td>";
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