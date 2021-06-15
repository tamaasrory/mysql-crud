<?php
include "koneksi.php";

// perintah untuk membuat sebuah database bernama data_andri
$sql = "CREATE DATABASE data_andri";

// eksekusi perintah diatas, simpan status berhasil atau tidak dalam variabel $hasil
$hasil = $conn->exec($sql);

// cek status pembuatan database, apakah berhasil atau tidak
if ($hasil) {
    echo "Berhasil membuat database<br>";
} else {
    echo "Gagal membuat database<br>";
}
echo "<a href='/'>kembali</a>";
