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
                <h2>Sign In</h2>
                <p>Login to MyChat</p>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <label>
                    <input type="email" class="form-control" name="email" placeholder="robinson@example.com"
                           autocomplete="off" required>
                </label>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <label>
                    <input type="password" class="form-control" name="pass" placeholder="Password"
                           autocomplete="off" required>
                </label>
            </div>
            <div class="small">Forgot password?<a href="forgot_pass.php">Click here</a> </div><br>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-lg btn-block" name="sign_in">Sign In</button>
            </div>
            <?php include("signin_user.php");?>
        </form>
        <div class="text-center small" style="color: #0b83de;">Don't have an account? <a href="signup.php">Create one</a> </div>
    </div>
</body>
</html>