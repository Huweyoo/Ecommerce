<?php
    include('conn.php');
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        if($fname!=null && $lname!=null && $email!=null && $password!=null){
            if($password == $_POST["cpassword"]){

                if($con->query("SELECT email FROM wsforms.users WHERE email = '$email'") == TRUE){
                    echo "<script type='text/javascript'>alert('Email is already registered.')</script>";
                }

                if($con->query("INSERT INTO wsforms.users(fname, lname , email , password) VALUES ('$fname', '$lname' , '$email' , '$password')") == TRUE){
                    header("location:signup_success.php");
                }
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
    <title>HEX Register</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="0style.css">
</head>
<body>
    
<div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup.php" method="POST" autocomplete="">
                    <h2 class="text-center">Hexplorer Registration</h2>
                    <p class="text-center">Input your information.</p>
                    <div class="form-group">
                        <input class="form-control" type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="lname" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm Password" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Register">
                    </div>
                    <div class="link login-link text-center">Already a Tiny Hexlorer? <a href="login.php">Login here</a></div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>