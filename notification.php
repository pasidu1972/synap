<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notification System - Synap Solutions</title>
    <link rel="stylesheet" href="styles.css">

    <style>
        /* Reset some default browser styles */
body, h1, h2, p, ul, li {
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

.notifications {
    text-align: left;
}

h2 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #0073e6; /* Accent color */
}

ul {
    list-style: none;
}

li {
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 5px;
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
        <h1>Notification System - Synap Solutions</h1>
    </header>

    <main>
        <section class="notifications">
            <h2>Notifications</h2>
            <ul id="notification-list">
                <!-- Notification items will be added here -->
            </ul>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Synap Solutions</p>
    </footer>
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
    const notificationList = document.getElementById('notification-list');
    
    // Sample notification data (you would load real data from your server)
    const notifications = [
        { text: 'New message from John', timestamp: '2 minutes ago' },
        { text: 'New gig available: Web Design', timestamp: '5 minutes ago' },
    ];

    // Function to create and add a notification to the list
    function addNotification(text, timestamp) {
        const notificationItem = document.createElement('li');
        notificationItem.innerHTML = `
            <strong>${text}</strong>
            <span class="timestamp">${timestamp}</span>
        `;
        notificationList.appendChild(notificationItem);
    }

    // Add sample notifications to the list
    notifications.forEach(notification => {
        addNotification(notification.text, notification.timestamp);
    });
});

    </script>
</body>
</html>
