<?php
$title = "Add Marks";
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
                case "add_marks":
                    include_once("pages/marks/add-marks.php");
                    break;
                case "edit_student":
                    include_once("pages/marks/edit-marks.php");
                    break;
                case "delete_student":
                    include_once("pages/marks/delete-marks.php");
                    include_once ("pages/marks/view-all-student-marks.php");
                    break;
                default:
                    include_once ("pages/marks/view-all-student-marks.php");
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
