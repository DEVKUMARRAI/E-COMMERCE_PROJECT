<?php
include "config.php";

session_start();
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check = "SELECT * FROM `login` WHERE username='$_POST[username]' OR email='$_POST[email] ' ";

    $result = mysqli_query($connection, $check);

    if ($result) {

        if (mysqli_num_rows($result) == 1) {
            $fetch = mysqli_fetch_assoc($result);
            if ($fetch['password'] == $_POST['password']) {
                $_SESSION['login'] == true;
                $_SESSION['name'] == $fetch['name'];

                echo "<script> alert('login Sucessfully');</script>";
                header("refresh:0 ;url= index.php");
            } else {
                echo "<script> alert('invalid password');</script>";
            }
        } else {
            echo "<script> alert('user not found');</script> ";
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
    <link rel="stylesheet" href="../Mini-Project/bootstrap.css">
    <link rel="stylesheet" href="../Mini-Project/slstylee.css">
    <title>Login</title>
</head>

<body>
    <div class="bg-img"></div>
    <div id="main">
        <div id="contain">
            <div class="box box1">
                <h2 class="title"> Login Form</h2>
            </div>
            <div class="box box2">
                <form action="" method="post">
                    <input type="text" name="username" placeholder="Enter Your Name">
                    <input type="text" name="password" placeholder="Enter Your Password">
                   
                    <input type="submit" name="login" value="Login">
                    <p> Don't have an Account ? <a href="../Mini-Project/signup1.php"> Sign up</a></p>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<!-- <div class="riya2">
        <h2 class="title"> Login Form</h2>
        <form action="" method="post">
            <div class="form1">
                <input type="text" name=" username" required placeholder="Enter Email or Username ">
            </div>
            <div class="form1">
                <input type="password" name="password" required placeholder="Enter Password ">
            </div>
            <input type="submit" name="login" value="Login">
            <p> Don't have an Account ? <a href="../Mini-Project/signup1.php"> Sign up</a></p>
        </form>
    </div> -->