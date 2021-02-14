<?php
require '../koneksi.php';
$id=$_GET['id'];

$sql=mysqli_query($koneksi,"delete from petugas where id_petugas='$id' ");
if ($sql)
{
	?>
	<script type="text/javascript">
		alert ('Data Berhasil Dihapus');
		window.location='admin.php?url=lihatpetugas';
	</script>
<?php 
} 
?>