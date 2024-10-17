<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Side_Project-App</title>
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/Reborn.png')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" integrity="sha384-tViUnnbYAV00FLIhhi3v/dWt3Jxw4gZQcNoSCxCIFNJVCx7/D55/wXsrNIRANwdD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <form action="{{ route('register')}}" method="post">
        @csrf
        <div class="input_1">
        <label for="name"><i class="bi bi-person"></i></label>
            <input type="text" name="name" id="name" placeholder="Username *" required autocomplete="on">
        </div>
        <div class="input_2">
            <label for="email"> <i class="bi bi-envelope-at"></i></label>
            <input type="email" name="email" id="email" placeholder="E-mail *" required autocomplete="on">        
        </div>
        <div class="input_3">
            <label for="password"><i class="bi bi-eye-slash" onclick="Toggle()" id="eye" ></i></label>
        <input type="password" name="password" placeholder="Password *" id="pwds">
        </div>
        <button type="submit" class="btn btn-mg-3">Sign Up</button>
    </form>
<script>
    function Toggle() {
            let temp = document.getElementById("pwds");
            let eye = document.getElementById("eye");
            if (temp.type === "password") {
                temp.type = "text";
                eye.classList.add("bi-eye");
                eye.classList.remove("bi-eye-slash");
            }
            else {
                temp.type = "password";
                eye.classList.add("bi-eye-slash");
                eye.classList.remove("bi-eye");
            }
        }
</script>
</body>
</html>