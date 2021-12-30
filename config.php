<?php  

if (!isset($_SESSION)) {
	
	session_start();
}

$conn = mysqli_connect('localhost','root','','ready2jobs');


if (!$conn) {
	echo "<script>alert('koneksi gagal')</script>";
}


function daftar($data)
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
		
		header('Location:login.php');

	}else{

		echo "<script>alert('Email Sudah terdaftar')</script>";

	}

}

function login($data)
{
	global $conn;

	$email = $data['email'];
	$password = $data['password'];

	$cek = "SELECT * FROM users WHERE email = '$email' ";
	$select = mysqli_query($conn,$cek);

	$cekemail = mysqli_num_rows($select);

	if ($cekemail == 1) {
		
		$data = mysqli_fetch_assoc($select);

		if ($password == $data['password']) {
			
			$_SESSION['id'] = $data['id'];
			$_SESSION['nama'] = $data['nama'];
			$_SESSION['no_hp'] = $data['no_hp'];

			if ($email == "admin@admin.com") {
				
				header('Location:admin');

			}else{

				if (isset($_POST['remember'])) {

					setcookie('email', $_POST['email'], strtotime('+7 days'), "/");
					setcookie('password', $_POST['password'], strtotime('+7 days'), "/");
				}

				header('Location:home.php');
			}

		}else{

			echo "<script>alert('Password Salah')</script>";

		}
	}else{

		echo "<script>alert('Login Gagal')</script>";

	}
}

function daftarkerja($data)
{
	global $conn;

	$job_id = $_GET['id'];
	$user_id = $_SESSION['id'];

	$nama = $data['nama'];
	$email = $data['email'];
	$no_hp = $data['no_hp'];
	$domisili = $data['domisili'];

	$rand = rand();
	$ekstensi =  array('png','jpg','jpeg','gif');
	$filename = $_FILES['cv']['name'];
	$ukuran = $_FILES['cv']['size'];
	$ext = pathinfo($filename, PATHINFO_EXTENSION);

	$gambar = $rand."_".$filename;
	move_uploaded_file($_FILES['cv']['tmp_name'], 'img/foto-cv/'.$gambar);

	$insert = "INSERT INTO daftar_kerja VALUES('','$nama','$email', '$no_hp', '$domisili', '$gambar', '$job_id','$user_id','') ";
	mysqli_query($conn,$insert);


	header('Location:pesan.php');
}

function daftarprogram($data)
{
	global $conn;

	$program_id = $_GET['id'];
	$user_id = $_SESSION['id'];

	$nama = $data['nama'];
	$email = $data['email'];
	$no_hp = $data['no_hp'];

	$insert = "INSERT INTO daftar_program VALUES('','$nama','$email', '$no_hp', '$program_id','$user_id') ";
	mysqli_query($conn,$insert);


	header('Location:pesan.php');
}



// logout

if (isset($_GET['logout'])) {
	
	session_destroy();
	header('Location:login.php');
}

?>
