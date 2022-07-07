<?php
include 'koneksi.php';
// $id = $_POST['id_gunung'];
if (isset($_POST['simpan'])) {

    $nama = $_POST['nama_provinsi'];

    $sql = "INSERT INTO table_provinsi (id_provinsi, nama_provinsi)
     VALUES(NULL, '$nama')";
    $result = $conn->query($sql);

    if ($result) {
        header("location:list_prov.php?alert=Tambah Provinsi berhasil");
    } else {
        header("location:list_prov.php?alert=Tambah Provinsi gagal");
    }
} else {
    header("location:list_prov.php?alert=Tambah Provinsi gagal");
}
