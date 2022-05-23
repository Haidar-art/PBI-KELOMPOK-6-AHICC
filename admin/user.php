<h2>Daftar Pengguna InCafe</h2>

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