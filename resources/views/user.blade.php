<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Purrfect Breeds</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
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

        .center {
            text-align: center;
        }

        .card {
            text-align: center;
            max-width: 400px;
            margin: 0 auto;
            margin-top: 50px;
        }

        .hidden {
            display: none; /* Initially hide the new set of cards */
        }

        .btn-pink {
            background-color: #FFAFAF ;
            color: white;
        }

        #container {
            padding: 10px;
            background-color: white;
            border-radius: 15px;
        }
    </style>
</head>
<body>

<div class="card" id="loginCard">
    <img class="card-img-top" src="cat.png" alt="Card image" style="width:100%">
    <div class="card-body">
        <div class="center">
            <h4 class="card-title">Hello!</h4>
            <br>
            <label for="UN">Please enter your username</label>
            <input type="text" id="UN" name="UN" placeholder="Username" required>
            <br><br>
            <button class="btn btn-primary btn-pink" onclick="redirectToWelcome()">Log In</button>
        </div>
    </div>
</div>

<!-- New set of cards (initially hidden) -->
<div id="newCardSet" class="hidden">
    <div class="card">
        <div class="card-body">
            <h4>Welcome, {{ $username }}!</h4> <!-- Dynamic username display -->
        </div>
    </div>
</div>

<script>
    function redirectToWelcome() {
        const username = document.getElementById("UN").value;
        const url = `/book-buddy/${username}`;
        window.location.href = url;  // Redirect to the new URL with the username
    }
</script>

</body>
</html>