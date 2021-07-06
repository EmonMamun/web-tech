<?php
session_start();
$nameErr = $emailErr = $genderErr = $ddErr = $mmErr = $yyyyErr = $dobErr = $unameErr = $passErr = $cpassErr = "";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];
    $cPass = $_POST['cPass'];
    if (!isset($_POST['gender'])){}
    else{
        $gender = $_POST['gender'];
    }
    if (!isset($_POST['dept'])){}
    else{
        $dept = $_POST['dept'];
    }

    if (!isset($_POST['utype'])){}
    else{
        $utype = $_POST['utype'];
    }
    
    $date = $_POST['date'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $uid = $_POST['uid'];
    

     if($_SERVER['REQUEST_METHOD'] == "POST") 
    {
        if (empty($name)) {
            $nameErr = "Name is required.";
        } else {
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
                $name = "";
            } else {
                if (str_word_count($name) < 2) {
                    $nameErr = "Name must contain atleast 2 words";
                }
            }
        }
        if (empty($email)) {
            $emailErr = "Email is required";
        } else {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
               // $emailErr = "Not a valid email";
                $email = "";
            }
        }
        if (empty($uname)) {
            $unameErr = "User Name is required";
        } else {
            if (!preg_match("/^[a-zA-Z-0-9]*$/", $uname)) {
                $unameErr = "Only Letters and Numbers allowed";
                $uname = "";
            } else {
                if (strlen($uname) < 2) {
                    $unameErr = "Name must contain atleast 2 characters";
                    $uname = "";
                }
            }
        }
        if (empty($pass)) {
            $passErr = "Password is required";
        } else {
            if (strlen($pass) < 8) {
                $passErr = "Password must contain atleast 8 characters";
            } else if (!preg_match("/[@#$%]/", $pass)) {
                $passErr = "Password must contain a special character";
            }
        }
        if (empty($cPass)) {
            $cpassErr = "Retype password";
            $pass = "";
        } else {

            if ($cPass != $pass) {
                $cpassErr = "Password does not match with new password";
            }
        }

        if (empty($date)) {
            $ddErr = "Date is required";
        } else {
            if ($date < 1  || $date > 31) {
                $ddErr = "Enter a valid date";
            }
        }

        if (empty($month)) {
            $mmErr = "Month is required";
        } else {
            if ($month < 1  || $month > 12) {
                $mmErr = "Enter a valid month";
            }
        }

        if (empty($year)) {
            $yyyyErr = "Year is required";
        } else {
            if ($year < 1901  || $year > 2000) {
                $yyyyErr = "Enter a valid year";
            }
        }





        if (empty($_POST['gender'])) {
            $genderErr = "Select a gender";
        }
    }

        if ($nameErr == "" && $emailErr == "" && $unameErr == "" && $passErr == "" && $cpassErr == "" && $genderErr == "" && $ddErr == "" && $mmErr == "" && $yyyyErr == "") 
        {


             $conn = mysqli_connect("localhost", "root","","user");
             if($conn === false){
                die("ERROR: Could not connect. " 
                    . mysqli_connect_error());
            }
         // $sql = "INSERT INTO user_reg VALUES('Admin Ankur','ankur@email.com','Ankur','12345678@@','Male',31,7,1980,'Admin','','4470-11-2')";

               $sql = "INSERT INTO user_reg VALUES('$name','$email','$uname','$pass','$gender','$date','$month','$year','$utype','$dept','$uid')"; 

          
        if(mysqli_query($conn, $sql)){
            header('location: login.php');
  
        
        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }


                


        }    
    
    
}

?>


<!-- <?php 
    include('header.php');
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>
    <table border="0" width="100%">
        <tr>
            <td width="500px"><img src="file/logo1.png" alt=""></td>
            <td width="500px"> </td>
            <td align="right"><a href="home.php">Home</a> | <a href="login.php">Login | <a href="registration.php">Registration</a></a></td>
        </tr>
        <tr>
            <td></td>
            <td height="600px" align="center">
                <form method="post" action="">
                    <fieldset style="width:500px">
                        <legend><b>REGISTRATION</b></legend>
                        <table border="0">
                            <tr>
                                <td>Name</td>
                                <td>:
                                    <input type="text" name="name" id="">
                                    <span class="error">* <?php echo $nameErr; ?></span>

                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:
                                    <input type="email" name="email" id="">
                                    <span class="error">* <?php echo $emailErr; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>User Name</td>
                                <td>:
                                    <input type="text" name="uname" id="">
                                    <span class="error">* <?php echo $unameErr; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td>:
                                    <input type="password" name="pass" id="">
                                    <span class="error">* <?php echo $passErr; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>Confirm Password</td>
                                <td>:
                                    <input type="password" name="cPass" id="">
                                    <span class="error">* <?php echo $cpassErr; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Gender</legend>
                                        <input type="radio" name="gender" value="Male" id="">Male
                                        <input type="radio" name="gender" value="Female" id="">Female
                                        <input type="radio" name="gender" value="Other" id="">Other
                                    </fieldset>
                                    <span class="error">* <?php echo $genderErr; ?></span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Date Of Birth</legend>
                                        <input type="test" name="date" id="" size="1"> /
                                        <input type="text" name="month" id="" size="1"> /
                                        <input type="text" name="year" id="" size="1"> <i>(dd/mm/yy)</i>
                                    </fieldset>
                                    <span class="error">* <?php echo $ddErr; ?></span>
                                    <span class="error">* <?php echo $mmErr; ?></span>
                                    <span class="error">* <?php echo $yyyyErr; ?></span>
                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>User Identity</legend>
                                        <input type="radio" name="utype" id="Student" value="Student">Student
                                        <input type="radio" name="utype" id="Alumni" value="Alumni">Alumni

                                    </fieldset>

                                </td>
                           </tr>
                           <tr>
                                <td colspan="2">
                                    <fieldset>
                                        <legend>Department name</legend>

                                            <input type="radio" name="dept" value="CSE">CSE 
                                            <input type="radio" name="dept" value="CSSE">CSSE <br>
                                            <input type="radio" name="dept" value="SE">SE 
                                            <input type="radio" name="dept" value="EEE">EEE <br>
                                            <input type="radio" name="dept" value="English">English
                                            <input type="radio" name="dept" value="Architecture">Architecture

		                                
                                    </fieldset>

                                </td>
                            </tr> 
                            
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td>User ID</td>
                                <td>:
                                    <input type="text" name="uid" id="">

                                </td>
                            </tr>

                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" name="submit" value="Submit">
                                    <input type="reset" value="reset">
                                </td>
                            </tr>
                        </table>
                    </fieldset>
                </form>
            
<?php 
    include('footer.php');
?>