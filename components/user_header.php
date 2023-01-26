<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <section class="flex">
      <div class="logo">
         <a href="index.php?include=home"> <img src="images/web_logo.png" alt="" class="logo"></a>
      </div>
      <nav class="navbar">
         <a href="index.php?include=home">Home</a>
         <a href="index.php?include=about">About Us</a>
         <a href="index.php?include=menu">Menu</a>
         <a href="index.php?include=orders">Orders</a>
         <a href="index.php?include=contact">Contact</a>
      </nav>

      <div class="icons">
         <?php
            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_items = $count_cart_items->rowCount();
         ?>
         <a href="index.php?include=search"><i class="fas fa-search"></i></a>
         <a href="index.php?include=cart"><i class="fas fa-shopping-cart"></i><span>(<?= $total_cart_items; ?>)</span></a>
         <div id="user-btn" class="fas fa-user"></div>
         <div id="menu-btn" class="fas fa-bars"></div>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
               $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p class="name"><?= $fetch_profile['name']; ?></p>
         <div class="flex">
            <a href="index.php?include=profile" class="btn">Profile</a>
            <a href="components/user_logout.php" onclick="return confirm('logout from this website?');" class="delete-btn">logout</a>
         </div>
         <p class="account">
            <a href="index.php?include=login">Login</a> or
            <a href="index.php?include=register">Register</a>
         </p> 
         <?php
            }else{
         ?>
            <p class="name">Please Login First!</p>
            <a href="index.php?include=login" class="btn">Login</a>
         <?php
          }
         ?>
      </div>

   </section>

</header>

