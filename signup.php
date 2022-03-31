<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign up</title>
        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/signup.css">
    </head>
    <body>
    <div class="header">
            <h1 class="titel">
                GiftTracker - Create account
            </h1>
        </div>

        <div class="container">
            <form action="adduser.php" method="GET">

                <div class="input-field">
                    <label for="firstname" class="input-label">
                        <br>
                        Firstname
                        <br>
                    </label>
                    <input type="text" name="firstname" id="firstname" class="input" placeholder="Enter your firstname" required>

                    <br>
                </div>

                <div class="input-field">
                    <label for="lastname" class="input-label">
                        <br>
                        Lastname
                        <br>
                    </label>
                    <input type="text" name="lastname" id="lastname" class="input" placeholder="Enter your lastname" required>

                    <br>
                </div>

                <div class="input-field">
                    <label for="age" class="input-label">
                        <br>
                        Age
                        <br>
                    </label>
                    <input type="number" name="age" id="age" class="input" placeholder="Select your age" required>

                    <br>
                </div>

                <div class="input-field">
                    <label for="gender" class="input-label">
                        <br>
                        Gender
                        <br>
                    </label>

                    <br>

                    <label for="gender" class="radio">
                        Male
                        <input type="radio" name="gender" id="gender" class="input" value="Male" required>
                        <div class="radio__radio"></div>
                    </label>

                    <label for="gender" class="radio">
                        Female
                        <input type="radio" name="gender" id="gender" class="input" value="Female" required> 
                        <div class="radio__radio"></div>
                    </label>
  
                    <br>
                </div>

                <div class="input-field">
                    <label for="paswoord" class="input-label">
                        <br>
                        Password
                        <br>
                    </label>
                    <input type="password" name="paswoord" id="paswoord" class="input" placeholder="Enter your password" required>

                    <br>
                </div>

                <br>
                
                <button id="button" class="button" name="create account">
                        Create account
                </button>

            </form>

            <div>
            <a href="index.php">
                <button class="button">
                    Home
                </button>
            </a>
            </div>   

        </div>
    </body>
</html>