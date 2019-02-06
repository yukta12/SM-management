<div class="row">
    <div class="col-md-12">
        <a href="students.php?source=add_student" class="btn btn-primary">Add Student</a>
    </div>
</div>
<div class="mb-5"></div>



<div class="row">
    <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Mobile</th>
                    <th>Emailid</th>
                    <th>Address</th>

                    <th>Dob</th>
                    <th>GaurdianName</th>
                    <th>GaurdianContact</th>
                    <th>Occupation</th>
                    <th>OfficeAddress</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php
                include_once ("../includes/functions.php");
                $resultset = getAllStudents();
                while($row = mysqli_fetch_assoc($resultset)){
                    $enrollment_no= $row['enrollment_no'];
                    $name = $row['student_name'];
                    $mobile = $row['mobile'];
                    $email_id = $row['email_id'];
                    $address = $row['address'];
                    $dob = $row['dob'];
                    $guardian_name = $row['guardian_name'];
                    $guardian_occupation = $row['guardian_occupation'];
                    $guardian_contact = $row['guardian_contact'];
                    $office_address = $row['office_address'];
                    $image = $row['image'];
                    echo<<<STUDENT
<tr>
<td>$enrollment_no</td   >
<td><img src="../images/$image" alt="" class="img-fluid" width="100"></td>
<td>$name</td>
<td>$mobile</td>
<td>$email_id</td>
<td>$address</td>

<td>$dob</td>
<td>$guardian_name</td>
<td>$guardian_contact</td>
<td>$guardian_occupation</td>
<td>$office_address</td>
<td><a href="posts.php?source=edit_post&post_id=post_id" class="btn btn-info"><span class="fa fa-edit"></span></a></td>
<td><a href="students.php?source=delete_student&enrollment_no=$enrollment_no" class="btn btn-danger"><span class="fa fa-trash"></span></a></td>


</tr>

STUDENT;

                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>