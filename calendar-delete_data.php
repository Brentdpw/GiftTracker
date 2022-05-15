<?php
    require_once "config.php";

    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
    }

    $id = $_POST['id'];
    $user = ($_SESSION['username']);
    $sqlDelete = "DELETE from calendar WHERE id=".$id ." and username='".$user ."'";

    mysqli_query($conn, $sqlDelete);
    echo mysqli_affected_rows($conn);

    mysqli_close($conn);
?>