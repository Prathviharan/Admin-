<?php
    require 'config.php';

    session_start();

    $_SESSION["email"] = "email";

    $sql = "DELETE FROM Employee WHERE Email = 'email'";

    if($con -> query($sql))
    {
        session_unset();
        session_destroy();
    }
    else
    {
        echo"<script> alert('Operation Failed')</script>";
    }

?>
<html>
    <head>
        <title>Delete Details</title>
        <link rel="website icon" type="jpg" href="image/demo.png">
        <link rel="stylesheet" href="css/headpart.css">
        <link rel="stylesheet" href="css/admin reg.css">
    <head>

    <body>
    <div id="main_panel">
            <!------------------------------header---------------------------------->
            <div id="top_panel">
                <header class="header1">
                    <img id="logo1" src="image/demo.png" alt="Logo">
                    <h1 id="site_name">CEYLON SPICES</h1>
                    <a id="profile_link" href="#"><img id="profile_icon" src="image/profile.png" alt="profile icon"></a>
                    <button id="log_in_out">Logout</button>
                
                    <div id="search_sec">
                        <input id="searchbox" type="text" placeholder=" Search...">
                        <button id="search_b">Search</button>
                    </div>
                </header>
                    
            
                    <div id="left_panel">
                        <h3 id="hello">Employee</h3>
                        <div class="prof_nav">
                          <a href="admin reg.html">Add Employee</a>
                          <a href="admin details.php">Employee Details</a>
                          <a href="admin edit.php">Edit Employee</a>
                          <a href="admin delete.php">Delete Employee</a>
                          <br>
                          
                        </div>
            
                    
                    </div>

        <section id="form">
            <form method= "post" action = "admin delete.php">
                <label class= "label-input">Email</label>
                <input type= "text" name="email" placeholder="Type Employee Email">
                <input type="submit" value="Delete" name="btnsubmit" class="reset_btn">
            </form>
        </section>
    
    <?php

        $db = mysqli_select_db($con,'ceylon spicie');

        if(isset($_POST['btnsubmit']))
        {
            $email = $_POST['email'];
            $query = "DELETE FROM employee WHERE email = '$email'";
            $query_run = mysqli_query($con,$query);
            
            if($query_run)
            {
                echo '<script> alert("data delete") </script>';
            }
            else
            {
                echo '<script> alert("data not delete") </script>';
            }
        }
    ?>
    </body>
</html>
