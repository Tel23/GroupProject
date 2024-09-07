<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

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

        .logo-container {
            display: flex;
            align-items: center;
        }

        .logo {
            margin-right: 10px; 
            text-decoration: none; 
        }

        .logo-text {
            font-size: 20px; 
            color: #333; 
            font-weight: bold; 
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

        .contact {
            position: relative;
            min-height: 100vh;
            padding: 50px 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .contact .content {
            max-width: 800px;
            text-align: center;
        }

        .contact .content h2 {
            font-size: 45px;
            font-weight: 1000;
            text-align: center;
            color: rgb(181, 99, 117);
            margin-top: -60px;
        }

        .contact .content p {
            font-weight: 300;
            color: #fff;
            margin-bottom: -50px;
        }

        .container {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 30px;
        }

        .contactForm {
            width: 50%;
            padding: 40px;
            border-radius: 10px;
        }

        .contactForm h2 {
            font-size: 30px;
            color: #333;
            font-weight: 500;
            text-align: center;
        }

        .contactForm .inputBox {
            position: relative;
            width: 100%;
            margin-top: 20px;
        }

        .contactForm .inputBox input,
        .contactForm .inputBox textarea {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            margin: 10px 0;
            border: 1px solid #f4acb7;
            border-radius: 10px;
            background-color: #ffd4d4;
        }
        .contactForm .inputBox_submit{
            width: 16.7cm;
            font-size: 16px;
            border: 5px solid #f4acb7;
            border-radius: 10px;
            background-color: #ffd4d4;
        }

        .contactForm .inputBox span {
            display: block;
            font-size: 16px;
            margin-bottom: 5px;
            color: #666;
        }

        .contactForm input[type="submit"] {
            background-color: #f4acb7;
            color: #333;
            border: none;
            padding: 12px;
            cursor: pointer;
            width: 100%;
        }

        .contactForm input[type="submit"]:hover {
            background-color: #ffcad4;
        }

        #responseMessage {
            display: none;
            font-size: 16px;
            margin-top: 10px;
            background-color: #dfa5ac;
            color: #333;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            width: 16.1cm;
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
        <div class="logo-container" style="display: flex; align-items: center;">
            <a href="index.html" class="logo">
                <img src="{{ asset('images/logo.jpg') }}" alt="My Logo">
            </a>
            <span class="logo-text">Hi, {{ $username }}!</span>
        </div>

        <div class="nav-links">
        <a href="http://127.0.0.1:8000/home">Home</a>
            <a href="http://127.0.0.1:8000/content">Cat Breeds</a>
            <a href="http://127.0.0.1:8000/about">About Us</a>
            <a href="http://127.0.0.1:8000/contact">Contact Us</a>
        </div>
    </nav>

    <section class="contact">
        <div class="content">
            <h2 style="margin-top:-3cm;">Contact Us</h2>
            <p style="color:rgb(76, 75, 75);margin-top:-20px;"> Let's start purring! Share a little about yourself, and we'll be in touch with the purr-fect response soon</p>
        </div>
        <div class="container">
            <div class="contactForm">
                <form id="contactForm">
                    <div class="inputBox">
                        <span style= "margin-top:-15px;">Full Name</span>
                        <input type="text" name="fullName" required>
                    </div>
                    <div class="inputBox">
                        <span style= "margin-top:-15px;">Email</span>
                        <input type="email" name="email" required>
                    </div>
                    <div class="inputBox">
                        <span style= "margin-top:-15px;">Message</span>
                        <textarea name="message" required></textarea>
                    </div>
                    <div class="inputBox_submit">
                        <input type="submit" value="Send Message">
                    </div>
                    <div id="responseMessage">Message sent!</div>
                </form>
            </div>
        </div>
    </section>

    <script>
        document.getElementById('contactForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var responseMessage = document.getElementById('responseMessage');
            responseMessage.style.display = 'block';

            setTimeout(function() {
                responseMessage.style.display = 'none';
            }, 3000);

            event.target.reset();
        });
    </script>

    <footer>
        <p>&copy; 2024 Purrfect Breeds. All rights reserved.</p>
    </footer>
</body>
</html>