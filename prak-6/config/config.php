<?php
/*created by papa freya
oktober 2022
Latihan Notive CRUD*/

//server yang digunakan
$server = "localhost";

//username server
$username = "root";

//password server
$password = "";

//database yang digunakan
$nama_database = "db_pw2";

//membuat coneksi
$sambung = mysqli_connect($server, $username, $password, $nama_database);

//cek koneksi
if( !$sambung ){
    die("Ada masalah koneksi ke database: " . mysqli_connect_error());
}

?>

