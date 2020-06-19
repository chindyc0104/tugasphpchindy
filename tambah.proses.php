<?php
include "db.inc.php";
$kota=$_POST['kota'];
$kelurahan=$_POST['kelurahan'];
$sql = "INSERT INTO penerima(kota,kelurahan) VALUES ('$kota','$kelurahan');";
mysqli_query($conn, $sql);
?>
<script type='text/javascript'>
    alert("Data Berhasil Ditambahkan");
    self.close()
</script>