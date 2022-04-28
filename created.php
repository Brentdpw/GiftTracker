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
        <link rel="stylesheet" href="./assets/css/alerts.css">
    </head>
    <body>
        <div class="header">
            <h1 class="titel">
                GiftTracker - Account created
            </h1>
        </div>

        <div class="container">

            <h3 class="undertitle">
                Account created
            </h3>

            <?php
                if(isset($_GET['message'])){
                    $message = $_GET['message'];
                    echo $message;
                }
            ?>

            <br>
                
            <form action="index.php" class="login-email">
                <div class="input-group">
                    <button name="button" class="btn">Home</button>
                </div>
            </form>
            
        </div>
    </body>
</html>