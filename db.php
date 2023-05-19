<?php
    $servername = 'localhost';
    $username = 'developer';
    $password = 'mysql@developer';
    $dbname = "filament-invoice";
    $connection = mysqli_connect($servername, $username, $password, $dbname);
      
    // Check connection
    if(!$connection){
        die('Database connection error : ' .mysql_error());
    }
