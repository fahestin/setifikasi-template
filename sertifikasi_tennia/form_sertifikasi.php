<?php
  session_start();
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
    <a class="navbar-brand" href="#">SERTIFIKASI</a>
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
	<h1>FORM SERTIFIKASI</h1>
	<form action="proses_sertifikasi.php" method="post">
		<div>
			<label for="Kd_skema">KODE SKEMA</label><br>
			<input type="text" name="Kd_skema" placeholder="Isikan kode">
		</div>
		<div>
			<label for="Nm_skema">NAMA SKEMA</label><br>
			<input type="text" name="Nm_skema" placeholder="Isikan nama skema">
		</div>
		<div>
			<label for="Jenis">JENIS</label><br>
			<input type="text" name="Jenis" placeholder="Isikan jenis skema">
		<div>
			<label for="Jml_unit">JUMLAH UNIT</label><br>
			<input type="text" name="Jml_unit" placeholder="Isikan jumlah unit">
		</div>
			</select>
		</div><br>
		<input type="submit" value="SIMPAN">
	</form>

</body>
</html>
	