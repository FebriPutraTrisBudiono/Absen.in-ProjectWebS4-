<?php
require("koneksi.php");

//read data ke database
$query = mysqli_query($koneksi471, "SELECT * FROM users");
$users    = mysqli_num_rows($query);
$json_response[] = $users;

//read data ke database
$query_jabatan = mysqli_query($koneksi471, "SELECT * FROM jabatans");
$jabatans    = mysqli_num_rows($query_jabatan);
$json_response_jabatan[] = $jabatans;

//read data ke database
$query_jamkerja = mysqli_query($koneksi471, "SELECT * FROM jamkerja");
$jamkerja_start = array();
foreach ($query_jamkerja as $query_jamkerja) :
    $jamkerja_start[] = array(
        'start' => $query_jamkerja['start'],
    );
endforeach;

//read data ke database
$query_jamkerja_finish = mysqli_query($koneksi471, "SELECT * FROM jamkerja");
$jamkerja_finish = array();
foreach ($query_jamkerja_finish as $query_jamkerja_finish) :
    $jamkerja_finish[] = array(
        'finish' => $query_jamkerja_finish['finish'],
    );
endforeach;


echo json_encode(array(
    'users' => $json_response,
    'jabatans' => $json_response_jabatan,
    'jamkerja_start' => $jamkerja_start,
    'jamkerja_finish' => $jamkerja_finish,
));
