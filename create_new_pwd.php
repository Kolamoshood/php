<?php 

include ("config.php");
$message = "";
$error = "";


if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $selector = mysqli_real_escape_string($connection, $_POST["selector"]);
    $token = mysqli_real_escape_string($connection, $_POST["token"]);
    $new_pwd = mysqli_real_escape_string($connection, $_POST["new_pwd"]);
    $new_pwd_rpt = mysqli_real_escape_string($connection, $_POST["new_pwd_rpt"]);
    
    if(empty($new_pwd) || empty($new_pwd_rpt)) {
        $error = "You have ommitted a field";
    } else if ($new_pwd != $new_pwd_rpt){
        $error = "passwords dont match";
    } else { 
        $currentdate = date("U");
        $query = "SELECT * FROM pwd_reset WHERE pwd_reset_selector = '$selector' AND pwd_reset_expire >= '$currentdate'";
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        if (!$row){
            $error = "You need to re-submit your reset request";
        } else {
            $tokenEmail = $row["pwd_reset_email"];
            $sql = "SELECT * FROM student WHERE email = '$tokenEmail'";
            $result = mysqli_query($connection, $sql);
            if ($result){
                $sql_query = "UPDATE student SET password = md5('$new_pwd') where email = '$tokenEmail'";
                if (mysqli_query($connection, $sql_query)){
                    $message = "Reset Password succesful, You can now log in with your new password";
                } else {
                    $error = "update failed";
                }
            } 
            $query = "DELETE FROM pwd_reset WHERE pwd_reset_email = '$tokenEmail'";
            $delete_result = mysqli_query($connection, $query);
            if (!$delete_result) {
                echo "something went wrong";
            }

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
                    <input type="hidden" name="selector" value="<?php echo $selector;?>">
                    <input type="hidden" name="token" value="<?php echo $token;?>">

					<h3 class="text-center">Reset Your Password</h3>

					<div class="row">

                    <div class="col-12">
							<div class="form-group">
								<p class= "mt-5 text-center"><?php include ("success_message.php");?></p>
                                <p class= "mt-5 text-center"><?php include ("error_message.php");?></p>
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