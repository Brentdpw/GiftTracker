<?php
    require_once "config.php";

    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
    }

    $id = $_POST['id'];
    $title = $_POST['title'];
    $start = $_POST['start'];
    $end = $_POST['end'];
    $user = $_SESSION['username'];

    $sqlUpdate = "UPDATE calendar SET title='" . $title . "',start='" . $start . "',end='" . $end . "' WHERE id=".$id ." and username='".$user ."'";
    
    mysqli_query($conn, $sqlUpdate);
    mysqli_close($conn);
?>