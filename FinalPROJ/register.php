<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<nav>
    <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="Products.php">Products</a></li>
      <li><a href="login.php">Login</a></li>
      <li><a href="register.php">Register</a></li>
      <li><a href="contact.php">Contact</a></li>
      <li><a href="about.asp">About</a></li>
    </ul>
  </nav>
<body>
    <div class="register_box">

        <h1>Register Here</h1>
        <form action="register.php" method="POST">
            <label>First Name</label>
            <input placeholder="First Name" type="text" name="firstname" required>
            <label>Last Name</label>
            <input type="text" name="lastname" required>
            <label>E-mail</label>
            <input type="text" name="email" required>
            <label>Username</label>
            <input type="text" name="username" required>
            
            <label>Password</label>
            <input type="password" name="password" required>
        

           <input type="Submit" value="Submit" name="Submit">
           
        </form>
        <p> By clicking the Register Button, You Agree to our Terms and Conditions </p>

        <div class="">
          <?php


          ?>
        <?php 

        $host = "localhost";
        $user = "root";
        $password = "mysqlpwd12";
        $database = "SportingWebsiteDB";
        $conn = mysqli_connect("localhost", "root", "mysqlpwd12", "SportingWebsiteDB");

        if(isset($_POST['Submit'])){
        $firstname = $_POST['firstname'];
        $lastname= $_POST['lastname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $query = "SELECT * FROM userinformation where firstname = '$firstname' or email='$email'";
        
        $sql = "INSERT INTO userinformation VALUES 
        ('$firstname','$lastname','$email','$username','$password')";
        if(mysqli_query($conn, $sql)){
          echo "<h3 >Successfully Registered!</h3>";
        }
        else{
          echo "Error: ";
        }

        $result = mysqli_query($conn, $query);
        $count = mysqli_num_rows($result);
        if($count > 0){
          echo "User Already Exsists";
        }
        mysqli_close($conn);
      }
        
        
        ?>
        </div>
    </div>

    
    
</body>
</html>
