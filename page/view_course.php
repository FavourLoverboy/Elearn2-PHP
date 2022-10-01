<div style="padding:40px;">
    <?php
        $tblquery = "SELECT meals.id, meals.mealName, meal_steps.step FROM meal_steps INNER JOIN meals ON meal_steps.mealId = meals.mealId WHERE meal_steps.mealId = '$_SESSION[mealId]'";
        $tblvalue = array();
        $select = $collect->tbl_select($tblquery, $tblvalue);
        foreach($select as $data){
            extract($data);
            ?>
            <?php
                echo "
                    <textarea name='content' style='min-height:900px;width:1050px;' readonly><h1><strong>Steps On How To Prepare $mealName</strong></h1> $step</textarea>
                    <script src='ckeditor/ckeditor.js'></script>
                    <script>
                        CKEDITOR.replace('content');
                    </script>           
                ";
        }
    ?>
</div>