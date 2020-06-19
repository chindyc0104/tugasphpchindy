<html>
<head><title>Edit Data</title></head>
<style>
    table {margin: 20px auto;}
    p {padding: 0; margin: 0;}
    fieldset{width: 300px; margin: 20px auto; text-align: center;}
</style>
<body>
<fieldset>
<legend>Edit Data</legend>
<form method="post" action="includes/edit.proses.php">
<table>
    <tr>
        <td>ID</td>
        <td><input type="text" name="id" value="<?=$_GET['id']?>"> <?=$_GET['id']?></td>
    </tr>
    <tr>
        <td>Kota</td>
        <td><input type="text" name="kota" value="<?=$_GET['kota']?>"></td>
    </tr>
    <tr>
        <td>Kelurahan</td>
        <td><input type="text" name="kelurahan" value="<?=$_GET['kelurahan']?>"></td>
    </tr>
</table>
<input type="submit" name="submit" value="Simpan">
<a href="index.php?kota=SEMUA&kelurahan=NONE&submit=submit"><button type="Button">Batal</button></a>
</form>
</fieldset>
</body>
</html>