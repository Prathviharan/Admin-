<html lang="en">
<head>
    <title>Forgot Passwod</title>
    <link rel="stylesheet" href="forgot password.css">
</head>
<body>
    <div class="container-center">
        <center>
                <img src = "" width="30%" >

            <h2>Don't Worry!</h2>
            <form action="">
                <h4>Just provide your email<br>and we can do the rest</h4>
                    <formgroup>
                        <input type="text" name="email"/>
                            <label for="email"><br>Email</label>
                            <span>enter your email</span>
                    </formgroup>
                <button id="btnsubmit">Submit</button>
            </form>
            <p>Did you remember? <a href="login.html">Log In</a></p>
        </center>
    </div>
</body>
</html>

<?php 
    require 'config.php';

    session_start();

    if(isset($_POST["btnsubmit"]))
    {
        $_SESSION["email"] = $_POST["email"];
    }

?>