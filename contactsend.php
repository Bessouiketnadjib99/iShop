<?php
include "config/dbconnect.php";

if (isset($_POST["submit"])) {
    $co_name = mysqli_real_escape_string($conn, $_POST["co_name"]);
    $co_email = mysqli_real_escape_string($conn, $_POST["co_email"]);
    $co_subject = mysqli_real_escape_string($conn, $_POST["co_subject"]);
    $co_message = mysqli_real_escape_string($conn, $_POST["co_message"]);

    $sql = "INSERT INTO contact (co_name, co_email, co_subject, co_message) 
            VALUES ('$co_name', '$co_email', '$co_subject', '$co_message')";
    
    $req = mysqli_query($conn, $sql);
    if ($req) {
        echo "Insertion successful";
        header("Location:/ONLINE_SHOP_PROJECT/thankyou.html");
        exit();
    } else {
        echo "Insertion failed: " . mysqli_error($conn);
    }
}
?>
