<?php
	include "koneksi.php";

	$id = $_GET['Kd_skema'];
	$data = mysqli_query($koneksi,"select * from tb_skema where Kd_skema='$id'");
	$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Sertifikasi</title>
</head>
<body>
	<h1>Data Sertifikasi</h1>
	<form action="update_sertifikasi.php" method="post">
		<div>
			<label for="Kd_skema">KODE SKEMA</label><br>
			<input type="hidden" name="Kd_skema" value="<?php echo $d['Kd_skema'];?>">
			<input type="text" name="Kd_skema" value="<?php echo $d['Kd_skema'];?>" required="required">
		</div>
		<div>
			<label for="Nm_skema">NAMA SKEMA</label><br>
			<input type="text" name="Nm_skema" value="<?php echo $d['Nm_skema'];?>">
		</div>
		<div>
			<label for="Jenis">JENIS SKEMA</label><br>
			<input type="text" name="Jenis" value="<?php echo $d['Jenis'];?>">
		</div>
		<div>
			<label for="Jml_unit">JUNLAH UNIT</label><br>
			<input type="text" name="Jml_unit" value="<?php echo $d['Jml_unit'];?>">
		</div>
			</select>
		<br>
		<input type="submit" value="SIMPAN">
	</form>

</body>
</html>