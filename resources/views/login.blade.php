<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Purrfect Breeds</title>
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
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden; 
        }

        .card {
            background: rgba(255, 255, 255, 0.9);
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            padding: 20px;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .card-img-top {
            width: 100%;
            height: auto;
            border-bottom: 1px solid #ddd;
        }

        .card-body {
            padding: 15px;
        }

        .center {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .btn-primary {
            background-color: #FFAFAF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn-primary:hover {
            background-color: #fce4e4;
            color: #333;
        }
    </style>
</head>
<body>

    <div class="card">
        <img class="card-img-top" src="{{ asset('images/cat.jpg') }}" alt="Card image">
        <div class="card-body">
            <div class="center">
                <h4 class="card-title">Hello!</h4>
                <form action="{{ url('/user') }}" method="GET">
                    <label for="UN">Please enter your username:</label>
                    <input type="text" id="username" name="username" value="{{ request('username') }}" pattern="[a-zA-Z]+" title="Please enter only alphabetic characters.">
                    <br><br>
                    <button type="submit" class="btn-primary">Purrfect</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
