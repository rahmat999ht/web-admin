<?php
include 'sidebar.php';
include 'koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM table_gunung ORDER BY id_gunung DESC");
?>
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Detail Gunung</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table border-color" id="dataTable" width="100%" cellspacing="0">

                    <?php if (mysqli_num_rows($query) > 0) { ?>
                        <?php
                        $no = 1;
                        $gunung = mysqli_query($conn, 'SELECT * FROM table_gunung WHERE id_gunung = ' . $_GET['id_gunung']);
                        while ($data = mysqli_fetch_array($gunung)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td>
                                        ID Gunung : <BR><?php echo $data['id_gunung'] ?><BR><BR>
                                        Nama Gunung : <BR><?php echo $data['nama'] ?><BR><BR>
                                        Lokasi Gunung : <BR><?php echo $data['lokasi'] ?><BR><BR>
                                        Titik Koordinat : <BR><?php echo $data['lat'] ?>, <?php echo $data['lon'] ?><BR><BR>
                                        Deskripsi : <BR><?php echo $data['deskripsi'] ?><BR><BR>
                                        Jalur Pendakian : <BR><?php echo $data['jalur_pendakian'] ?><BR><BR>
                                        Info Gunung : <BR><?php echo $data['info_gunung'] ?><BR><BR>
                                        Image : <BR><img src="gambar/<?php echo $data['image1'] ?>" width="80" height="60">,
                                        <img src="gambar/<?php echo $data['image2'] ?>" width="80" height="60">,
                                        <img src="gambar/<?php echo $data['image3'] ?>" width="80" height="60">,
                                        <img src="gambar/<?php echo $data['image4'] ?>" width="80" height="60">,
                                        <img src="gambar/<?php echo $data['image5'] ?>" width="80" height="60"></td>
                                        ID Gunung : <BR><?php echo $data['id_provinsi'] ?><BR><BR>

                                </tr>
                            </tbody>
                        <?php $no++;
                        } ?>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?php include 'footer.php' ?>