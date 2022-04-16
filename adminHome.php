<?php 

include 'config.php';

session_start();

if (!isset($_SESSION['username'])) 
{
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./assets/css/login.css">
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/loginForms.css">
        <link rel="stylesheet" href="./assets/css/adminHome.css">
        <link rel="stylesheet" href="./assets/css/header.css">

        <title>Admin Home</title>
    </head>
    <body>
        <header>
            <div class="header-container">
                <a href="#">
                    <img src="./assets/images/User_icon_2.svg.png" alt="icon" class="icon">
                </a>
                
                <?php echo "<p class='icon'>" . $_SESSION['username'] . "</p>"; ?>
                
                <nav>
                    <ul>

                        <li><a href="logout.php">Logout</a></li>

                    </ul>
                </nav>
            </div>
        </header>

        <div>
            <table class="adminTable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Firstname</th>
                        <th>Lastname</th>
                        <th>Username</th>
                        <th>Birthdate</th>
                        <th>Gender</th>
                        <th>Email</th>
                        <th>Usertype</th>
                        <th colspan="2">Function</th>
                    </tr>
                </thead>

                <tbody>
                    <?php 
                        $sql = "SELECT user_id, firstname, lastname, username, birthdate, gender, email, UserAdmin from user";
                        $result = $conn-> query($sql);

                        if($result-> num_rows > 0){
                            while($row = $result-> fetch_assoc()){
                            ?>
                                <tr>
                                    <td><?= $row["user_id"];    ?></td>
                                    <td><?= $row["firstname"];  ?></td>
                                    <td><?= $row["lastname"];   ?></td>
                                    <td><?= $row["username"];   ?></td>
                                    <td><?= $row["birthdate"];  ?></td>
                                    <td><?= $row["gender"];     ?></td>
                                    <td><?= $row["email"];      ?></td>
                                    <td><?= $row["UserAdmin"];  ?></td>
                                    <td> 
                                        <form action="Admin-edit-user.php" method="POST">
                                            <input type="hidden" name="edit_id" value="<?= $row["user_id"];?>">
                                            <button type="submit" name="edit-user" class="btn-edit">Edit</button>
                                        </form>
                                    </td>
                                    <td> 
                                        <form action="delete.php" method="POST">
                                            <button type="submit" name="user_delete" value="<?= $row["user_id"];?>" class="btn-delete">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php
                            }
                        }
                    ?>
                </tbody>

            </table>
        </div>
        
    </body>
</html>