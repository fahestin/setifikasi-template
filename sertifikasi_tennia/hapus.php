<?php
	include "koneksi.php";

	$id = $_GET['Id_peserta'];
	$data = mysqli_query($koneksi, "delete from tb_peserta where Id_peserta='$id'");

	header('location:data_peserta.php')
?>