<?php
    require 'config.php';
    session_start();
    
    $_SESSION["email"] = "email";
?>

<html>
    <head>
        <title>Edit Employee Details</title>
        <link rel="stylesheet" href="css/headpart.css">
        <link rel="stylesheet" href="css/admin reg.css">
        <script src="js/admin reg.js"></script>

    </head>

    <?php

        $sql = "SELECT * FROM Employee  WHERE Email = 'email'";

        $result = $con -> query($sql);

        if($result -> num_rows > 0)
        {
            while($row = $result -> fetch_assoc())
            {
                $usertype = $row["usertype"];
                $password = $row["password"];
                $phone_number = $row["phone-number"];
                $address = $row["address"];
            }
        }


    ?>
    <body>
    <div id="main_panel">
            <!------------------------------header---------------------------------->
                    <div id="top_panel">
                        <header class="header1">
            
                            <img id="logo1" src="image/demo.png" alt="Logo">
                            <h1 id="site_name">CEYLON SPICES</h1>
                            <a id="profile_link" href="logout.php"><img id="profile_icon" src="image/profile.png" alt="profile icon"></a>
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
        <form method="post" action="confirm edit.php" enctype="multipart/form-data">
            <h2>Employee Registration</h2>
            <br>
                <p>
                    <p>Mention The Email Address Of Employee</p>
                    <label class="label-input">Email Address</label>
                    <br>
                    <input type="text" name="email" required>
                </p>
                <p>You Cannot Edit Employees Name,Email Address,Date Of Birth And NIC</p>
                <!--profile photo-->
                <div class="container">
                    <label class="label-input">Employee Profile Picture</label>
                    <br><br>
                    <img src="image/profile.png" alt="employee_dp" id="profile_picture">
                    <input type="file" id="file" alt="profile photo" name="photo" accept=".png,.jpg,.jpeg" onchange="profile(event)" required>
                    <label class="pro_label" title="Click here to change photo" for="file" id="Btn">Add Profile Picture</label>
                </div>
                <!--role-->
                <p>
                    <label class="label-input">Employee Position</label>
                    <br>
                    <select title="Select Employee Position" name="usertype" id="user" required class="dropdown" >
                        <option value="" id="Select" disabled selected>Select Position</option>
                        <option value="Customer Manegement">Customer Manegement</option>
                        <option value="Delivery Manegement">Delivery Manegement</option>
                        <option value="Payment Manegement">Payment Manegement</option>
                        <option value="Product Manegement">Product Manegement</option>
                        <option value="Employee Manegement">Employee Manegement</option>
                        <option value="Delivery Person">Delivery Person</option>
                    </select>
                </p>
                <!--password-->
                <p>
                    <label class="label-input">Password</label>
                    <br>
                    <input type="password" name="password" maxlength="8" required  value=<?php $email ?> >
                </p>
                <!--confirm password-->
                <p>
                    <label class="label-input">Confirm Password</label>
                    <br>
                    <input type="password" name="confirm-password" maxlength="8" required  value=<?php $usertype ?> >
                </p>
                <!--phone number-->
                <p>
                    <label class="label-input">Phone Number</label>
                    <br>
                    <input type="number" name="phone-number" placeholder="" autocomplete="off" maxlength="10" required value=<?php $password ?>>
                </p>
                <!--address-->
                <p>
                    <label class="label-input">Address</label>
                    <br>
                    <textarea name="address" placeholder="example-123,Peradeniya Road,Kandy,20000" value=<?php $email ?>></textarea>
                </p>
                
                    
                <!--submit-->
                <input type="submit" class="reset_btn" value="Save Details" name="update">
            </form>
        </div>
    </section>
    </body>

    <?php
        if(isset($_POST["update"]))
        {
            header("Location:confirm edit.php");
        }
    ?>

    </html>

