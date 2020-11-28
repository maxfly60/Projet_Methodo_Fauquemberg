<html>
<body>

<?php

    $mail = "mail@gmail.com";
    $pos = strpos($mail, '@');
    if($pos !== FALSE){
        echo substr($mail,0,$pos)."<br>";
        echo substr($mail,$pos+1);
    }else{
        echo "Adresse invalide";
    }

?>

</body>
</html>