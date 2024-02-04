<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SYNAP solutions</title>
    <link rel="icon"
        href="img/Green_Black___White_Tan_Modern_Typography_Interior_Design_ArtDesign_Logo-removebg-preview 2.png">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">

    <style>
        /* ... (Previous CSS styles) ... */

        /* Style the service request form container */
        .service-request-container {
            max-width: 400px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff; /* Example background color for the service request container */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Add a subtle shadow */
            border-radius: 5px;
        }



   /* Reset some default browser styles */
body, h1, p, form {
    margin: 0;
    padding: 0;
}

/* Apply the background color to the entire page */
body {
    background-color: #D9D9D9;
    font-family: Arial, sans-serif; /* Specify your preferred font-family */
}

/* Style the header section */
header {
    background-color: #333; /* Example background color for the header */
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

header h1 {
    font-size: 36px;
}


/* Style the form elements */
form label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}



form button {
    background-color: #333; /* Button background color */
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* Style the service request form container */
.service-request-container {
    max-width: 400px;
    margin: 20px auto;
    padding: 20px;
    background-color: #fff; /* Example background color for the service request container */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Add a subtle shadow */
    border-radius: 5px;
}

.service-request-container h2 {
    font-size: 24px;
    margin-bottom: 10px;
}

.service-request-container label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

.service-request-container input[type="text"],
.service-request-container input[type="email"] {
    width: 95%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.service-request-container textarea {
    width: 95%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.service-request-container button {
    background-color: #333; /* Button background color */
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}





        
    </style>
</head>
<body>
<?php include "menu.php";?>



    



<br>


    <header>
        <h1>Synap Solutions</h1>
    </header>
    
   

    <div class="service-request-container">
        <h2>Get Service</h2>

        <br>
        <form action="service_request.php" method="POST">
            <label for="service-type">Service Type:</label>
            <input type="text" id="service-type" name="service-type" required>

            <label for="description">Description:</label>
            <textarea id="description" name="description" rows="4" required></textarea>

            <label for="contact-email">Contact Email:</label>
            <input type="email" id="contact-email" name="contact-email" required>

            <label for="contact-email">Contact num.:</label>
            <input type="email" id="contact-num" name="contact-email" required>

            <button type="submit">Submit Request</button>
        </form>
    </div>
</body>
<?php include "footer.php";?>
</html>
