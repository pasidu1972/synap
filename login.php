<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SYNAP solutions</title>
    <link rel="icon" href="img/Green_Black___White_Tan_Modern_Typography_Interior_Design_ArtDesign_Logo-removebg-preview 2.png">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <style>
        /* Reset some default browser styles */
        body,
        h1,
        p,
        form {
            margin: 0;
            padding: 0;
        }

        /* Apply the background color to the entire page */
        body {
            background-color: #D9D9D9;
            font-family: Arial, sans-serif;
            /* Specify your preferred font-family */
        }

        /* Style the header section */
        header {
            background-color: #333;
            /* Example background color for the header */
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        header h1 {
            font-size: 36px;
        }

        /* Style the login form container */
        .login-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            /* Example background color for the login container */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            /* Add a subtle shadow */
            border-radius: 5px;
            margin-top: 50px;
        }

        /* Style the form elements */
        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        form input[type="text"],
        form input[type="password"] {
            width: 95%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        form button {
            background-color: #333;
            /* Button background color */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>



<body>



    <br>



    <header>
        <div>
            <h1>Synap Solutions</h1>

            <?php
            $email = "";
            $password = "";

            if (isset($_COOKIE["email"])) {
                $email = $_COOKIE["email"];
            }

            if (isset($_COOKIE["password"])) {
                $password = $_COOKIE["password"];
            }
            ?>


        </div>
    </header>

    <div class="login-container">
        <h2>Login</h2>

        <label for="email">email:</label>
        <input class="form-control" type="email" id="email2" value="<?php echo $email; ?>" placeholder="ex:Jhon@gmail.com" />

        <label for="password">Password:</label>
        <input class="form-control" type="password" id="password2" value="<?php echo $password; ?>" placeholder="12345678" />




        <div class="col-6">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="rememberme">
                <label class="form-check-label" for="rememberme">
                    Remember Me
                </label>
            </div>
        </div>



        <div class="col-6 text-end">
            <a href="#" class="link-primary" onclick="forgotPassword();"> Forgotten Password?</a>
        </div>

        <div class="col-12 col-lg-6 d-grid">
            <button class="btn btn-primary" onclick="signin();"> Sign In</button>
        </div>

        <div >
    <a href="signup.php"> are you new  ?....  Register!</h1>
        </div>

    </div>


    
</body>
<script src="script.js"> </script>

<br>
<?php include "footer.php"; ?>

</html>