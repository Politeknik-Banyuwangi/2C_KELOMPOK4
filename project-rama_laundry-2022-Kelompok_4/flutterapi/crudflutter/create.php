<?php
$conn=new mysqli("localhost","root","","crud_flutter");
$nisn = $_POST["nisn"];
$nama = $_POST['nama'];
$alamat = $_POST["alamat"];
$paket = $_POST["paket"];
$keterangan = $_POST["keterangan"];
$data= mysqli_query($conn,"insert into siswa set nisn='$nisn', nama='$nama', alamat='$alamat', paket='$paket', keterangan='$keterangan'");
if ($data) {
    echo json_encode([
        'pesan' => 'Sukses']);
    }else {
        echo json_encode([
            'pesan' => 'Gagal']);

    }


?>