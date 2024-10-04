<!-- resources/views/Components/layout.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <!-- Header -->
    @unless (Request::is('/'))
    <header>
        <nav>
        <div class="logo-container" style="display: flex; align-items: center;">
                <a href="index.html" class="logo">
                    <img src="{{ asset('images/logo.jpg') }}" alt="My Logo">
                </a>
                <span class="logo-text">Hi, {{ $username }}!</span>
            </div>

            <div class="nav-links">
                <a href="http://127.0.0.1:8000/home">Home</a>
                <a href="http://127.0.0.1:8000/content">Dog Breeds</a>
                <a href="http://127.0.0.1:8000/about">About Me</a>
                <a href="http://127.0.0.1:8000/restricted">Restricted</a>
                <a href="http://127.0.0.1:8000/contact">Contact Us</a>
                
            </div>
        </nav>
    </header>
    <!-- End Header -->
    @endunless

    <!-- Main Content Section -->
    <main>
        @yield('content')
    </main>

    @unless (Request::is('/'))
    <footer>
        <p>&copy; 2024 Pawsome Breeds. All rights reserved.</p>
    </footer>
    @endunless
</body>
</html>