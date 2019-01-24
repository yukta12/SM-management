<?php
    $title = "Add Students";
?>



<!DOCTYPE html>
<html lang="en">

<?php
include_once ("includes/header.php");
?>
<body id="page-top">

<?php
include_once ("includes/navigation.php")
?>

<div id="wrapper">

    <!-- Sidebar -->
    <?php
    include_once ("includes/siderbar.php");
    ?>
    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active"><?php
                    echo $title;
                    ?></li>
            </ol>
            <?php

            if(isset($_GET['source'])){
                $source = $_GET['source'];
            }else{
                $source="";
            }
            switch ($source){
                case "add_student":
                    include_once ("pages/student/add-student.php");
                    break;
                case "edit_student":
                    include_once ("pages/student/edit-student.php");
                    break;
                case "delete_student":
                    include_once ("pages/student/delete-student.php");
                    include_once ("pages/student/delete-student.php");
                    include_once ("pages/student/view-all-students.php");
                    break;
                default:
                    include_once ("pages/student/view-all-students.php");
            }
            ?>



        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /.content-wrapper -->

</div>
<?php
include_once ("includes/footer.php");
?>

</body>

</html>
