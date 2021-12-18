
<?php
include '../koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi, "delete from tabel_dsarpras where id = '$id' ");
header("location:../pages/sarpras.php");
?>
