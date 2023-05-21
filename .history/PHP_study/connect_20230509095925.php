<?php
   $localhost = 'localhost';
   $usename ='root';
   $password ='';
   $database = 'hoadon1';
   $connect = mysqli_connect( $localhost , $usename , $password , $database ) ;
   if ($connect)
   {
      echo 'Thanh Cong';
   }
   else{
       exit ('error');
   }
?>
