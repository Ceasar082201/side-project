
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  @vite (['resources/css/app.css'])
  <title>Document</title>
</head>
<body>
  <h1>HELLO WORLDs</h1>

  <button id="myBtn">Click Here</button>

  <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
      <span class="close">&times;</span>
      <form action="" method="get">
        @csrf
        <div class="user_name">
          <label for="first_name">Name</label>
          <input type="text" name="first_name" id="">
        </div>
        <div class="">
          <label for="last_name">Last Name</label>
          <input type="text" name="" id="">
        </div>
        <div>
          <label for="age">Age</label>
          <input type="text" name="Age" id="">
        </div>
        <div>
          <label for="gender">Gender</label>
          <select name="choices" id="sex">
            <option value="Male">male</option>
            <option value="Female">female</option>
            
          </select>
        </div>
        <input type="button" value="Submit">
      </form>
    </div>
  
  </div>
  <script>
    var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
  </script>
</body>
</html>