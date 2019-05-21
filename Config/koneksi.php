<?php 
 
$koneksi = mysqli_connect("localhost","root","","data");
$message = "succes";
 
// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}else{
    //echo $message;
}
 
?>