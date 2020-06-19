<?php
    include_once "includes/db.inc.php";
    include_once "hapus.php";  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Penerima Bantuan</title>
</head>
<style>
    table {margin: 20px auto;}
    p {padding: 0; margin: 0;}
    fieldset{width: 300px;  margin: 20px auto; text-align: center;}
    .output tr:nth-child(even){background-color: #f2f2f2};
    
</style>
<body>
    <fieldset>
        <legend>Daftar Penerima Bantuan</legend>
        <form>
        <table>
            
            <tr>
                <td><p>Kota</p></td>
                <td><p>Kelurahan</p></td>
            </tr>
            <tr>
                <td style="padding:0 20px;">
                    <select name="kota" style="width: 100px;" id="kota">
                        <option value="SEMUA">Semua</option>
                        <option value="Bandung">Bandung</option>
						<option value="Sragen">Sragen</option>
						<option value="Semarang">Semarang</option>
						<option value="Yogyakarta">Yogyakarta</option>
                        <?php
                        function optionKota($result){
                            while ($data = mysqli_fetch_assoc($result)) {
                                $optionKota = $data["kota"];
                                echo "<option value=$optionKota>" . "$optionKota" . "</option>";
                            } 
                        }
                        $sql = "SELECT kota FROM penerima group BY kota ORDER BY id_penerima;";
                        $result = mysqli_query($conn, $sql);
                        optionKota($result);                        
                        ?>
                    </select>   
                </td>
                <td style="padding:0 20px;">
                    <select name="kelurahan" style="width: 100px;" id="kelurahan">
                        <option value="NONE">Semua</option>
                        <option value="Sukarasa">Sukarasa</option>
                        <option value="Banaran">Banaran</option>
						<option value="Sukarasa">Jetis</option>
						<option value="Sukarasa">Tugu</option>
                        <option value="Banaran">Tegalrejo</option>
                    </select>
                    <script type="text/javascript">
                        document.getElementById('kota').value = "<?php echo $_GET['kota'];?>";
                        document.getElementById('kelurahan').value = "<?php echo $_GET['kelurahan'];?>";
                    </script>
                </td>
            </tr>
            <tr>
                <td colspan="2" style="height:50px">
                    <button style="width: 250px;" type="submit" name="submit" value="submit">Cari</button>
                </td>
            </tr> 
        </table>
        </form>   
    </fieldset>
    <fieldset>  
    <form method="post" action="">
        <table class="output">
            <tr>
                <th style="width:25px;"></th>
                <th style="width:25px;">ID</th>
                <th style="width:100px;">Kota</th>
                <th style="width:100px;">Kelurahan</th>
                
            </tr>
            <?php
                            
                function Semua($result){
                    while ($data = mysqli_fetch_assoc($result)) {
                        $id = $data["id_kota"];
                        $kota = $data["kota"];
                        $kel = $data["kelurahan"];
  
                        echo 
                        "<tr>".
                        "<td>" . "<input type='checkbox' value='$id' name='delete[]'>" . "</td>" .
                        "<td>" . $id . "</td>".
                        "<td>" . $kota . "</td>".
                        "<td>" . $kel . "</td>".
                        "<td>" . "<a href='edit.php?id=$id&kota=$kota&kelurahan=$kel' class='edit_data'>Edit</a>" . 
                        "</tr>";
                    }                    
                }
                if (isset($_GET['submit'])){
                    $kota = $_GET['kota'];
                    $kelurahan = $_GET['kelurahan']; 
                    
                    if (($kota == "NONE" or $kota == "SEMUA") && $kelurahan != "NONE" ) {
                        $sql = "SELECT * FROM penerima WHERE kelurahan LIKE '$kelurahan%';";
                            $result = mysqli_query($conn, $sql);
                            Semua($result);
                        }
                    elseif ($kota != "NONE" && $kelurahan != "NONE") {
                        $sql = "SELECT * FROM penerima WHERE kota LIKE '$kota' and kelurahan LIKE '$kelurahan%' ;";
                            $result =mysqli_query($conn, $sql);
                            Semua($result);     
                        }  
                    elseif ($kota != "NONE") {
                        switch ($kota) {
                            case "NONE":
                                echo "Pilih Data";
                                break;
                            case "SEMUA":
                                $sql = "SELECT * FROM penerima;";
                                $result = mysqli_query($conn, $sql);
                                Semua($result);
                                break; 
                            case "$kota":
                                $sql = "SELECT * FROM penerima WHERE kota LIKE '$kota';";
                                $result = mysqli_query($conn, $sql);
                                Semua($result);
                            break;          
                            default:
                                echo "ERROR" ;
                            break;
                        }
                    }      
                }
            ?>
        </table>
        <table>
            <tr>
                <td><button id="mybtn" onclick ="popupWindow('tambah.php', 'test', window, 500, 300)">Tambah</button></td>
                <td><input type="submit" value="Hapus" name="button_delete"></td>
            </tr>
            <script>
            var btn = document.getElementById("mybtn")
            function popupWindow(url, title, win, w, h) {
                const y = win.top.outerHeight / 2 + win.top.screenY - ( h / 2);
                const x = win.top.outerWidth / 2 + win.top.screenX - ( w / 2);
                return win.open(url, title, `toolbar=0, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width=${w}, height=${h}, top=${y}, left=${x}`);
                }
            </script>
        </table>
        </form>
        
    </fieldset>
    
</body>
</html>