<?php
    require 'config.php';


    $pass = $_POST["password"];
    $con_pass = $_POST["confirm-password"];

    if($pass == $con_pass)
    {
        $file = addslashes(file_get_contents($_FILES["photo"]["tmp_name"]));
        $first_name = $_POST["fname"];
        $last_name = $_POST["lname"];
        $email = $_POST["email"];
        $usertype = $_POST["usertype"];
        $password = $_POST["password"];
        $dob = $_POST["dob"];
        $phone_number = $_POST["phone-number"];
        $nic = $_POST["nic"];
        $gender = $_POST["gender"];
        $address = $_POST["address"];

        $sql = "INSERT INTO Employee(Emp_Profile,First_Name,Last_Name,Email,Usertype,Emp_Password,Date_Of_Birth,Phone_Number,NIC,Gender,Emp_Address)
            VALUES('$file','$first_name','$last_name','$email','$usertype','$password','$dob','$phone_number','$nic','$gender','$address')";

        if($con -> query($sql))
        {
            header("Location:../LOGIN/login.html");
        }
        else{
            echo "Failed";
        }

        $con -> close();
    }
    else
    {
        echo "<script>alert('failed')</script>";
        header("Location:admin reg.html");
    }

?>
