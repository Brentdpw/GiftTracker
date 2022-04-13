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
        <title>User Home</title>
    </head>
    <body>
        <?php echo "<h1>Welcome User: " . $_SESSION['username'] . "</h1>"; ?>
        <h2>You are on the user page</h2>
        <a href="logout.php">Logout</a>
    </body>
</html>