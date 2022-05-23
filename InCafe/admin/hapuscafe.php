<?php
$ambil = $koneksi->query("SELECT * FROM tambah_cafe WHERE id_tambah_cafe='$_GET [id'");
$pecah = $ambil->fetch_assoc();
$fotoproduk = $pecah['foto'];
if (file_exists("../foto/$fotocafe")) {
    unlink("../foto/$fotocafe");
}
$koneksi->query("DELETE FROM tambah_cafe WHERE id_tambah_cafe='$_GET[id]'");
echo "<script>alert('cafe terhapus');</script>";
echo "<script>location='index.php?halaman=tambah_cafe';</script>";
