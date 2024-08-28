
<!DOCTYPE html>
<html lang="en">
<head>  
     <meta  charset="UTF-8" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title> Admin </title>
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
                <li><a class="active"  href="admin.php"> Admin </a> </li>
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
      
    <section id="page-header">
       <h2>Admin Section</h2> 
       <p>This page is dedicated to admin users who can manipulate 
        the website
       </p>
    </section>

    <div class="container">
        <form id="login-form" action="adminlogin.php">
          <h1>Login</h1>
          <label for="username">Username:</label>
          <input type="text" id="username" name="adminusername" required>
      
          <label for="password">Password:</label>
          <input type="password" id="password" name="adminpassword" required>
      
          <input type="submit" name="adminlog">
        </form>
      </div>
      

    
</body>


</html>
