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
                            <h2>Offer Job</h2>
                        </b></legend>
                    <form method="post" action="">
                        <table border="0" width="100%">
                        <td colspan="2" rowspan="2">
                          <tr> 
                                    <label for="Job Vaccency-1">Job Vaccency-1</label><br>
                                    <form action="/html/tags/html_form_tag_action.cfm" method="post">
                                    <textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;"></textarea>
                                    <br>
                                    <label for="Job Vaccency-2">Job Vaccency-2</label><br>
                                    <form action="/html/tags/html_form_tag_action.cfm" method="post">
                                    <textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;"></textarea>
                                    <br>
                                    <label for="Job Vaccency-3">Job Vaccency-3</label><br>
                                    <form action="/html/tags/html_form_tag_action.cfm" method="post">
                                    <textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;"></textarea>
                                    <br>
                                    <label for="Job Vaccency-4">Job Vaccency-4</label><br>
                                    <form action="/html/tags/html_form_tag_action.cfm" method="post">
                                    <textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;"></textarea>
                                    <br>
                                    <label for="Job Vaccency-5">Job Vaccency-5</label><br>
                                    <form action="/html/tags/html_form_tag_action.cfm" method="post">
                                    <textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;"></textarea>
                                    <br>
                                    <label for="Job Vaccency-6">Job Vaccency-6</label><br>
                                    <form action="/html/tags/html_form_tag_action.cfm" method="post">
                                    <textarea name="comments" id="comments" style="font-family:sans-serif;font-size:1.2em;"></textarea>
                              </form>
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