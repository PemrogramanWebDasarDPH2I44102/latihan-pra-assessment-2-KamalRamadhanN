<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
			Tanggal Datang<input type="date" name="tgl_datang"><br>
			Sasaran<input type="text" name="sasaran"><br>
			Penerima<input type="text" name="penerima"><br>
			IsiPaket<input type="text" name="isipaket">
			Tanggal Ambil<input type="date" name="tgl_ambil">
			<input type="submit" name="submit" value="Create">
		</form>
</body>
</html>

<?php
include'konek.php';
if (isset($_POST['submit'])) {
 	$tgl_datang = $_POST['tgl_datang'];
 	$sasaran = $_POST['sasaran'];
 	$penerima = $_POST['penerima'];
 	$isipaket = $_POST['isipaket'];
 	$tgl_ambil = $_POST['tgl_ambil'];

 	$dt1 = mysqli_query($konek, "INSERT INTO paket VALUES ('$tgl_datang','$sasaran','$penerima',$isipaket,'$tgl_ambil')");

 	if(mysqli_affected_rows($konek)>0){
 		echo "berhasil";
 		header("location:menu.php");
 	}else{
 		echo "gagal";
 	}

 }
?>