<?php
session_start();

echo "<pre>";
print_r($_SESSION['simpan']);
echo "</pre>";

$koneksi = new mysqli("localhost", "root", "", "incafe");

if(empty($_SESSION["simpan"]) OR !isset($_SESSION["simpan"]))
{
    echo "<script>alert('Save your favorite cafe!');</script>";
    echo "<script>location='index.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>simpan</title>
    <link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>

<!--Navbar-->
    <nav class="navbar navbar-default">
        <div class="container">

            <ul class="nav navbar-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="simpan.php">Saved</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </nav>

<section class="konten">
        <div class="container">
            <h1>Saved</h1>
            <hr>
            <table class="table table bordered">;
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Cafe</th>
                        <th>Deskripsi Cafe</th>
                        <th>Telpon Cafe</th>
                        <th>Alamat Cafe</th>
                        <th>Foto Cafe</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $nomor=1; ?>
                    <?php foreach ($_SESSION["simpan"] as $id_tambah_cafe => $jumlah): ?>
                    
                    <?php
                    $ambil = $koneksi->query("SELECT * FROM tambah_cafe 
                        WHERE id_tambah_cafe='$id_tambah_cafe'");
                    $pecah = $ambil->fetch_assoc();
                    echo "<pre>";
                    print_r($pecah);
                    echo "</pre>";
                    ?>

                    <tr>
                        <td><?php echo $nomor; ?></td>
                        <td><?php echo $pecah["nama_toko_cafe"]; ?></td>
                        <td><?php echo $pecah["deskripsi_cafe"]; ?></td>
                        <td><?php echo $pecah["telepon_cafe"]; ?></td>
                        <td><?php echo $pecah["alamat_cafe"]; ?></td>
                        <td>
                        <img src="../fotocafe/<?php echo $pecah['foto']; ?>" width="120">
                        </td>
                        <td>
                            <a href="hapuspost.php?id=<?php echo $id_tambah_cafe ?>" class="btn btn-danger btn-xs" >hapus</a>
                        </td>
                    </tr>
                    <?php $nomor++ ?>
                    <?php endforeach ?>
                </tbody>
            </table>
            <a href="index.php" class="btn btn-default">Back to Home</a>
        </div>
</section>


</body>
</html>