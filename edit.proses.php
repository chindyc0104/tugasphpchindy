<?php
include "db.inc.php";

$id=$_POST['id'];
$kota=$_POST['kota'];
$kelurahan=$_POST['kelurahan'];

$sql = "UPDATE penerima set kota = '$kota',kelurahan = '$kelurahan' WHERE id_penerima = '$id'";
mysqli_query($conn, $sql);
header("Location:http://localhost/tugasphp/?kota=SEMUA&kelurahan=NONE&submit=submit");
?>
