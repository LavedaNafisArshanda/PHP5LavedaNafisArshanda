<?php
echo "KELILING TRAPESIUM<br> ";
print "<hr width=90% size=5 color=pink align='left'>";

    @$atas = $_GET['atas'];
    @$bawah = $_GET['bawah'];
    @$depan= $_GET['depan'];
    @$belakang= $_GET['belakang'];
    @$keliling = ($atas + $bawah + $depan + $belakang );
    function eksekusi($keliling){
        echo "Keliling TRAPESIUM = ".$keliling." cm<sup>2</sup><br/>";
    }
    
?>

<html>
<head><title>KELILING TRAPESIUM</title></head>
<body>
<form method="GET">
            A   (atas)   === 
            <input type="text" name="atas" value="<?php echo $atas; ?>"/> cm<br/><br>
            B (bawah) =
            <input type="text" name="bawah" value="<?php echo $bawah; ?>"/> cm<br/><br>
            C (depan) =
            <input type="text" name="depan" value="<?php echo $depan; ?>"/> cm<br/><br>
            D (belakang) =
            <input type="text" name="belakang" value="<?php echo $belakang; ?>"/> cm<br/><br>
            
            <input type="submit" name="submit" value="HITUNG"/><br/><br/>
            <?php
                eksekusi($keliling);
            ?>
        </form>
</body>
</html>