<div class="main-body">
    <h3 class="title">Change Your password</h3>

    <div class="row no-p password">
        <div class="col-xs-12 no-p box">
            <form action="password" method="POST">
                <div class="inner">
                    <p class="text">Old Password:</p>
                    <input type="password" name="old" placeholder="Enter your old password" required>
                </div>

                <div class="inner">
                    <p class="text">New Password:</p>
                    <input type="password" name="new" placeholder="Enter your new password" required>
                </div>

                <div class="inner">
                    <p class="text">Confirm Password:</p>
                    <input type="password" name="confirm" placeholder="Confirm new password" required>
                </div>

                <input type="submit" name="submit" class="submit-btn" value="Submit">
            </form>
        </div>
    </div>
</div>

<?php
    if($_POST['submit']){

        extract($_POST);

        if($_SESSION['password'] === $old){
            if(strlen($new) < 6){
                echo "
                    <div class='container-fluid invest-popup-notification'>
                        <div class='main-box'>
                            <div class='head'>
                                <div class='row no-p'>
                                    <div class='col-xs-11'>
                                        <h4>Message</h4>
                                    </div>
                                    <div class='col-xs-1 close' onclick='popupInvestNotification()'>
                                        <h4><span><i class='fa fa-times' aria-hidden='true'></i></span></h4>
                                    </div>
                                </div>
                            </div>
                            <div class='bottom'>
                                <div class='msg'>
                                    Your new password should be more than 5 characters.
                                </div>
                                <a class='btn' onclick='popupInvestNotification()'>Ok</a>
                            </div>
                        </div>
                    </div>
                ";
            }else if($new === $confirm){
                $tblquery = "UPDATE users SET password = :password WHERE id = :id";
                $tblvalue = array(
                    ':password' => htmlspecialchars($new),
                    ':id' => $_SESSION['myId']
                );
                $update = $collect->tbl_update($tblquery, $tblvalue);
                if($update){
                    $name = $_SESSION['ln'] . " " . $_SESSION['fn'];
                    $tblquery = "INSERT INTO notification VALUES(:id, :userId, :message, :time, :date, :status)";
                    $tblvalue = array(
                        ':id' => null,
                        ':userId' => $_SESSION['myId'],
                        ':name' => $name,
                        ':message' => "You changed your account password.",
                        ':time' => time(),
                        ':date' => date("Y-m-d"),
                        ':status' => "Show"
                    );
                    $update = $collect->tbl_insert($tblquery, $tblvalue);
                }
                if($update){
                    echo '<script> window.location="http://localhost/elearn2/logout.php"; </script>';
                }
            }else{
                echo "
                    <div class='container-fluid invest-popup-notification'>
                        <div class='main-box'>
                            <div class='head'>
                                <div class='row no-p'>
                                    <div class='col-xs-11'>
                                        <h4>Message</h4>
                                    </div>
                                    <div class='col-xs-1 close' onclick='popupInvestNotification()'>
                                        <h4><span><i class='fa fa-times' aria-hidden='true'></i></span></h4>
                                    </div>
                                </div>
                            </div>
                            <div class='bottom'>
                                <div class='msg'>
                                    Your new password do not match your confirm password, try again to proceed.
                                </div>
                                <a class='btn' onclick='popupInvestNotification()'>Ok</a>
                            </div>
                        </div>
                    </div>
                ";
            }
        }else{
            echo "
                <div class='container-fluid invest-popup-notification'>
                    <div class='main-box'>
                        <div class='head'>
                            <div class='row no-p'>
                                <div class='col-xs-11'>
                                    <h4>Message</h4>
                                </div>
                                <div class='col-xs-1 close' onclick='popupInvestNotification()'>
                                    <h4><span><i class='fa fa-times' aria-hidden='true'></i></span></h4>
                                </div>
                            </div>
                        </div>
                        <div class='bottom'>
                            <div class='msg'>
                                Wrong password, please input your correct password to proceed.
                            </div>
                            <a class='btn' onclick='popupInvestNotification()'>Ok</a>
                        </div>
                    </div>
                </div>
            ";
        }
    }
?>