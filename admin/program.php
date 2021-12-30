<?php  
session_start();
include 'admin_config.php';

$i = 1;

$sql = "SELECT * FROM program";
$select = mysqli_query($conn,$sql);

?>


<!doctype html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

		<!-- link for icon -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

		<style type="text/css">
			
			div#sidebar{
				min-height: 100vh;
				width: 300px;
				background-color: darksalmon;
				color: #fff;
			}
			.list-group-item{
				background-color: darksalmon;
				border: 0;
				color: #fff;
			}
			
			.tabel{
				text-decoration: none;
				color: #fff;
				font-size: 14px;
			}
		</style>

		<title>Admin Ready2Jobs</title>
	</head>
	<body>

		<div class="d-flex">
			<div id="sidebar">
				<div class="text-center p-4">
					<i class="far fa-user-circle" style="font-size: 70px;"></i>
				</div>
				<div style="min-height: 70vh;">
					<div class="accordion-item" style="background-color: darksalmon; border: 0;">
						<h2 class="accordion-header" id="headingTwo">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color: darksalmon; color:white;">
								<i class="fas fa-table pe-2"></i> Daftar Table
							</button>
						</h2>
						<div id="collapseTwo" class="accordion-collapse collapse show" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
							<div class="accordion-body" >
								<ul class="list-group">
									<li class="list-group-item"><a href="home.php" class="tabel">Tabel Pendaftaran Kerja</a></li>
									<li class="list-group-item"><a href="daftar_program.php" class="tabel">Tabel Pendaftaran Program</a></li>
									<li class="list-group-item"><a href="pekerjaan.php" class="tabel">Tabel Pekerjaan</a></li>
									<li class="list-group-item"><a href="program.php" class="tabel fw-bold">Tabel Program</a></li>
									<li class="list-group-item"><a href="user.php" class="tabel">Tabel User</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center">
					<a href="../config.php?logout=yes" class="btn btn-danger">Log Out</a>
				</div>
			</div>
			<div class="container p-5 mt-5">
				<h1 class="display-3">Data Program</h1>
				<a href="tambah.php?kategori=program" class="btn btn-primary mb-3">Tambah Data</a>
				<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nama Program</th>
							<th scope="col">Penyelenggara</th>
							<th class="col-md-3">Deskripsi</th>
							<th scope="col">Kategori</th>
							<th scope="col">Tanggal</th>
							<th scope="col">Gambar</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($select as $key): ?>
							<tr>
								<th scope="row"><?=$i++?></th>
								<td><?=$key['nama']?></td>
								<td><?=$key['penyelenggara']?></td>
								<td><?=$key['deskripsi']?></td>
								<td><?=$key['kategori']?></td>
								<td><?=$key['tanggal']?></td>
								<td><img src="../img/foto-program/<?=$key['gambar']?>" style="max-width: 50px;"></td>
								<td>
									<a class="btn btn-warning" href="update.php?kategori=program&id=<?=$key['id']?>">Edit</a>
									<a class="btn btn-danger" href="admin_config.php?delete=program&id=<?=$key['id']?>">Delete</a>
								</td>
							</tr>
						<?php endforeach ?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
	</html>