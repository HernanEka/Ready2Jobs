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
			.aktif{
				background: rgba(1, 1, 1, 0.5);
			}
			.tabel{
				text-decoration: none;
				color: #fff;
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
				<div class="p-4" style="min-height: 70vh;">
					<i class="fas fa-tachometer-alt"></i>
					<a href="#" class="fw-bold" style="text-decoration: none; color: white;">DashBoard</a>

					<div class="accordion-item" style="background-color: darksalmon; border: 0;">
						<h2 class="accordion-header" id="headingTwo">
							<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" style="background-color: darksalmon; color:white;">
								<i class="fas fa-table pe-2"></i> Daftar Table
							</button>
						</h2>
						<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
							<div class="accordion-body" >
								<ul class="list-group">
									<li class="list-group-item aktif"><a href="#" class="tabel">Tabel 1</a></li>
									<li class="list-group-item"><a href="#" class="tabel">Tabel 2</a></li>
									<li class="list-group-item"><a href="#" class="tabel">Tabel 3</a></li>
									<li class="list-group-item"><a href="#" class="tabel">Tabel 4</a></li>
									<li class="list-group-item"><a href="#" class="tabel">Tabel 5</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center">
					<a href="#" class="btn btn-danger">Log Out</a>
				</div>
			</div>
			<div>
				<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">First</th>
							<th scope="col">Last</th>
							<th scope="col">Handle</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Mark</td>
							<td>Otto</td>
							<td>@mdo</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr><tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr><tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr><tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr><tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr><tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr><tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr><tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr><tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr><tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr><tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr><tr>
							<th scope="row">2</th>
							<td>Jacob</td>
							<td>Thornton</td>
							<td>@fat</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td colspan="2">Larry the Bird</td>
							<td>@twitter</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</body>
	</html>