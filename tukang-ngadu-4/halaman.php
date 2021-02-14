<?php
if (isset($_GET['url']))
{
	$url=$_GET['url'];

	switch ($url) {
		case 'tulispengaduan';
		include 'tulispengaduan.php';
			# code...
			break;

		case 'lihatlaporan';
		include 'lihatpengaduan.php';
		break;

		case 'detailpengaduan';
		include 'detailpengaduan.php';
		break;

		case 'lihattanggapan';
		include 'lihattanggapan.php';
		break;

	}
}
else
{
	?>
	Selamat Datang Di Aplikasi Pengaduan Masyarakat Yang Dibuat Untuk Melaporkan Pelanggaran Atau Penyimpangan Kejadian-Kejadian Yang Ada Pada Masyarakat <br><br>
	Anda Login Sebagai : <h2><b> <?php echo $_SESSION['nama']; 

}
?>