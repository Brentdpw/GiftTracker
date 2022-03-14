<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    
</head>
<body>

    <div class="header">
        <h1>
            GiftTracker
        </h1>
    </div>

    <div class="row">
        <div class="column left">
            
        </div>
        <div class="column right">
            <div class="input-field">
                    <label for="Username" class="input-label">
                        <br>
                        Username
                        <br>
                    </label>
                    <input type="text" name="Username" id="Username" class="input" placeholder="Enter your Username" required>

                    <br>
                </div>

                <div class="input-field">
                    <label for="password" class="input-label">
                        <br>
                        Email / Username
                        <br>
                    </label>
                    <input type="password" name="password" id="password" class="input" placeholder="Enter your password" required>

                    <br>
                </div>

                <br>
                <br>

                <a href="homepage.php">
                    <button class="button">
                        Sign in
                    </button>
                </a>

                <a href="signup.php">
                    <button class="button">
                        Sign up
                    </button>
                </a>
            </div>
        </div>
    </div>



</body>
</html>