<?php
include 'koneksi.php';
// include 'fungsi.php';
$id_gunung = $_GET['id_gunung'];
$query="DELETE from table_gunung where id_gunung='$id_gunung'";
mysqli_query($conn, $query);
header("location:index.php");
?>