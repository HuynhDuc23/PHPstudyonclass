<?php
     include'connect.php';
     $sql= "select * from hoadon1";
     global $ketqua ;
     $ketqua = mysqli_connect($connect , $sql);
     if($ketqua)
     {
        $row =  mysqli_fetch_array($ketqua);
        while($row = mysqli_fetch_array($ketqua))
        {
            printf("Ket qua", $row[0],$row[1]);
        }
     }

?>