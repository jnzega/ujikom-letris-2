<?php
$nis = $_POST['nis'];
$nama_lengkap = $_POST['nama_lengkap'];
$format = "$nis|$nama_lengkap";
$file = file('../infoUser/dataUser.txt', FILE_IGNORE_NEW_LINES);
if (in_array($format, $file)) { //jika data ditemukan
	session_start();
	$_SESSION['nis'] = $nis;
	$_SESSION['nama_lengkap'] = $nama_lengkap;
	header("Location:../index.php");
} else { //jika data tidak ditemukan ?>
	<script type="text/javascript"> window
	alert('Maaf Kombinasi NIS dan Nama Lengkap Salah');
	window.location.assign('../loginPage.php');
</script>
<?php }