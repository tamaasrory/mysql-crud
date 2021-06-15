<?php
include_once "koneksi.php";
try {
    // perintah untuk membuat sebuah database bernama data_andri
    $sql = "CREATE DATABASE data_andri";

    // eksekusi perintah diatas, simpan status berhasil atau tidak dalam variabel $hasil
    $hasil = $conn->query($sql);

    // cek status pembuatan database, apakah berhasil atau tidak
    if ($hasil) {
        echo "Berhasil membuat database<br>";
    } else {
        echo "Gagal membuat database<br>";
    }

} catch (PDOException $exception) {
    echo "error : " . $exception->getMessage() . "<br>";
}
echo "<a href='/'>kembali</a>";
