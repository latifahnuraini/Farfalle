<!-- index.php?include= -->
<?php
session_start();
include('components/connect.php');
?>
<?php

if(isset($_GET["include"])){
	$include = $_GET["include"];
	if($include=="about"){
	include("include/about.php");
	}
	else if($include=="cart"){
	include("include/cart.php");
	}
	else if($include=="category"){
	include("include/category.php");
	}
	else if($include=="checkout"){
	include("include/checkout.php");
	}
	else if($include=="contact"){
		include("include/contact.php");
		}
	else if($include=="home"){
	include("include/home.php");
	}
	else if($include=="login"){
	include("include/login.php");
	}
	else if($include=="menu"){
	include("include/menu.php");
	}
	else if($include=="orders"){
	include("include/orders.php");
	}
	else if($include=="profile"){
	include("include/profile.php");
	}
	else if($include=="quick-view"){
	include("include/quick_view.php");
	}
    else if($include=="register"){
        include("include/register.php");
    }
    else if($include=="search"){
        include("include/search.php");
    }
	else if($include=="update-profile"){
        include("include/update_profile.php");
    }
    else if($include=="update-address"){
        include("include/update_address.php");
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
include("include/user_header.php");
?>
</body>
<?php  
}else{
  //pemanggilan halaman form login
    include("include/home.php");
} 
}
?>
</html>