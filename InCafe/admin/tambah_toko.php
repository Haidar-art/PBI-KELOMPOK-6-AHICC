<h2>Tambah Cafe</h2>

<form method="post" enctype="multipart/form-data">
        <div class="form-group">
                <label>Nama Cafe</label>
                <input type="varchar" class="form-control" name="nama">
                
        </div>
        <div class="form-group">
                <label>Deskripsi</label>
                <textarea class="form-control" name="deskripsi" rows="10"></textarea>
        </div>
        <div class="form-group">
                <label>Alamat</label>
                <input type="varchar" class="form-control" name="alamat">
        </div>
        <div class="form-group">
                <label>Telepon</label>
                <input type="varchar" class="form-control" name="telepon">
        </div>
        <div class="form-group">
                <label>Foto Cafe</label>
                <input type="file" class="form-control" name="foto">
        </div>
        <div class="form-group">
                <label>Foto Sertifikat Halal </label>
                <input type="file" class="form-control" name="foto">
        </div>
        <button class="btn btn-primary" name="save">Simpan</button>
</form>

<?php
if (isset($_POST['save'])) {
        $nama = $_FILES['foto']['name'];
        $lokasi = $_FILES['foto']['name'];
        move_uploaded_file($lokasi, "../fotocafe/" . $nama);
        $koneksi->query("INSERT INTO tambah_cafe
    (nama_toko_cafe, deskripsi_cafe, alamat_cafe, telepon_cafe, foto)
    VALUES ('$_POST[nama]', '$_POST[deskripsi]', '$_POST[alamat]', '$_POST[telepon]', '$nama')");

        echo "<div class='alert alert-info'>Data Tersimpan</div>";
        echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=tambah_cafe'>";
}
?>