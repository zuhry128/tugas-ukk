<?php
require 'koneksi.php';
$tgl = $_POST['tgl_pengaduan'];
$nik = $_POST['nik'];
$isi = $_POST['isi_laporan'];
$ft = $_FILES['foto']['name'];
$file = $_FILES['foto']['tmp_name'];
$st=0;
move_uploaded_file($file,"foto/".$ft);
$sql=mysqli_query($koneksi,"insert into pengaduan(tgl_pengaduan,nik,isi_laporan,foto,status) values('$tgl','$nik','$isi','$ft','$st')");
if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil Disimpan, Terima Kasih Sudah Menulis Laporan');
		window.location="masyarakat.php";
	</script>
	<?php
}
?>