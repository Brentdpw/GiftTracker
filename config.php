<?php
    $server = "ID361990_GiftTracker.db.webhosting.be";
    $user = "ID361990_GiftTracker";
    $pass = "gifttracker123";
    $database = "ID361990_GiftTracker";

    $conn = mysqli_connect($server, $user, $pass, $database);

    if (!$conn){
        die("<script>alert('connection failed.')</script>");
    }
?>