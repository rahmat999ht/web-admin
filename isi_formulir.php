
<?php
include 'sidebar.php';
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Info Pendakian Gunung</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Info Pendakian Gunung</h1>
        <!-- Awal card -->
        <div class="card mt-3">
            <div style="font-family: cursive;" class="card-header bg-primary text-white">
                Form Info Pendakian Gunung
            </div>
            <div class="card-body">
                <form action="tambahdata.php" method="POST"  enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Nama Gunung :</label><br>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="lokasi">Lokasi :</label><br>
                        <input type="text" name="lokasi" class="form-control" id="lokasi" placeholder="Lokasi">
                    </div>
                    <div class="form-group">
                        <label for="lat">Latitude :</label><br>
                        <input type="text" name="lat" class="form-control" id="lat" placeholder="Latitude">
                    </div>
                    <div class="form-group">
                        <label for="lon">Longitude :</label>
                        <input type="text" name="lon" class="form-control" id="lon" placeholder="Longitude">
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi :</label><br>
                        <textarea name="deskripsi" class="form-control" id="deskripsi" cols="80" rows="5" placeholder="Deskripsi"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="jalur_pendakian">Jalur Pendakian :</label><br>
                        <input type="text" name="jalur_pendakian" class="form-control" id="jalur_pendakian" placeholder="Jalur Pendakian">
                    </div>
                    <div class="form-group">
                        <label for="info_gunung">Info Gunung :</label><br>
                        <input type="text" name="info_gunung" class="form-control" id="info_gunung" placeholder="Info Gunung">
                    </div>
                    <div class="form-group">
                        <label for="image1">Image 1 :</label><br>
                        <input type="file" accept="image/*" name="image1" class="form-control" id="image1">
                    </div>
                    <div class="form-group">
                        <label for="image2">Image 2 :</label><br>
                        <input type="file" accept="image/*" name="image2" class="form-control" id="image2">
                    </div>
                    <div class="form-group">
                        <label for="image3">Image 3 :</label><br>
                        <input type="file" accept="image/*" name="image3" class="form-control" id="image3">
                    </div>
                    <div class="form-group">
                        <label for="image4">Image 4 :</label><br>
                        <input type="file" accept="image/*" name="image4" class="form-control" id="image4">
                    </div>
                    <div class="form-group">
                        <label for="image5">Image 5 :</label><br>
                        <input type="file" accept="image/*" name="image5" class="form-control" id="image5">
                    </div>
                    <div class="form-group">
                        <label for="id_provinsi">ID Provinsi :</label><br>
                        <select name="id_provinsi" id="id_provinsi">
                            <option selected value="">Pilih Provinsi</option>
                            <?php
                            $provinsi = mysqli_query($conn, 'SELECT * FROM table_provinsi');
                            while ($data = mysqli_fetch_array($provinsi)) {
                        ?>
                        <option value="<?=$data['id_provinsi']?>"><?=$data['nama_provinsi']?></option> 
                         <?php
                        } ?>
                        </select>
                    </div>
                    <input type="submit" value="Daftar" class="btn btn-success" name="simpan"></input>

                </form>
            </div>
        </div>
    </div>
    <!-- Akhir Card -->

    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>
