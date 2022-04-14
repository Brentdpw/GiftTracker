<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/login.css">
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/loginForms.css">
        <link rel="stylesheet" href="./assets/css/adminHome.css">
        <title>User Home</title>
    </head>
    <body>
        <div class="header">
            <?php echo "<h1>Welcome User: " . $_SESSION['username'] . "</h1>"; ?>
        </div>

        <div class="container">
            <form action="logout.php" class="login-email">
                <div class="input-group">
                    <button name="button" class="btn">Logout</button>
                </div>  
            </form>
        </div>

    </body>
</html>