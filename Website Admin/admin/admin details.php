<html>
    <head>
        <title>Employee Details</title>
        <link rel="website icon" type="png" href="image/demo.png">
        <link rel="stylesheet" href="css/headpart.css">
        <link rel="stylesheet" href="css/admin reg.css">
        <link rel="stylesheet" href="css/table.css">
    </head>
<?php
    require 'config.php';

    session_start();
    
    $link = mysqli_connect( "localhost", "root", "" ) or die( mysqli_error() );
    mysqli_select_db( $link, "ceylon spicie" ) or die( mysqli_error() );

    $query = "SELECT * FROM Employee" or die( mysqli_error() );
    $result = mysqli_query( $link, $query );
?>
    <body>
        <div id="main_panel">
            <!------------------------------header---------------------------------->
                    <div id="top_panel">
                        <header class="header1">
                            <img id="logo1" src="image/demo.png" alt="Logo">
                            <h1 id="site_name">CEYLON SPICES</h1>
                            <a id="profile_link" href="#">
                                <img id="profile_icon" src="image/profile.png" alt="profile icon"></a>
                            <button id="log_in_out">Logout</button>
    
                            <div id="search_sec">
                                <input id="searchbox" type="text" placeholder=" Search...">
                                <button id="search_b">Search</button>
                            </div>
                        </header>
                    
            
                    <div id="left_panel">
                        <div class="prof_nav">
                          <a href="admin reg.html">Add Employee</a>
                          <a href="admin details.php">Employee Details</a>
                          <a href="admin edit.php">Edit Employee</a>
                          <a href="admin delete.php">Delete Employee</a>
                          <br>
                    </div>

                        
                    </div>
    
            <table>
                <tr>
                    <th>Employee Profile</th>
                    <th>First-Name</th>
                    <th>Last-Name</th>
                    <th>Email</th>
                    <th>Date-Of-Birth</th>
                    <th>Email</th>
                    <th>Phone-Number</th>
                    <th>NIC</th>
                    <th>Gender</th>
                    <th>Address</th>
                </tr>
                    <tr>
                        <td>  
                            <?php
                                $con = mysqli_connect("localhost","root","");
                                $db = mysqli_select_db($con,'ceylon spicie') ;
                                
                                $query = "SELECT * FROM employee";
                                $query_run = mysqli_query($con,$query);

                                while($row = mysqli_fetch_array($query_run))
                                {
                                    ?>
                                        <tr>
                                            <td><?php echo '<img src="data:image;base64,'.base64_encode($row['Emp_Profile']).'"alt = "Employee Profile Picture" style="width: 100px; height: 100px;">'; ?>  </td>
                                            <td><?php echo $row['First_Name']; ?> </td>
                                            <td><?php echo $row['Last_Name']; ?> </td>
                                            <td><?php echo $row['Email']; ?> </td>
                                            <td><?php echo $row['Usertype']; ?> </td>
                                            <td><?php echo $row['Date_Of_Birth']; ?> </td>
                                            <td><?php echo $row['Phone_Number']; ?> </td>
                                            <td><?php echo $row['NIC']; ?> </td>
                                            <td><?php echo $row['Gender']; ?> </td>
                                            <td><?php echo $row['Emp_Address']; ?> </td>
                                        </tr>

                                    <?php
                                }

                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>

        <!--edit-->
        <button class="reset_btn" name = "edit" type="submit" value="Edit Details">
            <a class="link1" href="admin edit.php">Edit Details</a> 
        </button>
                    
        <!--delete-->
        <button class="reset_btn" name = "delete" type="submit" value="Delete Details">
            <a class="link1" href="admin delete.php">Delete Details</a> 
        </button>