<?php
$student_name = "";
if(isset($_POST['search'])){
    if($_POST['enrollment_no'] != "") {
        include_once("../includes/connection.php");
        $enrollment_no = $_POST['enrollment_no'];
        $sql = "SELECT student_name FROM studentdetails WHERE enrollment_no = $enrollment_no";
        $result = mysqli_query($connection, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $student_name = $row['student_name'];
        }
    }else{
        $student_name = "enter enrollment number XD";
    }
}
if(isset($_POST['add_marks'])){
    $enrollment_no = $_POST['enrollment_no'];
    $os = $_POST['os'];
    $jpr = $_POST['jpr'];
    $sen = $_POST['sen'];
    $cs = $_POST['cs'];

    $total = $os + $jpr + $sen + $cs;
    $percentage = ($total*100)/400;
    //inserting values

    include_once ("../includes/connection.php");

    $query = "INSERT INTO studentmarks(enrollment_no,operatingsystem,java,software_engg,computer_security,total,percentage) VALUES ($enrollment_no,$os,$jpr,$sen,$cs,$total,$percentage)";

    mysqli_query($connection,$query);
    if(mysqli_errno($connection)){
//        die("hi");
        die(mysqli_error($connection));
    }else{
        header("Location: marks.php");
    }

}

?>
<div class="row">
    <div class="col-md-12">
        <form action="" method="post" role="form" enctype="multipart/form-data">
            <legend>Add Students</legend>
            <hr>

            <div class="form-group">
                <label for="enrollment_no">Enrollment no</label>
                <input type="text" class="form-control" name="enrollment_no" id="enrollment_no">
            </div>
<!--            <button type="submit" class="btn btn-primary" name="search">Search Student</button>-->
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name"  class="disabled" readonly value="<?php echo $student_name;?>">
            </div>
            <div class="form-group">
                <label for="os">Operating system</label>
                <input type="text" class="form-control" name="os" id="os">
            </div>

            <div class="form-group">
                <label for="jpr">Java</label>
                <input type="text" class="form-control" name="jpr" id="jpr">
            </div>
            <div class="form-group">
                <label for="sen">Software Engineering</label>
                <input type="text" class="form-control" name="sen" id="sen">
            </div>
            <div class="form-group">
                <label for="cs">Computer security</label>
                <input type="text" class="form-control" name="cs" id="cs">
            </div>
            <button type="submit" class="btn btn-primary" name="add_marks">ADD</button>
        </form>
        <div class="mb-5"></div>
    </div>
</div>
