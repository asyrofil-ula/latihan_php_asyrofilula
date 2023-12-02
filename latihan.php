<!DOCTYPE html>
<html>
<head>
	<title>Program Data Pegawai</title>
</head>
<body>
	<form method="post">
		<h1>Program Data Pegawai</h1>
		<label for="nama">Nama pegawai:</label>
		<input type="text" id="nama" name="nama" ><br><br>
		<label for="agama">agama :</label>
		<input type="text" id="agama" name="agama" ><br><br>
		<label for="jabatan">jabatan :</label>
		<select id="jabatan" name="jabatan">
			<option value="manager">manager</option>
			<option value="asisten">asisten</option>
			<option value="kabag">kabag</option>
			<option value="staff">staff</option>
		</select><br><br>
		<label for="status">status:</label>
		<select id="status" name="status">
			<option value="menikah">menikah</option>
			<option value="belum nikah">belum nikah</option>
		</select><br><br>
		<label for="jumlah">Jumlah anak:</label>
		<input type="number" id="jumlah" name="jumlah" ><br><br>
		<input type="submit" value="submit">
        
        
	</form>
	<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$nama = $_POST["nama"];
			$agama = $_POST["agama"];
			$jabatan = $_POST["jabatan"];
			$status = $_POST["status"];
			$jumlah = $_POST["jumlah"];
		
			echo "Nama Pegawai = $nama<br>";
			echo "Agama = $agama<br>";
			echo "Jabatan = $jabatan<br>";
			echo "Status = $status<br>";

			if ($status == "menikah") {
				echo "Jumlah anak = $jumlah<br>";
			}
		}
		?>
</body>
</html>