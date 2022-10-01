<div class="main-body">
    <h3 class="title">Courses</h3>
    <a class="btn btn-info" onclick="popupBitcoinCashWithdrawal()">Add Course</a>

    <div class="row no-p notification">
        <div class="col-xs-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Author</th>
                        <th>Course Title</th>
                        <th>Image</th>
                        <th>Date</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            $tblquery = "SELECT users.fn, users.ln, meals.mealName, meals.image, meals.date FROM users INNER JOIN meals ON users.id = meals.userId ORDER BY meals.mealName";
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

<!-- Bitcoin Cash -->
<div class="container-fluid withdraw-popup popup-bitcoin-cash-withdrawal">
    <div class="main-box" style="height:auto;margin-top:180px;">
        <div class="head" style="height:auto">
            <div class="row no-p">
                <div class="col-xs-11">
                    <h4>Add Course</h4>
                </div>
                <div class="col-xs-1 close" onclick="popupBitcoinCashWithdrawal()">
                    <h4><span><i class='fa fa-times' aria-hidden='true'></i></span></h4>
                </div>
            </div>
        </div>
        <div class="bottom" style="height:240px">
            <form action="course_admin" method="POST" enctype="multipart/form-data">
                <input type="text" name="mealName" placeholder="Course Title" required>
                <input type="file" name="file" required>
                <input type="submit" name="submit" class="btn" value="Submit">
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
    if($_POST['submit']){
        extract($_POST);
        $mealId = time();
        $tblquery = "INSERT INTO meals VALUES(:id, :userId, :mealId, :mealName, :image, :date)";
        $tblvalue = array(
            ':id' => null,
            ':userId' => $_SESSION['myId'],
            ':mealId' => $mealId,
            ':mealName' => htmlspecialchars(ucwords($mealName)),
            ':image' => htmlspecialchars($fileName),
            ':date' => date("Y-m-d")
        );
        $insert = $collect->tbl_insert($tblquery, $tblvalue);
        if($insert){
            $_SESSION['mealId'] = $mealId;
            echo '<script> window.location="http://localhost/elearn2/notes"; </script>';
        }else{
            echo "
                <div class='alert alert-danger alert-dismissible fade show text-dark text-center' role='alert'>
                    An error occur while performing this task.
                </div>
            ";
        }
    }

?>