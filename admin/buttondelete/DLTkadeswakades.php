
<?php
include '../koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi, "delete from tabel_dkadeswakades where id = '$id' ");
header("location:../pages/kadeswakades.php");
?>