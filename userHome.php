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

        <!--Calendar-->
        <link rel="stylesheet" href="./calendar/fullcalendar-lib/fullcalendar.min.css" />
        <link rel="stylesheet" href="./fullcalendar/calendar-style.css">
        <link rel="stylesheet" href="fullcalendar/fullcalendar.min.css" />
        
        <title>User Home</title>
              

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

                        <li><a href="User-edit-user.php">Settings</a></li>

                        <li><a href="logout.php">Logout</a></li>

                    </ul>
                </nav>
            </div>
        </header>

            

        <div class="calendar">
            <div class="response"></div>
            <div id='calendar'></div>
        </div>
        
        <script src="fullcalendar/lib/jquery.min.js"></script>
        <script src="fullcalendar/lib/moment.min.js"></script>
        <script src="fullcalendar/fullcalendar.min.js"></script>

        <script src="./assets/JS/script.js"></script>
    </body>
</html>