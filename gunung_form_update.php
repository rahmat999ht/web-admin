<?php
include 'sidebar.php';
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM table_gunung WHERE id_gunung='$_GET[id_gunung]'");
while ($d = mysqli_fetch_array($data)) {
?>

    <body>
        <div class="container">
            <h1 class="text-center">Info Pendakian Gunung</h1>
            <!-- Awal card -->
            <div class="card mt-3">
                <div style="font-family: cursive;" class="card-header bg-primary text-white">
                    Form Info Pendakian Gunung
                </div>
                <div class="card-body">
                    <form method="POST" action="update_gunung.php" enctype="multipart/form-data">

                        <!-- <form name="nama_form" enctype="multipart/form-data" action="proses.php" method="POST"> -->
                        <div class="form-group">
                            <label for="id_gunung">ID: <?php echo $d[0]; ?></label>
                            <input type="text" id="id_gunung" name="id_gunung" value="<?php echo $d[0]; ?>" style="display:none">
                        </div>

                        <input type="hidden" name="id_gunung" value="<?php echo $d['id_gunung']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama Gunung :</label><br>
                            <!-- <textarea class="form-control" id="nama" placeholder= "Nama" ></textarea> -->
                            <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" value="<?= $d['nama']; ?>">
                            <!-- <td><input type="text" name="name" value=</?php echo $name;?>></td> -->
                        </div>
                        <div class="form-group">
                            <label for="lokasi">Lokasi :</label><br>
                            <input type="text" name="lokasi" class="form-control" id="lokasi" placeholder="Lokasi" value="<?= $d['lokasi']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="lat">Latitude :</label><br>
                            <input type="text" name="lat" class="form-control" id="lat" placeholder="Latitude" value="<?= $d['lat']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="lon">Longtitude :</label><br>
                            <input type="text" name="lon" class="form-control" id="lon" placeholder="Longtitude" value="<?= $d['lon']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi :</label><br>
                            <input type="text" name="deskripsi" class="form-control" id="deskripsi" cols="80" rows="auto" placeholder="Deskripsi" value="<?= $d['deskripsi']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="jalur_pendakian">Jalur Pendakian :</label><br>
                            <input type="text" name="jalur_pendakian" class="form-control" id="jalur_pendakian" placeholder="Jalur Pendakian" value="<?= $d['jalur_pendakian']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="info_gunung">Info Gunung :</label><br>
                            <input type="text" name="info_gunung" class="form-control" id="info_gunung" placeholder="Info Gunung" value="<?= $d['info_gunung']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="image1">Image 1 :</label><br>
                            <!-- Upload Gambar: <input type="file" accept="image/*" /><br /> -->
                            <input type="file" accept="gambar/*" name="image1" class="form-control" id="image1" value="<?= $d['image1']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="image2">Image 2 :</label><br>
                            <!-- Upload Gambar: <input type="file" accept="image/*" /><br /> -->
                            <input type="file" accept="gambar/*" name="image2" class="form-control" id="image2" value="<?= $d['image2']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="image3">Image 3 :</label><br>
                            <!-- Upload Gambar: <input type="file" accept="image/*" /><br /> -->
                            <input type="file" accept="gambar/*" name="image3" class="form-control" id="image3" value="<?= $d['image3']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="image4">Image 4 :</label><br>
                            <!-- Upload Gambar: <input type="file" accept="image/*" /><br /> -->
                            <input type="file" accept="gambar/*" name="image4" class="form-control" id="image4" value="<?= $d['image4']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="image5">Image 5 :</label><br>
                            <!-- Upload Gambar: <input type="file" accept="image/*" /><br /> -->
                            <input type="file" accept="gambar/*" name="image5" class="form-control" id="image5" value="<?= $d['image5']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="id_provinsi">ID Provinsi :</label><br>
                            <select name="id_provinsi" id="id_provinsi">
                                <option selected value="">Pilih Provinsi</option>
                                <?php
                                $provinsi = mysqli_query($conn, 'SELECT * FROM table_provinsi');
                                while ($dt = mysqli_fetch_array($provinsi)) {
                                ?>
                                    <option value="<?= $dt['id_provinsi'] ?>"> <?= $dt['nama_provinsi'] ?></option>
                                <?php
                                } ?>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-warning" name="save" value="save">Simpan</button>
                        <!-- <input class="hvr-bubble-float-top" type="submit" name="save" value="save"> -->
                    </form>
                </div>
            </div>
        </div>
        <!-- Akhir Card -->

        <script type="text/javascript" src="jss/bootstrap.min.js"></script>
    </body>
<?php
}
?>
</div>
</div>
</div>

<?php
include 'footer.php';
?>