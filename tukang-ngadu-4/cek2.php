<?php
require 'koneksi.php';
$user=$_POST['username'];
$pass=$_POST['password'];
$sql=mysqli_query($koneksi,"select * from petugas where username='$user' and password='$pass' ");
$cek=mysqli_num_rows($sql);

	if ($cek>0) //jika ketemu maka
	{
		$data=mysqli_fetch_array($sql);
		if ($data['level']=="admin")
		{
		session_start();
		$_SESSION['id_petugas']=$data['id_petugas'];
		$_SESSION['user']=$user;
		$_SESSION['nama']=$data['nama_petugas'];
		$_SESSION['level']=$data['level'];

		header('location:admin/admin.php');
		}
		else if ($data['level']=="petugas")
		{
		session_start();
		$_SESSION['user']=$user;
		$_SESSION['nama']=$data['nama_petugas'];
		$_SESSION['level']=$data['level'];

		header('location:petugas/petugas.php');
		}
	}
	else 
	{
		?>
		<script type="text/javascript">
		alert ('Username dan Password Tidak Di Temukan');
		window.location="index2.php";
		</script>
<?php
	}
	?>