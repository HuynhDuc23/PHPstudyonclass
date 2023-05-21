<?php
     include'connect.php';
     $sql= "select * from hoadon";
     $ketqua = mysqli_query($connect , $sql);
     if($ketqua)
     {
        while($row = mysqli_fetch_row($ketqua))
        {
             printf("Ket qua", $row[0],$row[1],$row[3]);
        }
     }

?>