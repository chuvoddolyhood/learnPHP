<?php
    $a = 3; //global scope
    $b = 5;

    /*
    Bien global khai bao o ngoai thi co the su dung bat ky. 
    Khi o trong ham con thi phai goi "global $var" de su dung
    */
    function plus(){
        global $a;
        $c =10; //local scope
        $a++;
        echo "a= " . $a . "<br/>";
        echo "c= " . $c . "<br/>";

        echo $GLOBALS['a'];
    }
    
    //Goi global scope
    function sum(){
        global $a, $b;
        $b = $a + $b;
    }

    //binh thuong khi thoat khoi ham con thi bien se bij delete -> them static de save gia tri cu
    function testStatic(){
        // $d = 24;
        static $d = 24;
        echo "d= " . $d . "<br/>";
        $d++;
    }

    plus();
    echo "a= " . $a . "<br/>";
    echo "c= " . $c . "<br/>";
    

    sum();
    echo "$b";

    //local scope
    testStatic();
    testStatic();
    testStatic();

    echo "Tran ", "Nhan ", "Nghia";
    echo "Tran " . "Nhan " . "Nghia";

    print "Tran " . "Nhan " . "Nghia" . ($a + $b);

?>