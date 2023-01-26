<!-- index.php?include= -->
<?php
session_start();
include('../components/connect.php');
?>
<?php

if(isset($_GET["include"])){
	$include = $_GET["include"];
	if($include=="admin-login"){
	include("include/admin_login.php");
	}
	else if($include=="dashboard"){
		include("include/dashboard.php");
	}
	else if($include=="admin-accounts"){
	include("include/admin_accounts.php");
	}
	else if($include=="messages"){
	include("include/messages.php");
	}
	else if($include=="placed-orders"){
	include("include/placed_orders.php");
	}
	else if($include=="products"){
	include("include/products.php");
	}
	else if($include=="register-admin"){
	include("include/register_admin.php");
	}
	else if($include=="update-product"){
	include("include/update_product.php");
	}
	else if($include=="update-profile"){
	include("include/update_profile.php");
	}
	else if($include=="users-accounts"){
	include("include/users_accounts.php");
	}
}

?>
<!doctype html>
<html>
<head>
</head>
<?php
//cek ada get include
if(isset($_GET["include"])){
$include = $_GET["include"];
  	//cek apakah ada session id admin
if(isset($_SESSION['id'])){
    ?>
<?php
}else{
    //pemanggilan halaman form login
}  
}else{
if(isset($_SESSION['id'])){
    ?>
<body>
<?php
            //pemanggilan profil
            include("include/dashboard.php");
        ?>
</body>
<?php  
}else{
  //pemanggilan halaman form login
    include("include/admin_login.php");
} 
}
?>
</html>