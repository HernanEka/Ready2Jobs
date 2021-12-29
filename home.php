<?php  

include_once 'config.php';

$i = 1;

$sql1 = "SELECT * FROM pekerjaan";
$pekerjaan = mysqli_query($conn,$sql1);

$sql2 = "SELECT * FROM program WHERE kategori = 'Training'";
$training = mysqli_query($conn,$sql2);

$sql3 = "SELECT * FROM program WHERE kategori = 'Seminar'";
$seminar = mysqli_query($conn,$sql3);


?>

<!doctype html>
	<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

		<!-- link for icon -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">


		<title>Ready2Jobs</title>
		<style type="text/css">
			#Home{
				background-image: url('https://images.unsplash.com/photo-1518655048521-f130df041f66?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80');
				background-repeat: no-repeat;
				background-attachment: fixed;
				background-size: 100% 100%;

			}
			.container{
				padding-top: 100px;
				padding-bottom: 100px;
			}
			.home{
				background: rgba(1, 1, 1, 0.1);
				color: #FA3E08;
				padding-top: 150px;
				padding-bottom: 150px;
			}
			div.info{
				color: #FA3E08;
				font-size: 20px;
			}
			a.info{
				color: #FA3E08;
				text-decoration: underline;
				text-underline-position: under;
			}
			a.info:hover{
				color: #7A1D04;
			}
		</style>
	</head>
	<body>

		<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<a href="#" class="navbar-brand fw-bold">Ready2Jobs</a>
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="#" class="nav-link">Home</a>
					</li>
					<li class="nav-item">
						<a href="#Job" class="nav-link">Job</a>
					</li>
					<li class="nav-item">
						<a href="#Training" class="nav-link">Training</a>
					</li>
					<li class="nav-item">
						<a href="#Seminar" class="nav-link">Seminar</a>
					</li>
					
					<?php if (isset($_SESSION['id'])) { ?>
						<li class="nav-item">
							<div class="dropleft">
								<a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
									<i class="fas fa-user"></i>
								</a>

								<ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="dropdownMenuLink">
									<li><a class="dropdown-item" href="profile.php">Profile</a></li>
									<li><a class="dropdown-item" href="config.php?logout=yes">Log Out</a></li>
								</ul>
							</div>
						</li>
						<li class="nav-item"><a href="pesan.php" class="nav-link"><i class="fas fa-envelope"></i></a></li>
					<?php }else{  ?>	
						<li class="nav-item">
							<a href="login.php" class="nav-link">Log in</a>
						</li>
					<?php } ?>
				</li>
			</ul>
		</div>
	</nav>
	<section id="Home">
		<div class="container-fluid home justify-content-center">
			<div class="pt-5 text-center">
				<h1 class="display-1">Ready2Jobs</h1>
				<p>We Provide you with various of Jobs, Training, and Seminar to Improve your Skill</p>
			</div>
			<div class="py-5 text-center info">
				<a href="#Job" class="info">Jobs</a> / <a href="#Training" class="info">Training</a> / <a href="#Seminar" class="info">Seminar</a>
			</div>
		</div>
	</section>

	<section id="Job">
		<div class="container">
			<div class="text-center">
				<h1 class="display-3">Find a Job</h1>
				<p>We Provides you various Jobs from various Company</p>
			</div>
			<div class="row my-5 py-5">
				<?php while ($key=mysqli_fetch_assoc($pekerjaan)): ?>
					<div class="col-md-4">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title"><?=$key['nama']?></h5>
								<p class="card-text"><?=$key['perusahaan']?></p>
							</div>
							<div class="card-footer">
								<div class="row">
									<div class="col">
										<?=$key['kategori']?>
									</div>
									<div class="col">
										<a href="postdetail.php?kategori=pekerjaan&id=<?=$key['id']?>" class="btn btn-primary">Cek Detail</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php if ($i==3) {
						break;
					}else{
						$i++;
					} ?>
				<?php endwhile ?>
			</div>
			<div class="text-center">
				<a href="list.php?kategori=pekerjaan" class="btn btn-primary">See More ></a>
			</div>
		</div>
	</section>

	<section id="Training" style="background-color: #eee;">
		<div class="container">
			<div class="text-center">
				<h1 class="display-3">Looking For Training?</h1>
				<p>We Provides you various Training Programs from various Company</p>
			</div>
			<div class="row my-5 py-5">
				<?php while ($key = mysqli_fetch_assoc($training)): ?>
					<div class="col-md-4">
						<div class="card">
							<img src="img/foto-program/<?=$key['gambar']?>" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title"><?=$key['nama']?></h5>
								<h6 class="card-subtitle mb-2 text-muted"><?=$key['penyelenggara']?></h6>
								<p class="card-text">Biaya Pendaftaran Rp <?= number_format($key['harga'])?></p>
							</div>
							<div class="card-footer text-end">
								<a href="postdetail.php?kategori=program&id=<?=$key['id']?>" class="btn btn-primary">Cek Detail</a>
							</div>
						</div>
					</div>
					<?php if ($i==3) {
						break;
					}else{
						$i++;
					} ?>
				<?php endwhile ?>
			</div>
			<div class="text-center">
				<a href="#" class="btn btn-primary">See More ></a>
			</div>
		</div>
	</section>

	<section id="Seminar">
		<div class="container">
			<div class="text-center">
				<h1 class="display-3">Want to join some Seminar?</h1>
				<p>We Provides you various Seminar to improve your knowledge</p>
			</div>
			<div class="row my-5 py-5">
				<?php while ($key=mysqli_fetch_assoc($seminar)): ?>
					<div class="col-md-4">
						<div class="card">
							<img src="img/foto-program/<?=$key['gambar']?>" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title"><?=$key['nama']?></h5>
								<h6 class="card-subtitle mb-2 text-muted"><?=$key['tanggal']?></h6>
								<p class="card-text">Biaya Pendaftaran Rp <?= number_format($key['harga'])?></p>
							</div>
							<div class="card-footer text-end">
								<a href="postdetail.php?kategori=program&id=<?=$key['id']?>" class="btn btn-primary">Cek Detail</a>
							</div>
						</div>
					</div>
					<?php if ($i==3) {
						break;
					}else{
						$i++;
					} ?>
				<?php endwhile ?>
			</div>
			<div class="text-center">
				<a href="#" class="btn btn-primary">See More ></a>
			</div>
		</div>
	</section>


	<footer class="navbar-light bg-light py-4">
		<div class="text-center">
			Made by Nabella Denice
		</div>
	</footer>
	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>