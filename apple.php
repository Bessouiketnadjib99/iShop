<!DOCTYPE html>
<html lang="en">
<head>  
     <meta  charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title> iShop-Apple </title>
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
                <li><a href="index.html"> Home </a> </li>  
                <li><a class="active" href="shop.html" > Shop </a> </li>  
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
      
   <section id="page-header2">
       <h2>Apple</h2> 
       <p>Suit Yourself By Buying One Of Our Apple Products</p>
    </section>
    <section id="product1" class="section-p1">
    <div class="pro-container">
        <?php
        include "./config/dbconnect.php";
        $sql = "SELECT * FROM product WHERE product_brand='Apple'";
        $result = mysqli_query($conn, $sql);

        // display products
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="pro">';
                echo '<a href="' . $row["product_url"] . '" target="_blank"><img src="' . $row["product_image"] . '" alt=""></a>';
                echo '<div class="des">';
                echo '<span>' . $row["product_brand"] . '</span>';
                echo '<h5>' . $row["product_name"] . '</h5>';
                echo '<div class="start">';
                echo '<i class="fas fa-star"></i>';
                echo '<i class="fas fa-star"></i>';
                echo '<i class="fas fa-star"></i>';
                echo '<i class="fas fa-star"></i>';
                echo '<i class="fas fa-star"></i>';
                echo '</div>';
                echo '<h4>From ' . $row["price"] . '</h4>';
                echo '</div>';
                echo '<a href="' . $row["product_url"] . '" target="_blank"><i class="fal fa-shopping-cart cart cart"></i></a>';
                echo '</div>';
            }
        } else {
            echo "No products found.";
        }
        ?>
    </div>
</section>


    <section id="newsletter" class="section-p1 section-m1">
        <div class="newstext">
            <h4>Sign Up For Newsletters</h4>
            <p>Get E-mail updates about our latest shop & <span>special offers.</span></p>

        </div>
        <div class="form">
            <input type="text" placeholder="Your email adress">
            <button class="normal">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
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

    <script src="script.js">    </script>
</body>

</html>