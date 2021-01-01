<?php

require_once "db.php";

$nim = $_POST['NIM'];
$nama = $_POST['Nama'];
$alamat = $_POST['Alamat'];

$sql="UPDATE mahasiswa SET nama= '".$nama."', alamat= '".$alamat."'
     WHERE NIM = '".$nim."'";


if ($conn ->query($sql)){
	echo "Data sudah berhasil diupdate";
	header('Location: index.php');

}else{
	die("Error: " . $conn ->error);
}

exit;
