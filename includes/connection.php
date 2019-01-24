<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22/1/19
 * Time: 11:41 AM
 */



include_once ("config.php");
$connection = mysqli_connect(HOST,USER, PASSWORD,DB_NAME);
if($connection){
//   echo "Connection Successful";
}else{
    die(mysqli_connect_error($connection));
}
?>
