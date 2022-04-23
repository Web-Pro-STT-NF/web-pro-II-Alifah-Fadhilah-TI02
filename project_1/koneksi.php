<?php 
class database{
 
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "project1";
	var $koneksi = "";
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
 
	function Pasien()
	{
		$data = mysqli_query($this->koneksi,"select * from data_pasien");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function BMI($nama,$tmp_lahir,$tgl_lahir,$email,$gender,$berat,$tinggi)
	{
		mysqli_query($this->koneksi,"insert into data_pasien values ('',NOW(),'$nama','$tmp_lahir','$tgl_lahir','$email','$gender','$berat','$tinggi')");
	}
}
?>