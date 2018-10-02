<form action="prosesregis.php" method="POST" enctype="multipart/form-data">
	<table align="center">
		<tr>
			<td colspan="3" align="center" bgcolor="lightblue"><h2>Isi Data Diri!</h2></td>
		</tr>
		<tr>
			<td>NIM</td>
			<td>:</td>
			<td><input type="text" name="nim" maxlength="10" pattern="\d*"></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td>:</td>
			<td><input type="text" name="nama" maxlength="25"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="Email" name="email" placeholder="example@gmail.com"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin</td>
			<td>:</td>
			<td><input type="radio" name="jeniskelamin" value="Laki Laki"> Laki Laki
				<input type="radio" name="jeniskelamin" value="Perempuan"> Perempuan</td>
		</tr>
		<tr>
			<td>Program Studi</td>
			<td>:</td>
			<td><select name="prodi">
				<option value="D3 MI">D3 MI</option>
				<option value="D3 PH">D3 PH</option>
				<option value="D3 IF">D3 IF</option>
				<option value="D3 TT">D3 TT</option>
				<option value="D3 MP">D3 MP</option>
				<option value="D4 SM">D4 SM</option>
			</select></td>
		</tr>
		<tr>
			<td>Fakultas</td>
			<td>:</td>
			<td><select name="fakultas">
				<option value="FIT">FIT</option>
				<option value="FIK">FIK</option>
				<option value="FRI">FRI</option>
				<option value="FTE">FTE</option>
				<option value="FEB">FEB</option>
				<option value="FKB">FKB</option>
			</select></td>
		</tr>
		<tr>
			<td>Hobi</td>
			<td>:</td>
			<td><input type="checkbox" name="hobi[]" value="Membaca">Membaca<br>
				<input type="checkbox" name="hobi[]" value="Menggambar">Menggambar<br>
				<input type="checkbox" name="hobi[]" value="Menulis">Menulis<br>
				<input type="checkbox" name="hobi[]" value="Nonton">Nonton<br></td>
		</tr>
		<tr>
			<td>Pilih Gambar</td>
			<td>:</td>
			<td><input type="file" name="gambar"></td>
		</tr>
		<tr>
			<td colspan="3"><input type="submit" name="submit" value="Submit"></td>
		</tr>
	</table>
</form>
