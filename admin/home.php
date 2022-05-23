<h2><center>Selamat Datang Admin</center></h2>

<h3>Data Cafe</h3>
<table class="table table-bordered">
    <thead>
        <tr>
            <th><center>No</center></th>
            <th><center>Nama Cafe</center></th>
            <th><center>Deskripsi</center></th>
            <th><center>No. Telpon Cafe</center></th>
            <th><center>Alamat Cafe</center></th>
            <th><center>Foto</center></th>
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

            </tr>
            <?php $nomor++; ?>
        <?php } ?>
    </tbody>
    <table>

    <h3>Data Pengguna</h3>
    <table class="table table-bordered">
    <thead>
        <tr>
            <th><center>No</center></th>
            <th><center>Nama Pengguna</center></th>
            <th><center>Email</center></th>
            <th><center>No. Telpon</center></th>
    </tr>
</thead>
<tbody>
    <?php $nomor=1; ?>
    <?php $ambil=$koneksi->query("SELECT * FROM user"); ?>
    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
    <tr>
        <td><center><?php echo $nomor; ?></center></td>
        <td><center><?php echo $pecah['nama_user'];?></center></td>
        <td><center><?php echo $pecah['email_user'];?></center></td>
        <td><center><?php echo $pecah['no_telpon'];?></center></td>
    </tr> 
    <?php $nomor++; ?>
    <?php } ?>
    </tbody>    
<table>