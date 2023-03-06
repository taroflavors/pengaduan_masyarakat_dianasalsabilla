<div class="row mt-3">
    <div class="col-md-4 offset md-4">
        <div class="card">
            <div class="card-header">
                    REGISTRASI
            </div>
            <div class="card-body">
                <form  action="" method="POST">
                 <div class="mb-3-center">
                    <label  class="form-label">NIK</label>
                    <input type="number" class="form-control" name="nik" placeholder="Masukkan NIK" required>
                </div>
                <div class="mb-3-center">
                    <label  class="form-label">Nama lengkap</label>
                    <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Lengkap" required>
                </div>
                <div class="mb-3-center">
                    <label  class="form-label">Username</label>
                    <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
                </div>
                <div class="mb-3-center">
                    <label  class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                </div>
                <div class="mb-3-center">
                    <label  class="form-label">No.Telp</label>
                    <input type="number" class="form-control" name="telp" placeholder="Masukkan No.Telp" required>
                </div>  
            </div>
            <div class="card-footer">
                <button type="submit" name="kirim" class="btn btn-primary">DAFTAR</button>
                <a href="index.php?page=login" class="m-3">Sudah punya akun? silakan login</a>
            </div>
            </form>
        <div>
    </div>
</div>


<?php 
include 'config/koneksi.php';
if (isset($_POST['kirim'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $telp = $_POST['telp'];
    $level = 'masyarakat';
    
    // if (strlen($nik) == 16 ) {
        if (strlen($telp) >= 12 && strlen($telp) < 14) {
            $query = mysqli_query($koneksi, "INSERT INTO masyarakat VALUES ('$nik','$nama','$username','$password','$telp')");
            
            if ($query) {
                header('location:index.php?=login');
            }
        } else {
            echo " <script>
                alert('No Telpon harus sesuai!');
                window.location='index.php?page=registrasi';
            </script>
            ";
        }
    // } else {
    //     echo " <script>
    //         alert('NIK harus 16 digit!');
    //         window.location='index.php?page=registrasi';
    //     </script>
    //     ";
    // }
}
?>