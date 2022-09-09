<?php 

include ('config.php');


$error = "";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	$firstname = mysqli_real_escape_string($connection, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($connection, $_POST['lastname']);
	$middlename = mysqli_real_escape_string($connection, $_POST['middlename']);
	$password = mysqli_real_escape_string($connection, $_POST['password']);
	$phone_no = mysqli_real_escape_string($connection, $_POST['phone_no']);
	$email = mysqli_real_escape_string($connection, $_POST['email']);
	$dob = mysqli_real_escape_string($connection, $_POST['dob']);
	$image = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);
	$matric_no = mysqli_real_escape_string($connection, $_POST['matric_no']);
	$cgpa = mysqli_real_escape_string($connection, $_POST['cgpa']);
	$faculty = mysqli_real_escape_string($connection, $_POST['faculty']);
	$department = mysqli_real_escape_string($connection, $_POST['department']);

	$query = "SELECT * FROM student WHERE email = '$email'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if($count == 1) {
        header("location: apply.php?error=userexists");
    } else if ( empty($firstname) || empty($lastname) || empty($middlename) || empty($password) || empty($phone_no) || empty($email) || empty($dob) || empty($image) || empty($matric_no) || empty($cgpa) || empty($faculty) || empty($department)){	
		header("location: apply.php?error=emptyinput");
	} else {
		$std_query = "INSERT INTO student (firstname, lastname, middlename, password, phone_no, email, dob, image, matric_no, cgpa, faculty, department) VALUES ('$firstname', '$lastname', '$middlename', md5('$password'), '$phone_no', '$email', '$dob', '$image', '$matric_no', '$cgpa', '$faculty', '$department')";
		if(mysqli_query($connection, $std_query)){
			header("location: apply.php?success=succeed");

		} else {
			header("location: apply.php?error=failed");
		}
		
	}
	
	
}

?>

<?php include ('includes/header.php'); ?>

        <div class="page-title-area bg-27">
			<div class="container">
				<div class="page-title-content">
					<h2>Application</h2>

					<ul>
						<li>
							<a href="user.php">
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
				<div>
					<?php 
					$message = "Your application is succesful, keep checking your portal for more info!";
					$error = "Application failed. Try again !";
					if(isset($_GET["error"])){
						if($_GET["error"] == "emptyinput"){
							echo   '<div class="alert alert-danger">';
     						echo      '<strong>Alert! </strong> You have ommitted one or more fields. You must fill all fields to complete the registration';
    						 echo   '</div>';
						}
					
					} if (isset($_GET["error"])){
						if ($_GET["error"] == "userexists") {
							echo   '<div class="alert alert-danger">';
     						echo      '<strong>Alert! </strong> Your record exists in our database. Keep checking your portal for more info';
    						 echo   '</div>';
						}
					
					} if(isset($_GET["error"])) {
						if ($_GET["error"] == "failed"){
							echo   '<div class="alert alert-danger">';
     						echo      '<strong>Alert! </strong>'. ' ' .$error;
    						 echo   '</div>';
						}
					} if (isset($_GET["error"])){
						if($_GET["error"] == "failed"){
							echo   '<div class="alert alert-danger">';
     						echo      '<strong>Alert! </strong> Something went wrong. Try again later';
    						 echo   '</div>';
						}
					} else if (isset($_GET["success"])){
						if ($_GET["success"] == "succeed") {
							echo   '<div class="alert alert-success">';
							echo      '<strong>Congratulations! </strong>'. ' ' .$message;
							echo   '</div>';
						}
					}
					?>
				</div>

				<div class="candidates-resume-content">
					<form class="resume-info" action="" method="POST" enctype="multipart/form-data">
						<h3>Student basic information</h3>

						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>First Name</label>
									<input class="form-control" type="text" name="firstname" required >
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
                                    <label>Last Name</label>
									<input class="form-control" type="text" name="lastname" required >
								</div>
							</div>

                            <div class="col-lg-6 col-md-6">
								<div class="form-group">
                                <label>Middle Name</label>
									<input class="form-control" type="text" name="middlename" required >
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
                                <label>Password</label>
									<input class="form-control" type="password" name="password" required >
								</div>
							</div>

						</div>
                        <hr>

						<h3>Student personal information</h3>

						<div class="row">
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Phone Number</label>
									<input type="tel" class="form-control" name="phone_no" required >
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>E-mail</label>
									<input type="email" class="form-control" name="email" required >
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Date Of Birth</label>
									<div class="input-group date" id="datetimepicker">
										<input type="text" class="form-control" name="dob" required >
										<span class="input-group-addon"></span>
										<i class="bx bx-calendar"></i>
									</div>	
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label for="img">Upload passport</label>
									<input type="file" class="form-control" id="image" name="image" accept="image/*" required >
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
									<input class="form-control" type="text" name="matric_no" required >
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<div class="form-group">
                                    <label>CGPA</label>
									<input class="form-control" type="number" name="cgpa" required >	
									</div>
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Faculty</label>
									<input class="form-control" type="text" name="faculty" required >	
								</div>
							</div>

							<div class="col-lg-6 col-md-6">
								<div class="form-group">
									<label>Department</label>
									<input class="form-control" type="text" name="department" required >	
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
								<button class="default-btn register" type="submit">
									Submit application
									<i class="ri-arrow-right-line"></i>
								</button>	
							</div>
						</div>
					</form>
				</div>
			</div>
		</section>

		<?php include ('includes/footer.php'); ?>