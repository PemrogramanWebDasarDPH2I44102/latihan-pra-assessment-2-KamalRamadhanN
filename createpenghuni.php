<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
			Nama<input type="text" name="nama"><br>
			<td>Unit</td>
			<select name="unit">
				<option value="HandPhone">HandPhone</option>
				<option value="HandPhone1">HandPhone1</option>
				<option value="HandPhone2">HandPhone2</option>
				<option value="HandPhone3">HandPhone3</option>
				<option value="HandPhone4">HandPhone4</option>
				<option value="HandPhone5">HandPhone5</option>
			</select><br>
			No_Ktp<input type="text" name="no_ktp">
			<input type="submit" name="submit" value="Create">
		</form>
</body>
</html>

<?php
include'konek.php';
if (isset($_POST['submit'])) {
 	$nama = $_POST['nama'];
 	$unit = $_POST['unit'];
 	$no_ktp = $_POST['noktp']; 

 	$dt1 = mysqli_query($konek, "INSERT INTO penghuni VALUES ('$nama','$unit','$no_ktp')");

 	if(mysqli_num_rows($dt1)>0){
 		echo "berhasil";
 		header("location:menu.php");
 	}else{
 		echo "gagal";
 	}

 }
?>