<?php
	include 'koneksi.php';

	$Id_peserta = $_POST['Id_peserta'];
	$Kd_skema = $_POST['Kd_skema'];
	$Nm_peserta = $_POST['Nm_peserta'];
	$Jekel = $_POST['Jekel'];
	$Alamat = $_POST['Alamat'];
	$No_hp = $_POST['No_hp'];

	$query = mysqli_query($koneksi,"update tb_peserta set Kd_skema='$Kd_skema',Nm_peserta='$Nm_peserta',Jekel='$Jekel',Alamat='$Alamat',No_hp='$No_hp' where Id_peserta='$Id_peserta'");
	header("location:data_peserta.php");
?>