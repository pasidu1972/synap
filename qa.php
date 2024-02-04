<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ - Synap Solutions</title>
    <style>
        /* Reset some default browser styles */
body, h1, h2, h3, p {
    margin: 0;
    padding: 0;
}

/* Apply basic styling */
body {
    font-family: Arial, sans-serif;
    background-color: #f7f7f7;
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

.faq {
    text-align: left;
}

h2 {
    font-size: 24px;
    margin-bottom: 20px;
    color:black /* Accent color */
}

.faq-item {
    margin-bottom: 20px;
    border: 1px solid #ccc;
    padding: 10px;
    border-radius: 5px;
}

h3.question {
    font-size: 18px;
    margin-bottom: 10px;
    cursor: pointer; /* Add cursor pointer to indicate clickability */
}

p.answer {
    font-size: 16px;
    display: none; /* Hide answers by default */
}

    </style>
</head>
<body>
    
    <main>
        <section class="faq">
            <h2>Frequently Asked Questions</h2>

            <!-- FAQ items -->
            <div class="faq-item">
                <h3 class="question">How do I create a freelance gig?</h3>
                <p class="answer">To create a gig, log in to your account and navigate to your dashboard. Click the "Create Gig" button, and follow the on-screen instructions to add details, pricing, and descriptions for your gig.</p>
            </div>

            <div class="faq-item">
                <h3 class="question">How can I contact a freelancer?</h3>
                <p class="answer">To contact a freelancer, visit their profile and click the "Contact" button. You can then send them a message to discuss your project requirements.</p>
            </div>

            <div class="faq-item">
                <h3 class="question">Is my payment information secure?</h3>
                <p class="answer">Yes, we use secure payment gateways to protect your payment information. Your data is encrypted and stored securely.</p>
            </div>

            <!-- Add more FAQ items here -->
        </section>
    </main>

   
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const questions = document.querySelectorAll('.question');
    
    questions.forEach(question => {
        question.addEventListener('click', function() {
            const answer = question.nextElementSibling;
            if (answer.style.display === 'block') {
                answer.style.display = 'none';
            } else {
                answer.style.display = 'block';
            }
        });
    });
});

    </script>
</body>
</html>
