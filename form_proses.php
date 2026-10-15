<?php

$nama = $_POST ['nama'];
$kode = $_POST ['kode'];

$koneksi = mysqli_connect ('localhost', 'root', '', 'kodepos');
$sql = "INSERT INTO daerah (nama_daerah, kode) VALUES ('$nama', '$kode')";
$q = mysqli_query ($koneksi, $sql);






// if ($q) {
//     echo "Data berhasil disimpan!";
// } else {
//     echo "Gagal menyimpan data: " . mysqli_error($koneksi);
// }

