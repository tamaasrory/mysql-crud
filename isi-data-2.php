<?php
// memulai transaksi / perintah dengan mysql
$conn->beginTransaction();

// 3 baris kode dibawah ini adalah perintah (statement) yang akan di jalankan
$conn->exec("INSERT INTO kawan_main_ff (nama, kelas, tgl_lahir) VALUES ('John', '3', '2006-07-03')");
$conn->exec("INSERT INTO kawan_main_ff (nama, kelas, tgl_lahir) VALUES ('Mary', '3', '2006-01-03')");
$conn->exec("INSERT INTO kawan_main_ff (nama, kelas, tgl_lahir) VALUES ('Julie', '3', '2006-04-03')");

// meyimpan atau memproses perintah yang telah di jalankan diatas,
// kemudian hasil nya berhasil atau gagal akan disimpan di variabel $hasil
$hasil = $conn->commit();

// periksa apakah berhasil atau gagal
if ($hasil) {
    echo "berhasil menyimpan data<br>";
} else {
    echo "gagal menyimpan data<br>";
}

echo "<a href='/'>kembali</a>";
