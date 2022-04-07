<center>
<h2> Data Mahasiswa </h2>
<form method="post" action="simpan.php">
<table>
	<tr>
		<td> NIM </td>
		<td> : </td>
		<td> <input type="text" name="nim" required="required"> </td>
	</tr>
	<tr>
		<td> Nama Mahasiswa </td>
		<td> : </td>
		<td> <input type="text" name="nama" required="required"> </td>
	</tr>
	<tr>
		<td> Alamat Mahasiswa </td>
		<td> : </td>
		<td> <textarea name="alamat" required=required></textarea> </td>
	</tr>
	<tr>
		<td> Program Studi </td>
		<td> : </td>
		<td>
			<select name="prodi" required="required">
				<option></option>
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
				<option></option>
				<option>laki-laki</option>
				<option>Perempuan</option>
			</select>
		</td>
	</tr>
	<tr>
		<td align="center" colspan="3">
			<input type="submit" value="simpan">
			<input type="reset" value="Batal">
		</td>
	</tr>
</table>
<hr color="green">
</form>
<?php
	include "list.php";
?>
</center>