<?php include_once("header.php");?>

	<div class="container">
	<marquee style="background-color:white;color:red">
		Sistem Informasi Pemesanan Hotel BANSAR - SMKN 1 Banyusari
	</marquee>
	<center>
	<h1>
		LOGIN
	</h1>
	<form action="verifikasi.php" method="post">
		<table width="250" style="padding-top: 10px">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td style="padding: 25px"></td>
				<td><button type="submit" value="login">Login</button>
					<button type="reset" value="reset">Reset</button></td>
			</tr>
			<tr>
				<td></td>
				<td><a href="register.php">Daftar baru</a></td>
			</tr>
		</table>
	</form>
	</center>
	</div>

<?php include_once("footer.php"); ?>


