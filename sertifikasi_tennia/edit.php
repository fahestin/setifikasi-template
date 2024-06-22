<?php
	include "koneksi.php";

	$id = $_GET['Id_peserta'];
	$data = mysqli_query($koneksi,"select * from tb_peserta where id_peserta='$id'");
	$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit Peserta</title>
</head>
<body>
	<h1>Data Peserta</h1>
	<form action="update.php" method="post">
		<div>
			<label for="Kd_skema">KODE SKEMA</label><br>
			<input type="hidden" name="Id_peserta" value="<?php echo $d['Id_peserta'];?>">
			<input type="text" name="Kd_skema" value="<?php echo $d['Kd_skema'];?>" required="required">
		</div>
		<div>
			<label for="Nm_peserta">NAMA PESERTA</label><br>
			<input type="text" name="Nm_peserta" value="<?php echo $d['Nm_peserta'];?>">
		</div>
		<div>
			<label for="Jekel">JENIS KELAMIN</label><br>
			<input type="text" name="Jekel" value="<?php echo $d['Jekel'];?>">
		</div>
		<div>
			<label for="Alamat">Alamat</label><br>
			<input type="text" name="Alamat" value="<?php echo $d['Alamat'];?>">
		</div>
		<div>
			<label for="No_hp">NO HP</label><br>
			<input type="text" name="No_hp" value="<?php echo $d['No_hp'];?>">
		</div>
			</select>
		<br>
		<input type="submit" value="SIMPAN">
	</form>

</body>
</html>