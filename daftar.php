<?php
$koneksi = new mysqli("localhost", "root", "", "incafe");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Daftar Pelanggan</title>
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
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Daftar Pelanggan</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post" class="form-horizontal">
                            <div class="form-group">
                                <label class="control-label col-md-3">Nama</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="nama" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Email</label>
                                <div class="col-md-7">
                                    <input type="email" class="form-control" name="email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Password</label>
                                <div class="col-md-7">
                                    <input type="password" class="form-control" name="password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-7  col-md-offset-3">
                                    <button class="btn btn-primary" name="daftar">Daftar</button>
                                </div>
                            </div>
                        </form>
                        <?php
                        //jika ada tombol daftar
                        if (isset($_POST["daftar"])) {
                            //mengambil isian dari form pendaftaran
                            $nama = $_POST["nama"];
                            $email = $_POST["email"];
                            $password = $_POST["password"];

                            //cek apakah email sudah digunakan
                            $ambil = $koneksi->query("SELECT * FROM user WHERE email_user='$email'");
                            $yangcocok = $ambil->num_rows;
                            if ($yangcocok == 1) {
                                echo "<script>alert('Pendaftaran gagal, email sudah digunakan. Silahkan menggunakan email lain.');</script>";
                                echo "<script>location='daftar.php';</script>";
                            } else {
                                //query insert ke tabel pelanggan
                                $koneksi->query("INSERT INTO user 
									(nama_user, email_user, password) 
									VALUES('$nama','$email','$password') ");

                                echo "<script>alert('Pendaftaran sukses! Silahkan login');</script>";
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</html>