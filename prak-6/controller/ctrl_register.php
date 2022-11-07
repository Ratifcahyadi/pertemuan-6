<?php
include("../config/config.php");
	
	// ambil data dari form
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	

	// buat query
	$sql = "INSERT INTO user (name,username,password) VALUES ('$nama','$username','$password')";
	$query = mysqli_query($sambung, $sql);

	
	// query simpan sudah berhasil
	if( $query ) {
		// kalau berhasil menampilkan status=sukses
		// header('Location: ../view/home.php?status=sukses');
		echo "Berhasil";
		exit;
	} else {
		// kalau gagal menampilkan status=gagal
		// header('Location: ../view/home.php?status=gagal');
		echo "gagal";
		exit;
	}	
// } else {
// 	die("Akses dilarang...");
// }

// Cara array
	// $user = [
	// 	'nama' => $_POST['nama'],
	// 	'username' => $_POST['username'],
	// 	'password' => $_POST['password'],
	// 	'password_confirmation' => $_POST['password_confirmation'],
	// ];
    // filter data yang diinputkan
    // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    // $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    // enkripsi password
    // $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    // $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

// $sql = "INSERT INTO user (name, username, password)
	// 		VALUE (:name, :username, :password)";

	// $statement = $db->prepare($sql);

// 	$param = array(":name=>$nama",":username=>$username",":password=>$password");
	
// 	$register = $statement->execute($param);

// 	if($register) {
// 		header('Location: ../view/home.php?status=sukses');
// 	}else{
// 		header('Location: ../view/home.php?status=gagal');
// 	}
// }
?>
