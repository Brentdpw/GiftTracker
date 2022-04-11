<?php 

include 'config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);

	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		header("Location: welcome.php");

	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./assets/css/login.css">
        <link rel="stylesheet" href="./assets/css/style.css">
    </head>
    <body>

        <div class="header">
            <h1>
                GiftTracker - Home
            </h1>
        </div>

        <div class="row">

            <div class="column leftColumn">
                <h2>Column 1</h2>
                <p>Some text..</p>
            </div>

            <div class="column rightColumn">
                <h2>
                    Welcome!
                </h2>

                <h3>
                    Login
                </h3>
                
                <div class="container">
                    <form action="" method="POST" class="login-email">
                        <div class="input-group">
                            <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
                        </div>
                        <br>
                        <div class="input-group">
                            <input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required> 
                        </div>
                        <br>
                        <div class="input-group">
                            <button class="btn">Login</button>
                        </div>
                        <p class="login-register-text">Don't have an account? <a href="register.php">Register here</a></p>  
                    </form>
                </div>
                    
            </div>

        </div>

    </body>
</html>
