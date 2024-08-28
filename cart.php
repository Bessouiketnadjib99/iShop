<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
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

<section id="cart" class="section-p1">
    <table width="100%">
        <thead>
            <tr> 
                <td>Image</td>
                <td>Product</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Subtotal</td>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href=""><i class="far fa-times-circle"></i></a></td>
                <td><img src="img/products/Apple/14promaxpurple.png" alt=""></td>
                <td>Apple iPhone 14 Pro Max</td>
                <td>313 700 DA</td>
                <td><input type="number" value="1"></td>
                <td>313 700 DA</td>
            </tr>
            <tr>
                <td><a href=""><i class="far fa-times-circle"></i></a></td>
                <td><img src="img/products/Samsung/S22ultrablack.png" alt=""></td>
                <td>Samsung Galaxy S22 Ultra</td>
                <td>199 000 DA</td>
                <td><input type="number" value="1"></td>
                <td>199 000 DA</td>
            </tr>
            <tr>
                <td><a href=""><i class="far fa-times-circle"></i></a></td>
                <td><img src="img/products/f3.jpg" alt=""></td>
                <td>Huawei Mate 50 Pro</td>
                <td>162 260 DA</td>
                <td><input type="number" value="1"></td>
                <td>162 260 DA</td>
            </tr>
        </tbody>
    </table>
</section>

<section id="cart-add" class="section-p1">
    <div id="coupon">
        <h3>Apply Coupon</h3>
        <div>
            <input type="text" placeholder="Enter Your Coupon">
            <button class="normal">Apply</button>
        </div>
    </div>

    <div id="subtotal">
        <h3>Cart Totals</h3>
        <table>
            <tr>
                <td>Cart Subtotal</td>
                <td>674,960 DA</td>
            </tr>
            <tr>
                <td>Shipping</td>
                <td>Free</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td><strong>674,960 DA</strong></td>
            </tr>
        </table>
        <button class="normal">Proceed to checkout</button>
    </div>
</section>


<section id="newsletter" class="section-p1 section-m1">
    <div class="newstext">
        <h4>Sign Up For Newsletters</h4>
        <p>Get E-mail updates about our latest shop and <span>special offers.</span></p>
    </div>
    <div class="form">
        <input type="text" placeholder="Your email address">
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
</body>
</html>