<?php
require '../koneksi.php';
$nik=$_GET['nik'];

$sql=mysqli_query($koneksi,"delete from masyarakat where nik='$nik' ");
if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil Dihapus');
		window.location='admin.php?url=lihatmasyarakat';
	</script>
<?php 
} 
?>