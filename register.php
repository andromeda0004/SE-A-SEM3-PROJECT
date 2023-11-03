<?php
require_once "config.php";

$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

   
    if(empty(trim($_POST["username"]))){
        $username_err = "Username cannot be blank";
    }
    else{
        $sql = "SELECT id FROM users WHERE username = ?";
        $stmt = mysqli_prepare($conn, $sql);
        if($stmt)
        {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

    
            $param_username = trim($_POST['username']);

            
            if(mysqli_stmt_execute($stmt)){
                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt) == 1)
                {
                    $username_err = "This username is already taken"; 
                }
                else{
                    $username = trim($_POST['username']);
                }
            }
            else{
                echo "Something went wrong";
            }
        }
    }

    mysqli_stmt_close($stmt);


if(empty(trim($_POST['password']))){
    $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}


if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
}


if(empty($username_err) && empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt)
    {
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

        
        $param_username = $username;
        $param_password = password_hash($password, PASSWORD_DEFAULT);


        if (mysqli_stmt_execute($stmt))
        {
            header("location: login.php");
        }
        else{
            echo "Something went wrong... cannot redirect!";
        }
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up | StoryConnect</title>
    <link rel="stylesheet" href="loginstyles.css">
</head>

<body>
    <main>
        <div class="loginwithphoto">
            <div class="photo">
                <img src="loginphoto.png" alt="Log in photo" id="loginphoto">
            </div>
            <div class="logininfo">
                <span id="login">Sign Up</span>
                <p class="UserPolicy">By continuing, you agree to our <a href="">User Agreement</a> and <a
                        href="">Privacy Policy</a>.</p>
                <div class="liningup">
                    <form action="" method="post">
                        <fieldset class="username">
                            <input type="text" id="loginusername" name="username" placeholder="Username">
                        </fieldset>
                        <fieldset class="password">
                            <input type="password" id="loginpassword" name="password" placeholder="Password">
                        </fieldset>
                        <fieldset class="cpassword">
                            <input type="password" id="confirmpassword" name="confirm_password" placeholder="Confirm Password">
                        </fieldset>
                        <button class="login-signupbutton">sign up</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
</body>

</html>