
<?php
include '../koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi, "delete from tabel_dkurikulum where id = '$id' ");
header("location:../pages/kurikulum.php");
?>
