 <html>
<body>

<h1>Exo 1</h1>
<?php

    $randomize = rand(0, 100);   

    if($randomize % 2 == 0){
        echo "<p> Le nombre " . $randomize . " est pair </p>";
    } else {
        echo "<div> Le nombre " . $randomize . " est impair </div>";
    }

?>

<h1>Exo 2</h1>
<select>
<option>Selection une quantité</option>
<?php
    $s = 2
    $n = 5

    for($i = 1; $i <= $n; $i++){
        $myString = "";
        if($i == $s)
            $myString = " selected";

        echo "<option${myString}>$i</option>";
    }

 ?>	 
 </select>

</body>
</html>

