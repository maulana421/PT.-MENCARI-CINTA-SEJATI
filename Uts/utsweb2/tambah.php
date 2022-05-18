<?php 

include('daf/connection.php'); 

?>

<!DOCTYPE html>
<html>

    <?php include('daf/head.php'); ?>

    <body>
        <?php include('daf/navbar.php'); ?>

        <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
            <div class="pt-5">
                <h3 class="text-center"><b>Tambah Pegawai</b></h3>
                <?php if(!empty($_SESSION['message'])){
                    echo $_SESSION['message'];
                    $_SESSION['message'] = null;
                } ?>
            </div>
            <div class="card mt-5">
                <form action="proses/tambah_proses.php" method="POST">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="nip">NIP</label>
                            <input type="text" class="form-control" id="nip" name="nip" placeholder="Masukan NIP" required autocomplete="off">
                        </div>
                        <div class="form-group">
                            <label for="penulis">Nama Pegawai</label>
                            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" placeholder="Masukan Nama Pegawai" required>
                        </div>
                        <div class="form-group">
                            <label for="stok">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat" required>
                        </div>
                    <div class="mt-5 text-right">
                        <button class="btn btn-secondary mr-3" type="button" onclick="history.back()">Batal</button>
                        <input type="submit" name="submit" value="Simpan" onclick="return confirm('Apakah anda yakin?')" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>

        <?php include('daf/js.php'); ?>

    </body>
</html>