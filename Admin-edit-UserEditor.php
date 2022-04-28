<?php
    include('config.php');

    session_start();

    if(isset($_POST['submit']))
    {
        $newFirstname = $_POST['edit-firstname'];
        $newLastname = $_POST['edit-lastname'];
        $newBirthdate = $_POST['edit-birthdate'];
        $newEmail = $_POST['edit-email'];
        
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