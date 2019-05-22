<?php

    include "Config/koneksi.php";

    $nama = $_POST['nama'];
    $nim = trim($_POST['nim']);

    //cek validasi
    if(empty($nama) && empty($nim)){
        $message = "NAMA dan NIM tidak boleh kosong";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>location.href='http://localhost/pweb1/index.php';</script>";
    }
    if(empty($nama)){
        $message = "Nama tidak boleh kosong";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>location.href='http://localhost/pweb1/index.php';</script>";
    }
    elseif(empty($nim)){
        $message = "NIM tidak boleh kosong";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>location.href='http://localhost/pweb1/index.php';</script>";
    }
    elseif(strlen($nim) < 10 && is_numeric($nim) == false){
        $message = "NIM harus berupa angka dan panjangnya 10 karakter";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>location.href='http://localhost/pweb1/index.php';</script>";
    }
    elseif(is_numeric($nim) == false){
        $message = "NIM harus berupa angka ";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>location.href='http://localhost/pweb1/index.php';</script>";
    }
    elseif(strlen($nim)!=10){
        $message = "NIM panjangnya harus 10 karakter";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>location.href='http://localhost/pweb1/index.php';</script>";
    }
    else{
        mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES ('$nim','$nama')") ;
        header("location:http://localhost/pweb1/index.php");
        $_SESSION['pesan'] = 'Data berhasil di tambahkan';
    }

?>

