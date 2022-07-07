<?php
include 'koneksi.php';
// $id = $_POST['id_gunung'];
if (isset($_POST['simpan'])) {

    $nama = $_POST['nama'];
    $lokasi = $_POST['lokasi'];
    $lat = $_POST['lat'];
    $lon = $_POST['lon'];
    $deskripsi = $_POST['deskripsi'];
    $jalur_pendakian = $_POST['jalur_pendakian'];
    $info_gunung = $_POST['info_gunung'];

    $rand = rand();
    $ekstensi =  array('png', 'jpg', 'jpeg', 'gif');
    $filenameimage1 = $_FILES['image1']['name'];
    $ukuranimage1 = $_FILES['image1']['size'];
    $ext1 = pathinfo($filenameimage1, PATHINFO_EXTENSION);
    $filenameimage2 = $_FILES['image2']['name'];
    $ukuranimage2 = $_FILES['image2']['size'];
    $ext2 = pathinfo($filenameimage2, PATHINFO_EXTENSION);
    $filenameimage3 = $_FILES['image3']['name'];
    $ukuranimage3 = $_FILES['image3']['size'];
    $ext3 = pathinfo($filenameimage3, PATHINFO_EXTENSION);
    $filenameimage4 = $_FILES['image4']['name'];
    $ukuranimage4 = $_FILES['image4']['size'];
    $ext4 = pathinfo($filenameimage4, PATHINFO_EXTENSION);
    $filenameimage5 = $_FILES['image5']['name'];
    $ukuranimage5 = $_FILES['image5']['size'];
    $ext5 = pathinfo($filenameimage5, PATHINFO_EXTENSION);

    $provinsi = $_POST['id_provinsi'];


    if ($ukuranimage1 || $ukuranimage2 || $ukuranimage3 || $ukuranimage4 || $ukuranimage5 < 2044070) {
        $xx1 = $rand . '_' . $filenameimage1;
        $xx2 = $rand . '_' . $filenameimage2;
        $xx3 = $rand . '_' . $filenameimage3;
        $xx4 = $rand . '_' . $filenameimage4;
        $xx5 = $rand . '_' . $filenameimage5;
        move_uploaded_file($_FILES['image1']['tmp_name'], 'gambar/' . $rand . '_' . $filenameimage1);
        move_uploaded_file($_FILES['image2']['tmp_name'], 'gambar/' . $rand . '_' . $filenameimage2);
        move_uploaded_file($_FILES['image3']['tmp_name'], 'gambar/' . $rand . '_' . $filenameimage3);
        move_uploaded_file($_FILES['image4']['tmp_name'], 'gambar/' . $rand . '_' . $filenameimage4);
        move_uploaded_file($_FILES['image5']['tmp_name'], 'gambar/' . $rand . '_' . $filenameimage5);
        // var_dump($nama, $lokasi, $lat, $lon, $deskripsi, $jalur_pendakian, $info_gunung, $xx1, $xx2, $xx3, $xx4, $xx5, $provinsi);
        // die;
        $sql = "INSERT INTO table_gunung (id_gunung, nama, lokasi, lat, lon, deskripsi, jalur_pendakian, info_gunung, image1, image2, image3, image4, image5, id_provinsi)
     VALUES(NULL, '$nama', '$lokasi', '$lat', '$lon', '$deskripsi', '$jalur_pendakian', '$info_gunung', '$xx1', '$xx2', '$xx3', '$xx4', '$xx5', '$provinsi')";
        $result = $conn->query($sql);
        // var_dump($result);die;

        if ($result) {
            // return $result;
            header("location:index.php?alert=berhasil");
        } else {
            // return $result;
            header("location:index.php?alert=upload gagal");
        }
    } else {
        header("location:index.php?alert=gagal_ukuran");
    }
}
