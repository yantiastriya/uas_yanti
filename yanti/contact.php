<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>

</head>
<body>
<script language="javascript">
<!--
var nama = prompt ("siapa nama anda", "masukan nama anda");
document.write("hai, "+ nama);
//-->
</script>
	<center>
	<h1>Contact</h1></center>
	<hr/>
	<nav>
				<a href="index.php">Home</a>
				<a href="photo.php">Motret</a>
				<a href="contact.php">Contact Us</a>
				<a href="https://www.instagram.com/yantiastriya/?hl=en">Instagram</a>
				<a href="login.php">Login</a>
	</nav>

	<hr style="border-style: solid; border-width: 4px; border-color: rgb(229, 82, 82);">
<form action="" method="post">
	<label>Nama</label>
	<input type="text" name="nama" /><br/><br>
	<label>Email</label>
	<input type="text" name="Email"/><br/><br>
	<label>Phone</label>
	<input type="varchar" name="Phone"/><br/><br>
	<label>Alamat</label>
	<textarea name="alamat" cols="20" rows="3"></textarea><br/><br>
		<label>Jenis Kelamin</label><input type="radio" name="kelamin" value="L" />Laki-laki <input type="radio"name="kelamin" value="P" /> Perempuan<br /><br>
		<input type="submit" value="Submit"/>
</form>
<div id="footer">
		&copy;Copyright By YantiAstriya
		</div>
</body>
</html>