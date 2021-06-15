<?php
include_once "koneksi.php";

// perintah untuk membuat sebuah tabel bernama kawan_main_ff
$sql = "CREATE TABLE kawan_main_ff (
  id INT(6) AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(30) NOT NULL,
  kelas VARCHAR(30) NOT NULL,
  tgl_lahir date NULL
  )";

// eksekusi perintah diatas, simpan status berhasil atau tidak dalam variabel $hasil
$hasil = $conn->exec($sql);

// cek status pembuatan tabel , apakah berhasil atau tidak
if ($hasil) {
    echo "Berhasil membuat tabel<br>";
} else {
    echo "Gagal membuat tabel<br>";
}
echo "<a href='/'>kembali</a>";
