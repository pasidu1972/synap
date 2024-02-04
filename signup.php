<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up - Synap Solutions</title>
    <link rel="icon" href="img/Green_Black___White_Tan_Modern_Typography_Interior_Design_ArtDesign_Logo-removebg-preview 2.png">
    <link rel="icon" href="resourses/logo.svg">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    


    <style>
        /* Reset some default browser styles */
body, h1, h2, p, ul, form {
    margin: 0;
    padding: 0;
}

/* Apply basic styling */
body {
    font-family: Arial, sans-serif;
    background-color: #D9D9D9;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
    display: flex;

}

header h1 {
    font-size: 36px;
}

main {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    border-radius: 5px;
}

h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

form label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

form input[type="text"],
form input[type="email"],
form input[type="password"],
form input[type="tel"],
form input[type="tel"],
form input[type="tel"],
form select {
    width: 95%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

form button {
    background-color: #333; /* Accent color */
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}




    </style>
</head>
<body>
    <header>
    <h1 style="margin-left: 570px;">Synap Solutions</h1>  
     <a href="index.php" type="submit" style="margin-left:550px; margin-right:auto; background-color: #D9D9D9; 
    color: #333;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;">Home</button></a>
    </header>

    <main>
        <section class="signup-form">
            <h2>Register for SYNAP</h2>
            <br>
            <form action="signup.php" method="POST">
                <label for="first-name">First Name:</label>
                <input class="form-control" type="text" placeholder="ex:Jhon" id="fname" />

                <label for="last-name">Last Name:</label>
                <input class="form-control" type="text" placeholder="ex:Lincolin" id="lname" />
                

                <label for="email">Email:</label>
                <input class="form-control" type="email" placeholder="ex:Jhon@gmail.com" id="email" />
            
                <label for="password">Password:</label>
                <input class="form-control" type="password" placeholder="***********" id="password" />

                <label for="retype-password">Retype Password:</label>
                <input class="form-control" type="password" placeholder="***********" id="password" />

                <label for="mobile">Mobile:</label>
                <input class="form-control" type="text" placeholder="0700000000" id="mobile" />

                <div class="col-6">
                                <label class="form-label">Gender</label>
                                <select class="form-control" id="gender">
                                    <option value="0">Select your Gender</option>
                                    <?php
                                    require "connection.php";

                                    $rs = Database::search("SELECT * FROM `gender`");
                                    $n = $rs->num_rows;

                                    for ($x = 0; $x < $n; $x++) {
                                        $d = $rs->fetch_assoc();

                                    ?>

                                        <option value="<?php echo $d["id"]; ?>"><?php echo $d["gender_name"]; ?></option>

                                    <?php

                                    }

                                    ?>
                                </select>

                                <label for="skills" style="width: 95%;">Skills:</label>
                <input type="text" id="skills" name="skills" required>

                
                <label for="resume">Resume/CV:</label>
                <input type="file" id="input_resume" name="resume" accept=".pdf,.doc,.docx" required>

                <label for="message">special Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                            </div>
                                <div class="col-12 col-lg-6 d-grid">
                                <button class="sign up" onclick="signUp(event);"> Sign Up</button>
                            </div>
                            <a href="login.php"> are you registered ?.... now login!</h1>
                            </div>
            </form>
        </section>
    </main>



    



    <?php include "footer.php"; ?>

    <script src="script.js"></script>
    
</body>
</html>
