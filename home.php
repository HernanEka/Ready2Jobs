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
					<li class="nav-item">
						<a href="login.php" class="nav-link">Log in</a>
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
					<div class="col-md-4">
						<div class="card">
							<div class="card-body">
								<h5 class="card-title">Job Title</h5>
								<p class="card-text">Perusahaan</p>
							</div>
							<div class="card-footer">
								<div class="row">
									<div class="col">
										Full or Part time Job
									</div>
									<div class="col">
										<a href="#" class="btn btn-primary">Go somewhere</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center">
					<a href="#" class="btn btn-primary">See More ></a>
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
					<div class="col-md-4">
						<div class="card">
							<img src="https://media.istockphoto.com/vectors/training-poster-vector-id620731574" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Training Title Title</h5>
								<h6 class="card-subtitle mb-2 text-muted">Perusahaan</h6>
								<p class="card-text">Deskripsi singkat</p>
							</div>
							<div class="card-footer text-end">
								<a href="#" class="btn btn-primary">Go somewhere</a>

							</div>
						</div>
					</div>
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
					<div class="col-md-4">
						<div class="card">
							<img src="https://media.istockphoto.com/vectors/training-poster-vector-id620731574" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">Judul Seminar</h5>
								<h6 class="card-subtitle mb-2 text-muted">Tanggal Seminar</h6>
								<p class="card-text">Deskripsi singkat</p>
							</div>
							<div class="card-footer text-end">
								<a href="#" class="btn btn-primary">Go somewhere</a>

							</div>
						</div>
					</div>
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