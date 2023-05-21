<?php
   $localhost = 'localhost';
   $usename ='root';
   $password ='';
   $database = 'phponline';
   $connect = mysqli_connect( $localhost , $usename , $password , $database ) ;
   if ($connect)
   {
      echo 'Thanh Cong';
   }
   else{
       exit ('error');
   }
?>
