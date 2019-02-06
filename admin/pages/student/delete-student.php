<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 1/25/2019
 * Time: 1:40 AM
 */

if(isset($_GET['enrollment_no'])){
    $enrollment_no = $_GET['enrollment_no'];
    include_once ("../includes/connection.php");

    $query = "DELETE FROM studentdetails WHERE enrollment_no = $enrollment_no";

    mysqli_query($connection,$query);
    if(mysqli_errno($connection)){
        die(mysqli_error($connection));
    }else{
        header("Location: students.php");
    }
}