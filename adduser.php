<!--Controleert of de user al bestaat, zo niet wordt de user toegevoegd aan de database-->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>add user</title>
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/signup.css">
    </head>
    <body>
        <?php
            //connectie naar de database
            include "database/DB.php";

            //variabelen voor de input
            $firstname = $_GET['firstname'];
            $lastname = $_GET['lastname'];
            $age = $_GET['age'];
            $gender = $_GET['Gender'];
            $paswoord = $_GET['paswoord'];

            $sqlGet = "SELECT * from user where firstname like '$firstname' and lastname like '$lastname';";
            $user = $DataBaseGiftTracker->getQuery($sqlGet);

            if(sizeof($user) > 0 )
            {
                ?>
                <script>
                    alert ("Sorry, this user already exists, pleas choose another username");
                </script>
                <?php
            } 
            else 
            {
                $sqlInsert = "INSERT INTO user(firstname, lastname, age, gender, paswoord) VALUES ('$firstname', '$lastname', '$age', '$gender', '$paswoord');";
                $DataBaseGiftTracker->insertQuery($sqlInsert);

                ?>

                <div class="container">
                    <h1 class="titel">  
                        User: <?php echo $_GET['firstname']." ";?> created!
                    </h1>

                    <br>
                    <br>

                    <div>
                        <img src="./assets/images/User_icon_2.svg.png" alt="user" class="user-image">
                    </div>

                    <br>

                    <div>
                        <h3 class="Center-text">
                            Welcome, <?php echo $_GET['firstname']." ".$_GET['lastname']; ?>!
                        </h3>
                    </div>

                    <br>
                    <br>

                    <a href="index.php">
                        <button class="button">
                            Go back to the homepage to login
                        </button>
                    </a>

                </div>

                <?php

            }
        ?>

    </body>
</html>