<?php
include "koneksi.php";
$username = $_POST['username'];
$password = $_POST['password'];
$check    = mysqli_query($koneksi, "SELECT * FROM `login` WHERE `username` = '$username' AND `password` = '$password'") or die(mysqli_error($koneksi));
if(mysqli_num_rows($check) >= 1){
while($row = mysqli_fetch_array($check)){
session_start();
$_SESSION['nama'] = $row['username'];
?>
<script>alert("Selamat Datang <?= $row['username']; ?> :)");
window.location.href="adminmo/index.php"</script>
<?php
}
}else{
echo '<script>alert("Username atau Password yang anda masukkan salah!");
window.location.href="login.php"</script>';
}
?>