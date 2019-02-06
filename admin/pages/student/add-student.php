<?php
if(isset($_POST['add_student'])){
    $student_name = $_POST['student_name'];
    $mobile = $_POST['mobile'];
    $email_id = $_POST['email_id'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $parent_name = $_POST['parent_name'];
    $parent_occupation = $_POST['parent_occupation'];
    $parent_contact = $_POST['parent_contact'];
    $office_address = $_POST['office_address'];

    $student_image= $_FILES['student_image']['name'];
    $student_image_temp = $_FILES['student_image']['tmp_name'];





    move_uploaded_file($student_image_temp,"../images/$student_image");

    //inserting values

    include_once ("../includes/connection.php");

    $query = "INSERT INTO studentdetails(student_name,mobile,email_id,address,dob,guardian_name,guardian_occupation,guardian_contact,office_address,image) VALUES ('$student_name',$mobile,'$email_id','$address','$dob','$parent_name','$parent_occupation',$parent_contact,'$office_address','$student_image')";

    mysqli_query($connection,$query);
    if(mysqli_errno($connection)){
//        die("hi");
        die(mysqli_error($connection));
    }else{
        header("Location: students.php");
    }

}
?><div class="row">
    <div class="col-md-12">
        <form action="" method="post" role="form" enctype="multipart/form-data">
            <legend>Add Students</legend>
            <hr>

            <div class="form-group">
                <label for="student_name">Student Full Name</label>
                <input type="text" class="form-control" name="student_name" id="student_name">
            </div>
            <div class="form-group">
                <label for="mobile">Mobile</label>
                <input type="text" class="form-control" name="mobile" id="mobile">
            </div>

            <div class="form-group">
                <label for="email_id">Email</label>
                <input type="text" class="form-control" name="email_id" id="email_id">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea name="address" id="address" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="dob">Date Of birth</label>
                <input type="date" class="form-control" name="dob" id="dob">
            </div>
            <div class="form-group">
                <label for="parent_name">Guardian Name</label>
                <input type="text" class="form-control" name="parent_name" id="parent_name">
            </div>
            <div class="form-group">
                <label for="parent_occupation">Guardian occupation</label>
                <input type="text" class="form-control" name="parent_occupation" id="parent_occupation">
            </div>
            <div class="form-group">
                <label for="parent_contact">Guardian Contact</label>
                <input type="text" class="form-control" name="parent_contact" id="parent_contact">
            </div>
            <div class="form-group">
                <label for="office_address">Office address</label>
                <textarea name="office_address" id="office_address" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="student_image">Student image</label>
                <input type="file" class="form-control-file" name="student_image" id="student_image">
            </div>
            <button type="submit" class="btn btn-primary" name="add_student">ADD</button>
        </form>
        <div class="mb-5"></div>
    </div>
</div>
