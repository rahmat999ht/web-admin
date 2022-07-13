<?php
include 'sidebar.php';
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM table_provinsi WHERE id_provinsi='$_GET[id_provinsi]'");
while ($d = mysqli_fetch_array($data)) {
?>

    <body>
        <div class="container">
            <h1 class="text-center">Info Pendakian Gunung</h1>
            <!-- Awal card -->
            <div class="card mt-3">
                <div style="font-family: cursive;" class="card-header bg-primary text-white">
                    Form Update Prov
                </div>
                <div class="card-body">
                    <form method="POST" action="update_prov.php" enctype="multipart/form-data">

                        <!-- <form name="nama_provinsi_form" enctype="multipart/form-data" action="proses.php" method="POST"> -->
                        <div class="form-group">
                            <label for="id_provinsi">ID: <?php echo $d[0]; ?></label>
                            <input type="text" id="id_provinsi" name="id_provinsi" value="<?php echo $d[0]; ?>" style="display:none">
                        </div>

                        <input type="hidden" name="id_provinsi" value="<?php echo $d['id_provinsi']; ?>">
                        <div class="form-group">
                            <label for="nama_provinsi">Nama provinsi :</label><br>
                            <!-- <textarea class="form-control" id="nama_provinsi" placeholder= "Nama_provinsi" ></textarea> -->
                            <input type="text" name="nama_provinsi" class="form-control" id="nama_provinsi" placeholder="Nama provinsi" value="<?= $d['nama_provinsi']; ?>">
                            <!-- <td><input type="text" name="name" value=</?php echo $name;?>></td> -->
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