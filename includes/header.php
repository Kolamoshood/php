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

		<script src="jquery-3.6.1.js"></script>

        <!-- ajax script for my apply.php(217) and faculty_department.php that loads the departments in a faculty in the form once selected without refreshng the page -->
		<script type="text/javascript"> 
    
            $(document).ready(function()
            {
                $("#faculty").change(function(){
                    var faculty = $(this).val();
                    $.ajax({
                        url:"faculty_department.php", 
                        method: "POST",
                        data : {faculty:faculty},
                        success:function(data){
                            $("#department").html(data);
                        }
                    });
                });

            });
    
    </script>

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
                                                <p> Admission is going at <strong>UNCO</strong></p>
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