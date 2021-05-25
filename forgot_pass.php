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
            <h2>Forgot Password</h2>
            <p>NBA Stars</p>
        </div>
        <div class="form-group">
            <label>Email:</label>
            <label>
                <input type="email" class="form-control" name="email" placeholder="robinson@example.com"
                       autocomplete="off" required>
            </label>
        </div>
        <div class="form-group">
            <label>Security Answer:</label>
            <label>
                <input type="text" class="form-control" name="sa" placeholder="Security Answer"
                       autocomplete="off" required>
            </label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Submit</button>
        </div>
    </form>
    <div class="text-center small" style="color: #0b83de;">Return to SignIn: <a href="signin.php">Click here</a> </div>
</div>

<?php
session_start();

include ("include/connection.php");
    if(isset($_POST['submit'])){
        $email = htmlentities(mysqli_real_escape_string($con, $_POST['email']));
        $recovery_account = htmlentities(mysqli_real_escape_string($con, $_POST['sa']));

        $select_user = "select * from users where user_email='email'";
        $query = mysqli_query($con, $select_user);

        $check_user = mysqli_num_rows($query);

        if($check_user==1){
            $_SESSION['user_email']=$email;

            echo"<script>window.open('create_password.php', '_self')</script>";
        }else{
            echo "<script>alert('Your email is incorrect.')</script>";
            echo"<script>window.open('forgot_pass.php', '_self')</script>";
        }
    }
?>

</body>
</html>