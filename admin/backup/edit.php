<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi - WWW.MALASNGODING.COM</title>
</head>
<body>
 
	<h2>CRUD DATA MAHASISWA - WWW.MALASNGODING.COM</h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA MAHASISWA</h3>
 
	<?php
	require 'koneksi.php';
	$id_costumer = $_GET['id_costumer'];
	$data = mysqli_query($koneksi,"select * from costumer where id_costumer='$id_costumer'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="update.php">
			<table>
				<tr>
					<td>email</td>
					<td><input type="text" name="email_costumer" value="<?php echo $d['email_costumer']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td> <input type="submit" name="update" class="submit" value="update"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>
 
</body>
</html>