<div class="main-body">
    <h3 class="title">Edit Course</h3>
    <div style="padding:40px;">
        <?php
            $tblquery = "SELECT meals.id, meals.mealName, meal_steps.step FROM meal_steps INNER JOIN meals ON meal_steps.mealId = meals.mealId WHERE meal_steps.mealId = '$_SESSION[mealId]'";
            $tblvalue = array();
            // print_r($tblquery);
            $select = $collect->tbl_select($tblquery, $tblvalue);
            foreach($select as $data){
                extract($data);
                ?>
                <?php
                    echo "
                        <form action='course_edit' method='POST';>
                            <textarea name='content' style='width:1050px;' required>$step</textarea>   
                            <br>
                            <input type='submit' name='submit' class='btn btn-primary' value='Submit'>
                        </form>
                        <script src='ckeditor/ckeditor.js'></script>
                        <script>
                            CKEDITOR.replace('content');
                        </script>           
                    ";
            }
        ?>
    </div>
</div>
<?php 

    if($_POST['submit']){
        extract($_POST);

        $tblquery = "UPDATE meal_steps SET step = :step WHERE mealId = :mealId";
        $tblvalue = array(
            ':step' => $content,
            ':mealId' => $_SESSION['mealId']
        );
        $update = $collect->tbl_insert($tblquery, $tblvalue);
        if($update){
            echo '<script> window.location="http://localhost/elearn2/my_course"; </script>';
        }else{
            echo "
                <div class='alert alert-danger alert-dismissible fade show text-dark text-center' role='alert'>
                    An error occur while performing this task.
                </div>
            ";
        }
    }

?>