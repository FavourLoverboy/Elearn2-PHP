<div class="main-body">
    <h3 class="title">User Details</h3>

    <div class="row no-p profile" style="margin-top:50px;">
        <div class="col-md-3 box no-p">
            <div class="no-p box-inner">
                <div class="img">
                    <?php
                        $tblquery = "SELECT * FROM users WHERE id = '$_SESSION[userId]'";
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
                        $tblquery = "SELECT * FROM users WHERE id = '$_SESSION[userId]'";
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
                <div class="name" style="color:#ffffff;">
                    Last Login
                </div>
                <div class="name" style="font-size:15px;">
                    <?php
                        $tblquery = "SELECT * FROM users WHERE id = '$_SESSION[userId]'";
                        $tblvalue = array();
                        $select = $collect->tbl_select($tblquery, $tblvalue);
                        foreach($select as $data){
                            extract($data);
                            ?>
                            <?php
                                echo "
                                    $last_login
                                ";
                        }
                    ?>
                </div>
            </div>
        </div>

        <div class="col-md-9 box no-p">
            <div class="no-p box-inner-2">
                <?php
                    $tblquery = "SELECT * FROM users WHERE id = '$_SESSION[userId]'";
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
                

            </div>
        </div>
    </div>
</div>