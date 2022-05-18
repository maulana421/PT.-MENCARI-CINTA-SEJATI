<?php

include('../daf/connection.php');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $nip = $_POST['nip'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $alamat = $_POST['alamat'];
    $sql = pg_query($connection,"UPDATE pegawai SET nip='$nip', nama_pegawai='$nama_pegawai', alamat='$alamat' WHERE id=$id ");
    // $result = pg_affected_rows(pg_query($connection,$sql));
    if($sql) {
        $_SESSION['message'] = '<div class="alert alert-success" role="alert">Berhasil Mengubah Data</div>';
        header("location:../index.php");
    }
    else {
        $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Gagal Mengubah Data</div>';
        header("location:../ubah.php?id=$id");
    }
}

?>
