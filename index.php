<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <?php
        include 'view/header.php';
    ?>


    <div class="container">
        <div class="card " style="margin-top:2%">
            <div class="card-header">
                <h3>Input data Mahasiswa</h3>
            </div>
            <div class="card-body">
                <form action="showdata.php" method="post">  
                    <div class="form-group row">
                        <div class="col-sm-12">
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                        <input type="text" class="form-control" name="nim" placeholder="Masukkan Nim">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Simpan</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card " style="margin-top:5%">
            <div class="card-header">
                <h3>Data Mahasiswa</h3>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-light">
                        <tr>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            include "Config/koneksi.php";
                            $data = mysqli_query($koneksi,"select * from mahasiswa ");
		                    while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <th scope="row"><?php echo $d['nim']; ?></th>
                            <td><?php echo $d['nama']; ?></td>
                        </tr>
                    </tbody>
                        <?php
                            }
                        ?>
                </table>
            </div>
        </div>
    </div>

    <div class="container" style="margin-top:5%">
        
    </div>
    
</body>
</html>