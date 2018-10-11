<?php
session_start();
require_once("db.php");

$nim = $_SESSION['nim'];
$siswa  	= mysqli_query($conn, "select * from siswa where nim='$nim'");
$row        = mysqli_fetch_array($siswa);
$fakultas   = array ('Fakultas Teknik Elektro', 'Fakultas Teknik Informatika', 'Fakultas Rekayasa Industri','Fakultas Industri Kreatif', 'Fakultas Komunikasi Bisnis','Fakultas Ilmu Terapan');
$repeat     = explode(",",$row["hobi"]);

function active_radio_button($value,$input){
    
    $result =  $value==$input?'checked':'';
    return $result;
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="hidden" value="<?php echo $row['nim'];?>" name="nim">
	<table >
		<form action="update.php" method="POST">
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="number" value="<?php echo $row['nim'];?>" name="nim" maxlength="10"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['nama'];?>" name="nama" maxlength="35"></td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>:</td>
				<td>
					<input type="radio" value="D3MI"<?php echo active_radio_button ("D3MI",$row['kelas'])?> name="kelas" >D3MI<br>
					<input type="radio" value="D3TT"<?php echo active_radio_button ("D3TT",$row['kelas'])?>  name="kelas" >D3TT<br>
					<input type="radio" value="D3TK"<?php echo active_radio_button ("D3TK",$row['kelas'])?> name="kelas" >D3TK<br>
					<input type="radio" value="D3IF"<?php echo active_radio_button ("D3IF",$row['kelas'])?> name="kelas" >D3IF<br>
					<input type="radio" value="DESISMED"<?php echo active_radio_button ("D3SISMED",$row['kelas'])?> name="kelas">D3SISMED<br>
					<input type="radio" value="D3KA"<?php echo active_radio_button ("D3KA",$row['kelas'])?> name="kelas">D3KA<br>
					
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td>
					<input type="radio" value="Laki-Laki"<?php echo active_radio_button ("Laki-Laki",$row['jeniskelamin'])?> name="jeniskelamin" >Laki-Laki<br>
					<input type="radio" value="Perempuan"<?php echo active_radio_button ("Perempuan",$row['jeniskelamin'])?> name="jeniskelamin" >Perempuan<br>
				</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td>
					
					<input type="checkbox" name="hobi[]" value="Browsing" <?php if(in_array('Browsing', $repeat)) : echo 'checked' ; endif ?> >Browsing<br>
					<input type="checkbox" name="hobi[]" value="Menyendiri" <?php if(in_array('Menyendiri', $repeat)) : echo 'checked' ; endif ?> >Menyendiri<br>
					<input type="checkbox" name="hobi[]" value="Nonton" <?php if(in_array('Nonton', $repeat)) : echo 'checked' ; endif ?> >Nonton<br>
					<input type="checkbox" name="hobi[]" value="Jalan-Jalan" <?php if(in_array('Jalan-Jalan', $repeat)) : echo 'checked' ; endif ?> >Jalan-Jalan<br>




				
				</td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<select name="fakultas">
						<?php
						foreach ($fakultas as $j){
                                echo "<option value='$j' ";
                                echo $row['fakultas']==$j?'selected="selected"':'';
                                echo ">$j</option>";
                            }
                        ?>

  					</select>

				</td>
			</tr>

			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['alamat'];?>"  name="alamat"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="submit" value="Simpan Perubahan"></td>
			</tr>
			
		</form>
	</table>

</body>
</html>