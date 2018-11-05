<h1>CRUD OOP PHP</h1>
<h3>Tambah Data User</h3>

<form action="proses.php?aksi=tambah" method="post">

<table>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>Usia</td>
		<td><input type="text" name="usia"></td>
	</tr>
	<tr>
		<td>Genre Film</td>
		<td>
			<input type="checkbox" name="genre[]" value="Horror">Horror <br>
			<input type="checkbox" name="genre[]" value="Action">Action <br>
			<input type="checkbox" name="genre[]" value="Anime">Anime  <br>
			<input type="checkbox" name="genre[]" value="Thriller">Thriller <br>
			<input type="checkbox" name="genre[]" value="Animasi">Animasi <br>
		</td>
	</tr>
	<tr>
		<td>Tujuan Wisata</td>
		<td>
		<input type="checkbox" name="Tempatwisata]" value="Bali">Bali <br>
		<input type="checkbox" name="Tempatwisata[]" value="Raja Ampat">Raja Ampat <br>
		<input type="checkbox" name="Tempatwisata[]" value="Pulau Derawan">Pulau Derawan <br>
		<input type="checkbox" name="Tempatwisata[]" value="Bangka Belitung">Bangka Belitung <br>
		<input type="checkbox" name="Tempatwisata[]" value="Labuan Bajo">Labuan Bajo <br>
		</td>
	</tr>
	<tr>
		<td></td>
		<td><input type="submit" value="Simpan"></td>
	</tr>
</table>
</form>
