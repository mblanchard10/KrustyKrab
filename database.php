<?php
   $dsn = "mysql:host=joecool.highpoint.edu;dbname=CSC3212_S23_mblanchard_db"
   $username = 'mblanchard';
   $password = '1720222';

   try {
      $db = new PDO($dsn, $username, $password);
   }
   catch (PDOException $e){
      $error_message = $e->getMessage();
      include('database_error.php');
      exit();
   }

?>
