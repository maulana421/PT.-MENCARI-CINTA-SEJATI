<?php

include('daf/connection.php');
$query = pg_query($connection, "SELECT * FROM pegawai WHERE id=".$_GET['id']);
while($row = pg_fetch_array($query)){
    $id = $row['id'];
    $nip = $row['nip'];
    $nama_pegawai = $row['nama_pegawai'];
    $alamat = $row['alamat'];
}

$sorter = pg_query($connection, "SELECT * FROM tb_pegawai WHERE nama_pegawai='$nama_pegawai' AND id != $id");

?>

<!DOCTYPE html>
<html lang="en">

<?php include('daf/head.php'); ?>

<body>
    
    <?php include('daf/navbar.php'); ?>

    <div class="container" style="margin-top: 100px;">
        <h3 class="mb-4">Detail</h3>
        <div class="row">
            <div class="col-md-7 mb-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $nip ?></h5>
                        <p class="text-muted">Alamat:<span class="badge badge-secondary text-wrap ml-2"><?php echo $alamat; ?></span></p>
                        <p class="card-text">Nama Pegawai <?php echo strtolower($nama_pegawai); ?></p>
                    </div>
                    <div class="card-footer">
                        <a href="ubah.php?id=<?php echo $id; ?>" class="btn btn-primary mr-3">Ubah</a>
                        <a href="proses/hapus_proses.php?id=<?php echo $id; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin?')">Hapus</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <?php include('daf/js.php'); ?>

</body>
</html>
