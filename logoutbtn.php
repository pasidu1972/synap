<!DOCTYPE html>

<?php
// Start or resume the session
session_start();

// Destroy the session (log out)
session_destroy();

// Redirect to the login page or any other desired page
header("Location: login.php");
exit();
?>


<html>
    <body>

    <form action="logout.php" method="POST">
    <type="submit" id="logout-button" style="background-color: rgb(219, 210, 210); /* Red background color */
    color: #2c1c1c; /* White text color */
    padding: 10px 20px; /* Padding for the button */
    border: none; /* Remove button border */
    border-radius: 5px; /* Rounded corners */
    cursor: pointer;
    font-weight: bold; margin-left: 1300px; ">Logout</button>
</form>

    </body>
</html>