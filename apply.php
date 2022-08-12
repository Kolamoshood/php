<?php 
include 'session.php';



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
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
                                    <li>
                                        <a href="logout.php" class="default-btn">
                                            Log Out
                                        </a>
                                    </li>
                                </div>
                                <div class="my-account">
                                    <a href="profile.php">
                                        <i class="ri-user-fill"></i>
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
                                </ul>
                                <div class="others-options">
                                    <ul>
                                        <li>
                                            <a href="apply.php" class="default-btn">
                                                Application form
                                            </a>
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

        <div class="page-title-area bg-27">
			<div class="container">
				<div class="page-title-content">
					<h2>Application</h2>

					<ul>
						<li>
							<a href="index.html">
								Home 
							</a>
						</li>

						<li class="active">Application</li>
					</ul>
				</div>
			</div>
		</div>

        <section class="candidates-resume-area ptb-100">
			<div class="container">
				<div class="candidates-resume-content">
					<form class="resume-info">
						<h3>Student basic information</h3>

						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>First Name</label>
									<input class="form-control" type="text" name="First-Name">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
                                    <label>Last Name</label>
									<input class="form-control" type="text" name="Last-Name">
								</div>
							</div>

                            <div class="col-lg-6 col-md-6">
								<div class="form-group">
                                <label>Middle Name</label>
									<input class="form-control" type="text" name="Middle-Name">
								</div>
							</div>

							<!-- <div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label for="img">Student photo</label>
									<input type="file" class="form-control" id="img-1" name="img" accept="image/*">
								</div>
							</div>-->

						</div>
                        <hr>

						<h3>Student personal information</h3>

						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Phone Number</label>
									<input type="tel" class="form-control" name="contact">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>E-mail</label>
									<input type="email" class="form-control" name="email">
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Date Of Birth</label>
									<div class="input-group date" id="datetimepicker">
										<input type="text" class="form-control">
										<span class="input-group-addon"></span>
										<i class="bx bx-calendar"></i>
									</div>	
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label for="img">Upload passport</label>
									<input type="file" class="form-control" id="img" name="img" accept="image/*">
								</div>
                                <p>Photo Must be in Passport (PP) Size. Max Upload Size 256KB</p> 
							</div>
						</div>
                        <hr>
						<h3>Student academic information</h3>

						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Matric Number</label>
									<input class="form-control" type="text" name="School">
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<div class="form-group">
                                    <label>CGPA</label>
									<input class="form-control" type="text" name="School">	
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Faculty</label>
									<select class="form-control">
										<option value="1">Law</option>
										<option value="2">Arts</option>
										<option value="3">Engineering</option>
                                        <option value="4"> Sciences</option>
										<option value="5">Social Sciences</option>
										<option value="6">Medical Sciences</option>
                                        <option value="7">Management Sciences</option>
                                        <option value="8">Information Sciences</option>
									</select>
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Department</label>
									<select class="form-control">
										<option value="1">Law</option>
										<option value="2">Arts</option>
										<option value="3">Engineering</option>
                                        <option value="4"> Sciences</option>
										<option value="5">Social Sciences</option>
										<option value="6">Medical Sciences</option>
                                        <option value="7">Management Sciences</option>
                                        <option value="8">Information Sciences</option>
									</select>
								</div>
							</div>

							<div class="col-lg-12 col-md-12">
								<div class="form-group checkboxs">
									<input type="checkbox" id="chb2">
									<p>
										By submitting this form, you agree to the <a href="terms-conditions.html">Terms &amp; Conditions</a> And <a href="privacy-policy.html">Privacy Policy</a> notice.
									</p>
								</div>
							</div>

							<div class="col-lg-12">
								<a href="#" class="default-btn">
									Submit application
									<i class="ri-arrow-right-line"></i>
								</a>
							</div>
						</div>
					</form>
				</div>
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