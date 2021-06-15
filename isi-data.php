<?php
include_once "koneksi-db-andri.php";
try {
    // perintah mengisi (menyimpan) data ke tabel kawan_main_ff
    $sql = "INSERT INTO kawan_main_ff (nama, kelas, tgl_lahir) VALUES ('Aldo', '1', '2005-06-01')";

    // eksekusi perintah diatas, simpan status berhasil atau tidak dalam variabel $hasil
    $hasil = $conn->query($sql);

    // cek status apakah proses penyimpanan data berhasil atau tidak
    if ($hasil) {
        echo "Berhasil meyimpan data ke tabel kawan main ff<br>";
    } else {
        echo "Gagal meyimpan data ke tabel kawan main ff<br>";
    }

} catch (PDOException $exception) {
    echo "error : " . $exception->getMessage() . "<br>";
}
echo "<a href='/'>kembali</a>";
