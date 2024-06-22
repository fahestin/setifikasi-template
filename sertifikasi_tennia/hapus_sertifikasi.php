<?php
	include "koneksi.php";

	$id = $_GET['Kd_skema'];
	$data = mysqli_query($koneksi, "delete from tb_skema where Kd_skema='$id'");

	header('location:data_sertifikasi.php')
?>