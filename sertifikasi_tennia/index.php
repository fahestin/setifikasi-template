<?php
	include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pendaftaran Peserta Sertifikasi</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
  	<a class="navbar-brand" href="#">
      <img src="tikom.png" alt="Logo" width="30" height="24">
    </a>
    <a class="navbar-brand" href="#">TIKOM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="data_peserta.php">Pendaftaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="data_sertifikasi.php">Sertifikasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tentang</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
	<h3> Form Pencarian </h3>
	<form action="index.php" method="get">
		<label> Cari : </label>
		<input type="text" name="cari">
		<input type="submit" value="Cari">
	</form>

	<?php 
		if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		echo "<b>Hasil pencarian : ".$cari."</b>";
		}
	?>
 
	<table border="1">
		<tr>
			<th>Kode Skema</th>
			<th>Nama Peserta</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
			<th>No Hp</th>
		</tr>
	<?php 
		if(isset($_GET['cari'])){
		$cari = $_GET['cari'];
		$data = mysqli_query($koneksi, "select * from tb_peserta where nama like '%".$cari."%'");		
		}else{	
		$data = mysqli_query($koneksi, "select * from tb_peserta");	
		}
		$no = 1;
		while ($d=mysqli_fetch_array($data)) {
	?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $d['Kd_skema']; ?></td>
			<td><?php echo $d['Nm_peserta']; ?></td>
			<td><?php echo $d['Jekel']; ?></td>
			<td><?php echo $d['Alamat']; ?></td>
			<td><?php echo $d['No_hp']; ?></td>
		</tr>
	<?php } ?>
	</table>