<?php
include_once("includes/connection.php");

if(isset($_POST['register'])){
    if ($_POST['password1'] == $_POST['password2'])
    {
        $email = $_POST['email'];
        $password= $_POST['password1'];
        $hashed_password = password_hash($password,PASSWORD_DEFAULT);
        $query = "INSERT INTO users(email,password) VALUES('$email','$hashed_password')";
        if(mysqli_query($connection, $query)){
           header("Location: index.php");
        }else{
            echo mysqli_error($connection);
        }
    }else {
        echo("Oops! Password did not match! Try again. ");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
$title ="register";
include_once("includes/header.php");
?>

<body class="bg-dark">

<div class="container">
    <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
            <form action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
                <div class="form-group">
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="email" id="inputEmail" class="form-control" name="email">
                        <label for="inputEmail">Email address</label>
                      </div>
                </div>
                <div class="form-group">
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" id="inputPassword" class="form-control" name="password1">
                                <label for="inputPassword">Password</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-label-group">
                                <input type="password" id="confirmPassword" class="form-control" name="password2">
                                <label for="confirmPassword">Confirm password</label>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="btn btn-primary btn-block" name="register">Register</button>
            </form>
            <div class="text-center">
                <a class="d-block small mt-3" href="login.html">Login Page</a>
                <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>

<?php
include_once("includes/footer.php");
?>
</body>
</html>


