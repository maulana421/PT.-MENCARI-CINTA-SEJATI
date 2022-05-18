<?php

include('../daf/connection.php');

if (isset($_POST['submit'])) {
    $nip = $_POST['nip'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $alamat = $_POST['alamat'];
    $statement = pg_query($connection, "INSERT INTO pegawai(nip, nama_pegawai, alamat) VALUES('$nip','$nama_pegawai', '$alamat')");
    if ($statement) {   
        $_SESSION['message'] = '<div class="alert alert-success" role="alert">Berhasil Menambahkan Data</div>';
        header("location:../index.php");
    }
    else {
        $_SESSION['message'] = '<div class="alert alert-danger" role="alert">Gagal Menambahkan Data</div>';
        header("location:../index.php");       
    }
}

?>
