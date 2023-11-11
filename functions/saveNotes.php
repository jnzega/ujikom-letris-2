<?php
session_start();
$nis	        = $_SESSION['nis'];
$nama_lengkap	= $_SESSION['nama_lengkap'];
$tanggal        = $_POST['tanggal'];
$jam	        = $_POST['jam'];
$lokasi	        = $_POST['lokasi'];
$pkl	        = $_POST['pkl'];

$format = "\n$nis|$nama_lengkap|$tanggal|$jam|$lokasi|$pkl";

$file = fopen('../infoUser/catatanUser.txt', 'a');
fwrite($file, $format);

fclose($file);

?>
<script type="text/javascript">
	alert('Catatan Berhasil Disimpan');
	window.location.assign('../index.php');
</script>