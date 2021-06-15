<?php
$servername = "localhost";
$username = "root";
$password = "2sr0ry";
// $database = "dbname=data_andri"; // kita comment dulu, karena kita belum buat databsaenya
$database = ""; // kita kososngkan dulu nama database nya

$conn = null;
try {
    // dibawah ini cara membuat koneksi dengan database mysql
    // supaya kita dapat menggunakan mysql untuk menyimpan, mengubah
    // dan mengakses data yang telah kita simpan
    $conn = new PDO("mysql:host=$servername;$database", $username, $password);
    // fromat koneksi : mysql:host=localhost;dbname=nama_database, username, password

    // ini adalah pengaturan penanganan ERROR pada PDO, gausah pusing buat aja kayak gini hehe
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connected successfully<br>";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage(). "<br>";
}

echo "<a href='/'>kembali</a>";
