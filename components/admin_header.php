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

      <a href="index.php?include=dashboard" class="logo">Admin<span>Panel</span></a>

      <nav class="navbar">
         <a href="index.php?include=dashboard">Home</a>
         <a href="index.php?include=products">Products</a>
         <a href="index.php?include=placed-orders">Orders</a>
         <a href="index.php?include=admin-accounts">Admins</a>
         <a href="index.php?include=users-accounts">Users</a>
         <a href="index.php?include=messages">Messages</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `admin` WHERE id = ?");
            $select_profile->execute([$admin_id]);
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile['name']; ?></p>
         <a href="index.php?include=update-profile" class="btn">Update profile</a>
         <div class="flex-btn">
            <a href="index.php?include=admin-login" class="option-btn">Login</a>
            <a href="index.php?include=register-admin" class="option-btn">Register</a>
         </div>
         <a href="../components/admin_logout.php" onclick="return confirm('logout from this website?');" class="delete-btn">Logout</a>
      </div>

   </section>

</header>