<?php set_include_path('C:\xampp\phpMyAdmin\web_page\connection.php'); ?>

<html>
<form action="test.php">
  <div class="container">
    <form method ="post" action ="registation_test.html">
    <h1>Register a Account in EverGreen House</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for ="first name">First Name<b</label>
    <input type = "text" placeholder="Enter Your First Name" name = "first_name" id ="first_name" required>
    <br>
    <br>
    <label for ="last name">Last Name<b</label>
    <input type = "text" placeholder="Enter Your Last Name" name = "last_name" id ="last_name" required>
    <br>
    <br>
    <label for = "Gender">Gender<b</label>
    <input type="radio" name="gender" value="male"> Male
    <input type="radio" name="gender" value="female"> Female
    <input type ="radio" name="gender" value="other"> Other
    <br>
    <br>
    <label for="Age">Age<b</label>
    <input type = "text" placeholder = "Enter Your Age " name = "age" id = "age" required>
    <br>
    <br>
    <label for = "Phone Number">Phone Number<b/label>
    <input type = "text" placleholder = " Phone Number " name ="phone_number" id = "phone_number" required>
    <br>
    <br>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>
    <br>
    <br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>

    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    <button> type="submit" class="registerbtn">Register</button>
  </div>

  <div class="container signin">
    <p>Already have an account? <a href="loginform.html">Login here</a>.</p>
  </div>
</form>
</div>
</html>