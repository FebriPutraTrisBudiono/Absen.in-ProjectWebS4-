<?php
require("koneksi.php");

//read data ke database
$query = mysqli_query($koneksi471, "SELECT * FROM users");
$data = array();
foreach ($query as $query) :
    $data[] = array(
        'name' => $query['name'],
        'jabatan' => $query['jabatan'],
        'no_telepon' => $query['no_telepon'],
        'alamat' => $query['alamat'],
    );
endforeach;
echo json_encode(array(
    'data' => $data
));
