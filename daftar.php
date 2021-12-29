<?php  

include_once 'config.php';

if (isset($_POST['daftar'])) {
	
	daftar($_POST);
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

		<title>Ready2Jobs</title>
		<style type="text/css">
			#login{
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

			.form{
				background-color: #fff;
				border-radius: 20px;
				width: 400px;
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
			button.btn-info{
				color: #fff;
				background-color: #FA3E08;
				border-color: #fff;
			}
			button.btn-info:hover{
				color: #FA3E08;
				background-color: #fff;
				border-color: #FA3E08;
				border: 1;
			}
		</style>
	</head>
	<body>

		<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
			<div class="container-fluid">
				<a href="home.php" class="navbar-brand fw-bold">Ready2Jobs</a>
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="home.php" class="nav-link">Home</a>
					</li>
					<li class="nav-item">
						<a href="job.php" class="nav-link">Job</a>
					</li>
					<li class="nav-item">
						<a href="training.php" class="nav-link">Training</a>
					</li>
					<li class="nav-item">
						<a href="seminar.php" class="nav-link">Seminar</a>
					</li>
					<li class="nav-item">
						<a href="login.php" class="nav-link">Log in</a>
					</li>
				</ul>
			</div>
		</nav>

		<section id="login">
			<div class="container-fluid home">
				<div class="form mx-auto py-4 px-4">
					<div class="text-center">
						<h1 class="display-3">Daftar</h1>
					</div>
					<hr>
					<form action="" method="POST">
						<div class="my-4">
							<input type="text" name="nama" id="nama" class="form-control" placeholder="Nama">
						</div>
						<div class="my-4">
							<input type="number" name="no_hp" id="no_hp" class="form-control" placeholder="No Handphone">
						</div>
						<div class="my-4">
							<input type="email" name="email" id="email" class="form-control" placeholder="Email">
						</div>
						<div class="my-4">
							<input type="password" name="password" id="password" class="form-control" placeholder="Password">
						</div>
						<div class="my-4 text-center">
							<button type="submit" name="daftar" class="btn btn-info px-4">Daftar</button>
							<div class="form-text">Sudah Punya Akun? <a href="login.php" class="info">Login</a></div>
						</div>
					</form>
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