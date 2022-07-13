<?php
include 'koneksi.php';
if (isset($_POST)) {

    $id = $_POST['id_provinsi'];
    $nama = $_POST['nama_provinsi'];

    $sql = "UPDATE `table_provinsi` SET `nama_provinsi` = '$nama' WHERE `table_provinsi`.`id_provinsi` = '$id';";
    $result = $conn->query($sql);

    if ($result) {
        header("location:list_prov.php?alert=updated successfully");
    } else {
        header("location:list_prov.php?alert=Error updating record") . mysqli_error($conn);
    }
}
