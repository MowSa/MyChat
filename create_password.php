<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatable" content="IT=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Tahoma|Tahoma|Tahoma:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/3.3.7/css/bootstrap.min.css"></script>
    <link rel="stylesheet" type="text/css" href="css/signin.css">
</head>
<body>
<div class="signin-form">
    <form action="" method="post">
        <div class="form-header">
            <h2>Create New Password</h2>
            <p>NBA Stars</p>
        </div>
        <div class="form-group">
            <label>Enter Password:</label>
            <label>
                <input type="password" class="form-control" name="pass" placeholder="Password"
                       autocomplete="off" required>
            </label>
        </div>
        <div class="form-group">
            <label>Confirm Password:</label>
            <label>
                <input type="password" class="form-control" name="pass2" placeholder="Confirm Password"
                       autocomplete="off" required>
            </label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="change">Change Password</button>
        </div>
    </form>
</div>
<?php
session_start();
include ("include/connection.php");

if(isset($_POST['change'])){
    $user = $_SESSION['user_email'];
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    if($pass1 != $pass2){
        echo"
        <div class = 'alert alert-danger'>
        <strong>Passwords aren't identical</strong>
        ";
    }
    if($pass1 == $pass2){
        $update_pass = mysqli_query($con, "UPDATE users SET user_pass='$pass1' WHERE user_email='$user'");
        session_destroy();
        echo "<script>alert('Signin:')</script>";
        echo"<script>window.open('signin.php', '_self')</script>";
    }
}
?>
</body>
</html>