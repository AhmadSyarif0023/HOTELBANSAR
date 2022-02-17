<?php include_once("header.php");?>

	<div class="container">
	<marquee style="background-color:white;color:red">
		Sistem Informasi Pemesanan Hotel BANSAR - SMKN 1 Banyusari
	</marquee>
	<center>
	<h1>
		REGISTER
	</h1>
	<form action="v_register.php" method="post">
		<table width="300" style="padding-top: 10px">
			<tr>
				<td width="150">Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td>Nama Lengkap</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="alamat"></textarea></td>
			</tr>
			<tr>
				<td>Telepon</td>
				<td><input type="text" name="telepon"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td style="padding: 20px"><a href="login.php">Back</a></td>
				<td><button type="submit" value="simpan">Save</button>
					<button type="reset" value="reset">Reset</button>

				</td>
			</tr>
		</table>
	</form>
	</center>
</div>

<?php include_once("footer.php"); ?>


