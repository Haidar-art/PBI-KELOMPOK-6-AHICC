<?php
//menyambungkan ke database
$koneksi = new mysqli("localhost", "root", "", "incafe");
?>

<?php
//mendapatkan id cafe
$id_cafe = $_GET["id"];

//query ambil data
$ambil = $koneksi->query("SELECT * FROM tambah_cafe WHERE id_tambah_cafe='$id_cafe'");
$detail = $ambil->fetch_assoc();

//echo "<prev>";
//print_r($detail);
//echo "</prev>";
?>

<!DOCTYPE html>
<html>

<head>
    <title>Detail Cafe</title>
    <link href="admin/assets/css/bootstrap.css" rel="stylesheet" />
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-default">
        <div class="container">
            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </div>
    </nav>

    <section class="konten">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="fotocafe/<?php echo $detail["foto"]; ?>" alt="" class="img-responsive">
                </div>
                <div class="col-md-6">
                    <h2><?php echo $detail["nama_toko_cafe"]; ?></h2>
                    <p>Deskripsi:
                        <?php echo $detail["deskripsi_cafe"]; ?></p>
                    <p>Telepon Cafe:
                        <?php echo $detail["telepon_cafe"]; ?></p>
                    <p>Alamat:
                        <?php echo $detail["alamat_cafe"]; ?></p>
                </div>
            </div>
        </div>
    </section>

</body>

</html>