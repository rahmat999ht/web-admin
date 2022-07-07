<?php
include 'koneksi.php';
// include 'fungsi.php';
$id_provinsi = $_GET['id_provinsi'];
$query="DELETE from table_provinsi where id_provinsi='$id_provinsi'";
mysqli_query($conn, $query);
header("location:list_prov.php");
?>