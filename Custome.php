<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive  Flower Website Design Tutorials</title>
     <!--Font awesome cdn link-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
     <!--custom css file link-->
     <link rel="stylesheet" href="styless.css"> 
</head>
<body>

    <!--Header section starts-->
    <header>
        <input type="checkbox" name="" id="toggler">
        <label for="toggler" class="fas fa-bars"></label>
        <a href="#" class="logo">Blooming Beauty...!!<span>.</span></a>
        <nav class="navbar">
            <a href="demo.html">Home</a>
            <a href="demo.html">About</a>
            <a href="products.php">Products</a>
            <a href="demo.html">Review</a>
            <a href="demo.html">Contact</a>
            <a href="Custome.php">Custmise</a>
        </nav>
        <div class="icons">
            
            <a href="cart.php" class="fas fa-shopping-cart"></a>
            <a href="#" class="fas fa-user"></a>
            
        </div>
    </header>
     <!--Header section ends-->



     <!--contact section starts-->
<section class="contact" id="contact">
    <h1 class="heading"><span>Build Your own </span> product</h1>
    <div class="row">
        <form action="">
            <input type="text" class="box" placeholder=" flower Name" required>
           <input type="number" class="box" placeholder="Quantity">
            <input type="file"  accept="image/png, image/jpg, image/jpeg" placeholder="Image" class="box" required>
            <textarea name="text" class="box" placeholder="type as you expect product" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send massage" class="btn">
        </form>
        <div class="image">
            <img src="uploaded_img/helo.jpg"  alt="">
        </div>
    </div>
</section>
<!--contact section ends-->





<!--footer section starts-->
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">about</a>
            <a href="#">products</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>
        <div class="box">
            <h3>Extra links</h3>
            <a href="#">my account</a>
            <a href="#">my order</a>
            <a href="#">my favorites</a>
        </div>
        <div class="box">
            <h3>Locations</h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">France</a>
            <a href="#">Japan</a>
            <a href="#">Ukraine</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#">+123-456-7890</a>
            <a href="#">bbeautyflower@gmail.com</a>
            <a href="#">Bhusawal, Maharashtra - 425201</a>
          <img src="uploaded_img/payment.png" alt="">
       
        </div>
    </div>
    <div class="credit">
        &copy; Created by <span> Khushabu Bhole</span> All Right Reserved.
    </div>
</section>

<!--footer section ends-->



</body>
</html>

