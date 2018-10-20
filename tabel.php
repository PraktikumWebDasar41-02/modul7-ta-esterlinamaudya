<?php
$conn = mysqli_connect("localhost","root","","bd_jurnal7");
$save = "SELECT NIM, Nama, Prodi FROM tb_jurnal7";
$view = mysqli_query($conn,$save);
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title>jurnal7</title>
</head>
<body>
	<form method="POST" action="input.php">
	<table border="2">
		<h2>Tabel Mahasiswa</h2>
			<tr>
			<td><input type="submit" name="input" value="Input"></td>
			<td><input type="text" name="nim" size="60" placeholder="cari disini"></td>
			<td><input type="submit" name="cari" size="55" value="cari"></td>
			</tr>
			<tr>
				<td><b/>&nbsp NIM &nbsp</td>
				<td><b/>&nbsp Nama &nbsp</td>
				<td><b/>&nbsp Program Studi &nbsp</td>
				<td colspan="2"><b/>&nbsp Aksi &nbsp</td>

			</tr>
			<?php while ($data = mysqli_fetch_array($view)){?>
				<tr>
					<td><?php echo $data['Nama'];  ?></td>
					<td><?php echo $data['NIM']; ?></td>
					<td><?php echo $data['Prodi']; ?></td>
					<td><input type="submit" name="hapus" value="hapus"></td>
					<td><input type="submit" name="edit" value="edit"></td>
				<?php } ?>
				</tr>
		
	</table>
	</form>
</body>
</html>