<?php
require("koneksi.php");

// $id = $_GET['id'];

//read data ke database
$query = mysqli_query($koneksi471, "SELECT * FROM absensi ORDER BY id DESC");
$data = array();
foreach ($query as $query) :
    $data[] = array(
        'tgl' => $query['tgl'],
        'waktu' => $query['waktu'],
        'keterangan' => $query['keterangan'],
        'id_user' => $query['id_user'],
        'longlat' => $query['longlat'],
    );
endforeach;
echo json_encode(array(
    'data' => $data
));
