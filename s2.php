
<!DOCTYPE html>
<html lang="en">
<head>  
     <meta  charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>S2</title>
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
            <img src="./uploads/DSC.jpg" width="100%" id="MainImg" alt="S2">
        </div>
        <div class="single-pro-details">
            <h6>Samsung</h6>
            <h4>S2</h4>
            <h2>10000 DA</h2>
            <select>
                <option>Select Storage</option> 
                <option>8Gb</option>  
            </select>
            <select id="colorp">
                <option>Select Color</option>
                <option>Noire</option>  
            </select>
            
            <form method="GET" action="checkout2.php">
                <input type="hidden" name="product_brand" value="Samsung">
                <input type="hidden" name="product_name" value="S2">
                <input type="hidden" name="price" value="10000">
                <input type="hidden" name="product_storage" value="8Gb">
                <input type="hidden" name="product_color" value="Noire">
                <input type="number" name="quantity" value="1">
                <button type="submit" class="normal">Buy</button>
            </form>
            <h4>Product Details</h4>
            <span>Samsung</span>
         
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
</html>