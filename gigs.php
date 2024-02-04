<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gig Listing - Synap Solutions</title>
    <link rel="stylesheet" href="styles.css">


    <style>
        /* Reset some default browser styles */
body, h1, h2, h3, p, ul, li, span {
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

.gig-listing {
    text-align: center;
}

h2 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #0073e6; /* Accent color */
}

.gig {
    background-color: #f0f0f0;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
}

h3 {
    font-size: 18px;
    margin-bottom: 10px;
}

p {
    font-size: 16px;
    margin-bottom: 10px;
}

.price {
    font-size: 18px;
    font-weight: bold;
    color: #0073e6; /* Accent color */
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
        <section class="gig-listing">
            <h2>Find Freelance Gigs</h2>
            <div class="gig">
                <h3>Web Development</h3>
                <p>Looking for a web developer to build a portfolio website.</p>
                <span class="price">$250</span>
            </div>
            <div class="gig">
                <h3>Graphic Design</h3>
                <p>Need a graphic designer to create a logo for my business.</p>
                <span class="price">$50</span>
            </div>
            <!-- Add more gigs here -->
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Synap Solutions</p>
    </footer>
</body>
</html>
