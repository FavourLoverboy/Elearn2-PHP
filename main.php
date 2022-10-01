<?php
    session_start();
    if($_SESSION['fn']){
    
    }else{
        header('location: login.php');
    }
?>

<?php include('includes/header.php'); ?>

    <div class="container-fluid">
        <!-- =============== Laptop view =============== -->
        <div class="row laptop-view">
            <div class="col-md-2 top-nav-left" style="float:left;position:fixed;left:0px;top:0px;">
                <div class="row">
                    <div class="col-xs-10 no-p">
                        
                    </div>
                    <div class="col-xs-2 no-p">
                        <span class="bars"><i class="fa fa-bars" aria-hidden="true"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-10 top-nav-right" style="float:right;">
                <div class="row">
                    <div class="col-xs-11 no-p"></div>
                    <div class="col-xs-1 no-p top-right-box">
                        <div class="row">
                            <div class="col-xs-6 no-p box" onclick="notificationPopup()">
                                <span><i class="fa fa-bell" aria-hidden="true"></i></span>
                            </div>
                            <div class="col-xs-6 no-p box" onclick="userPopup()">
                                <span><i class="fa fa-user" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- ========== Pop Usp ========== -->

        <!-- ========== Notification Popup -->
        <div class="notification-dropdown">
            <div class="inner">
                <div class="head">
                    <a href="notification">
                        <div class="row no-p">
                            <div class="col-xs-10 no-p">See all notifications</div>
                            <div class="col-xs-2 no-p" style="text-align:right;"><span><i class="fa fa-angle-right" aria-hidden="true"></i></span></div>
                        </div>
                    </a>
                </div>
                <div class="tip"></div>
            </div>
        </div>

        <!-- ========== User Popup -->
        <div class="user-dropdown">
            <div class="inner">
                <div class="head">
                    <a href="password">Change Password</a>
                </div>
                <div class="head" style="border-bottom:1px solid #E2E2E2;">
                    <a href="profile">Update Account</a>
                </div>
                <div class="head">
                    <a href="logout.php">Logout</a>
                </div>
                <div class="tip"></div>
            </div>
        </div>

        <!-- Mobile View -->
        <div class="mobile-view">
            <div class="row">
                <div class="col-xs-1 mobile-menu" onclick="mobileSideMenu()">
                    <span class="bars"><i class="fa fa-bars" aria-hidden="true"></i></span>
                </div>
                <div class="col-xs-10 mobile-logo">
                    <img src="<?php echo $_SESSION['newImageLink']; ?>">
                </div>
                <div class="col-xs-1 bg-danger mobile-side-btn" onclick="mobileNotificationDropdown()">
                    <span class="bars active" ><i class="fa fa-ellipsis-v" aria-hidden="true"></i></span>
                </div>
            </div>
        </div>
        <div class="mobile-view-dropdown">
            <div class="col-xs-5"></div>
            <div class="col-xs-1 box">
                <span class="mobile-notification-span1"><i class="mobile-notification-span-icon1 fa fa-bell" aria-hidden="true"></i></span>
            </div>
            <div class="col-xs-1 box">
                <span class="mobile-notification-span2"><i class="mobile-notification-span-icon2 fa fa-user" aria-hidden="true"></i></span>
            </div>
            <div class="col-xs-5"></div>
        </div>

        <div class="row">
            <div class="col-12 main-wrapper">
                <div class="row">
                    <div class="col-md-2 side-menu-master">
                        <div class="side-menu">
                            <?php 
                                include('page/menu.php'); 
                            ?>
                        </div>
                    </div>
                    <div class="col-md-10 main-main-box">
                        <div class="inner">
                            <?php 
                                include($page); 
                            ?>
                        </div>
                        <footer>
                            <div>All Right Reserved &copy; <a href="<?php echo $_SESSION['newExternalLink']; ?>"><?php echo $_SESSION['newName']; ?></a> 2022</div>
                        </footer>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php include('includes/footer.php'); ?>