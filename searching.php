<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gig Listing - Synap Solutions</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        /* Reset some default browser styles */
body, h1, h2, p, ul, form, label, input, textarea, select, option, button, img {
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
    color: #333; /* Accent color */
}

/* Search form styles */
#search-form {
    text-align: center;
    margin-bottom: 20px;
}

#category-filter {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

button[type="submit"] {
    background-color:#333; /* Accent color */
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

/* Gig listings styles */
.gig {
    background-color: #f0f0f0;
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
    display: flex;
    align-items: center;
}

.gig img {
    max-width: 100px;
    margin-right: 20px;
    border-radius: 5px;
}

.gig-details {
    flex-grow: 1;
    text-align: left;
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
    color: #333; /* Accent color */
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
   

    <main>
        <section class="gig-listing">
            <h2>Find Freelancers .</h2>

            <!-- Search form -->
            <form id="search-form">
                <label for="category">Filter by Category:</label>
                <select id="category-filter">
                    <option value="all">All Categories</option>
                </select>
                <button type="submit">Search</button>
            </form>

            
        </section>
    </main>

   
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    const categoryFilter = document.getElementById('category-filter');
    const searchForm = document.getElementById('search-form');
    const gigs = document.querySelectorAll('.gig');

    // Sample gig categories
    const gigCategories = [
        'web-design',
        'account-recovery',
        'video-editing',
        'graphic-design',
        'marketing-and-campaigns',
        'database-engineering',
        'software-and-app-development',
        'content-creating',
        'strategy-planing'
    ];

    // Populate the category dropdown
    const categoryDropdown = document.getElementById('category-filter');
    gigCategories.forEach(category => {
        const option = document.createElement('option');
        option.value = category;
        option.textContent = category.replace(/-/g, ' '); // Replace hyphens with spaces
        categoryDropdown.appendChild(option);
    });

    searchForm.addEventListener('submit', function (e) {
        e.preventDefault();
        const selectedCategory = categoryFilter.value;

        gigs.forEach(function (gig) {
            const gigCategory = gig.querySelector('h3').textContent.toLowerCase();

            if (selectedCategory === 'all' || gigCategory === selectedCategory) {
                gig.style.display = 'flex';
            } else {
                gig.style.display = 'none';
            }
        });
    });
});

    </script>
</body>
</html>
