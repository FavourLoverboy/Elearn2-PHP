<div class="main-body">
    <h3 class="title">Meals</h3>

    <div class="row no-p notification">
        <div class="col-xs-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Authors</th>
                        <th>Course Title</th>
                        <th>Image</th>
                        <th>Date</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            $tblquery = "SELECT meals.mealId, meals.userId, users.fn, users.ln, meals.id, meals.mealName, meals.image, meals.date FROM users INNER JOIN meals ON users.id = meals.userId ORDER BY meals.mealName";
                            $tblvalue = array();
                            $select = $collect->tbl_select($tblquery, $tblvalue);
                            foreach($select as $data){
                                extract($data);
                                ?>
                                <?php
                                    echo "
                                        <tr>
                                            <td>$ln $fn</td>
                                            <td>$mealName</td>
                                            <td><img src='./upload/$image' width='45px' height='45px' title='Meal Image' style='border-radius:50%;'></td>
                                            <td>$date</td>
                                            <td>
                                                <form action='all_course' method='POST'>
                                                    <input type='hidden' name='userId' value='$userId'>
                                                    <input type='hidden' name='mealId' value='$mealId'>
                                                    <input type='submit' name='view' class='btn btn-primary' value='View'>
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

    if($_POST['view']){
        extract($_POST);
        $_SESSION['userId'] = $userId;
        $_SESSION['mealId'] = $mealId;
        echo '<script> window.location="http://localhost/elearn2/view_course"; </script>';
    }

?>