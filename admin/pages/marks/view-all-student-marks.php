<div class="row">
    <div class="col-md-12">
        <a href="marks.php?source=add_marks" class="btn btn-primary">Add Marks</a>
    </div>
</div>
<div class="mb-5"></div>



<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Enrollment No</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>OS</th>
                    <th>JPR</th>
                    <th>SEN</th>

                    <th>CSY</th>
                    <th>Total</th>
                    <th>Percentage</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                include_once ("../includes/functions.php");
//               $sql = "SELECT studentmarks.*,studentdetails.image,studentdetails.student_name FROM studentmarks,studentdetails INNER JOIN studentmarks ON studentmarks.enrollment_no=studentdetails.enrollment_no";
//                global $connection;
                $sql = "SELECT studentmarks.*,studentdetails.image,studentdetails.student_name FROM studentmarks,studentdetails WHERE studentmarks.enrollment_no = studentdetails.enrollment_no";
                $result = mysqli_query($connection, $sql);
                while($row = mysqli_fetch_assoc($result)) {
                    $enrollment_no = $row['enrollment_no'];
//                    $name = $row['student_name'];
//                    $mobile = $row['mobile'];
                    $name = $row['student_name'];
                    $image = $row['image'];
                    $operatingsystem = $row['operatingsystem'];
                    $java = $row['java'];
                    $software_engg = $row['software_engg'];
                    $computer_security = $row['computer_security'];
                    $total = $row['total'];
                    $percentage = $row['percentage'];

//                    $image = $row['image'];
                    echo <<<STUDENT
<tr>
<td>$enrollment_no</td   >
<td><img src="../images/$image" alt="" class="img-fluid" width="100" height=""></td>
<td>$name</td>
<td>$operatingsystem</td>
<td>$java</td>
<td>$software_engg</td>

<td>$computer_security</td>
<td>$total</td>
<td>$percentage</td>
<td><a href="posts.php?source=edit_post&post_id=post_id" class="btn btn-info"><span class="fa fa-edit"></span></a></td>
<td><a href="students.php?source=delete_student&enrollment_no=enrollment_no" class="btn btn-danger"><span class="fa fa-trash"></span></a></td>


</tr>

STUDENT;

                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>