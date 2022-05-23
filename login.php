<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "incafe");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Pelanggan</title>
    <link href="admin/assets/css/bootstrap.css" rel="stylesheet" />
</head>
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
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login Pelanggan</h3>
                    </div>
                    <div class="panel-body">
                        <form method="post">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <button class="btn btn-primary" name="login">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    //jika ada tombol login(tombol login ditekan)
    if (isset($_POST["login"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];
        //lakukan query ngecek akun di tabel pelanggan di database
        $ambil = $koneksi->query("SELECT * FROM user
				WHERE email_user='$email' AND password='$password'");
        //ngitung akun yang terambil
        $akunyangcocok = $ambil->num_rows;
        //jika 1 akun yan cocok, maka diloginkan
        if ($akunyangcocok == 1) {
            //anda sukses login
            //mendapatkan akun dalam bentuk array
            $akun = $ambil->fetch_assoc();
            //simpan di session pelanggan
            $_SESSION["pelanggan"] = $akun;
            echo "<script>alert('Anda berhasil login.');</script>";
            echo "<script>location='index.php';</script>";
        } else {
            //anda gagal login
            echo "<script>alert('anda gagal login, periksa akun Anda');</script>";
            echo "<script>location='login.php';</script>";
        }
    }

    ?>

</html>