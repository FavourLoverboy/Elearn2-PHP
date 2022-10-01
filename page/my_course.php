<div class="main-body">
    <h3 class="title">My Meals</h3>

    <div class="row no-p notification">
        <div class="col-xs-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Course Title</th>
                        <th>Image</th>
                        <th>Date</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            $tblquery = "SELECT meals.mealName, meals.mealId, meals.image, meals.date FROM users INNER JOIN meals ON users.id = meals.userId ORDER BY meals.mealName";
                            $tblvalue = array();
                            $select = $collect->tbl_select($tblquery, $tblvalue);
                            foreach($select as $data){
                                extract($data);
                                ?>
                                <?php
                                    echo "
                                        <tr>
                                            <td>$mealName</td>
                                            <td><img src='./upload/$image' width='45px' height='45px' title='Meal Image' style='border-radius:50%;'></td>
                                            <td>$date</td>
                                            <td>
                                                <form action='my_course' method='POST'>
                                                    <input type='hidden' name='meal_id' value='$mealId'>
                                                    <input type='submit' name='edit' class='btn btn-primary' value='Edit'>
                                                </form>
                                            </td>
                                        </tr>
                                    ";
                            }
                        ?>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php 

    if($_POST['edit']){
        extract($_POST);
        $_SESSION['mealId'] = $meal_id;
        echo '<script> window.location="http://localhost/elearn2/course_edit"; </script>';
    }

?>