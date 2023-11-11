<?php
error_reporting(0);
$nis	= $_POST['nis'];
$nama_lengkap = $_POST['nama_lengkap'];

//cek apakah nik sudah terdaftar atau belum
$data = file("../infoUser/dataUser.txt", FILE_IGNORE_NEW_LINES);
foreach ($data as $value) {
	$pecah = explode("|", $value);
	if($nis==$pecah['0']){
		$cek= true;
	}
}
if ($cek) { //jika nik sudah terdaftar ?>
	<script type="text/javascript">
		alert(' Maaf NIS Yang Anda Gunakan Sudah Terdaftar');
		window.location.assign('../loginPage.php');
	</script>
<?php
	} else { //jika data tidak ditemukan
	//buat format penyimpanan ke txt config
	$format = "\n$nis|$nama_lengkap";

	//buka dulu file config.txt
	$file = fopen('../infoUser/dataUser.txt', 'a');
	fwrite($file, $format);

	//tutup file
	fclose($file);
?>
	<script type="text/javascript">
		alert('Register Berhasil');
		window.location.assign('../loginPage.php');
	</script>
<?php }