<?php
session_start();
if (isset($_SESSION['flag'])) {

?>

    <?php
    include('header.php');
    ?>
    
    <b>
    <h2>Admin Account</h2>
    </b>
    <hr>
    <ul>
        <li><a href="dashboard.php">Dashboard</a></li>
        <li><a href="profile.php">View Profile</a></li>
        <li><a href="editProfile.php">Edit Profile</a></li>
        <li><a href="pictureChange.php">Change Profile Picture</a></li>
        <li><a href="changePass.php">Change Password</a></li>
        <li><a href="searchUser.php">Search Other users</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
    </td>
    <td colspan="2" rowspan="2"><b>
            <h1 style="text-align: center">Welcome 
            
                                 <?php

                                echo  $_SESSION["uname"];
                                 
                                 
                                 ?> </h1>
        </b></td>
    </tr>
    <tr>
        <td height="390px">

            <?php
            include('footer.php');
            
            ?>

        <?php
    } else {
        header('location: login.php');
    }
        ?>