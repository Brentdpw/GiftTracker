<?php 
    include 'config.php';

    session_start();

    error_reporting(0);

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['username'] = $row['username'];
            
            if($row["UserAdmin"]=="user"){
                header("Location: userHome.php?message=<div class='alert alert-succes'>Login Succes!</div>");
            }
            elseif($row["UserAdmin"]=="admin"){
                header("Location: adminHome.php?message=<div class='alert alert-succes'>Login Succes!</div>");
            }

        } else {
            header("Location: index.php?message=<div class='alert alert-danger'>Email of Password is wrong</div>");
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./assets/css/login.css">
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/loginForms.css">
        <link rel="stylesheet" href="./assets/css/preview.css">
        <link rel="stylesheet" href="./assets/css/alerts.css">
    </head>
    <body>

        <div class="header">
            <h1>
                GiftTracker - Home
            </h1>
        </div>

        <div class="row">

            <div class="column leftColumn">
                <div class="container-preview">
                    <img src="./assets/images/kalender.png" alt="kalender" class="kalender">
                </div>
            </div>

            <div class="column rightColumn">
                
                <div class="container">
                    <h2 class="title">
                        Welcome!
                    </h2>
                    <br>
                    <h3 class="undertitle">
                        Login
                    </h3>

                    <?php
                    if(isset($_GET['message'])){
                        $message = $_GET['message'];
                        echo $message;
                    }
                    ?>

                    <br>

                    <form action="" method="POST" class="login-email">
                        <div class="input-group">
                            <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                        </div>
                        <br>
                        <div class="input-group">
                            <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required> 
                        </div>
                        <br>
                        <div class="input-group">
                            <button name="submit" class="btn">Login</button>
                        </div>
                        <p class="login-register-text">Don't have an account? <a href="register.php">Register here</a></p>  
                    </form>

                </div>  
            </div>
        </div>
    </body>
</html>