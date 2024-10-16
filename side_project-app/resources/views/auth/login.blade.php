<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Side_Project-App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <h1>Side-Project</h1>
    </header>
    <div class="main">
        <nav class="sidebar">
            <button class="btn btn-primary mb-1 nav-btn"><a href="#"><i class="bi bi-house"></i> Home</a></button>
            <button class="btn btn-primary mb-1 nav-btn"><a href="#"><i class="bi bi-activity"></i> Data</a></button>
        </nav>

        <main>

            @yield('content')

        </main>

    </div>
</body>
</html>