<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "incafe");
?>
<?php
$keyword = $_GET["keyword"];

$semuadata=array();
$ambil = $koneksi->query("SELECT * FROM tambah_cafe WHERE nama_toko_cafe LIKE '%$keyword%' 
    OR alamat_cafe LIKE '%%$keyword%'");
    while($pecah = $ambil->fetch_assoc())
    {
        $semuadata[]=$pecah;
    }

//echo "<pre>";
//print_r ($semuadata);
//echo "</pre>";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>InCafe</title>
    <link href="admin/assets/css/bootstrap.css" rel="stylesheet" />
</head>

<body>
<?php include 'menu.php' ; ?>
    <div class="container">
        <h3>Hasil Pencarian : <?echo $keyword ?></h3>

        <?php if (empty($semuadata)):?>
            <div class="alert alert-danger">Cafe <strong><?php echo $keyword?></strong> Pencarian tidak ditemukan</div>
            <?php endif ?> 
        
        <div class="row">

        <?php foreach ($semuadata as $key => $value):?>

        <div class="col-md-3">
            <div class="thumbnail">
                <img src="fotocafe/<?php echo $value["foto"] ?>"alt="" class="img-responsive">
                <div class="caption">
                    <h3><?php echo $value["nama_toko_cafe"] ?></h3>
                    <a href="detail.php?id=<?php echo $detail ["nama_toko_cafe"];?> "class="btn btn-default">Detail</a>
                </div>
            </div>
        </div>
        <?php endforeach ?>
        </div>
    </div>
</body>
</html>