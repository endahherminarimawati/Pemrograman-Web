<?php

    include "Config/koneksi.php";

    $nama = $_POST['nama'];
    $nim = trim($_POST['nim']);

    //cek validasi
    if(empty($nama)){
        $message = "Nama ga boleh kosong";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>location.href='http://localhost/pweb1/index.php';</script>";
    }
    elseif(empty($nim)){
        $message = "NIM ga boleh kosong";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>location.href='http://localhost/pweb1/index.php';</script>";
    }
    elseif(empty($nama && $nim)){
        $message = "Nama dan NIM ga boleh kosong";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>location.href='http://localhost/pweb1/index.php';</script>";
    }
    elseif(strlen($nim) < 10){
        $message = "NIM kurang";
		echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script>location.href='http://localhost/pweb1/index.php';</script>";
    }
    elseif(is_numeric($nim) == false){
        $message = "NIM harus angka";
		echo "<script type='text/javascript'>alert('$message');</script>";
		echo "<script>location.href='http://localhost/pweb1/index.php';</script>";
    }
    else{
        mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES ('$nim','$nama')") ;
        header("location:http://localhost/pweb1/index.php");
        $_SESSION['pesan'] = 'Data berhasil di tambahkan';
    }

?>

<!-- if(empty($nama || $nim)){
    "UPDATE mahasiswa SET nim='$nim',nama='$nama' WHERE nama = '$nama'");
        $message = "Nama dan NIM ga boleh kosong";
		echo "<script type='text/javascript'>alert('$message');</script>";
		//echo "<a href="Diagnosa.php">";
		echo "<script>location.href='index.php';</script>";
    }

    if(empty($nama)){
        $message = "Nama ga boleh kosong";
		echo "<script type='text/javascript'>alert('$message');</script>";
		//echo "<a href="Diagnosa.php">";
		echo "<script>location.href='index.php';</script>";
    }else{
        echo $nama;
    }

    if(empty($nim)){
        $message = "NIM ga boleh kosong";
		echo "<script type='text/javascript'>alert('$message');</script>";
		//echo "<a href="Diagnosa.php">";
		echo "<script>location.href='index.php';</script>";
    }

    if(strlen($nim) < 10){
        $message = "NIM kurang";
		echo "<script type='text/javascript'>alert('$message');</script>";
		//echo "<a href="Diagnosa.php">";
        echo "<script>location.href='index.php';</script>";
        // if(is_numeric($nim) == false){
        //     $message = "NIM harus angka";
        //     echo "<script type='text/javascript'>alert('$message');</script>";
        //     //echo "<a href="Diagnosa.php">";
        //     echo "<script>location.href='index.php';</script>";
        // }
    }
    if(is_numeric($nim) == false){
        $message = "NIM harus angka";
		echo "<script type='text/javascript'>alert('$message');</script>";
		//echo "<a href="Diagnosa.php">";
		echo "<script>location.href='index.php';</script>";
    }else{
        echo $nim;
    } -->