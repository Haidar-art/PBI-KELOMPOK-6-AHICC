<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "incafe");
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>InCafe</title>
    <link href="admin/assets/css/bootstrap.css" rel="stylesheet" />
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-default">
        <div class="container">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="daftar.php">Daftar</a></li>
            </ul>
        </div>
    </nav>

 <!--Konten-->
 <section class="konten">
        <div class="container">
            <h1>Informasi Cafe</h1>
            <div class="row">
                <?php $ambil = $koneksi->query("SELECT * FROM tambah_cafe"); ?>
                <?php while ($cafe = $ambil->fetch_assoc()) { ?>
                    <div class="col-md-3">
                        <div class="thumbnail">
                            <img src="fotocafe/<?php echo $cafe['foto']; ?>" alt="">
                            <div class="caption">
                                <center>
                                    <h3><?php echo $cafe['nama_toko_cafe']; ?></h3>
                                </center>
                                <center>
                                    <a href="detail.php?id=<?php echo $cafe['id_tambah_cafe']; ?>" class=" btn btn-primary" class="glyphicon glyphicon-eye-open">Detail</a>
                                </center>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
</body>

<head>