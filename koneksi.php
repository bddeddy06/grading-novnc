<?php 
$db_host = "localhost" ;
$db_user = "root";
$db_password = "";
$db_name = "db_grading";

$koneksi = mysqli_connect($db_host, $db_user, $db_password, $db_name);

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>