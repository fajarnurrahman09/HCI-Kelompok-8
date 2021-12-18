
<?php
include '../koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi, "delete from tabel_dpsdm where id = '$id' ");
header("location:../pages/psdm.php");
?>