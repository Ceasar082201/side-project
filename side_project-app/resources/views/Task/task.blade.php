<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
</head>
<body>
    <form action="{{route('store')}}" method="post">
         <label for="name">Name: </label>
       <input type="text" id="name" name="name">
        <br><br>
        <label for="description">Description: </label>
        <input type="text" name="description" id="description">
        <br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>