<?php
include 'components/connect.php';
if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About Us</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="shortcut icon" href="images/icon.png">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>About Us</h3>
   <p><a href="index.php?include=home">Home</a> <span> / About</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>Quality of Service, Food, Ambiance and Value of Money are the primary elements for choosing a restaurant. Farfalle is one of the most exquisite fine-dinning restaurant in twin cities with a captivating view of Murree Hills, perfect ambiance and scrumptious food. Our team is always looking forward to provide you exceptional services and win your hearts out.</p>
         <a href="index.php?include=menu" class="btn">Our Menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">Simple Steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>Choose Order</h3>
         <p>You can choose what you want to order in our restaurant</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>Fast Delivery</h3>
         <p>Wait a minute to get your food, our teams will give the best taste</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>Enjoy Food</h3>
         <p>Eat your packed food that our made for you with loves, Good appetite</p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- teams section starts  -->

<section class="teams">

   <h1 class="title">Our Teams</h1>

   <div class="swiper teams-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/latifah.jpg" alt="">
            <p>213140714111074</p>
            <h3>Latifah Nuraini</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/amel.jpeg" alt="">
            <p>213140707111053</p>
            <h3>Ameylia Dwi</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/bayu.jpeg" alt="">
            <p>213140707111082</p>
            <h3>Bayu Rizqi</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/maul.jpg" alt="">
            <p>203140914111079</p>
            <h3>Mauladina Aminah</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/rehan.jpeg" alt="">
            <p>213140707111096</p>
            <h3>Damar Raihan</h3>
         </div>


      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- teams section ends -->


<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".teams-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>