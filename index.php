<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12/20/2018
 * Time: 10:58 AM
 */

$id="";

$login_error="";
if(isset($_POST['login'])){
    //login button was pressed
    include_once ("includes/connection.php");
    $email = $_POST['email'];
    $password= $_POST['password'];

    $query = "SELECT * FROM users WHERE email ='{$email}'";
    $result = mysqli_query($connection,$query);

    if(mysqli_num_rows($result)>0){
        //there are some rows
            if(mysqli_num_rows($result)>1){
                //more that 1 row
                $login_error = <<<END
    <div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>Warning!</strong> Better check yourself, you're not looking too good.
</div>
END;

            }//end of if which checks more than 1 row
        else{
            //if you are here than you will be exactly one user
            if($row = mysqli_fetch_assoc($result)){
                //contents have been fetched and stored in row!
                $id = $row['id'];
                $db_email = $row['email'];
                $db_password = $row['password'];

                if(password_verify($password,$db_password)){
                    session_start();
                    $_SESSION['user_id'] = $id;
//                    echo "login successful";
                    header("Location: admin/index.php");
                }else{
                    $login_error = <<<END
                    <div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>no match!</strong> Password or email incorrect!
</div>
                    
END;
                }
            }//END OF row IF
        }
    }else{
        //no users found
        $login_error = <<<END
        <div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
  <strong>no users!</strong> Better check yourself, you're not looking too good.
</div>

END;

    }
    mysqli_close($connection);
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title ="Login";
include_once("includes/header.php");
?>
<body class="bg-dark">
<div class="container">
<div class="row">
    <div class=""></div>
    <div class="col-4 offset-4 mt-5">
        <?php
            echo $login_error;
        ?>

    </div>
</div>

    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Login</div>
            <div class="card-body">
                <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" >
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="required" autofocus="autofocus" name="email">
                            <label for="inputEmail">Email address</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="required" name="password">
                            <label for="inputPassword">Password</label>
                        </div>
                    </div>

                    <button class="btn btn-primary btn-block" name="login">Login</button>
                </form>
                <div class="text-center">
                    <a class="d-block small mt-3" href="register.php">Register an Account</a>
                </div>
            </div>
        </div>
    </div>

</div>
<?php
include_once("includes/footer.php");
?>
</body>
</html>
