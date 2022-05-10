<?php
    include 'config.php';

    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/login.css">
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/loginForms.css">
        <link rel="stylesheet" href="./assets/css/adminHome.css">
        <link rel="stylesheet" href="./assets/css/header.css">
        <link rel="stylesheet" href="./assets/css/alerts.css">
        
        <title>Edit user account</title>
    </head>
    <body>

        <header>
            <div class="header-container">
                <a href="userHome.php">
                    <img src="./assets/images/User_icon_2.svg.png" alt="icon" class="icon">
                </a>
                
                <?php echo "<p class='icon'>" . $_SESSION['username'] . "</p>"; ?>
                
                <nav>
                    <ul>

                        <li><a href="userHome.php">Home</a></li>

                        <li><a href="logout.php">Logout</a></li>

                    </ul>
                </nav>
            </div>
        </header>

        <div class="container">

            <h3 class="undertitle">
                Edit user account
            </h3>

            <?php
                if(isset($_GET['message'])){
                    $message = $_GET['message'];
                    echo $message;
                }
            ?>

            <br>

            <form action="user-edit-userEditor.php" method="POST" enctype="multipart/form-data" class="login-email">
                <?php
                    $currentUser = $_SESSION['username'];
                    $sql = "SELECT * FROM user WHERE username = '$currentUser'";

                    $gotResult = mysqli_query($conn, $sql);

                    if($gotResult){
                        if(mysqli_num_rows($gotResult)>0){
                            while($row = mysqli_fetch_array($gotResult)){
                                ?>
                                
                                <div class="input-group">
                                    <input type="text" name="edit-firstname" value="<?php echo $row['firstname'] ?>" class="form-control" required>
                                </div>

                                <br>

                                <div class="input-group">
                                    <input type="text" name="edit-lastname" value="<?php echo $row['lastname'] ?>" class="form-control" required>
                                </div>

                                <br>

                                <div class="input-group">
                                    <input type="date" name="edit-birthdate" value="<?php echo $row['birthdate'] ?>" class="form-control" required>
                                </div>

                                <br>

                                <div class="input-group">
                                    <input type="email" name="edit-email" value="<?php echo $row['email'] ?>" class="form-control" required>
                                </div>

                                <br>
                                
                                <div class="input-group">
                                    <button type="submit" name="submit" class="btn">Update</button>
                                </div>

                                <?php
                            }
                        }
                    }
                ?>
                
            </form>
            
            <br>
            
            <form action="userHome.php" class="login-email">
                <div class="input-group">
                    <button name="button" class="btn">Cancel</button>
                </div>  
            </form>
            
        </div>
    </body>
</html>