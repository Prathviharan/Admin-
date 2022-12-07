<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "ceylon spicie";

    $con = new mysqli("$hostname","$username","$password","$database");

    if($con -> connect_error)
    {
        die("Connection Unsucessful".$con -> connect_error);
    }
    else
    {
       
    }




?>