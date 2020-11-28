<html>
<body>
<table>

    <?php
        $n = 20;

        if($n > 0){
            for($i = 1; $i <= $n; $i++){
                $reponse = $i % 2 == 1 ? "IMPAIR" : "PAIR";
                echo "<tr class='$reponse'><td>$i</td><td>$reponse</td></tr>";
            }
        }else{
            echo "<tr> <td colspan = '2'>Rien à afficher</td></tr>";
        }
    ?>
    
</table>
</body>
</html>