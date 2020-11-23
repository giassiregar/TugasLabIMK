<!DOCTYPE html>
<html>
<head>
	<title>PERPUSTAKAAN</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body style="background-image: url(latarbiru.png); background-size: 1500px" >
	<center><fieldset style="background-color: white;width: 500px; height: 70px; margin: 20px;"><h2 align="center" style="color:black;">DATA ANGGOTA PERPUSTAKAAN</h2></fieldset>
		<center><p>____________________________________________________________</p>

	<br/>
	<br/>
	<br/>
	<center><fieldset  style= "background-color: white;width: 500px; height: 350px;">
	<h3 align="center">TAMBAH DATA ANGGOTA</h3>

	<form method="POST" action="input_aksi.php">
		<table align="center">
			<tr>
				<td><b/>NIM</td>
				<td><input type="number" name="nim" required=""></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td><b/>Nama</td>
				<td><input type="text" name="nama" required=""></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td><b/>Jurusan</td>
				<td><input type="text" name="jurusan" required=""></td>
			</tr>
			<tr><td><br></td></tr>
			<tr>
				<td><b/>Alamat</td>
				<td><input type="text" name="alamat" required=""></td>
			</tr>
			<tr><td><br></td></tr>
			<br>
			<tr>
				<td><br/></td>
				<td>
					<input type="submit" value="SIMPAN" class="btn btn-success">
					<a href="dataanggota.php" class="btn btn-info">KEMBALI</a>
				</td>
			</tr>
		</table></fieldset></center>
	</form>
</body>
</html>