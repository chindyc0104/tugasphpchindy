<html>
<head><title>Dashboard</title></head>
<style>
table {margin: 20px auto;}
fieldset{width: 300px;  margin: 20px auto; text-align: center;}
</style>
<body>

<?php
    session_start();
    if (empty($_SESSION['user']) OR empty($_SESSION['pass']))
    {
    header("Location:login.php");
    } else {
?>

<fieldset>
<legend><h2>Dashboard</h2></legend>
<h4><?php echo date("l, d F Y");?></h4>
<h3>Selamat Datang <?php echo $_SESSION['nama']; ?></h3>
<button onclick = "location.href='home.php'">Daftar Penerima</button>
<button onclick = "location.href='login.php'">Logout</button>
</fieldset>
</body>
</html>

<?php } ?>