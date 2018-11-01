<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
		<form method="POST">
			Nama<input type="text" name="nama"><br>
			Nip<input type="text" name="nip"><br>
			<input type="submit" name="submit">
		</form>
</body>
</html>

<?php
include'konek.php';
if (isset($_POST['submit'])) {
 	$nama = $_POST['nama'];
 	$nip = $_POST['nip'];

 	$dt = mysqli_query($konek, "SELECT * FROM karyawan WHERE nama='$nama'and nip='$nip'");

 	if(mysqli_num_rows($dt)>0){
 		echo "berhasil";
 		header("location:menu.php");
 	}else{
 		echo "gagal";
 	}
 } 

?>

