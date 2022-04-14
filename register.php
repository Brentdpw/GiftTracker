<?php

include 'config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])){
    header("Location: index.php");
}

if (isset($_POST['submit'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $birthdate = $_POST['birthdate'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $cpassword = md5($_POST['cpassword']);

    if ($password == $cpassword) {

        $sql = "SELECT * FROM user WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

            if(!$result->num_rows > 0){

                $sql = "INSERT INTO user (firstname, lastname, username, birthdate, gender, email, password)
                    VALUES ('$firstname', '$lastname', '$username', '$birthdate', '$gender', '$email', '$password')";
                $result = mysqli_query($conn, $sql);

                if($result){
                echo "<script> alert('Wow! User registration completed!') </script>";
                $firstname = "";
                $lastname = "";
                $username = "";
                $birthdate = "";
                $gender = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";

            } else {
                echo "<script> alert('Woops! Something went wrong.') </script>";
            }

        } else {
            echo "<script> alert('Woops! Email already exists') </script>";
        }

    } else {
        echo "<script> alert('Password Not Matched!') </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign up</title>
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/signup.css">
        <link rel="stylesheet" href="./assets/css/loginForms.css">
    </head>
    <body>
        <div class="header">
            <h1 class="titel">
                GiftTracker - Register form
            </h1>
        </div>

        <div class="container">

            <h3 class="undertitle">
                Create account
            </h3>

            <form action="" method="POST" class="login-email">

                <div class="input-group">
                    <input type="text" placeholder="Firstname" name="firstname" value="<?php echo $firstname; ?>" required>
                </div>

                <br>

                <div class="input-group">
                    <input type="text" placeholder="Lastname" name="lastname" value="<?php echo $lastname; ?>" required>
                </div>

                <br>

                <div class="input-group">
                    <input type="date" name="birthdate" placeholder="Select your birthdate" required>
                </div>

                <br>

                <div class="input-group">
                    <select name="gender" id="gender" class="gender" required>
                        <option disabled selected>--Select gender--</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="x">x</option>
                    </select>    
                </div>
                
                <br>

                <div class="input-group">
                    <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
                </div>

                <br>

                <div class="input-group">
                    <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                </div>

                <br>

                <div class="input-group">
                    <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
                </div>

                <br>

                <div class="input-group">
                    <input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
                </div>

                <br>

                <div class="input-group">
                    <button name="submit" class="btn">Register</button>
                </div>

                <p class="login-register-text">Allready have an account? <a href="index.php">Login here</a></p>
            </form>
        </div>
    </body>
</html>