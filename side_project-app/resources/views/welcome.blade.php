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
    
     
    <form action="{{ route('store')}}" method="post">
        @csrf
           <div>
               <label for="Name">* Name</label>
               <input type="text" name="name" id="" required>
           </div>
           <div>
               <label for="Email">* Email</label>
               <input type="email" name="email" id="" required>        
           </div>
           <div>
               <label for="Password">* Password</label>
               <input type="password" name="pwd" id="" required>
           </div>
           <button type="submit">Sign Up</button>
       </form>
    <section>
       
    </section>
</body>
</html>