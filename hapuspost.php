<?php
session_start();
$id_tambah_cafe=$_GET["id"];
unset($_SESSION["simpan"][$id_tambah_cafe]);

echo "<script>alert('Informasi Telah Terhapus');</script>";
echo "<script>location='simpan.php';</script>";
?>