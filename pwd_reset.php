<?php include('includes/header.php'); ?>
<section class="user-area ptb-100">
			<div class="container">
			<div class="user-form-content max-width-600">
				<form class="user-form">
					<h3 class="text-center">Forgot your password</h3>
                    <p class="text-center mb-5"> Reset your password using your email address </p>

					<div class="row">

                        <div class="col-12">
							<div class="form-group">
								<p class= "mt-5 text-center"> Enter your email and instructions will be sent to you</p>
							</div>
						</div>

						<div class="col-12">
							<div class="form-group">
								<label>Email</label>
								<input class="form-control" type="email" name="email" placeholder="Enter Email...">
							</div>
						</div>

						

						<div class="col-12">
							<div class="login-action">
								<span class="log-rem">
                                    <p> Oh I remember my password </p>
								</span>
								
								<span class="forgot-login">
									<a href="portal.login.php">Click here</a>
								</span>
							</div>
						</div>

						<div class="col-12">
							<button class="default-btn" type="submit">
								Send reset link
							</button>
						</div>

					</div>
				</form>
			</div>
		</section>

			
<?php include('includes/footer.php'); ?>