<?php
session_start();
$host = "localhost";
$user = "root";
$password = "mysqlpwd12";
$database = "SportingWebsiteDB";
$conn = mysqli_connect("localhost", "root", "mysqlpwd12", "SportingWebsiteDB");
?>

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
      <li><a href="about.php">About</a></li>
      <li><a href="cart.php">Cart</a></li>
  </ul>
</nav>

<body>
<h2 id="product_title"> Shopping Cart</h2>
  <div class="cart-container">

<?php
$query = "SELECT * FROM cart";
$result = mysqli_query($conn,$query);
if(mysqli_num_rows($result) > 0)
{
  while ($row = mysqli_fetch_array($result))
{
?>
<div class="products">

  <form method="post" action="products.php"?action=add&id<?php echo $row['id']; ?>">
  <img src="<?php echo $row['image']; ?> " class="img_responsive" /><br />
  <h4 class="text-info"><?php echo $row['name']; ?></h4> 
  <h4 class="text-info">$<?php echo $row['price']; ?></h4> 
  <input type="hidden" name="hidden_name" value = "<?php echo $row['name']; ?>"> 
  <input type="hidden" name="hidden_price" value = "<?php echo $row['price']; ?>"> 
  <button type="submit" name="add_to_cart" class="add_cart_btn" value="Add to Cart.">Add to Cart</button>
</form>
  <?php
}
}

?>
</div>
</body>
</html>