<?php 


$server   = 'localhost';
$username = 'root';
$password = '';
$db_name  = "school";

        $connection = mysqli_connect($server , $username , $password , $db_name);
        if(!$connection){
            die ('connection Filed');
        }
        

        