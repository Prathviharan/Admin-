<?php
    require 'config.php';

    session_start();

    $_SESSION["email"] = $_POST["email"];

    $email = $_SESSION["email"];

    global $con;

    $query = "SELECT * FROM Employee WHERE Email = '$email'";
    $query_run = mysqli_query($con,$query);

    if(mysqli_fetch_array($query_run) > 0)
    {
        header("Location:admin details.php");
    }
    else
    {
        echo"<script> alert('Incorrect Employee Email')</script>";
        header("Location:../LOGIN/login.html");
    }