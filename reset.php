<?php
    session_start();
    include('config/dblink.php');
    $collect = new DB();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset | E-Learning</title>
    <link rel="shortcut icon" type="image/png" href="img/profile.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 wrapper-login">
                <img src="<?php echo $_SESSION['newImageLink']; ?>">
                <div class="wrapper-box">
                    <h1>Password Reset</h1>
                    <form action="login.php" method="POST">
                        <div class="form-box">
                            <label for="n">Email Address</label>
                            <label class="text-muted">The Email Address Used In registration</label>
                            <input type="email" id="n" placeholder="name@example.com">
                            <br/><br/>
                            <input type="submit" value="Send Reset Link">

                            <p style="margin-top:10px;">Repeat <a href="login.php">Login.</a></p>

                            <p style="margin-top:45px;">© Copyright 2022 All Rights Reserved.</p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
