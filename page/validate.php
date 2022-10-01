
<?php
    if($_POST['muteBtn']){
        extract($_POST);

        $tblquery = "UPDATE users SET status = :status WHERE id = :id";
        $tblvalue = array(
            ':status' => "Inactive",
            ':id' => $mute
        );
        $update = $collect->tbl_update($tblquery, $tblvalue);
        if($update){
            echo '<script> window.location="http://localhost/elearn/suspend"; </script>';
        }
    }
    else if($_POST['unMuteBtn']){
        extract($_POST);

        $tblquery = "UPDATE users SET status = :status WHERE id = :id";
        $tblvalue = array(
            ':status' => "Active",
            ':id' => $unMute
        );
        $update = $collect->tbl_update($tblquery, $tblvalue);
        if($update){
            echo '<script> window.location="http://localhost/elearn/suspend"; </script>';
        }
    }
?>