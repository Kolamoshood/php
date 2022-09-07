<?php 

include ("config.php");
$message = "";
$error = "";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $new_pwd = mysqli_real_escape_string($connection, $_POST["new_pwd"]);
    $new_pwd_rpt = mysqli_real_escape_string($connection, $_POST["new_pwd_rpt"]);
    if ($new_pwd !== $new_pwd_rpt){
        $error = "passwords dont match";
    } if(empty($new_pwd) || empty($new_pwd_rpt)) {
        $error = "You have ommitted a field";
    } else { 
        $sql_query = "UPDATE student SET password = $new_pwd where email = ";
        if (mysqli_query($connection, $sql_query)){
            $message = "Reset Password succesful, You can now log in with your new password";
        }
    }
   
}
?>


<?php include('includes/header.php'); ?>

<section class="user-area ptb-100">
			<div class="container">
			<div class="user-form-content max-width-600">
                <?php 
                
                $selector = $_GET["selector"];
                $token = $_GET["validator"];

                if (empty($selector) || empty($token)){
                    echo "could not validate request";
                } else { 
                ?>
                
				<form class="user-form" action="" method="POST">
					<h3 class="text-center">Reset Your Password</h3>

					<div class="row">

                    <div class="col-12">
							<div class="form-group">
								<p class= "mt-5 text-center"><?php include ("success_message.php");?></p>
							</div>
						</div>
                        <div class="col-12">
							<div class="form-group">
								<p class= "mt-5 text-center"> Enter Your New password</p>
							</div>
						</div>

						<div class="col-12">
							<div class="form-group">
								<label>New Password</label>
								<input class="form-control" type="password" name="new_pwd" placeholder="Enter New Password...">
							</div>
						</div>
                        <div class="col-12">
							<div class="form-group">
								<label>Confirm New Password</label>
								<input class="form-control" type="password" name="new_pwd_rpt" placeholder="Repeat New Password...">
							</div>
						</div>

						<div class="col-12">
							<button class="default-btn" type="submit">
								Submit
							</button>
						</div>

					</div>
				</form>
            <?php } ?>
			</div>
		</section>

			
<?php include('includes/footer.php'); ?>