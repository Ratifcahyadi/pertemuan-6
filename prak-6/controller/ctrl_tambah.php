<?php
include("../config/config.php");

// cek tombol daftar
if(isset($_POST['daftar'])){
	
	// ambil data dari form
	$nik = $_POST['nik'];
	$nm = $_POST['nama_dosen'];
	$alt = $_POST['alamat_dosen'];
	$jk = $_POST['jenis_kelamin'];
	$sk = $_POST['skill_dosen'];
	
	// buat query
	$sql = "INSERT INTO dosen (nik_dos, nm_dos, almt_dos, jkl_dos, skl_dos) VALUE ('$nik','$nm','$alt','$jk','$sk')";
	$query = mysqli_query($sambung, $sql);
	
	// query simpan sudah berhasil
	if( $query ) {
		// kalau berhasil menampilkan status=sukses
		header('Location: ../view/dosen.php?status=sukses');
	} else {
		// kalau gagal menampilkan status=gagal
		header('Location: ../home.php?status=gagal');
	}	
} else {
	die("Akses dilarang...");
}
?>
