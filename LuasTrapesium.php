<?php
echo "LUAS TRAPESIUM <br> ";
print "<hr width=90% size=5 color=pink align='left'>";

    @$atas = $_GET['atas'];
    @$bawah = $_GET['bawah'];
    @$tinggi = $_GET['tinggi'];
    @$luas = (($atas + $bawah)*$tinggi)/2;
    function eksekusi($luas){
        echo "Luas TRAPESIUM = ".$luas." cm<sup>2</sup><br/>";
    }
?>

<!DOCTYPE html>
<hmtl>
    <head>
        <title>LUAS TRAPESIUM</title>
    </head>

    <body>
        <form method="GET">
            A   (atas)   === 
            <input type="text" name="atas" value="<?php echo $atas; ?>"/> cm<br/><br>
            B (bawah) =
            <input type="text" name="bawah" value="<?php echo $bawah; ?>"/> cm<br/><br>
            t (tinggi) ==
            <input type="text" name="tinggi" value="<?php echo $tinggi; ?>"/> cm<br/><br>
            <input type="submit" name="submit" value="HITUNG"/><br/><br/>
            <?php
    echo "Diketahui<br>";
    echo "Sisi Atas=  $atas cm<br>";
    echo "Sisi Bawah= $bawah cm<br>";
    echo "Tinggi =  $tinggi cm<br>";
    echo "<br>";
    echo "Maka: <br>";
               eksekusi($luas);
            ?>
        </form>
    </body>
</hmtl>