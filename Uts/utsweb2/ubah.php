<?php

include('daf/connection.php');

$query = pg_query($connection, "SELECT * FROM pegawai WHERE id=".$_GET['id']);
while($row = pg_fetch_array($query)){
    $id = $row['id'];
    $nip = $row['nip'];
    $nama_pegawai = $row['nama_pegawai'];
    $alamat = $row['alamat'];
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include('daf/head.php') ?>

<body>
    
    <?php include('daf/navbar.php') ?>

    <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
        <h3 class="mb-4">Ubah Detail Pegawai</h3>
        <?php if(!empty($_SESSION['message'])){
            echo $_SESSION['message'];
            echo '<meta http-equiv="refresh" content="3;url=ubah.php">';
            $_SESSION['message'] = null;
        } ?>
        <div class="card mt-5">
            <form action="proses/ubah_proses.php" method="POST">
                <div class="card-body">
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $id; ?>">
                        <input type="text" class="form-control" id="nip" name="nip" value="<?php echo $nip; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="nama_pegawai">Pegawai</label>
                        <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="<?php echo $nama_pegawai; ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control mb-5" id="alamat" name="alamat" value="<?php echo $alamat; ?>" required>
                    </div>
                    <div class="text-right">
                        <button class="btn btn-secondary mr-3" type="button" onclick="history.back()">Batal</button>
                        <input type="submit" name="submit" class="btn btn-primary" value="Simpan" onclick="return confirm('Apakah Anda Yakin?')">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php include('daf/js.php') ?>

</body>
</html>
