<?php 
if(isset($_POST['button_delete'])){

    if(isset($_POST['delete'])){
        foreach($_POST['delete'] as $deleteid){
        
        $sql = "DELETE FROM penerima WHERE id_kota='$deleteid';";
        mysqli_query($conn, $sql);
        echo "<script>alert('Data Berhasil Dihapus!');</script>";
        }
    }    
}
?>
