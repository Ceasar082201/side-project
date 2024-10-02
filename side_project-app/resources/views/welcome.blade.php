<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Side_Project-App</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    
     <div class="wrapper">
    <form action="{{ route('create')}}" method="post">
        @csrf
           <div class="wlcm">
               <label for="Name">* Name</label>
               <input type="text" name="name" id="" required>
           </div>
           <div class="wlcm-1">
               <label for="Email">* Email</label>
               <input type="email" name="email" id="" required>        
           </div>
           <div class="wlcm-2">
               <label for="Password">* Password</label>
               <input type="password" name="pwd" id="" required>
           </div>
           <button type="submit">Sign Up</button>
       </form>
     </div>
</body>
</html>