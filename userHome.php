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
        <link rel="stylesheet" href="./assets/css/popup.css">

        <!--Calendar-->
        <link rel="stylesheet" href="./fullcalendar/calendar-style.css">
        <link rel="stylesheet" href="./fullcalendar/fullcalendar.min.css" />
        
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

            <div id="create-pupup" class="popup">
                <div class="cancel" onclick="closePopup();"><img src="./assets/images/kruis.png" alt="" class="cancel"></div>
                <form id="create-form"> 
                    <p class="center-title">Create activity</p>

                    <label for="titleAct">Title:</label><br>
                    <input type="text" id="titleAct" name="TitleAct"><br>

                    <label for="start_date">Start date:</label><br>
                    <input type="date" id="start_date" name="start_date"><br>
                    <label for="end_date">End date:</label><br>
                    <input type="date" id="end_date" name="end_date">

                    <input type="button" value="Create" id="popup-button">
                </form>
            </div>
            
        </div>
        
        <script src="fullcalendar/lib/jquery.min.js"></script>
        <script src="fullcalendar/lib/moment.min.js"></script>
        <script src="fullcalendar/fullcalendar.min.js"></script>
        <script src="./assets/JS/calendar-script.js"></script>

    </body>
</html>