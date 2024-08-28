<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link  rel="stylesheet" href="style.css">
    
     <script src="https://kit.fontawesome.com/a06bb7d161.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
	<title>Checkout</title>
	<style>
	body {
		font-family: Arial, sans-serif;
		background-color: #f5f5f5;
	}
	h1, h2, h3, p {
		color: #333;
		margin-bottom: 20px;
		text-align: center;
	}
	form {
		background-color: #fff;
		border-radius: 5px;
		padding: 20px;
		box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
		max-width: 600px;
		margin: 0 auto;
	}
	label {
		display: block;
		margin-bottom: 5px;
		color: #333;
		font-weight: bold;
		text-align: left;
	}
	input[type=text], input[type=email] {
		padding: 10px;
		border: none;
		border-radius: 3px;
		box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
		width: 100%;
		margin-bottom: 15px;
		font-size: 16px;
		color: #555;
	}
	input[type=submit], button {
		background-color: #333;
		color: #fff;
		border: none;
		border-radius: 3px;
		padding: 10px 20px;
		cursor: pointer;
		transition: background-color 0.3s ease-in-out;
		font-size: 16px;
	}
	input[type=submit]:hover, button:hover {
		background-color: #222;
	}
	.product-details {
		display: flex;
		flex-wrap: wrap;
		justify-content: center;
		align-items: center;
		margin-top: 50px;
		margin-bottom: 50px;
	}
	.product-details p {
		margin: 10px;
		padding: 10px;
		background-color: #fff;
		box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
		border-radius: 5px;
		max-width: 400px;
		text-align: left;
	}
	.product-details p:first-child {
		font-size: 20px;
		font-weight: bold;
		background-color: #f5f5f5;
		box-shadow: none;
		border-top-left-radius: 5px;
		border-top-right-radius: 5px;
		padding: 15px;
		margin-right: 10px;
		margin-left: 10px;
	}
	.product-details p:last-child {
		margin-right: 0;
		margin-left: 0;
		border-bottom-left-radius: 5px;
		border-bottom-right-radius: 5px;
		padding: 15px;
		background-color: #fff
	}
	</style>
</head>
<body>
    
<section  id="header">  
        <a href="#"><img src="img/11.png" width="150" 
         class="logo" alt=""> </a>
        <div>
            <ul id="navbar">
            <li><a  href="index.html"> Home </a> </li>  
            <li><a href="shop.html"> Shop </a> </li>  
            <li><a href="about.html"> About </a> </li>  
            <li><a href="account.html"> Account </a> </li>
            <li><a  href="contact.html"> Contact </a> </li>  
            <li id="lg-bag"> <a class="active"  href="cart.html"> <i class="fa-solid fa-bag-shopping fa-lg"></i> </a> </li>
            <a href="#" id="close"><i class="far fa-times"></i>

            </a>    
            </ul>
        </div> 

        <div id="mobile">
            <i class="fa-solid fa-bag-shopping"></i>
            <i id="bar" class="fas fa-outdent"></i>
         </div>

    </section>

   

<section id="page-header2" class="about-header">
    
    <h2>#Checkout</h2>
    <p></p>
    
</section>
	
	<h2>Product Details</h2>
	<?php
		// Retrieve the product details from the query parameters
		$product_name = isset($_GET['product_name']) ? $_GET['product_name'] : '';
		$product_brand = isset($_GET['product_brand']) ? $_GET['product_brand'] : '';
		$product_desc = isset($_GET['product_desc']) ? $_GET['product_desc'] : '';
		$price = isset($_GET['price']) ? $_GET['price'] : '';
		
		$product_storage = isset($_GET['product_storage']) ? $_GET['product_storage'] : '';
		$product_color = isset($_GET['product_color']) ? $_GET['product_color'] : '';
		
		$quantity = isset($_GET['quantity']) ? $_GET['quantity'] : '';
		$total_price = floatval($price) * intval($quantity);


		// Display the product details to the user
		echo '<p>Name: ' . $product_name . '</p>';
		echo '<p>Brand: ' . $product_brand . '</p>';
		echo '<p>Description: ' . $product_desc . '</p>';
		echo '<p>Price: ' . $price . ' DA</p>';
		echo '<p>Storage: ' . $product_storage . '</p>';
		echo '<p>Color: ' . $product_color . '</p>';
		echo '<p>Quantity: ' . $quantity . '</p>';
		echo '<p>Total Price: ' . $total_price . ' DA</p>';
	?>
    
	<form method="post" action="process_checkout.php">
		<h2>Billing Information</h2>
		<label for="name">Full Name:</label>
		<input type="text" name="name" required>
        
		<label for="email">Email:</label>
		<input type="email" name="email" required>
		<label for="address">Address:</label>
		<input type="text" name="address" required>
		<label for="city">Phone Number:</label>
		<input type="text" name="city" required>
		<input type="hidden" name="product_name" value="<?php echo $product_name; ?>">
		<input type="hidden" name="product_brand" value="<?php echo $product_brand; ?>">
		<input type="hidden" name="product_desc" value="<?php echo $product_desc; ?>">
		<input type="hidden" name="price" value="<?php echo $price; ?>">
		<input type="hidden" name="product_storage" value="<?php echo $product_storage; ?>">
		<input type="hidden" name="product_color" value="<?php echo $product_color; ?>">
		<input type="hidden" name="quantity" value="<?php echo $quantity; ?>">
		<input type="hidden" name="total_price" value="<?php echo $total_price; ?>">
		<button type="submit">Place Order</button>
	</form>
</body>
</html>
