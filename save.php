<?php
session_start();
?>

<?php

$id_tambah_cafe = $_GET['id'];

if(isset($_SESSION['simpan'][$id_tambah_cafe]))
{
    $_SESSION['simpan'][$id_tambah_cafe] += 1;
}
else
{
    $_SESSION['simpan'][$id_tambah_cafe] = 1;
}

//echo "<pre>";
//print_r($_SESSION);
//echo "</pre>";

echo "<script>alert('Informasi telah tersimpan');</script>";
echo "<script>location='simpan.php';</script>";
?>