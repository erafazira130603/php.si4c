<?php
//include koneksi
include "DB.php";
//buat sql
$sql="INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `jkl`, `agama`, `email`, `pwd`, `create_at`, `updated_at`) VALUES ('1234567', 'era fazira', 'teluk dalam', 'WANITA', '', 'erafazira13@gmail.com', '123456', current_timestamp(), '2024-04-22 05:10:39.000000')";
//proses sql ke database
$q=mysqli_query($koneksi,$sql)or die('SQL Error'());
if($q) {
    echo  "Data berhasil disimpan";
}else{
    echo  "Gagal menyimpan data!";
}
?>