<?php
include_once('koneksi.php');

	$username= $_POST['username'];
	$password= $_POST['password'];

	$login = mysql_query("SELECT * FROM tamu WHERE username='$username' AND password='$password'");
	$cek = mysql_num_rows($login);

	if($cek>0){
            header('location:user/index.php');
	}
	else{
		echo "<script>
		alert('Username atau Password SALAH');
		history.back(self);
		</script>
		";
	}

?>