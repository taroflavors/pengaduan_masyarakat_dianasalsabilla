<?php
include '../config/koneksi.php';



//if (isset($_GET['id'])) {
   // $id_pengaduan = $_GET['id'];
    //mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan='$id_pengaduan'");
    //echo '<script type="text/javascript">alert("Data berhasil dihapus..!")</script>';
    //echo '<script type="text/javascript">window.location="index.php?page=pengaduan"</script>';
//}
if (isset($_POST['hapus_pengaduan'])) {
    $id_pengaduan = $_POST['id_pengaduan'];
    $query = mysqli_query($koneksi, "DELETE FROM pengaduan WHERE id_pengaduan='$id_pengaduan' ");
    if ($query) {
        echo "<script>
        alert('Data berhasil dihapus');
        window.location='index.php?page=pengaduan';
        </script>";
    } else {
        echo "<script>
        alert('Data gagal dihapus');
        window.location='index.php?page=pengaduan';
        </script>";
    }
   
}
    
    
    if (isset($_POST['hapus_tanggapan'])) {
        $id_tanggapan = $_POST['id_tanggapan'];
        $query = mysqli_query($koneksi, "DELETE FROM tanggapan WHERE id_tanggapan='$id_tanggapan'");
        if ($query) {
            echo "<script>
            alert('Data berhasil dihapus');
            window.location='index.php?page=tanggapan';
            </script>";
        }
       
    }

    if (isset($_POST['hapus_petugas'])) {
        $id_petugas = $_POST['id_petugas'];
        $query = mysqli_query($koneksi, "DELETE FROM petugas WHERE id_petugas='$id_petugas' ");
        if ($query) {
            echo "<script>
            alert('Data berhasil dihapus');
            window.location='index.php?page=petugas';
            </script>";
        }
       
    }

    if (isset($_POST['hapus_masyarakat'])) {
        $nik = $_POST['nik'];
        $query = mysqli_query($koneksi, "DELETE FROM masyarakat WHERE nik='$nik' ");
        if ($query) {
            echo "<script>
            alert('Data berhasil dihapus');
            window.location='index.php?page=masyarakat';
            </script>";
        }
       
    }
?>