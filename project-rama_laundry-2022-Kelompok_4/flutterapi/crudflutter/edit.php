<?php
$conn=new mysqli("localhost","root","","crud_flutter");
$id = $_POST["id"];
$nisn = $_POST["nisn"];
$nama = $_POST["nama"];
$alamat = $_POST["alamat"];
$paket = $_POST["paket"];
$keterangan = $_POST["keterangan"];
$data= mysqli_query($conn,"update siswa set nisn='$nisn', nama='$nama', alamat='$alamat', paket='$paket', keterangan='$keterangan' where id='$id' ");
if ($data) {
    echo json_encode([
        'pesan' => 'Sukses']);
    }else {
        echo json_encode([
            'pesan' => 'Gagal']);

    }


?>