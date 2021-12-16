
<?php
include '../koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi, "delete from tabel_dinfokom where id = '$id' ");
header("location:../pages/infokom.php");
?>