<?php
    $x = 15 ;
    $y = 12  + (++$x);
    echo $y ;
    $www = 123 ;
    $www1 = ($www % 2) ? "even" : "old";
    echo $www1 ;
    echo get();


    function get()
    {
        echo "hello";
    }
?>