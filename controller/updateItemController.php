<?php
    include_once "../config/dbconnect.php";

    $product_id = $_POST['product_id'];
    $p_name = $_POST['p_name'];
    $p_brand = $_POST['p_brand'];
    $p_color = $_POST['p_color'];
    $p_storage = $_POST['p_storage'];
    $p_desc = $_POST['p_desc'];
    $p_price = $_POST['p_price'];
    $category = $_POST['category'];

    $updateItem = mysqli_query($conn, "UPDATE product SET 
        product_name='$p_name',
        product_brand='$p_brand',
        product_color='$p_color',
        product_storage='$p_storage', 
        product_desc='$p_desc', 
        price=$p_price,
        category_id=$category
        WHERE product_id=$product_id");

    if ($updateItem) {
        echo "true";
    }
?>
