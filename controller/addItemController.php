<?php
    include_once "../config/dbconnect.php";
    
    if(isset($_POST['upload']))
    {
        $p_name = $_POST['p_name'];
        $p_brand = $_POST['p_brand'];
        $p_color = $_POST['p_color'];
        $p_storage = $_POST['p_storage'];
        $desc= $_POST['p_desc'];
        $p_url = $_POST['p_url'];
        $price = $_POST['p_price'];
        $category = $_POST['category'];
       
        $name = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];
    
        $location="./uploads/";
        $image=$location.$name;

        $target_dir="../uploads/";
        $finalImage=$target_dir.$name;

        move_uploaded_file($temp,$finalImage);

        $insert = mysqli_query($conn,"INSERT INTO product
        (product_name,product_brand,product_color,
        product_storage,price,product_url,product_desc,product_image,category_id) 
        VALUES ('$p_name','$p_brand','$p_color','$p_storage',$price,'$p_url','$desc','$image','$category')");

        if(!$insert)
        {
            echo mysqli_error($conn);     
        }
        else
        {
            echo "Records added successfully.";

           // Automatically add a new product page
$product_id = mysqli_insert_id($conn);
$product_url = strtolower(str_replace(' ', '-', $p_url));
$product_page = fopen("../$product_url", "w");

$content = '
<!DOCTYPE html>
<html lang="en">
<head>  
     <meta  charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>'.$p_name.'</title>
     <link  rel="stylesheet" href="style.css">
     <script src="https://kit.fontawesome.com/a06bb7d161.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>
<body> 
<section  id="header">  
<a href="#"><img src="img/11.png" width="150" 
 class="logo" alt=""> </a>
<div>
    <ul id="navbar">
        <li><a  href="index.html"> Home </a> </li>  
        <li><a class="active" href="shop.html"> Shop </a> </li>  
        <li><a href="about.html"> About </a> </li>  
        <li><a href="admin.php"> Admin </a> </li>
        <li><a href="contact.html"> Contact </a> </li>  
        <li id="lg-bag"> <a href="cart.html"> <i class="fa-solid fa-bag-shopping fa-lg"></i> </a> </li>
        <a href="#" id="close"><i class="far fa-times"></i>

        </a>    
        </ul>
</div> 

<div id="mobile">
    <i class="fa-solid fa-bag-shopping"></i>
    <i id="bar" class="fas fa-outdent"></i>
 </div>

</section>
    <section id="prodetails" class="section-p1">
        <div class="single-pro-image">
            <img src="'.$image.'" width="100%" id="MainImg" alt="'.$p_name.'">
        </div>
        <div class="single-pro-details">
            <h6>'.$p_brand.'</h6>
            <h4>'.$p_name.'</h4>
            <h2>'.$price.' DA</h2>
            <select>
                <option>Select Storage</option> 
                <option>'.$p_storage.'</option>  
            </select>
            <select id="colorp">
                <option>Select Color</option>
                <option>'.$p_color.'</option>  
            </select>
            
            <form method="GET" action="checkout2.php">
                <input type="hidden" name="product_brand" value="'.$p_brand.'">
                <input type="hidden" name="product_name" value="'.$p_name.'">
                <input type="hidden" name="price" value="'.$price.'">
                <input type="hidden" name="product_storage" value="'.$p_storage.'">
                <input type="hidden" name="product_color" value="'.$p_color.'">
                <input type="number" name="quantity" value="1">
                <button type="submit" class="normal">Buy</button>
            </form>
            <h4>Product Details</h4>
            <span>'.$desc.'</span>
         
        </div>

    </section>
    
    
    

    <footer class="section-p1">
        <div class="col">
            
            <h4>Contact</h4>
            <p><strong>Adress:</strong> Tiaret, ALGERIA</p>
            <p><strong>Phone:</strong> 05 53021615/07 95240081</p>
            <p><strong>Hours:</strong> 9:00AM - 7:00PM, Sun-Thu</p>
            
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">

                    <a href="https://www.facebook.com/bessouiket.mustapha.nadjib/" target="_blank"
                     class="fa-brands fa-facebook fa-2x"></a>
                    <a href="https://www.instagram.com/nadjib.bkt" target="_blank"
                     class="fab fa-instagram fa-2x"></a>
                    <a href="https://www.linkedin.com/in/bessouiket-mustapha-nadjib/" target="_blank"
                     class="fa-brands fa-linkedin fa-2x"></a>


                </div>

            </div>

        </div>

        <div class="col">
            <h4>About</h4>
            <a href="/about.html">About Us</a>
            <a href="/contact.html">Delivery Information</a>
            <a href="/terms.html">Terms & Conditions</a>
            <a href="/contact.html">Contact Us</a>
        </div>

        
        <div class="col">
            <h4>My Account</h4>
            <a href="/signin.html">Sign In</a>
            <a href="/signin.html">Sign Up</a>
            <a href="/cart.html">View Cart</a>
            
        </div>


        <div class="col install">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <div class="row">
                <img src="img/pay/app.jpg" alt="">
                <img    src="img/pay/play.jpg" alt="">

        </div>

            <p>Secured Paymenet Gateways</p>
            <img    src="img/pay/pay2.png" width="280" 
            height="60" alt="">

    </div>
          

        <div class="copyright">
            <p>© 2023, iShop - Bessouiket Mustapha Nadjib.Tiaret,ALG</p>
        </div>
    </footer>
</body>
</html>';

fwrite($product_page, $content);
fclose($product_page);

header("location: ./ONLINE_SHOP_PROJECT/admin_panel/");




        }
    }
?>
