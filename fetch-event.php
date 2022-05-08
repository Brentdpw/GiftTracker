<?php
    require_once "config.php";

    session_start();

    if (!isset($_SESSION['username'])) {
        header("Location: index.php");
    }

    $json = array();
    $sqlQuery = "SELECT * FROM calendar WHERE username = '" . $_SESSION['username'] . "' ORDER BY id";

    $result = mysqli_query($conn, $sqlQuery);
    $eventArray = array();
    
    while ($row = mysqli_fetch_assoc($result)) {
        array_push($eventArray, $row);
    }
    mysqli_free_result($result);

    mysqli_close($conn);
    echo json_encode($eventArray);
?>