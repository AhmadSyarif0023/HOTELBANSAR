<?php 
include_once ('koneksi.php');
$username = $_POST['username'];
$email = $_POST['email'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$password = $_POST['password'];
 
mysql_query("INSERT INTO tamu VALUES('','$username','$email','$nama','$alamat','$telepon','$password')");
 
echo "<script>
		alert('Data Berhasil Disimpan');
		window.location.replace('login.php');
		</script>
		";
?>