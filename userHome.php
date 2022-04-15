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

        <!--Calendar-->
        <link rel="stylesheet" href="./calendar/fullcalendar-lib/fullcalendar.min.css" />
        <link rel="stylesheet" href="./calendar/calender.css">
        <script src="./calendar/fullcalendar-lib/lib/jquery.min.js"></script>
        <script src="./calendar/fullcalendar-lib/lib/moment.min.js"></script>
        <script src="./calendar/fullcalendar-lib/fullcalendar.min.js"></script>
        <script src="./calendar/calender.js"></script>

        <title>User Home</title>

    </head>
    <body>
        <div class="header">
            <?php echo "<h1>Welcome User: " . $_SESSION['username'] . "</h1>"; ?>
        </div>

        <div class="calendar">
            <div class="response"></div>
            <div id='calendar'></div>
        </div>
        

        <div class="container">
            <form action="User-edit-user.php" class="login-email">
                <div class="input-group">
                    <input type="hidden" name="edit_id" value="<?= $_SESSION['username'];?>">
                    <button type="submit" name="edit-user" class="btn">Edit my account</button>
                </div>
            </form>

            <br>

            <form action="logout.php" class="login-email">
                <div class="input-group">
                    <button name="button" class="btn">Logout</button>
                </div>  
            </form>
        </div>

    </body>
</html>