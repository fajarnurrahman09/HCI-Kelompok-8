
<?php
include '../koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi, "delete from tabel_dbendahara where id = '$id' ");
header("location:../pages/bendahara.php");
?>