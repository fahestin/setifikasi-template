<?php
	include "koneksi.php";

	$Kd_skema = $_POST['Kd_skema'];
	$Nm_skema = $_POST['Nm_skema'];
	$Jenis = $_POST['Jenis'];
	$Jml_unit = $_POST['Jml_unit'];

	$query = mysqli_query($koneksi, "insert into tb_skema value('$Kd_skema','$Nm_skema','$Jenis','$Jml_unit');");

	header('location:data_sertifikasi.php')
?>