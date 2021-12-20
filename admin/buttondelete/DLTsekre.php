
<?php
include '../koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi, "delete from tabel_dsekre where id = '$id' ");
header("location:../pages/sekre.php");
?>