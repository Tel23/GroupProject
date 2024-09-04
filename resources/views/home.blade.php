<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purrfect Breeds</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #faf2dd;
            color: #333;
            box-sizing: border-box; 
        }

        nav {
            background-color: #FFAFAF; 
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            position: fixed;
            width: 100%;
            top: 0;
            left: 0;
            z-index: 1000; 
            box-sizing: border-box;
        }

        .logo img {
            height: 40px; 
            width: auto;
            display: block;
        }

        .nav-links {
            display: flex;
        }

        .nav-links a {
            color: #fff;
            text-decoration: none;
            padding: 14px 20px;
            font-weight: 600;
        }

        .nav-links a:hover {
            background-color: #fce4e4; 
            color: #333;
            border-radius: 5px;
        }

        .banner {
            width: 100%;
            height: 350px;
            background-image: url('{{ asset('images/banner.jpg') }}');
            background-size: cover;
            background-position: center;
            margin-top: 50px; 
        }

        .content {
            padding: 30px 20px;
            text-align: center;
            margin-top: 0; 
            margin-bottom: 80px;
        }

        .content h2 {
            font-size: 28px;
            color: #333;
            margin-bottom: 15px;
        }

        .content p {
            font-size: 16px;
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto;
            color: #666;
        }

        footer {
            background-color: #FFAFAF;
            color: #333;
            padding: 15px;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        footer p {
            margin: 5px 0;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <nav>
        <a href="index.html" class="logo">
            <img src="{{ asset('images/logo.jpg') }}" alt="My Logo">
        </a>
        <div class="nav-links">
            <a href="http://127.0.0.1:8000/">Home</a>
            <a href="http://127.0.0.1:8000/about">About Us</a>
            <a href="http://127.0.0.1:8000/content">Cat Breeds</a>
        </div>
    </nav>

    <div class="banner"></div>

    <div class="content">
        <h2>Welcome to Purrfect Breeds!</h2>
        <p>Dive into the fascinating world of cat breeds! Discover the origins, unique traits, and charming quirks of each breed. Whether you're a proud cat owner or a passionate cat lover, you're in for a delightful journey filled with intriguing insights and adorable feline facts. Get ready to explore and be amazed!</p>
    </div>

    <footer>
        <p>&copy; 2024 Purrfect Breeds. All rights reserved.</p>
    </footer>

</body>
</html>
 
