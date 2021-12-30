<?php  

if (!isset($_SESSION)) {
	
	session_start();
}

$conn = mysqli_connect('localhost','root','','ready2jobs');


if (!$conn) {
	echo "<script>alert('koneksi gagal')</script>";
}

function adduser($data)
{

	global $conn;

	$nama = $data['nama'];
	$email = $data['email'];
	$password = $data['password'];
	$no_hp = $data['no_hp'];


	$sql = "SELECT * FROM users WHERE email = '$email' ";
	$select = mysqli_query($conn,$sql);

	$cekemail = mysqli_num_rows($select);

	if ($cekemail == 0) {
		
		$insert = "INSERT INTO users VALUES('','$nama','$no_hp', '$email', '$password') ";
		mysqli_query($conn,$insert);

		echo "<script>alert('Berhasil mendaftar')</script>";
		
		header('Location:user.php');

	}else{

		echo "<script>alert('Email Sudah terdaftar')</script>";

	}

}

function updateuser($data)
{
	$id = $_GET['id'];
	global $conn;

	$nama = $data['nama'];
	$email = $data['email'];
	$password = $data['password'];
	$no_hp = $data['no_hp'];

	$sql = "UPDATE users SET nama = '$nama', no_hp = '$no_hp', email = '$email', password = '$password' WHERE id = '$id'";
	mysqli_query($conn,$sql);

	header('Location:user.php');

}

function addprogram($data)
{
	global $conn;

	$nama = $data['nama'];
	$penyelenggara = $data['penyelenggara'];
	$deskripsi = $data['deskripsi'];
	$kategori = $data['kategori'];
	$tanggal = $data['tanggal'];
	$harga = $data['harga'];

	$rand = rand();
	$ekstensi =  array('png','jpg','jpeg','gif');
	$filename = $_FILES['foto']['name'];
	$ukuran = $_FILES['foto']['size'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	$gambar = $rand."_".$filename;
	move_uploaded_file($_FILES['foto']['tmp_name'], '../img/foto-program/'.$gambar);

	$insert = "INSERT INTO program VALUES('','$nama','$penyelenggara', '$deskripsi', '$kategori', '$tanggal', '$harga','$gambar') ";
	mysqli_query($conn,$insert);


	header('Location:program.php');
}

function updateprogram($data)
{
	global $conn;

	$id = $_GET['id'];

	$nama = $data['nama'];
	$penyelenggara = $data['penyelenggara'];
	$deskripsi = $data['deskripsi'];
	$kategori = $data['kategori'];
	$tanggal = $data['tanggal'];
	$harga = $data['harga'];

	$cekgambar = $_FILES['foto']['name'];

	if ($cekgambar != '') {
		
		$rand = rand();
		$ekstensi =  array('png','jpg','jpeg','gif');
		$filename = $_FILES['foto']['name'];
		$ukuran = $_FILES['foto']['size'];
		$ext = pathinfo($filename, PATHINFO_EXTENSION);

		$gambar = $rand."_".$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], '../img/foto-program/'.$gambar);

		$update = "UPDATE program SET nama =  '$nama', penyelenggara =  '$penyelenggara', deskripsi =  '$deskripsi', harga = '$harga', gambar =  '$gambar', kategori = '$kategori' WHERE id = '$id'";
		mysqli_query($conn,$update);


		header('Location:program.php');

	} else{

		$update = "UPDATE program SET nama =  '$nama', penyelenggara =  '$penyelenggara', deskripsi =  '$deskripsi', harga = '$harga', kategori = '$kategori' WHERE id = '$id'";
		mysqli_query($conn,$update);

		header('Location:program.php');


	}

	
}

function addpekerjaan($data)
{
	global $conn;

	$nama = $data['nama'];
	$perusahaan = $data['perusahaan'];
	$deskripsi = $data['deskripsi'];
	$kategori = $data['kategori'];



	$insert = "INSERT INTO pekerjaan VALUES('','$nama','$perusahaan', '$deskripsi', '$kategori') ";
	mysqli_query($conn,$insert);


	header('Location:pekerjaan.php');
}

function updatepekerjaan($data)
{
	global $conn;

	$id = $_GET['id'];

	$nama = $data['nama'];
	$perusahaan = $data['perusahaan'];
	$deskripsi = $data['deskripsi'];
	$kategori = $data['kategori'];



	$update = "UPDATE pekerjaan SET nama =  '$nama', perusahaan =  '$perusahaan', deskripsi =  '$deskripsi', kategori = '$kategori' WHERE id = '$id'";
	mysqli_query($conn,$update);

	header('Location:pekerjaan.php');

}

function updatedaftar($data)
{

	global $conn;

	$hasil = $data['hasil'];
	$id = $_GET['id'];


	$sql = "UPDATE daftar_kerja SET hasil = '$hasil' WHERE id = '$id' ";
	mysqli_query($conn,$sql);

	header('Location:home.php');

}

if (isset($_GET['delete'])) {
	
	$delete = $_GET['delete'];

	$id = $_GET['id'];

	if ($delete == 'user') {
		$sql = "DELETE FROM users WHERE id = '$id'";
		mysqli_query($conn,$sql);

		header('Location:user.php');
	}

	if ($delete == 'program') {
		$sql = "DELETE FROM program WHERE id = '$id'";
		mysqli_query($conn,$sql);

		header('Location:program.php');
	}

	if ($delete == 'pekerjaan') {
		$sql = "DELETE FROM pekerjaan WHERE id = '$id'";
		mysqli_query($conn,$sql);

		header('Location:pekerjaan.php');
	}
	
}

?>