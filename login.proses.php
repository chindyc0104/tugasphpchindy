<?php include_once "db.inc.php";

$user=$_POST['user'];
$pass=md5($_POST['pass']);
$login=mysqli_query($conn,"SELECT * FROM user WHERE user='$user' AND pass='$pass'");
$jumlah=mysqli_num_rows($login);
$x = mysqli_fetch_array($login);


if($jumlah == 1){
    session_start();
    $_SESSION['user']=$x['user'];
    $_SESSION['pass']=$x['pass'];
    $_SESSION['nama']=$x['nama'];
    
    header("Location:../dashboard.php");
    }
else{
    header("Location:../login.php");
    }

?>
