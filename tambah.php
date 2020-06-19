
<html>
<head><title>Tambah Data</title></head>
<style>
    table {margin: 20px auto;}
    p {padding: 0; margin: 0;}
    fieldset{width: 300px; margin: 20px auto; text-align: center;}
</style>
<body>
<fieldset>
<legend>Tambah Data</legend>
<form method="post" action="includes/tambah.proses.php">
<table>
<tr>
        <td>Kota</td>
        <td><input type="text" name="kota"></td>
    </tr>
    <tr>
        <td>Kelurahan</td>
        <td><input type="text" name="kelurahan"></td>
    </tr>
</table>
<button type="submit" name="submit" value="submit">Simpan</button>
<button type="Button" onClick="self.close()">Batal</button>
</form>
</fieldset>
</body>
</html>