<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Integration</title>
    <link rel="stylesheet" href="styles.css">
<style>
    /* Reset some default browser styles */
body, h1, h2, p {
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

.payment {
    text-align: center;
}

h2 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #0073e6; /* Accent color */
}

.payment-details {
    text-align: left;
    margin-bottom: 20px;
}

/* PayPal payment button container */
#paypal-button-container {
    text-align: center;
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
        <h1>Payment Integration</h1>
    </header>

    <main>
        <section class="payment">
            <h2>Make a Payment</h2>
            <div class="payment-details">
                <p>Product: Freelancer Service</p>
                <p>Price: $100</p>
            </div>

            <!-- PayPal Payment Button -->
            <div id="paypal-button-container"> <button> PAY</button></div>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Synap Solutions</p>
    </footer>

    <script src="https://www.paypal.com/sdk/js?client-id=YOUR_PAYPAL_CLIENT_ID"></script>
    <script >
        paypal.Buttons({
    createOrder: function(data, actions) {
        // Set up the transaction
        return actions.order.create({
            purchase_units: [{
                amount: {
                    value: '100' // Amount to charge the user (in this example, $100)
                }
            }]
        });
    },
    onApprove: function(data, actions) {
        // Capture the funds from the transaction
        return actions.order.capture().then(function(details) {
            // Handle the successful payment (e.g., update database, show confirmation message)
            alert('Payment successful. Transaction ID: ' + details.id);
        });
    },
    onError: function(err) {
        // Handle errors during the payment process
        console.error(err);
        alert('Payment failed. Please try again later.');
    }
}).render('#paypal-button-container');

    </script>
</body>
</html>
