<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$id_karyawan = $_POST['id_karyawan'];
$nama_karyawan = $_POST['nama_karyawan'];
$status = $_POST['status'];
$jabatan = $_POST['jabatan'];
$upah = $_POST['upah'];

// update data ke database
mysqli_query($koneksi,"UPDATE karyawan SET nama_karyawan='$nama_karyawan', status='$status', jabatan='$jabatan', upah='$upah' where id_karyawan='$id_karyawan'");

echo"<script>alert('Data Berhasil Diedit')</script>";
echo"<script type='text/javascript'> document.location ='data_karyawan.php';</script>";

?>