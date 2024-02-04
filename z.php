<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Gigs - Synap Solutions</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Add Gigs - Synap Solutions</h1>
    </header>

    <main>
        <section class="add-gig">
            <h2>Add a Gig</h2>
            <form action="process_gig.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="gig-title">Gig Title:</label>
                    <input type="text" id="gig-title" name="gig-title" required>
                </div>

                <div class="form-group">
                    <label for="gig-description">Gig Description:</label>
                    <textarea id="gig-description" name="gig-description" required></textarea>
                </div>

                <div class="form-group">
                    <label for="gig-price">Price:</label>
                    <input type="number" id="gig-price" name "gig-price" required>
                </div>

                <div class="form-group">
                    <label for="gig-category">Category:</label>
                    <select id="gig-category" name="gig-category" required>
                        <option value="" disabled selected>Select a Category</option>
                        <option value="web_design">Web Design</option>
                        <option value="graphic_design">Graphic Design</option>
                        <option value="marketing_campaigns">Marketing Campaigns</option>
                        <option value="software_development">Software Development</option>
                        <!-- Add more categories here -->
                    </select>
                </div>

                <div class="form-group">
                    <label for="gig-images">Upload Images (up to 3 images):</label>
                    <input type="file" id="gig-images" name="gig-images[]" multiple accept="image/*" required>
                </div>

                <button type="submit">Submit Gig</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Synap Solutions</p>
    </footer>
</body>
</html>
