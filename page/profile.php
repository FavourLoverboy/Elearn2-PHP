<div class="main-body">
    <h3 class="title">Account Profile Information</h3>

    <div class="row no-p profile" style="margin-top:50px;">
        <div class="col-md-3 box no-p">
            <div class="no-p box-inner">
                <div class="img">
                    <?php
                        $tblquery = "SELECT * FROM users WHERE id = '$_SESSION[myId]'";
                        $tblvalue = array();
                        $select = $collect->tbl_select($tblquery, $tblvalue);
                        foreach($select as $data){
                            extract($data);
                            ?>
                            <?php
                            echo "
                                <img src='./upload/$picture' style='border-radius: 50%;' width='100%' height='100%' alt='Profile Picture'>
                            ";
                        }
                    ?>
                </div>
                <div class="name" style="font-size:20px;">
                    <?php
                        $tblquery = "SELECT * FROM users WHERE id = '$_SESSION[myId]'";
                        $tblvalue = array();
                        $select = $collect->tbl_select($tblquery, $tblvalue);
                        foreach($select as $data){
                            extract($data);
                            ?>
                            <?php
                            echo "
                                $ln $fn
                            ";
                        }
                    ?>
                </div>
                <div class="name" style="color:#09f329;">
                    <?php echo $_SESSION['newName']; ?>
                </div>

                <a onclick="popupProfilePicture()" class="btn">Update picture</a>
            </div>
        </div>

        <div class="col-md-9 box no-p">
            <div class="no-p box-inner-2">
                <?php
                    $tblquery = "SELECT * FROM users WHERE id = '$_SESSION[myId]'";
                    $tblvalue = array();
                    $select = $collect->tbl_select($tblquery, $tblvalue);
                    foreach($select as $data){
                        extract($data);
                        ?>
                        <?php
                        echo "
                            <div class='name'><span><i class='fa fa-user' aria-hidden='true'></i></span>$ln $fn</div>
                            <div class='body'><span><i class='fa fa-location-arrow' aria-hidden='true'></i></span>$sex</div>
                            <div class='body'><span><i class='fa fa-envelope' aria-hidden='true'></i></span>$email</div>
                            <div class='body'><span><i class='fa fa-mobile' aria-hidden='true'></i></span>$pn</div>
                            <div class='body'><span><i class='fa fa-calendar' aria-hidden='true'></i></span>$date</div>
                        ";
                    }
                ?>
                <div class="btn-pop">
                    <a class="deposit-btn" onclick="popupProfileUpdate()">Update info</a>
                </div>

            </div>
        </div>
    </div>
</div>


<!-- Popup Area -->

<!-- Profile Picture -->
<div class="container-fluid profile-popup-picture popup-profile-picture">
    <div class="main-box">
        <div class="head">
            <div class="row no-p">
                <div class="col-xs-11">
                    <h4>Update Profile Picture</h4>
                </div>
                <div class="col-xs-1 close" onclick="popupProfilePicture()">
                    <h4><span><i class='fa fa-times' aria-hidden='true'></i></span></h4>
                </div>
            </div>
        </div>
        <div class="bottom">
            <form action="profile" method="POST" enctype="multipart/form-data">
                <input type="file" name="file" required>
                <input type="submit" name="addImage" class="btn" value="Update">
            </form>
        </div>
    </div>
</div>

<!-- Profile Update -->
<div class="container-fluid profile-popup-update popup-profile-update">
    <div class="main-box">
        <div class="head">
            <div class="row no-p">
                <div class="col-xs-11">
                    <h4>Edit my profile</h4>
                </div>
                <div class="col-xs-1 close" onclick="popupProfileUpdate()">
                    <h4><span><i class='fa fa-times' aria-hidden='true'></i></span></h4>
                </div>
            </div>
        </div>
        <div class="bottom">
            <form action="profile" method="POST">
                <?php
                    $tblquery = "SELECT * FROM users WHERE id = '$_SESSION[myId]'";
                    $tblvalue = array();
                    $select = $collect->tbl_select($tblquery, $tblvalue);
                    foreach($select as $data){
                        extract($data);
                        ?>
                        <?php
                        echo "
                            <p class='text'>First Name</p>
                            <input type='text' name='fn' value='$fn' required>
            
                            <p class='text'>Last Name</p>
                            <input type='text' name='ln' value='$ln' required>
            
                            <p class='text'>Email</p>
                            <input type='email' name='email' value='$email' required>
            
                            <p class='text'>Phone Number</p>
                            <input type='text' name='pn' value='$pn' required>
            
                            <input type='submit' name='update_profile' class='btn' value='Update'>
                        ";
                    }
                ?>
            </form>
        </div>
    </div>
</div>

<?php 
    //Get the Name of the Uploaded File
    $fileName = $_FILES['file']['name'];

    // Choose where to save the Upload File
    $location = "upload/".$fileName;

    // Save the uploaded File to the local file system
    move_uploaded_file($_FILES['file']['tmp_name'], $location);

    // Upload Image Name to DataBase
    if($_POST['addImage']){
        extract($_POST);

        $tblquery = "UPDATE users SET picture = :image WHERE id = :id";
        $tblvalue = array(
            ':image' => $fileName,
            ':id' => $_SESSION['myId']
        );
        $update = $collect->tbl_update($tblquery, $tblvalue);
        if($update){
            echo '<script> window.location="http://localhost/elearn2/profile"; </script>';
        }
    }
?>

<?php 
    if($_POST['update_profile']){
        extract($_POST);

        $tblquery = "UPDATE users SET fn = :fn, ln = :ln, email = :email, pn = :pn
        WHERE id = '$_SESSION[myId]'";
        $tblvalue = array(
            ':fn' => htmlspecialchars(ucfirst($fn)),
            ':ln' => htmlspecialchars(ucfirst($ln)),
            ':email' => htmlspecialchars($email),
            ':pn' => htmlspecialchars($pn)
        );
        $update = $collect->tbl_update($tblquery, $tblvalue);
        if($update){
            echo '<script> window.location="http://localhost/elearn2/profile"; </script>';
        }
    }
?>
