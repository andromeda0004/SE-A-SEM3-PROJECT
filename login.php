<?php
//This script will handle login
session_start();

// check if the user is already logged in
if(isset($_SESSION['username']))
{
    header("location: index.php");
    exit;
}
require_once "config.php";
$username = $password = "";
$err = "";

// if request method is post
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if(empty(trim($_POST['username'])) || empty(trim($_POST['password'])))
    {
        $err = "Please enter username + password";
    }
    else{
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
    }


if(empty($err))
{
    $sql = "SELECT id, username, password FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $param_username);
    $param_username = $username;
    
    
    // Try to execute this statement
    if(mysqli_stmt_execute($stmt)){
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if(mysqli_stmt_fetch($stmt))
                    {
                        if(password_verify($password, $hashed_password))
                        {
                            // this means the password is corrct. Allow user to login
                            session_start();
                            $_SESSION["username"] = $username;
                            $_SESSION["id"] = $id;
                            $_SESSION["loggedin"] = true;

                            //Redirect user to welcome page 
                            header("location: index.php");
                            
                        }
                    }

                }

    }
}    


}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | StoryConnect</title>
  <link rel="stylesheet" href="loginstyles.css">
</head>

<body>
  <main>
    <div class="loginwithphoto">
      <div class="photo">
        <img src="loginphoto.png" alt="Log in photo" id="loginphoto">
      </div>
      <div class="logininfo">
        <span id="login">Log in</span>
        <p class="UserPolicy">By continuing, you agree to our <a href="">User Agreement</a> and <a href="">Privacy
            Policy</a>.</p>
        <div class="liningup">
          <form action="" method="post">
            <fieldset class="username">
              <input type="text" name= "username" id="loginusername" placeholder="Username">
            </fieldset>
            <fieldset class="password">
              <input type="password" name="password" id="loginpassword" placeholder="Password">
            </fieldset>
            <button class="login-signupbutton"><a href="index1.php">log in</a></button>
          </form>
        </div>
        <div class="Heretosignup">
          New to StoryConnect ? <a href="register.php" target="">Register</a>
        </div>
      </div>
    </div>
  </main>
</body>

</html>