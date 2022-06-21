<?php
$koneksi = mysqli_connect("localhost", "root", "", "incafe");
?>

<body>
    <center>
        <h2>Data Cafe</h2>
    </center>
    <form action="" method="get" placeholder="Cari cafe"><br>
        <input type="text" name="cari">
        <button class="btn btn-primary">Cari cafe</button>
    </form><br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>
                    <center>No.
                </td>
                </center>
                <td>
                    <center>Nama Cafe
                </td>
                </center>
                <td>
                    <center>Deskripsi Cafe
                </td>
                </center>
                <td>
                    <center>No. Telpon Cafe
                </td>
                </center>
                <td>
                    <center>Alamat Cafe
                </td>
                </center>
                <td>
                    <center>Foto
                </td>
                </center>
                <td>
                    <center>Aksi
                </td>
                </center>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1;
            $query = mysqli_query($koneksi, "SELECT*FROM tambah_cafe ORDER BY nama_toko_cafe ASC LIMIT 0, 5");
            if (isset($_GET['cari'])) {
                $query = mysqli_query($koneksi, "SELECT*FROM tambah_cafe WHERE nama_toko_cafe LIKE '%" . $_GET['cari'] . "%'");
            }
            while ($dt = mysqli_fetch_assoc($query)) {
            ?>
                <tr>
                    <td>
                        <center><?= $nomor++; ?></center>
                    </td>
                    <td><?= $dt['nama_toko_cafe']; ?></td>
                    <td><?= $dt['deskripsi_cafe']; ?></td>
                    <td>
                        <center><?= $dt['telepon_cafe']; ?></center>
                    </td>
                    <td><?= $dt['alamat_cafe'];  ?></td>
                    <td>
                        <img src="../fotocafe/<?php echo $dt['foto']; ?>" width="100">
                    </td>
                    <td>
                        <center>
                            <a href="index.php?halaman=hapuscafe&id=<?php echo $dt['id_tambah_cafe']; ?>" class="btn-danger btn">Hapus</a>
                        </center>
                        <center>
                            <a href="index.php?halaman=ubahcafe&id=<?php echo $dt['id_tambah_cafe']; ?>" class="btn btn-warning">Ubah</a>
                        </center>
                    </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
    <a href="index.php?halaman=tambah_toko" class="btn btn-primary">Tambah Cafe</a>
</body>
<nav aria-label="Page navigation example" class="nav navbar-right">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="index.php?halaman=tambah_cafe">1</a></li>
        <li class="page-item"><a class="page-link" href="index.php?halaman=halaman2">2</a></li>
    </ul>
</nav>