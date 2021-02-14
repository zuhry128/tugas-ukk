<?php
if (isset($_GET['url']))
{
	$url=$_GET['url'];

	switch ($url) 
	{

		case 'verifikasipengaduan';
		include 'verifikasipengaduan.php';
		break;

		case 'detailpengaduan';
		include 'detailpengaduan.php';
		break;

		case 'tanggapan';
		include 'tanggapan.php';
		break;

		case 'lihatpetugas';
		include 'lihatpetugas.php';
		break;

		case 'tambahpetugas';
		include 'tambahpetugas.php';
		break;

		case 'editpetugas';
		include 'editpetugas.php';
		break;

		case 'lihatmasyarakat';
		include 'lihatmasyarakat.php';
		break;

		case 'previewpetugas';
		include 'previewpetugas.php';
		break;

		case 'previewmasyarakat';
		include 'previewmasyarakat.php';
		break;

	}
}
else
{
	?>
	
	Selamat Datang Di Aplikasi Pengaduan Masyarakat Yang Dibuat Untuk Melaporkan Pelanggaran Atau Penyimpangan Kejadian-Kejadian Yang Ada Pada Masyarakat <br><br>
	Anda Login Sebagai : <h2><b> <?php echo $_SESSION['nama'];

	require '../koneksi.php';
	$sql = mysqli_query($koneksi,"select * from pengaduan where status='proses'");
	if ($cek=mysqli_num_rows($sql))
	?>
	<br>
	<br>
	<div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Laporan Pengaduan : </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">Ada <?php echo $cek; ?> Laporan Dari Masyarakat</div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-comments fa-4x text-gray-300"></i>
                      <span class="badge badge-danger badge-counter"><?php echo $cek; ?></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

<?php
}
?>