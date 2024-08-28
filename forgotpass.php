<?php
include('conn.php');
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
$email = $_POST["email"];
$_SESSION['email'] = $email;

if($con->query("SELECT * FROM wsforms.users WHERE email = '$email'") == TRUE){
    header('location:newpass.php');
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>META Forgot Pass</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="0style.css">
</head>
<body>
    
<div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="" method="POST" autocomplete="">
                    <h2 class="text-center">Reset Password</h2>
                    <p class="text-center">Why did you forgot your password?!</p>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Enter your registered email" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check-email" value="Confirm">
                    </div>
                    <div class="link login-link text-center"><a href="login.php"> < Back to Login</a></div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>