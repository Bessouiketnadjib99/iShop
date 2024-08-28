<!DOCTYPE html>
<html lang="en">
<head>  
     <meta  charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title> iShop-Mate40Pro<i class="fa fa-rotate-right" aria-hidden="true"></i> </title>
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
    <?php
           include "./config/dbconnect.php";
           $sql = "SELECT product_image FROM product WHERE product_id = 155";
           $result = mysqli_query($conn, $sql);
           $main_image = "";
$small_images = "";
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $main_image = $row["product_image"];

     



}

// Generate the HTML code for the product images
echo '
            <img src="' . $main_image . '" width="100%" id="MainImg" alt="">
            <div class="small-img-group">' . $small_images . '</div>
        </div>
    ';
    ?>
    </div>








 <div class="single-pro-details">
        <?php
        include "./config/dbconnect.php";
        $sql = "SELECT product_name,product_brand,product_desc,price  FROM product WHERE product_id = 155";
        $result = mysqli_query($conn, $sql);
        $product_name = "";
        $product_brand = "";
        $product_desc = "";
        $price = "";

        if (mysqli_num_rows($result) > 0) {
           $row = mysqli_fetch_assoc($result);
            $product_name = $row["product_name"];
            $product_brand = $row["product_brand"];
            $product_desc = $row["product_desc"];
            $price = $row["price"];

    
        }
    
          
          
    // Output the product details
    echo '<h6>' . $product_brand . '</h6>';
    echo '<h4>' . $product_name . '</h4>';
    echo '<h2>' . $price . ' DA</h2>';
    echo '<form method="post">';
    echo '<select name="product_storage">';
    echo '<option>Select Storage</option>';
    echo '<option value="512 Gb">512 Gb</option>';
    echo '</select>';
    echo '<select name="product_color">';
    echo '<option>Select Color</option>';
    echo '<option value="Orange">Orange</option>';
    
   
    echo '</select>';
    echo '<input type="number" name="quantity" value="1">';
    echo '<button class="normal" name="submit">Buy</button>';
    echo '</form>';

    echo '<h4>Product Details</h4>';
    echo '<span>' . $product_desc . '</span>';

    if (isset($_POST['submit'])) {
        $product_storage = $_POST['product_storage'];
        $product_color = $_POST['product_color'];
        $quantity = $_POST['quantity'];
        header('Location: checkout.php?product_name=' . urlencode($product_name) . '&product_brand=' . urlencode($product_brand) . '&product_desc=' . urlencode($product_desc) . '&price=' . urlencode($price) . '&product_storage=' . urlencode($product_storage) . '&product_color=' . urlencode($product_color) . '&quantity=' . urlencode($quantity));
        exit;
    }
    ?>
</div>

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

    <script>
      var MainImg = document.getElementById("MainImg");
      var smallimg = document.getElementsByClassName("small-img");
      smallimg[0].onclick = function(){
        MainImg.src = smallimg[0].src;
      }
      smallimg[1].onclick = function(){
        MainImg.src = smallimg[1].src;
      } 
      smallimg[2].onclick = function(){
        MainImg.src = smallimg[2].src;
      } 
      smallimg[3].onclick = function(){
        MainImg.src = smallimg[3].src;
      }  
      let singlep = document.querySelector(".single-pro-details #colorp");
      console.log(singlep);
      singlep.addEventListener("click", function(e){
        let color = e.target.value;
        MainImg.src = color === "Select Color" ? MainImg.src : `/img/products/Apple/14promax${color}.png`;
      });
      
    </script>
  
    <script src="script.js">    </script>
</body>
</html>