<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$tanggal = $_POST['tanggal'];
$nominal = $_POST['nominal'];
$keterangan = $_POST['keterangan'];

// update data ke database
mysqli_query($koneksi,"update pemasukan set nominal='$nominal', keterangan='$keterangan', where tanggal='$tanggal'");

echo"<script>alert('Data Berhasil Diedit')</script>";
echo"<script type='text/javascript'> document.location ='data_pemasukan.php';</script>";

?>