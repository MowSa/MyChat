<!DOCTYPE html>
<html lang="en">

<head>
    <title>Create New Account</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatable" content="IT=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Tahoma|Tahoma|Tahoma:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/3.3.7/css/bootstrap.min.css"></script>
    <link rel="stylesheet" type="text/css" href="css/signup.css">
</head>

<body>

<div class="signup-form">
    <form action="" method="post">

        <div class="form-header">
            <h2>Sign Up</h2>
            <p>Start Talking With Your Favourite NBA Stars!</p>
        </div>

        <div class="form-group">
            <label>Username:</label>
            <label>
                <input type="text" class="form-control" name="user_name" placeholder="user"
                       autocomplete="off" required>
            </label>
        </div>

        <div class="form-group">
            <label>Password:</label>
            <label>
                <input type="password" class="form-control" name="user_pass" placeholder="Password"
                       autocomplete="off" required>
            </label>
        </div>

        <div class="form-group">
            <label>Email:</label>

            <label>
                <input type="email" class="form-control" name="user_email" placeholder="robinson@example.com"
                       autocomplete="off" required>
            </label>
        </div>

        <div class="form-group">
            <label>NBA Team</label>
            <select class="form-control" name="user_team" required>
                <option disabled="">Select a Team</option>
                <option>Raptors</option>
                <option>Warriors</option>
                <option>Lakers</option>
                <option>Mavericks</option>
                <option>Heat</option>
                <option>Clippers</option>
            </select>
        </div>

        <div class="form-group">
            <label>Gender</label>
            <select class="form-control" name="user_gender" required>
                <option disabled="">Select a Gender</option>
                <option>Male</option>
                <option>Female</option>
                <option>Others</option>
            </select>
        </div>

        <div class="form-group">
            <label class="checkbox-inline"><input type="checkbox" required>I accept the <a href="#">Terms of Use</a> &amp; <a href="#" </a>Privacy Policy</label>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block" name="sign_up">Sign Upn</button>
        </div>
        <?php include("signup_user.php");?>
    </form>
    <div class="text-center small" style="color: #0b83de;">Have an account? <a href="signin.php">Sign In</a> </div>
</div>
</body>
</html>