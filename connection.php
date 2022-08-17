<?php 
    $host="localhost";
    $user="root";
    $pass="";
    $db_name="customerdb";


    $con= mysqli_connect($host,$user,$pass,$db_name);

    if(mysqli_connect_error()){
        die("Failed to connect with MySql:".mysqli_connect_error());


    }

?>