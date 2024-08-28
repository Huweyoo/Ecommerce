<?php
    include("conn.php");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $password = $_POST["password"];
        $email = $_SESSION['email'];
        if($password == $_POST["cpassword"]){
            if($con->query("UPDATE wsforms.users SET password='$password' WHERE email='$email'") == TRUE){
            header("location:newpass_success.php");
            }
        } else { 
            echo "<script type='text/javascript'>alert('Confirm password is incorrect.')</script>";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEX Change Pass</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="0style.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4 form">
            <form action="" method="POST" autocomplete="off">
            <h2 class="text-center">Change Password</h2>
            <p class="text-center">Remember your new password this time!</p>

            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Create new password" required>
            </div>

            <div class="form-group">
                <input class="form-control" type="password" name="cpassword" placeholder="Confirm your password" required>
            </div>

            <div class="form-group">
                <input class="form-control button" type="submit" name="newpassword" value="Confirm New Password">
            </div>
</body>
</html>