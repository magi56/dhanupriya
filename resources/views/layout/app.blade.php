<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand text-center" href="/form ">USER FORM</a>
            </div>
        </nav>
    
        <div class="container mt-4">
            @yield('content')
        </div>
    
        <footer class="text-center py-3 mt-5 bg-light">
            &copy; 2025 Laravel form Project
        </footer>
    </div>
</body>
</html>
