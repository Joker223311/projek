<?php
session_start();

if (empty($_SESSION['fullname'])) {
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Wave To East</title>
  <meta name="title" content="Shoppie - Man summer collection">
  <meta name="description" content="This is an eCommerce html template made by codewithsadee">
 
  <link rel="shortcut icon" href="./assets/images/lgo.jpg" type="image/svg+xml">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./assets/fonts/font.css">
  <link rel="stylesheet" href="./assets/css/tampilan.css">
  <link rel="preload" as="image" href="./assets/images/hero-banner.png">

</head>

<body>

    <div class="product" id="product">
        <img src="./assets/images/wayanggolek.png" alt="" class="productImg">
        <div class="productDetails">
            <h1 class="productTitle">Wayang Golek</h1>
           
            <p class="productDesc">Lorem ipsum dolor sit amet consectetur impal adipisicing elit. Alias assumenda
                dolorum
                doloremque sapiente aliquid aperiam.</p>
           

        </div>
    
        </div>
    </footer>
    <script src="./app.js"></script>
</body>