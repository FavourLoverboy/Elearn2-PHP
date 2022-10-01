<?php
    if($_POST['suspend']){
        extract($_POST);
        
        $tblquery = "UPDATE users SET status = :status WHERE id = :id";
        $tblvalue = array(
            ':status' => "Non Active",
            ':id' => $id
        );
        $update = $collect->tbl_update($tblquery, $tblvalue);
        if($update){
            echo '<script> window.location="http://localhost/elearn2/suspend"; </script>';
        }

    }elseif($_POST["release"]){
        extract($_POST);

        $tblquery = "UPDATE users SET status = :status WHERE id = :id";
        $tblvalue = array(
            ':status' => "Active",
            ':id' => $id
        );
        $update = $collect->tbl_update($tblquery, $tblvalue);
        if($update){
            echo '<script> window.location="http://localhost/elearn2/suspend"; </script>';
        }
    }
?>