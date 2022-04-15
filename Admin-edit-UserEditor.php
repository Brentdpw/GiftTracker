<?php
include('config.php');

session_start();

if(isset($_POST['submit']))
{
    $firstname = $_POST['edit-firstname'];
    $lastname = $_POST['edit-lastname'];
    $username = $_POST['edit-username'];
    $email = $_POST['edit-email'];
    
    $query = "UPDATE user SET firstname='$firstname', lastname='$lastname', username='$username', email='$email' WHERE user_id='$user_id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        header('Location: adminHome.php'); 
    }
    else
    {
        header('Location: adminHome.php'); 
    }
}

?>