<?php
   // define database related variables
   $database = 'loginsystem';
   $host = 'localhost';
   $user = 'root';
   $pass = 'test';

   // try to conncet to database
   $dbh = new PDO("mysql:dbname={$database};host={$host};port={3306}", $user, $pass);

   if(!$dbh){

      echo "unable to connect to database";
   }
   
?>