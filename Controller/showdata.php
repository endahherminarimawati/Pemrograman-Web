<?php

    include "Config/koneksi.php";

    $nama = $_POST['nama'];
    $nim = trim($_POST['nim']);

    //cek validasi
    if(empty($nama)){
        $message = "Nama ga boleh kosong";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>location.href='index.php';</script>";
    }
    elseif(empty($nim)){
        $message = "NIM ga boleh kosong";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>location.href='index.php';</script>";
    }
    elseif(empty($nama && $nim)){
        $message = "Nama dan NIM ga boleh kosong";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>location.href='index.php';</script>";
    }
    elseif(strlen($nim) < 10){
        $message = "NIM kurang";
		echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>location.href='index.php';</script>";
    }
    elseif(is_numeric($nim) == false){
        $message = "NIM harus angka";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>location.href='index.php';</script>";
    }
    else{
        mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES ('$nim','$nama')") ;
        header("location:index.php");
        $_SESSION['pesan'] = 'Data berhasil di tambahkan';
    }

?>
