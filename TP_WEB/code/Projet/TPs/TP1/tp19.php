<html>
<body>

<?php

    $user=$_SERVER['HTTP_USER_AGENT'];

    if(stristr($user,'Macintosh')){$machine="Mac";}
    elseif(stristr($user,'Win')){$machine="Windows";}

    else{$machine="Linux";}

    if(stristr($user,'Chrome')){$navigateur="Chrome";}
    elseif(stristr($user,'Firefox')){$navigateur="Firefox";}
    elseif(stristr($user,'Safari')){$navigateur="Safari";}
    elseif(stristr($user,'MSIE')){$navigateur="Explorer";}
    elseif(stristr($user,'Opera')){$navigateur="Opera";}

    echo "Vous etes sur ";
    echo "<img src= ../../images/$machine.jpg » />";
    echo "et votre navigateur est ";
    echo "<img src= ../../images/$navigateur.jpg » />";

?> 

</body>
</html>