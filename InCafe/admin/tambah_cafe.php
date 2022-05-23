<h2>Data Cafe</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th><center>No</center></th>
            <th><center>Nama Cafe</center></th>
            <th><center>Deskripsi</center></th>
            <th><center>No. Telpon Cafe</center></th>
            <th><center>Alamat Cafe</center></th>
            <th><center>Foto</center></th>
            <th><center>Aksi</center></th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM tambah_cafe"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['nama_toko_cafe']; ?></td>
                <td><?php echo $pecah['deskripsi_cafe']; ?></td>
                <td><?php echo $pecah['telepon_cafe']; ?></td>
                <td><?php echo $pecah['alamat_cafe']; ?></td>
                <td>
                    <img src="../fotocafe/<?php echo $pecah['foto']; ?>" width="100">
                </td>
                <td>
                    <center>
                    <a href="index.php?halaman=hapuscafe&id=<?php echo $pecah['id_tambah_cafe']; ?>" class="btn-danger btn">hapus</a>
                    <a href="index.php?halaman=ubahcafe&id=<?php echo $pecah['id_tambah_cafe']; ?>" class="btn btn-warning">ubah</a>
                    </center>
                </td>
            </tr>
            <?php $nomor++; ?>
        <?php } ?>
    </tbody>
    <table>
        <a href="index.php?halaman=tambah_toko" class="btn btn-primary">Tambah Cafe</a>