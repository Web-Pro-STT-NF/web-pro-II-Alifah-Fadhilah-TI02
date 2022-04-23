
<?php 
include('koneksi.php');
$koneksi = new database();
 
$action = $_GET['action'];
if($action == "add")
{
	$koneksi->BMI($_POST['nama'],$_POST['tmp_lahir'],$_POST['tgl_lahir'],$_POST['email'],$_POST['gender'],$_POST['berat'],$_POST['tinggi']);
	header('location:data_pasien.php');
}
?>