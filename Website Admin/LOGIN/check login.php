<?php
    require 'login config.php';

    if(isset($_POST['login']))
    {
        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $usertype = test_input($_POST['usertype']);
        $username = test_input($_POST['username']);
        $password = test_input($_POST['password']);

        if(empty($username))
        {
            header("Location: login.html?error= User Name is Required");
        }
        else if(empty($password))
        {
            header("Location: login.html?error= Password is Required");
        }
        else{
            $sql = "SELECT * FROM login WHERE User_Type = '$usertype' AND User_Name = '$username' AND Password = '$password'";
            $query = mysqli_query($con,$sql);

            if(mysqli_num_rows($query) === 1)
            {
                $row = mysqli_fetch_assoc($query);
                
                if($row['password'] === $password && $row['usertype'] === $usertype)
                {
                    $_SESSION['username'] = $row['name'];
                    $_SESSION['usertype'] = $row['usertype'];

                    header("Location:../dashboard/dashboard.html");
                }
                else{
                    echo"<script>alert('incorect password')</script>";
                }
                
            }
        }
    }
    else
    {
        header("Location:login.html");
    }
?>