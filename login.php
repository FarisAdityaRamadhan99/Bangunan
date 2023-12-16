<?php
session_start();

if ( isset($_SESSION['apriori_toko_id']) ) {
    header("location:index.php");
}

$login = 0;
if (isset($_GET['login'])) {
    $login = $_GET['login'];
}

if ($login == 1) {
    $komen = "Silahkan Login Ulang, Cek username dan Password Anda!!";
}

include_once "fungsi.php";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="UTF-8">
  <title>CodePen - Sign up / Login Form</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
    <body>
                                <?php
                                if (isset($komen)) {
                                    display_error("Login failed");
                                }
                                ?>

 <body>
            <div class="main">  	
                <input type="checkbox" id="chk" aria-hidden="true">

                    <div class="signup">
                        <form>
                        </form>
                    </div>

                    <div class="login">
                        <form method="post" action="cek-login.php">
                            <label for="chk" aria-hidden="true">Login</label>
                            <input type="username" name="username" placeholder="username" required="" id="username">
                            <input type="password" name="password" placeholder="Password" required=""  id="password">
                            <button>Login</button>
                        </form>
			</div>
	</div>
</body>
</html>
