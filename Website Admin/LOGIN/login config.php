<?php

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "ceylon spicie";

    $con = mysqli_connect("$hostname","$username","$password","$database");

    if($con -> connect_error)
    {
        die("Connection Unsucessful".$con -> connect_error);
    }
    else
    {
        echo("Connected Sucessfully");
    }




?>