<?php
include 'config.php';

// if(isset($_POST['edit-user']))
// {
//     $id = $_POST['edit_id'];
//     echo $id;
// }

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
        <title>Edit user account</title>
    </head>
    <body>
        <div class="header">
            <?php echo "<h1>Edit - Update</h1>"; ?>
        </div>

        <div class="container">

            <h3 class="undertitle">
                Edit user account
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
                    <button name="submit" class="btn">Update</button>
                </div> 
                
                <br>

            </form>

            <form action="adminHome.php" class="login-email">
                <div class="input-group">
                    <button name="button" class="btn">Cancel</button>
                </div>  
            </form>
            
        </div>
    </body>
</html>