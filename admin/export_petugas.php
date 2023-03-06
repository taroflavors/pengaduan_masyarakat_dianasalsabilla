<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data petugas.xls");

?>

<center>
    <h3>Laporan data petugas</h3>
</center>

<table class="table table-striped">
    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA</th>
            <th>USERNAME</th>
            <th>TELP</th>
            <th>LEVEL</th>
        </tr>  
    <thead>     
    <tbody>
        <?php 
            include '../config/koneksi.php';
            $no = 1;
            $query = mysqli_query($koneksi, "SELECT * FROM petugas");
            while($data = mysqli_fetch_array($query)) { ?>

                       
            <tr>         
                <td><?php echo $no++; ?></td>
                <td><?php echo $data['nama_petugas'] ?></td>
                <td><?php echo $data['username'] ?></td>
                <td><?php echo $data['telp'] ?></td>
                <td><?php echo $data['level'] ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>    