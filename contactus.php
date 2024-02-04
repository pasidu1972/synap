<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SYNAP solutions</title>
    <link rel="icon" href="img/Green_Black___White_Tan_Modern_Typography_Interior_Design_ArtDesign_Logo-removebg-preview 2.png">
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">


    <style>
        /* Ensure the map fills the entire viewport */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        #map {
            height: 100%;
        }
    </style>

</head>

<style>
    @media (max-width: 768px) {
        body {
            background-image: url('img/bg.jpg');
        }
    }


    @media screen and (max-width: 600px) {
        .main-class {
            float: none;
            display: block;
            text-align: left;
        }
    }






    /* Reset some default browser styles */
    body,
    h1,
    h2,
    p,
    ul,
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

    /* Style the main content section */
    main {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        /* Example background color for the main content */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        /* Add a subtle shadow */

    }

    /* Style the contact information section */
    section {
        margin-bottom: 20px;
    }

    section h2 {
        font-size: 24px;
        margin-bottom: 10px;
    }

    ul {
        list-style-type: none;
        padding-left: 0;
    }

    li {
        margin-bottom: 10px;
    }

    a {
        color: #333;
        /* Link color */
        text-decoration: none;
    }

    /* Style the contact form */
    form label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    form input[type="text"],
    form input[type="email"],
    form textarea {
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

    /* Style the footer */
    footer {
        text-align: center;
        padding: 20px 0;
        background-color: #333;
        /* Example background color for the footer */
        color: #fff;
    }
</style>


<body>

<?php include "menu.php";?>





    </head>

    <br>

    <header>
        <h1>Contact Us</h1>
    </header>



    <main>
        <section>
            <h2>Contact Information</h2>
            <p>If you have any questions or inquiries, feel free to contact us through the following means:</p> <br>
            <ul>
                <li>Email: <a href="mailto:info@synapsolutions.com">info@synapsolutions.com</a></li>
                <li>Phone: <a href="tel:011-2222222">011-2222222</a></li>
                <li>Address: 123 synap solution , colombo 7, sri lanaka</li>
            </ul>
        </section>

        <section>
            <h2>Contact Form</h2>
            <form action="submit_contact.php" method="POST">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Submit</button>
            </form>
        </section>
    </main>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1397.0115823742697!2d80.97974386569922!3d7.963205960464745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afb5d4b1ee32f29%3A0x8b53285fe9ac604c!2sMithsara%20Holiday%20Resort!5e0!3m2!1ssi!2slk!4v1694470841633!5m2!1ssi!2slk" style="border:0; width: 100%; height: 300px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
         
    </div>




</body>



<div style="margin-top: 10px;">

    <?php include "footer.php"; ?>
</div>
</div>


</html>