<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #faf2dd;
            color: #333;
            text-align: center;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            max-width: 600px;
            width: 100%;
            margin: 20px;
            text-align: center;
        }

        h1 {
            font-size: 36px;
            color: #FF6F6F;
            margin-bottom: 20px;
        }

        p {
            font-size: 18px;
            color: #666;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #FF6F6F;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }

        .btn-primary:hover {
            background-color: #ff4f4f;
        }

    </style>
</head>
<body>
<div class="container">
        <h1>Welcome, {{ $username }}!</h1>
        <p>We are glad to have you here. Feel free to explore the site!</p>
        <a href="/home" class="btn-primary">Go to Homepage</a>
    </div>
</body>
</html>
