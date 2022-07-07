
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
                Form Insert Provinsi
            </div>
            <div class="card-body">
                <form action="tambahdata_prov.php" method="POST"  enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="nama">Nama Prov :</label><br>
                        <input type="text" name="nama_provinsi" class="form-control" id="nama_provinsi" placeholder="Nama Provinsi">
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
