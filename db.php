<?php

$servername = "localhost";
$username = "root";
$password = "";
$nama_database = 'belajarphp';

//create connection
$conn = new mysqli(
$servername,
$username,
$password,
$nama_database
);

//check connection
if ($conn->connect_error){
	die("connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO mahasiswa VALUES ('123','Sifath','Bandung') ";

if ($conn ->query($sql)){
	echo "Data sudah berhasil ditambahkan";
}else{
	die("Error: " . $conn ->error);
}

?>