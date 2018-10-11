<?php
 session_start();
 require_once "db.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Awal</title>
</head>
<body>
	<table align="center">
		<form >
			<tr>
				<td><a href="edit.php">EDIT</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td><a href="posting.php">POSTING CERITA</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td><a href="daftarpostingan.php">LIHAT DAFTAR POSTINGAN</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td><a href="view.php">LIHAT SEMUA POSTINGAN</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
				<td><a href="logout.php">LOGOUT</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
			</tr>

			
				<?php

					$nim = $_SESSION['nim'];
 					$sql = "SELECT * FROM siswa where nim='$nim'" ;
					$result = mysqli_query($conn, $sql);
					$row =mysqli_fetch_assoc($result);
 					#code...
 					echo "<tr>";
 					echo "<td colspan=4 align=center>"."<br><br>"."SELAMAT DATANG ".$row['nama']."<td>";
 					echo "</tr>";

 					echo "<tr >";
 					echo "<td colspan=4>"."Nim : "."<br>-".$row['nim']."<br><br>";
 					echo "Nama : "."<br>-".$row['nama']."<br><br>";
 					echo "Kelas : "."<br>-".$row['kelas']."<br><br>";
 					echo "Jenis Kelamin	:"."<br>-".$row['jeniskelamin']."<br><br>";
 					echo "Hobi : "."<br>-".$row['hobi']."<br><br>";
 					echo "Fakultas : "."<br>-".$row['fakultas']."<br><br>";
 					echo "Alamat :"."<br>-".$row['alamat']."</td>";
 					echo "</tr>";
 		
					 	
					mysqli_close($conn);

				?>

		</form>
	</table>

</body>
</html>