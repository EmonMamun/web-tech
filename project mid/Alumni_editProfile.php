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
            <td colspan="2" rowspan="2">
                <fieldset>
                    <legend><b>
                            <h2>EDIT PROFILE</h2>
                        </b></legend>
                    <form method="post" action="">
                        <table border="0" width="100%">
                            <tr>
                                <td>Name</td>
                                <td>: <input type="text" name="name" value="<?php echo $_SESSION['uname']; ?>"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>: <input type="email" name="email" id="" value="<?php echo  $_SESSION['al_email']; ?>"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Gender:</td>
                                <td>:
                                <?php
                    if (!empty($_SESSION['al_gender']))
                    {
                        if ($_SESSION['al_gender'] == "Male"){?>
                            <input type="radio" name="al_gender" value="Male" id="" checked>Male
                            <input type="radio" name="al_gender" value="Female" id="">Female
                            <input type="radio" name="al_gender" value="Other" id="">Other
                        <?php
                        }else if($_SESSION['al_gender'] == "Female"){?>
                            <input type="radio" name="al_gender" value="Male" id="">Male
                            <input type="radio" name="al_gender" value="Female" id="" checked>Female
                            <input type="radio" name="al_gender" value="Other" id="">Other

                        <?php 
                        }else{?>
                        <input type="radio" name="al_gender" value="Male" id="">Male
                        <input type="radio" name="al_gender" value="Female" id="">Female
                        <input type="radio" name="al_gender" value="Other" id="" >Other
                        <?php }
                        }?>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Date of Birth
                                </td>
                                <td>
                                <input type="text" name="al_bdate" id="" value="<?php echo  $_SESSION['al_bdate']; ?>" size="1"> /
                                <input type="text" name="al_bmonth" id="" value="<?php echo $_SESSION['al_bmonth']; ?>" size="1"> /
                                <input type="text" name="al_year" id="" value="<?php echo $_SESSION['al_year']; ?>" size="1"><i> (dd/mm/yy)</i>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td><input type="submit" name="submit" value="Submit"></td>
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