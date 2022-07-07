<?php
include 'sidebar.php';
include 'koneksi.php';
$query = mysqli_query($conn, "SELECT * FROM table_gunung ORDER BY id_provinsi DESC");
?>
<div class="container-fluid">

    <!-- Page Heading -->

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tabel Gunung</h1>
        <button type="button" class="btn btn-primary">
            <a href="isi_formulir.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-plus fa-sm"></i> Tambah Data</a>
        </button>
        <?php
        if (isset($_GET['alert'])) {
            if ($_GET['alert'] == 'gagal_ekstensi') {
        ?>
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-warning"></i> Peringatan !</h4>
                    Ekstensi Tidak Diperbolehkan
                </div>
            <?php
            } elseif ($_GET['alert'] == "gagal_ukuran") {
            ?>
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Peringatan !</h4>
                    Ukuran File terlalu Besar
                </div>
            <?php
            } elseif ($_GET['alert'] == "berhasil") {
            ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i> Success</h4>
                    Berhasil Disimpan
                </div>
        <?php
            }
        }
        ?>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Gunung</th>
                            <th>Lokasi Gunung</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <?php if (mysqli_num_rows($query) > 0) { ?>
                        <?php
                        $no = 1;
                        $gunung = mysqli_query($conn, 'SELECT * FROM table_gunung');
                        while ($data = mysqli_fetch_array($gunung)) {
                        ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $data['nama'] ?></td>
                                    <td><?php echo $data['lokasi'] ?></td>
                                    <td align="center"><img src="gambar/<?php echo $data['image1']; ?>" width="80" height="60"></td>
                                    <td>
                                        <a href="info.php?id_gunung=<?php echo $data['id_gunung']; ?>" class="btn btn-info ">Info</a>
                                        <a href="edit.php?id_gunung=<?php echo $data['id_gunung']; ?>" class="btn btn-success ">Edit</a>
                                        <a href="hapus.php?id_gunung=<?php echo $data['id_gunung']; ?>" class="btn btn-danger " role="button" onclick="return confirm ('Yakin Hapus?')">Hapus</a>
                                    </td>
                                </tr>
                            </tbody>
                        <?php
                        } ?>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
<?php include 'footer.php' ?>