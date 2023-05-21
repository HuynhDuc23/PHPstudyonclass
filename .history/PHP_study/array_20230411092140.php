<?php
    // $stuff = array("Hi", "Hello", "Xin Chao", "ZingChao") ;
    //  echo $stuff[0] ;

    $Array = array (
        "2" => "Day la thu 2" ,
        "3" => "Day La thu 3" ,
        "4" => "Day la thu 4" ,
        "5" => "Day la thu 5" ,
        "6" => "Day la thu 6",
        "7" => "Day la thu 7",
    );
    // echo $Array["3"];
    for($index = 0 ; $index < 3; $index++)
    {
        if ($Array[$index]=="Day la thu 6")
        {
            echo "True";
            break ;
        }
    }
?>