<?php 

include ('config.php');

$error = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $selector = bin2hex(random_bytes(8));
    $token = (random_bytes(11));
    $url = "create_new_pwd.php?selector=" . $selector . "&validator=" . bin2hex($token);
    $expires = date("U") + 1800;
    $pwd_reset_email = mysqli_real_escape_string($connection, $_POST["email"]);

    $query = "SELECT * FROM student WHERE email = '$pwd_reset_email'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if(!$count == 1){
        $error = "The email <strong> $pwd_reset_email </strong> does not exist";
    } else {
        $query = "DELETE FROM pwd_reset WHERE pwd_reset_email = '$pwd_reset_email'";
        $delete_result = mysqli_query($connection, $query);
        if (!$delete_result) {
            $error = "something went wrong";
        } else {
            $insert_query = "INSERT INTO pwd_reset (pwd_reset_email, pwd_reset_selector, pwd_reset_token, pwd_reset_expire) VALUES ('$pwd_reset_email', '$selector', md5('$token'), '$expires')";
            if (mysqli_query($connection, $insert_query)){
                $to = $pwd_reset_email;
                $subject = "Reset your password for Myschool";
                $reset_message = "<p> We received a password rest request. The link to your request is below. Ignore if you didn't request for a reset of your password</p>";
                $reset_message .= "<p>Here is the link to your password reset</br>";
                $reset_message .= '<a href="' .$url . '"> '. $url . '</a></p>';
                $headers = "From: Myshool <kolawolemoshood7@yahoo.com>\r\n";
                $headers .= "Reply To: kolawolemoshood7@yahoo.com\r\n";
                mail($to, $subject, $reset_message, $headers);
                if (mail($to, $subject, $reset_message, $headers)){
                    $message = "Password reset link has been sent to your email at <strong>"  .$to . '</strong>';
                }
            
            } else {
                $error = "There was an error";
            }
        }    
    }
} else {
    $error = "Failed, Try again";
}


?>


<?php include('includes/header.php'); ?>

<section class="user-area ptb-100">
			<div class="container">
			<div class="user-form-content max-width-600">
				<form class="user-form" action="" method="POST">
					<h3 class="text-center">Forgot your password</h3>
                    <p class="text-center mb-5"> Reset your password using your email address </p>

					<div class="row">

                    <div class="col-12">
							<div class="form-group">
								<p class= "mt-5 text-center"><?php include ("success_message.php");?></p>
                                <p class= "mt-5 text-center"><?php include ("error_message.php");?></p>
							</div>
						</div>
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