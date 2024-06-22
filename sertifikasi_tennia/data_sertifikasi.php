<?php
	include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SERTIFIKASi</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Data Sertifikasi</title>
	<style type="text/css">
		body {
			font-family: sans-serif;
			width: 80%;
			text-align: center;
			margin: auto;
		}

		.table1{
			font-family: sans-serif;
			border-collapse: collapse;
			width: 100%;
			margin: auto;
		}

		.table1 tr th {
			background: orange;
			color: #fff;
			text-align: center;
			padding: 20px 8px;
		}

		.table1,th,td {
			text-align: center;
			padding: 20px 8px;
			border: 1px solid grey;
		}

		.btn-edit, .btn-hapus {
			background: blue;
			padding: 10px 15px 10px 15px;
			color: #fff;
			font-family: sans-serif;
			margin: 5px 5px;
			text-decoration: none;
		}

		.btn {
			background: blue;
			padding: 10px 15px 10px 15px;
			color: #fff;
			font-family: sans-serif;
			margin: 5px 5px;
			text-decoration: none;
			float: left;
		}

		a:hover {   
			background: red;
		}

		.table1 tr:hover {
			background-color: lightpink;
		}

	</style>	
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
	<h3>DATA SERTIFIKASI</h3>
	<hr>
	<a href="form_sertifikasi.php" class="btn">TAMBAH DATA</a>
	<table class="table1">
		<tr>
			<th>KODE SKEMA</th>
			<th>NAMA SKEMA</th>
			<th>JENIS</th>
			<th>JUMLAH UNIT</th>
			<th>OPSi</th>
		</tr>

		<?php
			$data = mysqli_query($koneksi,"select * from tb_skema");
			while ($d=mysqli_fetch_array($data)) {
				// code...
			
		?>

		<tr>
			<td><?php echo $d['Kd_skema'];?> </td>
			<td><?php echo $d['Nm_skema'];?></td>
			<td><?php echo $d['Jenis'];?></td>
			<td><?php echo $d['Jml_unit'];?></td>
			<td>
				<a href= "edit_sertifikasi.php?Kd_skema=<?php echo $d['Kd_skema'];?>" class="btn-edit">EDIT</a>
				<a href= "hapus_sertifikasi.php?Kd_skema=<?php echo $d['Kd_skema'];?>" class="btn-hapus">HAPUS</a>
			</td>
		</tr>
	<?php } ?>
	</table>
</body>
</html>