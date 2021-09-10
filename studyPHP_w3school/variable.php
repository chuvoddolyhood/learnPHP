<?php
    $var = 2;
    echo "var = $var"  . "<br/>";
    echo $var  . "<br/>";
    var_dump($var);

    $string_name = "Nghia";
    echo "string_name: $string_name"  . "<br/>";
    echo "Name: " . $string_name  . "<br/>";

    //loop
    $var = array(1,2,3,4);
    for($i = 0; $i < 4; $i++){
        echo $var[$i] . "<br/>";
    }
    var_dump($var);
?>