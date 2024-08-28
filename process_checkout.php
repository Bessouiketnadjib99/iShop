<?php
include "config/dbconnect.php"; // include your database connection file here

// Retrieve the user's billing information and the product details from the form
$product_name = isset($_POST['product_name']) ? $_POST['product_name'] : '';
$product_brand = isset($_POST['product_brand']) ? $_POST['product_brand'] : '';
$product_desc = isset($_POST['product_desc']) ? $_POST['product_desc'] : '';
$price = isset($_POST['price']) ? $_POST['price'] : '';

$product_storage = isset($_POST['product_storage']) ? $_POST['product_storage'] : '';
$product_color = isset($_POST['product_color']) ? $_POST['product_color'] : '';
$quantity = isset($_POST['quantity']) ? $_POST['quantity'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$city = isset($_POST['city']) ? $_POST['city'] : '';
$order_date = date("Y-m-d H:i:s");
$total_price = isset($_POST['total_price']) ? $_POST['total_price'] : '';

// Insert the order into the database
$sql = "INSERT INTO orders (product_name, product_brand, price, product_storage, product_color, quantity, name, email, address, city, order_date, total_price) VALUES ('$product_name', '$product_brand', '$price', '$product_storage', '$product_color', '$quantity', '$name', '$email', '$address', '$city', '$order_date','$total_price')";
if (mysqli_query($conn, $sql)) {
    echo "Order placed successfully!";
    header("Location:/ONLINE_SHOP_PROJECT/thankyou.html");
} 
else {
   echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
