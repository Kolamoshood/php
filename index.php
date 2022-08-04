<?php 
include('config.php');


if(isset($_POST['register'])) {
    $username = mysqli_real_escape_string($connection, $_POST['username']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);

    $query = "INSERT INTO user (username, email, password) VALUES ('$username', ' $email', '$password')";

    $result = mysqli_query($connection, $query);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
		
		<link rel="icon" type="image/png" href="assets/images/favicon.png">
</head>
<body>

<section class="user-area ptb-100">
			<div class="container">
			<div class="user-form-content max-width-600">
				<form class="user-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
					<h3>Create an account</h3>

					<div class="row">
						<div class="col-12">
							<div class="form-group">
								<label>Username</label>
								<input class="form-control" type="text" name="username">
							</div>
						</div>

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
							<button class="default-btn register" type="submit" name="register">
								Register now
							</button>
						</div>

				</form>
			</div>
		</section>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/jquery.min.js"></script> 
        
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        
		<script src="assets/js/meanmenu.min.js"></script>
		
		<script src="assets/js/owl.carousel.min.js"></script>
		
        <script src="assets/js/wow.min.js"></script>
		
        <script src="assets/js/appear.min.js"></script>
		
        <script src="assets/js/odometer.min.js"></script>
		
        <script src="assets/js/jarallax.min.js"></script>
		
        <script src="assets/js/bootstrap-datepicker.min.js"></script>
		
        <script src="assets/js/magnific-popup.min.js"></script>
		
		<script src="assets/js/form-validator.min.js"></script>
		
		<script src="assets/js/contact-form-script.js"></script>
		
		<script src="assets/js/ajaxchimp.min.js"></script>
        
		<script src="assets/js/custom.js"></script>
</body>