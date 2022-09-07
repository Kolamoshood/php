<?php

include ('config.php');
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $matric_no = mysqli_real_escape_string($connection, $_POST['matric_no']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
	$query = "SELECT id FROM student WHERE matric_no = '$matric_no' AND password = md5('$password')";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

	$count = mysqli_num_rows($result);

	// echo $count;	
	if (empty($matric_no) || empty($password)){
		header('location: portal.login.php?error=empty');
	} else{ 
		if ($count == 1){
			$_SESSION['matric_no'] = $matric_no;
			header('location: student/std_portal.php?success=loggedin');
		} else {
			header('location: portal.login.php?error=failed');
		}
}
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
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
							<div class="header-right-content" >
                                <a href="mail:unco@gmail.com" style="color:white;">
                                    <i class="ri-mail-fill"></i>
                                    Unco@gmail.com 
								</a>
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

                            <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
                                <ul class="navbar-nav m-auto">
									<li class="nav-item">
										<a href="user.php" class="nav-link active">
											Home
										</a>
									</li>
                                    <li class="nav-item">
										<a href="admission.php" class="nav-link active">
											Admissions
										</a>
									</li>
                                    <li class="nav-item">
										<a href="apply.php" class="nav-link active">
											Apply
										</a>
									</li>
                                    <li class="nav-item">
										<a href="portal.login.php" class="nav-link active">
											Student Portal
										</a>
									</li>
                                </ul>
                                <div class="others-options">
                                    <ul>
                                        <li>
                                            <div class="default-btn">
                                                <?php echo "welcome"; ?>
                                            </div>
                                        </li>
                                    </ul>
                                </div>         
                            </div>
                        </nav>
                    </div>
				</div>
            </div>
			<!-- End Navbar Area -->
		</header>
		
<!-- Start User Area -->
<section class="user-area ptb-100">
			<div class="container">
				<div class="container">
					<?php 
						$error1 = " you must fill all empty fields!";
						$error2 = "Incorrect Matric Number or Password !";
						if(isset($_GET["error"])){
							if($_GET["error"] == "empty"){
								echo   '<div class="alert alert-danger">';
								echo      '<strong>Failed to Login ! </strong>' . ' ' . $error1;
								echo   '</div>';
							}
						
						} if(isset($_GET["error"])) {
							if ($_GET["error"] == "failed"){
								echo   '<div class="alert alert-danger">';
								echo      '<strong> Failed to Login ! </strong>'. ' ' .$error2;
								echo   '</div>';
							}
						}
					?>
				</div>

				<div class="row">
					<div class="col-lg-6">
						<div class="user-form-content register-area mr-15">
							<form class="user-form">
								<h3>Login Instructions</h3>

								<div class="row">
                                    <div class="col-lg-12">
                                    If you are a new student, kindly use your <span> <strong>Jamb Registration Number </strong> </span>as Matric Number.<br><hr>
                                     Existing student, use <span><strong>Matric Number</strong></span> only.<br><hr>
                                     MAke sure to keep your login details Secure and Private.<br><hr>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5> You can do the following when logged in to the student portal</a></h5><hr>
                                        You can register for your course and download your course outline.<br><hr>
                                         You can check and pay for your school fee. <br><hr>
                                         You can check your semester result .<br>
                                    </div>
								</div>
							</form>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="user-form-content login-area ml-15">
							<form class="user-form" action="" method="POST">
								<h3>Log in to your account</h3>

								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label>Matric Number</label>
											<input class="form-control" type="text" name="matric_no">
										</div>
									</div>
		
									<div class="col-12">
										<div class="form-group">
											<label>Password</label>
											<input class="form-control" type="password" name="password">
										</div>
									</div>
		
									<div class="col-12">
										<div class="login-action">
											<span class="log-rem">
												<input id="remember-2" type="checkbox">
												<label>Keep me logged in</label>
											</span>
											
											<span class="forgot-login">
												<a href="pwd_reset.php">Forgot your password?</a>
											</span>
										</div>
									</div>
		
									<div class="col-12">
										<button class="default-btn mb-0" type="submit">
											Log in
										</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End User Area -->

<?php include('includes/footer.php'); ?>
