<?php

require_once "db.php";

$nim = $_POST['NIM'];
$nama = $_POST['Nama'];
$alamat = $_POST['Alamat'];

$sql = "INSERT INTO mahasiswa (NIM, Nama, Alamat) 
     VALUES ('".$nim."','".$nama."','".$alamat."') ";

if ($conn ->query($sql)){
	echo "Data sudah berhasil ditambahkan";
}else{
	die("Error: " . $conn ->error);
}

exit;
