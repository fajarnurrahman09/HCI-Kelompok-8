
<?php
include '../koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi, "delete from tabel_dmp where id = '$id' ");
header("location:../pages/mp.php");
?>