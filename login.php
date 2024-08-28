<?php
    include("conn.php");
    $con = mysqli_connect($servername,$suser,$password);
    $dbname= "wsforms";
    session_start();

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM wsforms.users WHERE email='$email' AND password='$password'";
	    $result = mysqli_query($con, $sql);
        if ($result-> num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['fname'] = $row['fname'];
            header("location: home.php");
        } else {
            echo "<script>alert('Your email or password is wrong!')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Pasyal LogIn</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="0style.css">
</head>
<body>
    
    <div class="container">
            <div class="row">
                <div class="col-md-4 offset-md-4 form login-form">
                    <form action="login.php" method="POST" autocomplete="">
                        <h2 class="text-center">E-PASYAL</h2>
                        <p class="text-center">Welcome, Tiny Hexplorers!</p>
                    
                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                        </div>
                        <div class="link forget-pass text-left"><a href="forgotpass.php">Forgot password?</a></div>
                        <div class="form-group">
                            <input class="form-control button" type="submit" name="login" value="Login">
                        </div>
                        <div class="link login-link text-center">Not a Tiny Hexplorer member yet? <a href="signup.php">Register here</a></div>
                    </form>
                </div>
            </div>
    </div>
</body>
</html>