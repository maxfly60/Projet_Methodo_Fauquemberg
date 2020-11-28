<html>
<body>
<?php
    $tab = array(
        "trie" => "PHP \"avancé\"",
        "vignette" => "Z:\\news\\image\\oreilly.png",
        "edition" => "O'Reilly",
        "prix" => "15 \$US"
    )
?>
<?php
    echo "<table>";
    foreach($tab as $key => $value){
        echo "<tr><td>$key</td><td>$value</td></tr>";
    }
    echo "</table>";
?>
</body>
</html>