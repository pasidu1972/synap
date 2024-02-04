<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancer Application - Synap Solutions</title>
   <style>/* Reset some default browser styles */
body, h1, h2, p, ul, form {
    margin: 0;
    padding: 0;
}

/* Apply basic styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
}

header {
    background-color: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
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
form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

form input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
}

form button {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

footer {
    text-align: center;
    padding: 20px 0;
    background-color: #333;
    color: #fff;
}
</style>
</head>
<body>
    <header>
        <h1>Synap Solutions</h1>
    </header>

    <main>
        <section class="application-form">
            <h2>Freelancer Application</h2>
            <form action="submit_application.php" method="POST">
                <label for="name">Full Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="skills">Skills:</label>
                <input type="text" id="skills" name="skills" required>

                <label for="portfolio">Portfolio:</label>
                <input type="text" id="portfolio" name="portfolio" required>

                <label for="resume">Resume/CV:</label>
                <input type="file" id="resume" name="resume" accept=".pdf,.doc,.docx" required>

                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>

                <button type="submit">Submit Application</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Synap Solutions</p>
    </footer>
</body>
</html>
