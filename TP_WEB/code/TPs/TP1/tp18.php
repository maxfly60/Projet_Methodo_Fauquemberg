<html>
<body>

<?php

    $serv = $_SERVER;
    echo "<table>";
    foreach ($serv as $key => $info) {
        echo "<tr> <td>$key</td><td>$info</td </tr>";
    }
    echo "</table>";

?> 

</body>
</html>