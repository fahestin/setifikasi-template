<?php
	include "koneksi.php";

	$Kd_skema = $_POST['Kd_skema'];
	$Nm_peserta = $_POST['Nm_peserta'];
	$Jekel = $_POST['Jekel'];
	$Alamat = $_POST['Alamat'];
	$No_hp = $_POST['No_hp'];

	$query = mysqli_query($koneksi, "insert into tb_peserta value('','$Kd_skema','$Nm_peserta','$Jekel','$Alamat','$No_hp');");

	header('location:data_peserta.php')
?>