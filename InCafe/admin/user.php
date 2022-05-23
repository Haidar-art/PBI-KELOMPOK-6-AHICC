<h2>Tambah Cafe</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>no</th>
            <th>Nama Pengguna</th>
            <th>Email</th>
            <th>Password</th>
            <th>Alamat Cafe</th>
    </tr>
</thead>
<tbody>
    <?php $nomor=1; ?>
    (diganti)<?php $ambil=$koneksi->query("SELECT * FROM tambah_cafe"); ?>
    <?php while ($pecah = $ambil->fetch_assoc()) { ?>
    <tr>
        <td><?php echo $nomor; ?></td>
        <td>x<?php echo $pecah['tambah_cafe'];?>/td>
        <td>x</td>
        <td>x</td>
        <td>x</td>
                <a href="" class="btn-danger btn">hapus</a>
                <a href="" class="btn btn-warning">ubah</a>
    </tr> 
    <?php $nomor++; ?>
    <?php } ?>
    </tbody>    
<table>