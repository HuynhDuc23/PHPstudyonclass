<?php
     include('connect.php');
     $sql= "select * from hoadon1";
     $ketqua = mysqli_connect($connect , $sql);
     if($ketqua)
     {
        while($row = mysql_fecth_row($ketqua))
        {
            printf("Ket qua", $row[0],$row[1]);
        }
     }

?>