<?php include ("header.stud.php");

include ("../config.php");

$message = "";
$error = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $row["password"];
    $password1 = mysqli_real_escape_string($connection, $_POST["password"]);
    $newpwd = mysqli_real_escape_string($connection, $_POST["new-pwd"]);
    $newpwdrpt = mysqli_real_escape_string($connection, $_POST["new-pwd-rpt"]);
    if (empty($password) || empty($password1) || empty($newpwd) || empty($newpwdrpt)){
        $error = "You must fill all fields!";
    } 
    else if ($password == md5($password1)){
        if ($newpwd == $newpwdrpt){
            $query = "UPDATE student SET password = md5('$newpwdrpt') WHERE matric_no = '$matric_no'";
            $result = mysqli_query($connection, $query);
            if ($result) {
                $message = "You have succesfully changed your password";
            } else {
                $error = "Password reset failed";
            }
        } else {
            $error = "passwords dont match";
        }
    } else {
        $error = "Your password is inputed incorrectly!";
    }
}


?>

<body>


                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card mt-4">

                            <div class="card-body p-4">
                                <div class="text-center mt-2">
                                    <h5 class="text-primary">Create new password</h5>
                                    <p class="text-muted">Your new password must be different from previous used password.</p>
                                </div>

                                <div class="mb-3">
                                            <?php include ("includes/success_message.php"); ?>
                                            <?php include ("includes/error_message.php"); ?>
                                </div>


                                <div class="p-2">
                                    <form action="" method="POST">
                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">Current Password</label>
                                            <div class="position-relative auth-pass-inputgroup">
                                                <input type="password" name="password" class="form-control pe-5 password-input"  placeholder="Enter current password" >
                                            </div>
                                            <div id="passwordInput" class="form-text"> This is Capslock sensitive.</div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="password-input">New Password</label>
                                            <div class="position-relative auth-pass-inputgroup">
                                                <input type="password" name="new-pwd" class="form-control pe-5 password-input"  placeholder="Enter new password"  >
                                            </div>
                                            <div id="passwordInput" class="form-text">Must be at least 8 characters.</div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label" for="confirm-password-input">Confirm New Password</label>
                                            <div class="position-relative auth-pass-inputgroup mb-3">
                                                <input type="password" name="new-pwd-rpt" class="form-control pe-5 password-input"  placeholder="Confirm New password"  >
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox"  id="auth-remember-check">
                                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                                        </div>

                                        <div class="mt-4">
                                            <button class="btn btn-success w-100" type="submit">Reset Password</button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->

                    </div>
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end auth page content -->

<?php include ("footer.stud.php"); ?>