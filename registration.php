<?php
    include('config/dblink.php');
    $collect = new DB();
?>
<?php 
     if($_POST['register']){

        extract($_POST);

        if($p != $cp){
            $_SESSION['passwordNoMatch'] = 'Yes'; 
        }else if(strlen($p) < 6){
            $_SESSION['shortPassword'] = 'Yes'; 
        }else{
            $tblquery = "INSERT INTO users VALUES(:id, :fn, :ln, :email, :pn, :password, :ms, :date, :level, :sex, :picture, :last_login, :status)";
            $tblvalue = array(
                ':id' => NULL,
                ':fn' => htmlspecialchars(ucfirst($fn)),
                ':ln' => htmlspecialchars(ucfirst($ln)),
                ':email' => htmlspecialchars($email),
                ':pn' => htmlspecialchars($pn),
                ':password' => htmlspecialchars($p),
                ':ms' => htmlspecialchars($ms),
                ':date' => date('Y-m-d'),
                ':level' => "Student",
                ':sex' => htmlspecialchars($sex),
                ':picture' => "profile.png",
                ':last_login' => date('Y-m-d'),
                ':status' => "Non Active"
            );
            //print_r($tblvalue);
            $insert = $collect->tbl_insert($tblquery, $tblvalue);
            if($insert){
                echo '<script> window.location="login.php"; </script>';
            }else{
                $_SESSION['duplicateEmail'] = 'Yes'; 
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
    <title>Registration | E-Learning</title>
    <link rel="shortcut icon" type="image/png" href="img/profile.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4 wrapper-login">
                <?php 
                    if($_SESSION['passwordNoMatch'] == 'Yes'){
                        echo "
                            <div class='alert alert-bad' role='alert'>
                                <button type='button' class='close' data-dismiss='alert' aria-label='close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                                The password confirmation does not match.
                            </div>
                        ";
                    }else if($_SESSION['duplicateEmail'] == 'Yes'){
                        echo "
                            <div class='alert alert-bad' role='alert'>
                                <button type='button' class='close' data-dismiss='alert' aria-label='close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                                The email has already been taken.
                            </div>
                        ";
                    }else if($_SESSION['shortPassword'] == 'Yes'){
                        echo "
                            <div class='alert alert-bad' role='alert'>
                                <button type='button' class='close' data-dismiss='alert' aria-label='close'>
                                    <span aria-hidden='true'>&times;</span>
                                </button>
                                Password must be al least 6 characters.
                            </div>
                        ";
                    }
                ?>
                <!-- <img src="https://cryptomarketinvestment.org/site/wp-content/uploads/2021/11/crypto-market-logo-2.png"> -->
                <div class="wrapper-box">
                    <h1>Create An Account</h1>
                    <form action="registration.php" method="POST">
                        <div class="form-box">
                            <label for="fn">First Name</label>
                            <input type="text" id="fn" name="fn" placeholder="Enter First Name" required>

                            <label for="ln">Last Name</label>
                            <input type="text" id="ln" name="ln" placeholder="Enter Last Name" required>

                            <label for="n">Email Address</label>
                            <input type="email" id="n" name="email" placeholder="name@example.com" required>
                            
                            <label for="pn">Phone Number</label>
                            <input type="text" id="pn" name="pn" placeholder="Enter Phone Number" required>

                            <label for="p">Password</label>
                            <input type="password" id="p" name="p" placeholder="Enter Password" required>

                            <label for="cp">Confirm Password</label>
                            <input type="password" id="cp" name="cp" placeholder="Confirm Password" required>

                            <label for="ms">Marital Status</label>
                            <select id="ms" name="ms" required>
                                <option value="">Select</option>
                                <?php include('maritalStatus.php'); ?>
                            </select>

                            <label for="sex">Sex</label>
                            <select id="sex" name="sex" required>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </select>

                            <br/><br/>

                            <input type="submit" name="register" value="Register">

                            <p style="margin-top:10px;">Already Have An Account <a href="login.php">Login.</a></p>

                            <p style="margin-top:10px;">© Copyright 2022 All Rights Reserved.</p>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>

