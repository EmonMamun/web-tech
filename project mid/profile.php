<?php
session_start();
?>

<?php
include('header.php');
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home --Welcome--</title>
</head>

<body>
    <table border="1" width="100%">
        <tr>
            <td><img src="file/logo.png" alt=""></td>
            <td width="600px"> </td>
            <td align="center">Logged in as <a href=""><?php echo $_SESSION['uname']; ?></a> | <a href="logout.php">Logout</a></td>
        </tr>
        <tr>
            <td> -->
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
<td colspan="2" rowspan="2">
    <fieldset>
        <legend><b>
                <h2>PROFILE</h2>
            </b></legend>
        <table border="0" width="100%">
            <tr>
                <td>
                    Name : <?php echo  $_SESSION['a_name']; ?>
                </td>
                <td rowspan=8 align="center">
                    <img src="file/user.png" height="200px" weidth="200px" alt=""><br>
                    <a href="pictureChange.php">change picture</a>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    Email : <?php echo  $_SESSION['a_email']; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    Gender : <?php echo  $_SESSION['a_gender'];; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    Date of Birth : <?php
                                    echo  $_SESSION['a_bdate'] . "/";
                                    echo  $_SESSION['a_bmonth'] . "/";
                                    echo  $_SESSION['a_year'];
                                    ?>
                </td>

            </tr>

            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    ID : <?php echo  $_SESSION['a_id'];; ?>
                </td>
            </tr>
            <tr>
                <td>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="editProfile.php">Edit Profile</a>
                </td>

            </tr>
        </table>
    </fieldset>
</td>
</tr>
<tr>
    <td height="390px">

        <!-- </td>
        </tr>
        <tr>
            <td colspan="3" align="center">Copyright &COPY 2021</td>
        </tr>
    </table>
</body>

</html> -->


        <?php
        include('footer.php');
        ?>