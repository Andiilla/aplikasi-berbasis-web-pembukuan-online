<?php
include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$nama= $_POST['nama'];
$check    = mysqli_query($koneksi, "INSERT INTO `login` VALUES('$username', '$password','$nama')"); 
if($check){
    ?>
	<script>alert("Registrasi Berhasil!");
	window.location.href="index.php"</script>
	<?php
}
?>