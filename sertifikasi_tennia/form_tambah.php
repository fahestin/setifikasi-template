<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form Peserta</title>
</head>
<body>
	<h1>FORM PENDAFTARAN SERTIFIKASI</h1>
	<form action="proses_tambah.php" method="post">
		<div>
			<label for="Kd_skema">KODE SKEMA</label><br>
			<input type="text" name="Kd_skema" placeholder="Isikan kode">
		</div>
		<div>
			<label for="Nm_peserta">NAMA PESERTA</label><br>
			<input type="text" name="Nm_peserta" placeholder="Isikan nama">
		</div>
		<div>
			<label for="Jekel">JENIS KELAMIN</label><br>
			<input type="text" name="Jekel" placeholder="Isikan jenis kelamin">
		<div>
			<label for="Alamat">ALAMAT</label><br>
			<input type="text" name="Alamat" placeholder="Isikan Alamat">
		</div>
		<div>
			<label for="No_hp">NO HP</label><br>
			<input type="text" name="No_hp" placeholder="Isikan No Hp">
		</div>
			</select>
		</div><br>
		<input type="submit" value="SIMPAN">
	</form>

</body>
</html>