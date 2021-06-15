<?php
$servername = "localhost";
$username = "root";
$password = "2sr0ry";
$database = "data_andri";

$conn = null;
try {
    // dibawah ini cara membuat koneksi dengan database mysql
    // supaya kita dapat menggunakan mysql untuk menyimpan, mengubah
    // dan mengakses data yang telah kita simpan
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // fromat koneksi : mysql:host=localhost;dbname=nama_database, username, password

    // ini adalah pengaturan penanganan ERROR pada PDO, gausah pusing buat aja kayak gini hehe
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<a href='/'>kembali</a><br>";
    echo "Koneksi database terhubung<br>";
} catch(PDOException $e) {
    echo "Koneksi database gagal berikut persan kesalahan : <br>" . $e->getMessage(). "<br>";
}

