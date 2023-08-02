<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$tanggal = $_POST['tanggal'];
$keterangan = $_POST['keterangan'];
$debit = $_POST['debit'];
$kredit = $_POST['kredit'];

// update data ke database
mysqli_query($koneksi,"UPDATE jurnal SET keterangan='$keterangan', debit='$debit', kredit='$kredit' where tanggal='$tanggal'");

echo"<script>alert('Data Berhasil Diedit')</script>";
echo"<script type='text/javascript'> document.location ='jurnal.php';</script>";

?>