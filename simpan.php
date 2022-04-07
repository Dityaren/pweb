<?php
	$a=$_POST['nim'];
	$a1=$_POST['nama'];
	$a2=$_POST['alamat'];
	$a3=$_POST['prodi'];
	$a4=$_POST['jeniskelamin'];

	include "koneksi.php";
	
	mysqli_query($konek, "INSERT INTO `mahasiswa` VALUES ('$a','$a1','$a2','$a3','$a4')");
	
	header("location:index.php");
?>