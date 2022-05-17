<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login Page</title>
</head>
<header>
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
    
  </header>
<body>
<section class="login_section">

    <div class="login_box">
        <h1>Register Here</h1>
        <form action="login.php" method="POST">
            <label>Username</label>
            <input type="text">

            <label>Password</label>
            <input type="text">

            <label>Confirm Password</label>
            <input type="text">

           <input type="submit" value="submit">
           </form>
           <p> By clicking the Register Button, You Agree to our Terms and Conditions </p>
</section>
</body>
</html>