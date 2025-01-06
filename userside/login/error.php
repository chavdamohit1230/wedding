<?php
http_response_code(404); // Set HTTP response code to 404
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to external CSS -->
    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <div class="error-container">
        <div class="error-header">
            <!-- Icon -->
            <div class="error-icon">
                <i class="fas fa-exclamation-circle"></i>
            </div>
            <!-- 404 Text -->
            <h1>404</h1>
        </div>
        <!-- Error Message -->
        <h2>Oops! Page Not Found</h2>
        <p>The page you're looking for doesn't exist or has been moved.</p>
        <a href="/" class="home-button">Go Back to Home</a>
    </div>
</body>

</html>