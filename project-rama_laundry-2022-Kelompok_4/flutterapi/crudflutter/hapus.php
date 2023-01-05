<?php
$conn=new mysqli("localhost","root","","crud_flutter");
$nisn = $_POST["nisn"];

$data= mysqli_query($conn,"delete from siswa where nisn='$nisn' ");
if ($data) {
    echo json_encode([
        'pesan' => 'Sukses']);
    }else {
        echo json_encode([
            'pesan' => 'Gagal']);

    }


?>