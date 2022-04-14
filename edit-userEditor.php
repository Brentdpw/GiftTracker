<?php
include('config.php');

session_start();

if(isset($_POST['submit']))
{
    $firstname = $_POST['edit-firstname'];
    $lastname = $_POST['edit-lastname'];
    $username = $_POST['edit-username'];
    $email = $_POST['edit-email'];
    
    $query = "UPDATE user SET firstname='$firstname', lastname='$lastname', username='$username', email='$email' WHERE user_id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Updated";
        $_SESSION['status_code'] = "success";
        header('Location: adminHome.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT Updated";
        $_SESSION['status_code'] = "error";
        header('Location: adminHome.php'); 
    }
}

?>