<?php
include "config.php";
if (isset($_POST['signup'])) {
    $check = "SELECT * FROM `login` WHERE username='$_POST[username]' OR email='$_POST[email] ' ";

    $result = mysqli_query($connection, $check);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $fetch = mysqli_fetch_assoc($result);
            if ($fetch['username'] == $_POST['username']) {
                echo "<script> alert('$fetch[username] -username is already exist');</script>";
            } else {
                echo "<script> alert('$fetch[email] -email is already exist');</script>";
            }
        } else {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $name = $_POST['name'];
            $password = $_POST['password'];

            $sql_info = "INSERT INTO `login`(`username`, `email`, `name`, `password`) VALUES ('$username','$email','$name','$password')";

            if (mysqli_query($connection, $sql_info)) {
                echo "<script> alert('Account created Successfully');</script>";
                header("refresh:0 ;url= login2.php");
            } else {
                echo "<script> alert('Operation failed');</script>";
            }
        }
    } else {
        echo "<script> alert('Query failed....!');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Mini-Project/slstylee.css">
    <title>SignUp</title>
</head>

<body>
<div class="bg-img"></div>
    <div id="main">
        <div id="contain">
            <div class="box box1">
                <h2 class="title"> Signup Form</h2>
            </div>
            <div class="box box2">
                <form action="" method="post">
                    <input type="text" name="username" placeholder="Enter Your Name">
                    <input type="text" name="email" placeholder="Enter Your Email">
                    <input type="text" name="password" placeholder="Enter Password">
                    <input type="submit" name="signup" value="SignUp">
                    <p> Already have an account? <a href="../Mini-Project/login2.php"> Login</a></p>
                </form>
            </div>
        </div>
    </div>    
</body>
    <!-- <div class="riya2">
        <h2 class="title"> SignUp Form </h2>
        <form action="" method="post">
            <div class="form1">
                <input type="text" name="username" required placeholder="Enter username">
            </div>
            <div class="form1">
                <input type="email" name="email" required placeholder="Enter your Email">
            </div>
            <div class="form1">
                <input type="name" name="name" required placeholder="Enter your Name">
            </div>
            <div class="form1">
                <input type="password" name="password" required placeholder="Create Password">
            </div>
            <input type="submit" name="signup" value="SignUp">
            <p> Already have an account? <a href="../Mini-Project/login2.php"> Login</a></p>
        </form>
    </div> -->

</html>