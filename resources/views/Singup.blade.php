<?php


// else 
// echo 'Connected successfully';  
// echo '$conn';
// //mysqli_close($conn);  

// //INSERT INTO `singup` (`sno`, `username`, `email`, `Password`, `contact`, `dt`) VALUES ('1', 'ashu', 'ashu@gmail.com', '1234', '843572056', current_timestamp());


    
// /*if($_SERVER["REQUEST_METHOD"] == "POST") {
      
//     $username=$_POST["username"];
//     $Email = $_POST["Email"]; 
//     $password = $_POST["password"]; 
//     $cpassword = $_POST["cpassword"];
//     $phone= $_POST["phone"];


// }*/
    
//include("db.php");
  if(isset($_POST['submit']))
  {
    
  	$username = $_POST['username'];
    //echo $username;
  	$email = $_POST['email'];
    //echo $email;
  	$password = $_POST['Password'];
   // echo $password;
    $cpassword = $_POST["cpassword"];
   // echo $cpassword;
    $phone= $_POST["phone"];
   // echo $phone;
   
   
  	$sql_u = "SELECT * FROM singup  WHERE username='$username'";
  	$sql_e = "SELECT * FROM singup WHERE email='$email'";
  	$res_u = mysqli_query($conn, $sql_u);
  	$res_e = mysqli_query($conn, $sql_e);

  	if (mysqli_num_rows($res_u) > 0) {
  	  $name_error = "Sorry... username already taken"; 	
    
  	}else if(mysqli_num_rows($res_e) > 0){
  	  $email_error = "Sorry... email already taken"; 	

  	}
    else if($_POST['Password'] != $_POST['cpassword'])
     {
         $dpass_error="The password and confirm password do not match";
      
    }else
    {
           $sql="INSERT INTO `singup` (`username`, `email`, `Password`, `contact`) VALUES ('$username',' $email', '$password', '$phone')";
           $result=mysqli_query($conn,$sql);
           echo $result;
         echo 'Saved!';
           exit();
  	}
  }  







?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  <style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

/* Full-width input fields */
input[type=text], input[type=password],input[type=email] , input[type=tel]{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<form action="/login.php" style="border:1px solid #ccc" method="post">
  <div class="container">
    <h1>Sign Up</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <div <?php if (isset($name_error)): ?> class="form_error" <?php endif ?> >
    <label for="username"><b>username</b></label>
    <input type="text" placeholder="Enter username" name="username" required>
    <?php if (isset($name_error)): ?>
	  	<span><?php echo $name_error; ?></span>
	  <?php endif ?><br>
    </div>


    <div <?php if (isset($email_error)): ?> class="form_error" <?php endif ?> >
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" name="email" required>
    <?php if (isset($email_error)): ?>
	  	<span><?php echo $email_error; ?></span>
	  <?php endif ?><br>
    </div>


    <div <?php if (isset($dpass_error)): ?> class="form_error" <?php endif ?> >
    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="Password" required>

    <?php if (isset($dpass_error)): ?>
	  	<span><?php echo $dpass_error; ?></span>
	  <?php endif ?><br>


    <label for="cpassword"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="cpassword" required>

    <label for="phone"><b>contact</b></label>
    <input type="tel" placeholder="contact" name="phone" required>
    
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <button type="button" class="cancelbtn">Cancel</button>
      <button type="submit" class="signupbtn" name='submit'>Sign Up</button>
    </div>
  </div>
</form>



    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>