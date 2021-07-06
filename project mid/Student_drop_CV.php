<?php
session_start();
?>


<!DOCTYPE html>
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
            <td><img src="file/logo1.png" alt=""></td>
            <td width="600px"> </td>
            <td align="center">Logged in as <a href=""><?php echo $_SESSION['uname']; ?></a> | <a href="logout.php">Logout</a></td>
        </tr>
        <tr>
            <td>
                <b>
                    <h2>Student Account</h2>
                </b>
                <hr>
                <ul>
                <li><a href="Student_dashboard.php">Dashboard</a></li>
                        <li><a href="Student_profile.php">View Profile</a></li>
                        <li><a href="Student_editProfile.php">Edit Profile</a></li>
                        <li><a href="Student_pictureChange.php">Change Profile Picture</a></li>
                        <li><a href="Student_changePass.php">Change Password</a></li>
                        <li><a href="student_register_course.php">Register Courses</a></li>
                        <li><a href="Student_notices.php">Notices</a></li>
                        <li><a href="Student_drop_CV.php">Drop CV</a></li>
                        <!-- <li><a href="Student_view_papers.php">View papers</a></li> -->
                        <li><a href="Student_logout.php">Logout</a></li>
                </ul>
            </td>
            <td colspan="2" rowspan="2">
                <fieldset>
                    <legend><b>
                            <h2>Drop CV</h2>
                        </b></legend>
                    <form method="post" action="">
                        <table border="0" width="100%">
                         
                            <tr>
                                <td><input type="submit" name="submit" value="Drop CV"></td>
                            </tr>
                        </table>
                    </form>
                </fieldset>
            </td>
        </tr>
        <tr>
            <td height="390px"></td>
        </tr>
        <tr>
            <td colspan="3" align="center">Copyright &COPY 2021</td>
        </tr>
    </table>
</body>

</html>