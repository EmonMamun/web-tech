<?php
session_start();
if (isset($_POST['submit'])) {

    $uname=$_POST["uname"];
    $pass=$_POST["pass"];
    $type= "Alumni";
    $type2= "Student";
    $type3= "Admin";

    $conn= mysqli_connect("localhost","root","","user");

    $sql="select * from user_reg where Username='{$uname}'";
        $result=mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);

        

        if ($row['Username']==$uname and $row['Password']==$pass and $row['User_type']==$type) {
            $_SESSION['flag']= true;
            $_SESSION['uname']= $row['Username'];
            $_SESSION['al_name']=$row['Name'];
            $_SESSION['al_pass']= $row['Password'];
            $_SESSION['al_email']=$row['Email'];
            $_SESSION['al_gender']=$row['Gender'];
            $_SESSION['al_bdate']= $row['Birth_date'];
            $_SESSION['al_bmonth']= $row['Birth_month'];
            $_SESSION['al_year']= $row['Birth_year'];
            $_SESSION['al_dept']= $row['Dept'];
            $_SESSION['al_id']= $row['ID'];

            //echo  $_SESSION['al_name'];
            //echo  $_SESSION['uname'];
            //echo  $_SESSION['al_email'];
            //echo  $_SESSION['al_gender'];
            // echo  $_SESSION['al_id'];


            header('location: Alumni_dashboard.php');
        }

        else if ($row['Username']==$uname and $row['Password']==$pass and $row['User_type']==$type2) {
            $_SESSION['flag']= true;
            $_SESSION['uname']= $row['Username'];
            $_SESSION['s_name']=$row['Name'];
            $_SESSION['s_pass']= $row['Password'];
            $_SESSION['s_email']=$row['Email'];
            $_SESSION['s_gender']=$row['Gender'];
            $_SESSION['s_bdate']= $row['Birth_date'];
            $_SESSION['s_bmonth']= $row['Birth_month'];
            $_SESSION['s_year']= $row['Birth_year'];
            $_SESSION['s_dept']= $row['Dept'];
            $_SESSION['s_id']= $row['ID'];

            //echo  $_SESSION['s_name'];
            //echo  $_SESSION['uname'];
            //echo  $_SESSION['s_email'];
            //echo  $_SESSION['s_gender'];
            // echo  $_SESSION['s_id'];

    
           header('location: Student_dashboard.php');
        }
        else if($row['Username']==$uname and $row['Password']==$pass and $row['User_type']==$type3)
        {
            $_SESSION['flag']= true;
            $_SESSION['uname']= $row['Username'];
            $_SESSION['a_pass']= $row['Password'];
            $_SESSION['a_name']=$row['Name'];
            $_SESSION['a_email']= $row['Email'];
            $_SESSION['a_gender']= $row['Gender'];
            $_SESSION['a_bdate']= $row['Birth_date'];
            $_SESSION['a_bmonth']= $row['Birth_month'];
            $_SESSION['a_year']= $row['Birth_year'];
            $_SESSION['a_id']= $row['ID'];

            //echo  $_SESSION['uname'];
            //echo  $_SESSION['a_email'];
            //echo  $_SESSION['a_gender'];

            header('location: dashboard.php');

        }
        else{
            echo "Invalid User";
            // print_r($row["User_type"]);
        }
        
   

    
}



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>
    <table border="0" width="100%">
        <tr>
            <td width="550px"><img src="file/logo1.png" alt=""></td>
            <td width="450px"> </td>
            <td align="right"><a href="home.php">Home</a> | <a href="login.php">Login | <a href="registration.php">Registration</a></a></td>
        </tr>
        <tr>
            <td></td>
            <td height="600px" align="center">
                <form method="post" action="">
                    <fieldset>
                        <legend><b>LOG IN</b></legend>
                        <table>
                            <tr>
                                <td>User Name:</td>
                                <td><input type="text" name="uname"></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" name="pass"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="checkbox" name="remember" id="">Remember me
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Log In">
                                    <a href="forgotpass.php"> Forgot Password?</a>
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            </td>
            <td></td>
        </tr>
        <tr>
            <td colspan="3" align="center">Copyright &COPY 2021</td>
        </tr>
    </table>
</body>

</html>