<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
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

        .card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin: 20px auto;
            max-width: 500px;
            background-color: #fff;
        }

        .card-img-top {
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }

        .card-body {
            padding: 20px;
        }

        .center {
            text-align: center;
        }

        .btn-pink {
            background-color: pink;
        }
    </style>
</head>
<body>

    <nav>
        <a href="/" class="logo">
            <img src="{{ asset('images/logo.jpg') }}" alt="My Logo">
        </a>
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/about">About Us</a>
            <a href="/content">Cat Breeds</a>
        </div>
    </nav>

    <div class="content">
        <div class="card" id="loginCard">
            <img class="card-img-top" src="{{ asset('images/cat.jpg') }}" alt="Card image" style="width:100%">
            <div class="card-body">
                <div class="center">
                    <h4 class="card-title">Hello, {{ $username }}!</h4>
                    <br>
                    <label for="UN">Please enter your username</label>
                    <input type="text" id="UN" name="UN" placeholder="Username" required>
                    <br>
                    <br>
                    <button class="btn btn-primary btn-pink" onclick="showWelcomeMessage()">Log In</button> 
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Purrfect Breeds. All rights reserved.</p>
    </footer>

    <script>
        function showWelcomeMessage() {
            const username = document.getElementById('UN').value;
            alert('Welcome, ' + (username || 'Guest') + '!');
        }
    </script>

</body>
</html>
