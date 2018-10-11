<!DOCTYPE>
<html>
<head>
	<title></title>
</head>
<body>
	<table align="center" >
		<form action="simpan2.php" method="POST" enctype="multipart/form-data">
			<tr>
				<th >Postingan Cerita</th>
			</tr>
			<tr>
				<td><textarea cols="80" rows="20" name="cerita"></textarea></td>
			</tr>
			<tr>
				<td>Upload Foto</td>
			</tr>

			<tr>

				<td><input type="file" name="file" ></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Kirim"></td>
			</tr>
		</form>
	</table>
</body>
</html>