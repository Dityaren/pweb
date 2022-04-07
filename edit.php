<center>
<h2> Rubah Data Mahasiswa </h2>
<?php
	include "koneksi.php";
	$a=$_REQUEST['id'];
	$hasil=mysqli_query($konek, "SELECT * FROM `mahasiswa` WHERE nim='$a' limit 1");
	while($row=mysqli_fetch_array($hasil)){
?>
<form method="post" action="update.php">
<table>
	<tr>
		<td> NIM </td>
		<td> : </td>
		<td><?php echo"$row[0]"; ?><input type="hidden" name="nim" required"required" <?php echo"value='$row[0]'"; ?>> </td>
	</tr>
	<tr>
		<td>Nama Mahasiswa </td>
		<td> : </td>
		<td> <input type="text" name="nama" required="required" <?php echo"value='$row[1]'"; ?>> </td>
	</tr>
	<tr>
		<td> Alamat Mahasiswa </td>
		<td> : </td>
		<td> <textarea name="alamat" required=required><?php echo"$row[2]" ?></textarea> </td>
	</tr>
	<tr>
		<td> Program Studi </td>
		<td> : </td>
		<td>
			<select name="prodi" required="required">
				<?php echo"<option>$row[3]</option>";?>
				<option>Pendidikan Teknik Informatika dan komputer</option>
				<option>Pendidikan Teknik elektro </option>
				<option>Teknik Elektro</option>
			</select>
		</td>
	</tr>
	<tr>
		<td> Jenis Kelamin </td>
		<td> : </td>
		<td>
			<select name= "jeniskelamin" required="required">
				<?php echo"<option>$row[4]</option>";?>
				<option>laki-laki</option>
				<option>Perempuan</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center" colspan="3">
			<input type="submit" value="Update">
		</td>
	</tr>
</table>
<hr color="green">
</form>
<?php
	}
	include "list.php";
?>
</center>