<?php
	include 'koneksi.php';

	$Kd_skema = $_POST['Kd_skema'];
	$Nm_skema = $_POST['Nm_skema'];
	$Jenis = $_POST['Jenis'];
	$Jml_unit = $_POST['Jml_unit'];

	$query = mysqli_query($koneksi,"update tb_skema set Kd_skema='$Kd_skema',Nm_skema='$Nm_skema',Jenis='$Jenis',Jml_unit='$Jml_unit' where Kd_skema='$Kd_skema'");
	header("location:data_sertifikasi.php");
?>