
<?php
// require 'var1.php';
//     $str1 = "Dai Hoc";
//     $str2 = " Su Pham";
//     echo $str1;
//     echo $color ;
//     echo '<br>';
//     echo $str2 ;
//     echo $fruit ;
    // $str3 = $str1." ".$str2 ;
    // $x = "15" + 27 ;
    // $x = "15" + 27 ;
    // $x+=3 ;
    // $x = $x >> 2 ;
    // $y = 30 ;
    // $mga = $x > $y ? "$x > $y" : "$y > $x";
    // echo $mga ;
    // echo "<br>";
    // echo $str3 ;
    print_r($_GET);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <label for="getinformatin">
            <input type="text" name="" id="getinformatin">
            <input type="submit" value="OK" >
        </label>
    </form>
    <?php 
    print_r($_GET);
    ?>
</body>
</html>