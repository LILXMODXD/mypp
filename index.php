<?php
// Set the content type to HTML
header('Content-Type: text/html; charset=UTF-8');

// Display a beautiful and welcoming page
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Hello World</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .message {
            background-color: #007bff;
            color: white;
            padding: 20px;
            border-radius: 8px;
            font-size: 2rem;
            text-align: center;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class='message'>
        <h1>Hello, World! Welcome to PHP!</h1>
    </div>
</body>
</html>";
?>
