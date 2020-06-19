<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerima Bantuan</title>
</head>
<style>
table {margin: 20px auto;}
fieldset{width: 300px;  margin: 20px auto; text-align: center;}
</style>
<body>
    <fieldset>
    <legend>Pendataan Penerima Bantuan</legend>
    <form method="post" action="includes/login.proses.php">
    <table>
    <tr>
        <td style="text-align:left">User</td>
        <td><input type="text" name="user"><br /></td>
    </tr>
    <tr>
        <td style="text-align:left">Password</td>
        <td><input type="password" name="pass"><br /></td>
    </tr>
    <tr>
        <td colspan ="2"><input type="submit" value="Login"></td>
    </tr>       
    </table>
    </fieldset>
</form>
</body>
</html>