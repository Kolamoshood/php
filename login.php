<?php 
include('config.php');

session_start();

$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password =mysqli_real_escape_string($connection, $_POST['password']);
    // $password = password_hash($password, PASSWORD_DEFAULT);
	
	$query = "SELECT id FROM user WHERE email = '$email' AND password = md5('$password')";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

	$count = mysqli_num_rows($result);

	if ($count == 1){
		$_SESSION['email'] = $email;
		header('location: user.php');
	} else {
		$error = "Incorrect login details";
	}

}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">
		<link rel="stylesheet" href="assets/css/remixicon.css">
		<link rel="stylesheet" href="assets/css/flaticon.css">
		<link rel="stylesheet" href="assets/css/meanmenu.min.css">
		<link rel="stylesheet" href="assets/css/animate.min.css">
		<link rel="stylesheet" href="assets/css/odometer.min.css">
		<link rel="stylesheet" href="assets/css/magnific-popup.min.css">
		<link rel="stylesheet" href="assets/css/date-picker.min.css">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/css/responsive.css">
		<link rel="icon" type="image/png" href="assets/images/1.png">
</head>
<body>
		
<div class="preloader">
	<div class="lds-ripple">
		<div class="pl-flip-1 pl-flip-2"></div>
	</div>
</div>
<header class="header-area">
			<!-- Start Top Header -->
			<div class="top-header">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 col-sm-6">
							<ul class="header-left-content">
								<li>
									<a href="tel:+2348170852696">
										<i class="ri-phone-fill"></i>
										+234 817 085 2696 
									</a>
								</li>
							</ul>
						</div>
                        <div class="col-lg-6 col-sm-6">
							<div class="header-right-content">
                                <div class="languages-switcher">
                                        <a href="index.php" class="btn btn-secondary">
                                            Not registered? Sign In
                                        </a>
                                </div>
                            </div>
                        </div>
					</div>
				</div>
			</div>
			<!-- Start Top Header -->
			
			<!-- Start Navbar Area --> 
			<div class="navbar-area">
                <div class="mobile-responsive-nav">
                    <div class="container">
                        <div class="mobile-responsive-menu">
                            <div class="logo">
                                <a href="user.php">
									<img src="assets/images/logo.png" alt="logo">
								</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="desktop-nav">
                    <div class="container">
                        <nav class="navbar navbar-expand-md navbar-light">
                            <a class="navbar-brand" href="user.php">
                                <img src="assets/images/logo.png" alt="logo">
                            </a>
                        </nav>
                    </div>
				</div>
            </div>
			<!-- End Navbar Area -->
		</header>

<section class="user-area ptb-100">
			<div class="container">
			<div class="user-form-content max-width-600">
				<form class="user-form" action="" method="POST">
					<h3>Log In</h3>

					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<label>Email</label>
								<input class="form-control" type="email" name="email">
							</div>
						</div>

						<div class="col-12">
							<div class="form-group">
								<label>Password</label>
								<input class="form-control" type="password" name="password">
							</div>
						</div>

						<div class="col-12">
							<button class="default-btn register" type="submit">
								Login
							</button>
						</div>

				</form>
			</div>
		</section>

		<?php include('includes/footer.php'); ?>