<?php  
session_start();
include 'admin_config.php';

if (isset($_GET['kategori'])) {

	$kategori = $_GET['kategori'];

}else{
	$kategori = '';
}




if (isset($_POST['user'])) {
	
	updateuser($_POST);
}

if (isset($_POST['program'])) {
	
	updateprogram($_POST);
}

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
									<li class="list-group-item"><a href="pekerjaan.php" class="tabel <?php if ($kategori == 'pekerjaan') { echo "fw-bold"; } ?>">Tabel Pekerjaan</a></li>
									<li class="list-group-item"><a href="program.php" class="tabel <?php if ($kategori == 'program') { echo "fw-bold"; } ?>">Tabel Program</a></li>
									<li class="list-group-item"><a href="user.php" class="tabel <?php if ($kategori == 'user') { echo "fw-bold"; } ?>">Tabel User</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center">
					<a href="../config.php?logout=yes" class="btn btn-danger">Log Out</a>
				</div>
			</div>
			<div class="container p-3 mt-2">
				<?php if ($kategori == 'user') { 

					$id = $_GET['id'];

					$sql = "SELECT * FROM users WHERE id = '$id' ";
					$select = mysqli_query($conn,$sql);

					$data = mysqli_fetch_assoc($select);


					?>
					<h1 class="display-3">Tambah Data User</h1>
					<form action="" method="POST" class="col-md-4" enctype="multipart/form-data">
						<div class="my-4">
							<label for="nama" class="form-label">Nama User</label>
							<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" value="<?=$data['nama']?>">
						</div>
						<div class="my-4">
							<label for="no_hp" class="form-label">No Handphone User</label>
							<input type="number" name="no_hp" id="no_hp" class="form-control" placeholder="No Handphone" value="<?=$data['no_hp']?>">
						</div>
						<div class="my-4">
							<label for="email" class="form-label">Email User</label>
							<input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?=$data['email']?>">
						</div>
						<div class="my-4">
							<label for="password" class="form-label">Password User</label>
							<input type="password" name="password" id="password" class="form-control" placeholder="Password" value="<?=$data['password']?>">
						</div>
						<div class="my-4">
							<button type="submit" name="user" class="btn btn-primary px-4">Update</button>
						</div>
					</form>
				<?php } ?>

				<?php if ($kategori == 'program') { 

					$id = $_GET['id'];

					$sql = "SELECT * FROM program WHERE id = '$id' ";
					$select = mysqli_query($conn,$sql);

					$data = mysqli_fetch_assoc($select);

					?>
					<h1 class="display-3">Update Data Program</h1>
					<form action="" method="POST" class="col-md-4" enctype="multipart/form-data">
						<div class="my-4">
							<label for="nama" class="form-label">Nama Program</label>
							<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" value="<?=$data['nama']?>">
						</div>
						<div class="my-4">
							<label for="penyelenggara" class="form-label">Nama Penyelenggara</label>
							<input type="text" name="penyelenggara" id="penyelenggara" class="form-control" placeholder="Penyelenggara" value="<?=$data['penyelenggara']?>">
						</div>
						<div class="my-4">
							<label for="deskripsi" class="form-label">Deskripsi Program</label>
							<textarea class="form-control" name="deskripsi" id="deskripsi" placeholder="Deskripsi"><?=$data['deskripsi']?></textarea>
						</div>
						<div class="my-4">
							<label for="kategori" class="form-label">Kategori Program</label>
							<select name="kategori" class="form-select">
								<option value="" selected disabled hidden>Pilih Kategori</option>
								<option value="Training" <?php if ($data['kategori'] == "Training"): ?>
								selected
								<?php endif ?>>Training</option>
								<option value="Seminar" <?php if ($data['kategori'] == "Seminar"): ?>
								selected
								<?php endif ?>>Seminar</option>
							</select>
						</div>
						<div class="my-4">
							<label for="tanggal" class="form-label">Tanggal Program</label>
							<input type="date" name="tanggal" id="tanggal" class="form-control" placeholder="">
						</div>
						<div class="my-4">
							<label for="foto" class="form-label">Gambar/Poster Program</label>
							<input type="file" name="foto" id="foto" class="form-control" placeholder="">
						</div>
						<div class="my-4">
							<label for="harga" class="form-label">Harga Pendaftaran Program</label>
							<input type="number" name="harga" id="harga" class="form-control" placeholder="Harga Pendaftaran Program" value="<?=$data['harga']?>">
						</div>
						<div class="my-4">
							<button type="submit" name="program" class="btn btn-primary px-4">Daftar</button>
						</div>
					</form>
				<?php } ?>
			</div>
		</div>
	</body>
	</html>