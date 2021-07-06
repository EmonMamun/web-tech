<?php
session_start();

if (isset($_POST['submit'])) {
    
    if (empty($_POST['al_email'])) {
        echo "email field cnnot be empty";
    } else {
        $f = 0;
        foreach ($temp as $key1 => $value1) {
            if ($temp[$key1]["email"] == $_POST['email']) {
                $f = 1;
            }
        }
        if ($f == 1) {
            echo "A CODE HAS BEEN SENT TO YOUR EMAIL";
        } else {
            echo "MAIL NOT REGISTERED";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Change</title>
</head>

<body>
    <table border="0" width="100%">
        <tr>
            <td width="550px"><img src="file/logo1.png" alt=""></td>
            <td width="400px"> </td>
            <td align="center"><a href="home.php">Home</a> | <a href="login.php">Login | <a href="registration.html">Registration</a></a></td>
        </tr>
        <tr>
            <td></td>
            <td height="600px" align="center">
                <form method="post" action="">
                    <fieldset>
                        <legend><b>FORGOT Password</b></legend>
                        <table>
                            <tr>
                                <td>Enter Email:</td>
                                <td><input type="email" name="email"></td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <hr>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">

                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" name="submit" value="Submit">
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