<h2>Ubah Cafe</h2>

<?php
$ambil = $koneksi->query("SELECT * FROM tambah_cafe WHERE id_tambah_cafe='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

//echo "<prev>";
//print_r($pecah);
//echo "</prev>";
?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Cafe</label>
        <input type="text" class="form-control" name="nama" value="<?php echo $pecah['nama_toko_cafe']; ?>">
    </div>
    <div class="form-group">
        <label>Deskripsi Cafe</label>
        <textarea class="form-control" name="deskripsi" rows="10"><?php echo $pecah['deskripsi_cafe']; ?>"</textarea>
    </div>
    <div class="form-group">
        <label>Telpon Cafe</label>
        <input type="text" class="form-control" name="telpon" value="<?php echo $pecah['telepon_cafe']; ?>">
    </div>
    <div class="form-group">
        <label>Alamat Cafe</label>
        <input type="text" class="form-control" name="alamat" value="<?php echo $pecah['alamat_cafe']; ?>">
    </div>
    <div class="form-group">
        <img src="../fotocafe/<?php echo $pecah['foto'] ?>" width="200">
    </div>
    <div class="form-group">
        <label>Ganti Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>
    <button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) {
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    //jika foto diubah
    if (!empty($lokasifoto)) {
        move_uploaded_file($lokasifoto, "../fotocafe/$namafoto");

        $koneksi->query("UPDATE tambah_cafe SET nama_toko_cafe='$_POST[nama]', deskripsi_cafe='$_POST[deskripsi]', telepon_cafe='$_POST[telpon]', alamat_cafe='$_POST[alamat]', foto='$namafoto' WHERE id_tambah_cafe='$_GET[id]'");
    } else {
        $koneksi->query("UPDATE tambah_cafe SET nama_toko_cafe='$_POST[nama]', deskripsi_cafe='$_POST[deskripsi]', telepon_cafe='$_POST[telpon]', alamat_cafe='$_POST[alamat]'  WHERE id_tambah_cafe='$_GET[id]'");
    }

    echo "<script>alert('data cafe telah diubah');</script>";
    echo "<script>location='index.php?halaman=tambah_cafe';</script>";
}
?>