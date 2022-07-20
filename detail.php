<?php
//menyambungkan ke database
$koneksi = new mysqli("localhost", "root", "", "incafe");
?>

<?php
//mendapatkan id cafe
$id_tambah_cafe = $_GET["id"];

//query ambil data
$ambil = $koneksi->query("SELECT * FROM tambah_cafe WHERE id_tambah_cafe='$id_tambah_cafe'");
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
            <!-- jika sudah login(ada session pelanggan) -->
            <?php if (isset($_SESSION["user"])) : ?>
                <li><a href="logout.php">Logout</a></li>
                <!-- selain itu (blm login//blm ada session pelanggan) -->
            <?php else : ?>
                <li><a href="view.php">Login/Daftar</a></li>
            <?php endif ?>
            <li><a href="simpan.php">Simpan</a></li>
            <div class="container">
            <form action="pencarian.php" method="get" class="navbar-form navbar-right">
                <input type="text" class="form-control" name="keyword">
                <button class="btn btn-primary">Cari Cafe<i class></i></button>
                <br>
            </form>
            </div>
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
                    <p>Deskripsi : <?php echo $detail["deskripsi_cafe"]; ?></p>
                    <p>Telepon Cafe : <?php echo $detail["telepon_cafe"]; ?></p>
                    <p>Alamat : <?php echo $detail["alamat_cafe"]; ?></p>
                    <p>Halal/Non Halal : <?php echo $detail["halal_cafe"]; ?></p>
                    <p>Harga Menu : Rp. <?php echo $detail["harga_menu"]; ?></p>
                </div>
            </div>
        </div>
    </section>

</body>

</html>