<?php
    include 'config.php';

    if(isset($_POST['user_delete'])){
        $userID = $_POST['user_delete'];

        $query="DELETE FROM user WHERE user_id='$userID' ";
        $query_run = mysqli_query($conn, $query);

        if($query_run){
            header('Location: adminHome.php');
            exit(0);
        }
        else{
            header('Location: adminHome.php');
            exit(0);
        }
    }
?>