<?php
    include('config.php');

    session_start();

    if(isset($_POST['submit']))
    {
        $newFirstname = $_POST['edit-firstname'];
        $newLastname = $_POST['edit-lastname'];
        $newBirthdate = $_POST['edit-birthdate'];
        $newEmail = $_POST['edit-email'];
        
        if(!empty($newFirstname) && !empty($newLastname) && !empty($newBirthdate) && !empty($newEmail)){
            //$loggedUser = ;
            $sql = "UPDATE user SET firstname = '$newFirstname', lastname = '$newLastname', birthdate = '$newBirthdate', email = '$newEmail' WHERE username = '$loggedUser'";

            $results = mysqli_query($conn, $sql);

            header("Location: adminHome.php?message=<div class='alert alert-succes'>Updated!</div>"); 
            exit;
        }
        else
        {
            header("Location: adminHome.php?message=<div class='alert alert-succes'>Not Updated!</div>"); 
            exit;
        }
    }
?>