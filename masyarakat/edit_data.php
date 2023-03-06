<?php 
include '../config/koneksi.php';
session_start();


    $id_pengaduan = $_GET['id'];

    mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan='$id_pengaduan'");
    echo '<script type="text/javascript">alert("Data berhasil dihapus..!")</script>';
    echo '<script type="text/javascript">window.location="index.php"</script>';


?>  