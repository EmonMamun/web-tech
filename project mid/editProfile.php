<?php
session_start();
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
<td colspan="2" rowspan="2">
    <fieldset>
        <legend><b>
                <h2>EDIT PROFILE</h2>
            </b></legend>
        <form method="post" action="">
            <table border="0" width="100%">
                <tr>
                    <td>Name</td>
                    <td>: <input type="text" name="name" value="<?php echo  $_SESSION['uname']; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>: <input type="email" name="email" id="" value="<?php echo  $_SESSION['a_email']; ?>"></td>
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
                    if (!empty($_SESSION['a_gender']))
                    {
                        if ($_SESSION['a_gender'] == "Male"){?>
                            <input type="radio" name="a_gender" value="Male" id="" checked>Male
                            <input type="radio" name="a_gender" value="Female" id="">Female
                        <input type="radio" name="a_gender" value="Other" id="">Other
                        <?php
                        }else if($_SESSION['a_gender'] == "Female"){?>
                            <input type="radio" name="a_gender" value="Male" id="">Male
                            <input type="radio" name="a_gender" value="Female" id="" checked>Female
                            <input type="radio" name="a_gender" value="Other" id="">Other

                        <?php 
                        }else{?>
                        <input type="radio" name="a_gender" value="Male" id="">Male
                        <input type="radio" name="a_gender" value="Female" id="">Female
                        <input type="radio" name="a_gender" value="Other" id="" >Other
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
                        <input type="text" name="a_bdate" id="" value="<?php echo  $_SESSION['a_bdate']; ?>" size="1"> /
                        <input type="text" name="a_bmonth" id="" value="<?php echo $_SESSION['a_bmonth']; ?>" size="1"> /
                        <input type="text" name="a_year" id="" value="<?php echo $_SESSION['a_year']; ?>" size="1"><i> (dd/mm/yy)</i>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td><button id="button">Confirm</button></td>
                </tr>
            </table>
        </form>
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