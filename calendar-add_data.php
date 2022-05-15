<?php
    require_once "config.php";

    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
    }

    $title = isset($_POST['title']) ? $_POST['title'] : "";
    $start = isset($_POST['start']) ? $_POST['start'] : "";
    $end = isset($_POST['end']) ? $_POST['end'] : "";
    $user = $_SESSION['username'];

    $sqlInsert = "INSERT INTO calendar (username, title,start,end) VALUES ('".$user."','".$title."','".$start."','".$end ."')";

    $result = mysqli_query($conn, $sqlInsert);

    if (! $result) {
        $result = mysqli_error($conn);
    }
?>