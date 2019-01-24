<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 1/25/2019
 * Time: 1:43 AM
 */
include_once ("connection.php");

function getAllStudents($condition =1){
    global $connection;
    $sql = "SELECT * FROM studentdetails WHERE $condition";
    $result = mysqli_query($connection, $sql);
    return $result;
}