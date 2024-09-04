<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Purrfect Breeds</title>
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

        .content {
            padding: 80px 20px 30px; 
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
        }

        .team-photos {
            display: flex;
            justify-content: center;
            padding-top: 60px;
            margin-bottom: 20px;
        }

        .team-photos img {
            max-width: 200px; 
            height: auto;
            margin: 0 10px;
            border-radius: 50%;
            border: 3px solid #ffb7c5;
        }

        .about-text {
            max-width: 800px; 
        }

        .about-text h2 {
            font-size: 28px;
            color: #333;
            margin-bottom: 15px;
        }

        .about-text p {
            font-size: 16px;
            line-height: 1.6;
            color: #666;
            margin-bottom: 15px; 
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

    <div class="content">
        <div class="team-photos">
            <img src="{{ asset('images/logo.jpg') }}" alt="Member 1 Photo">
            <img src="{{ asset('images/logo.jpg') }}" alt="Member 2 Photo">
            <img src="{{ asset('images/logo.jpg') }}" alt="Member 3 Photo">
        </div>
        <div class="about-text">
            <h2>About Us</h2>
            <p>We are a team of three passionate cat lovers dedicated to sharing our knowledge about different cat breeds. Our goal is to provide you with accurate and engaging information to help you understand and appreciate these amazing creatures. Whether you're a seasoned cat owner or just curious about our feline friends, we hope you find our website both informative and enjoyable.</p>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Purrfect Breeds. All rights reserved.</p>
    </footer>

</body>
</html>
