<?php
session_start();
if (isset($_SESSION['flag'])) 
{

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
                <td align="center">Logged in as <a href="profile.php"><?php echo $_SESSION['uname'] ?></a> | <a href="logout.php">Logout</a></td>
            </tr>
            <tr>
                <td>
                    <b>
                        <h2>Alumni Account</h2>
                    </b>
                    <hr>
                     <ul>
                        <li><a href="Alumni_dashboard.php">Dashboard</a></li>
                        <li><a href="Alumni_profile.php">View Profile</a></li>
                        <li><a href="Alumni_editProfile.php">Edit Profile</a></li>
                        <li><a href="Alumni_pictureChange.php">Change Profile Picture</a></li>
                        <li><a href="Alumni_changePass.php">Change Password</a></li>
                        <li><a href="Alumni_offer_course.php">Offer Courses</a></li>
                        <li><a href="Alumni_offer_job.php">Offer Jobs</a></li>
                        <li><a href="Alumni_upload_papers.php">Upload Papers</a></li>
                        <li><a href="Alumni_logout.php">Logout</a></li>
                    </ul>
                </td>
                <td colspan="2" rowspan="2"><b>
                        <h1>Welcome <?php echo $_SESSION['uname'] ?></h1>
                    </b></td>
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

    <?php
} else {
    header('location: login.php');
}
?>