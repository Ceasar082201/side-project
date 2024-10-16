<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Side-Project</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/Reborn.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="wrapper">
        <h3>Welcome to my Landing Page!</h3>
        {{-- <a href="{{route('welcome')}}"><i class="bi bi-umbrella-fill"></i></a> --}}
    </header>
    <div class="main-wrapper px-3">
        <div class="column">
        <a href="http://Facebook.com" target="_self"><i class="bi bi-facebook"></i></a>
        
        <a href="http://Youtube.com" target="_self"><i class="bi bi-youtube"></i></a>
        
        <a href="http://GooglePlay.com" target="_self"><i class="bi bi-google-play"></i></a>
        
        <a href="http://reddit.com" target="_self"><i class="bi bi-reddit"></i></a>
    </div>
    <section class=" container">
        <h3>Welcome Home</h3>
        <div class="img-fluid img-thumbnail">
            <img src="https://wallsdesk.com/wp-content/uploads/2016/11/Google-Images.jpg" alt="Hey Google" width="600" height="400">
            <img src="https://www.islabit.com/wp-content/uploads/2020/05/logo-windows-update.png" alt="Windows" width="669" height="400">
            
        </div>
        <div class="img-fluid img-thumbnail">
            <img src="https://www.islabit.com/wp-content/uploads/2020/05/logo-windows-update.png" alt="Windows" width="600" height="400">
            <img src="https://wallsdesk.com/wp-content/uploads/2016/11/Google-Images.jpg" alt="Hey Google" width="669" height="400">
        </div>
    </section>
</body>
</html>