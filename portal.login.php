<?php

include ('config.php');

if($_SERVER["REQUEST_METHOD"] == "POST") {

    
    $matric_no = mysqli_real_escape_string($connection, $_POST['matric_no']);
    $password = mysqli_real_escape_string($connection, $_POST['password']);
	$query = "SELECT id FROM student WHERE matric_no = '$matric_no' AND password = md5('$password')";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

	$count = mysqli_num_rows($result);

	// echo $count;

	if ($count == 1){
		$_SESSION['matric_no'] = $matric_no;
		header('location: std_portal.php?success=loggedin');
	} else {
		header('location: portal.login.php?error=failed');
	}

}


?>

<?php include('includes/header.php'); ?>

<!-- Start User Area -->
<section class="user-area ptb-100">
			<div class="container">
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
												<a href="#">Forgot your password?</a>
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
