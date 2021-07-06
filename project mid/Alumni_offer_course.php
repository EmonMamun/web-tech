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
                            <h2>Offer Courses</h2>
                            <br>
                        </b></legend>
                    <form method="post" action="">
                        <table border="0" width="100%">
                            <tr>
                                 <td colspan="2" rowspan="2">
                                   <form method="post" action="">
                                      <table border="0" width="100%">
                                      </table>
                                    </form>
                                </td>    
                           </tr>
                           <tr>
                            
                            <input type="checkbox" id= "English-1" name="English-1" value="English-1">
                            <label for="English-1"> English-1</label><br>
                            <input type="checkbox" id="English-2" name="English-2" value="English-2">
                            <label for="English-2"> English-2</label><br>
                            <input type="checkbox" id="Business Communication" name="Business Communication" value="Business Communication">
                            <label for="Business Communication">Business Communication</label><br>
                            <input type="checkbox" id="Math-1" name="Math-1" value="Math-1">
                            <label for="Math-1">Math-1</label><br>
                            <input type="checkbox" id="Math-2" name="Math-2" value="Math-2">
                            <label for="Math-2">Math-2</label><br>
                            <input type="checkbox" id="Accounting" name="Accounting" value="Accounting">
                            <label for="Accounting">Accounting</label><br>
                            <input type="checkbox" id="Economics" name="Economics" value="Economics">
                            <label for="Economics">Economics</label><br>
                            <input type="checkbox" id="Bangladesh Global Studies" name="Bangladesh Global Studies" value="Bangladesh Global Studies">
                            <label for="Bangladesh Global Studies">Bangladesh Global Studies</label><br>
                            <input type="checkbox" id="Management Information System" name="Management Information System" value="Management Information System">
                            <label for="Management Information System">Management Information System</label><br>
    
                            </tr>
                            <br>
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