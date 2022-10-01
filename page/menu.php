<div class="side-menu-wrapper">
    <div class="dropdown-box-username">
        <div class="username" onclick="toggleDropDownBoxUsername()">
            <div class="left">
                <?php echo $_SESSION['fn'];?>
            </div>
            <div class="right">
                <span><i class="fa fa-caret-down" aria-hidden="true"></i></span>
            </div>
        </div>
        <div class="dropdown">
            <a href="profile">Account Setting</a>
        </div>
    </div>
</div>

<?php 
    if($_SESSION['level'] === 'Student'){
        echo "
            <div class='side-menu-navigation-mobile'>
                <a href='dashboard'>
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-home' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Dashboard</span>
                        </div>
                    </div>
                </a>
                <a href='all_course'>
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-home' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Courses</span>
                        </div>
                    </div>
                </a>
            </div>
        ";
    }else if($_SESSION['level'] === 'Admin'){
        echo "
            <div class='side-menu-navigation-mobile'>
                <a href='dashboard_Admin'>
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-home' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Dashboard</span>
                        </div>
                    </div>
                </a>
                <a href='course_admin'>
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-home' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Courses</span>
                        </div>
                    </div>
                </a>
                <a href='my_course'>
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-home' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>My Courses</span>
                        </div>
                    </div>
                </a>
                <a href='students'>
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-home' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Students</span>
                        </div>
                    </div>
                </a>
                <a href='suspend'>
                    <div class='row navigator'>
                        <div class='col-xs-3 icon'>
                            <span><i class='fa fa-home' aria-hidden='true'></i></span>
                        </div>
                        <div class='col-xs-9 navigator-text'>
                            <span>Suspend</span>
                        </div>
                    </div>
                </a>
            </div>
        ";
    }
?>