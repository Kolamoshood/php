<?php include ("header.stud.php");
$message = "";
$error = "";
?>

<br class="mt-5">
<br class="mt-5">
    <div class="row justify-content-center mt-5">
                        <div class="col-lg-5 mt-5">
                            <div class="text-center mb-4 mt-5">
                                <h4 class="fw-semibold fs-22">Faculties and Departments</h4>
                                <p class="text-muted mb-4 fs-15">Here is a list of our Faculties and Departments.</p>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                    <div class="row">
                        <div class="col-xxl-4 col-lg-6">
                            <div class="card pricing-box">
                                <div class="card-body bg-light m-2 p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-grow-1">
                                            <h5 class="mb-0 fw-semibold">Faculty of Medical Sciences</h5>
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                    <?php 
                                    // include ("../config.php");
                                    $query = "SELECT faculty.faculty AS faculties, department.department AS departments FROM faculty, department WHERE faculty.id = department.faculty_id AND faculty.faculty = 'medical_sciences'";
                                    $result = mysqli_query($connection, $query);
                                    if ($count = mysqli_num_rows($result)!= 0){
                                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                            $faculties = $row["faculties"];
                                            $departments = $row["departments"];
                                            echo "<div class='mb-2'>";
                                            echo "<i class='ri-checkbox-circle-fill fs-15 align-middle text-success me-1'></i>";
                                            echo "$departments <br>";
                                            echo "</div>";
                                        }
                                    } else echo "error";
                                    
                                    ?>
                                   </div> 
                                   
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <div class="col-xxl-4 col-lg-6">
                            <div class="card pricing-box">
                                <div class="card-body bg-light m-2 p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-grow-1">
                                            <h5 class="mb-0 fw-semibold">Faculty of Art</h5>
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                    <?php 
                                    // include ("../config.php");
                                    $query = "SELECT faculty.faculty AS faculties, department.department AS departments FROM faculty, department WHERE faculty.id = department.faculty_id AND faculty.faculty = 'Arts'";
                                    $result = mysqli_query($connection, $query);
                                    if ($count = mysqli_num_rows($result)!= 0){
                                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                            $faculties = $row["faculties"];
                                            $departments = $row["departments"];
                                            echo "<div class='mb-2'>";
                                            echo "<i class='ri-checkbox-circle-fill fs-15 align-middle text-success me-1'></i>";
                                            echo "$departments <br>";
                                            echo "</div>";
                                        }
                                    } else echo "error";
                                    
                                    ?>
                                   </div> 
                                   
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <!--end col-->

                        <div class="col-xxl-4 col-lg-6">
                            <div class="card pricing-box">
                                <div class="card-body bg-light m-2 p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-grow-1">
                                            <h5 class="mb-0 fw-semibold">Faculty of Engineering</h5>
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                    <?php 
                                    // include ("../config.php");
                                    $query = "SELECT faculty.faculty AS faculties, department.department AS departments FROM faculty, department WHERE faculty.id = department.faculty_id AND faculty.faculty = 'Engineering'";
                                    $result = mysqli_query($connection, $query);
                                    if ($count = mysqli_num_rows($result)!= 0){
                                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                            $faculties = $row["faculties"];
                                            $departments = $row["departments"];
                                            echo "<div class='mb-2'>";
                                            echo "<i class='ri-checkbox-circle-fill fs-15 align-middle text-success me-1'></i>";
                                            echo "$departments <br>";
                                            echo "</div>";
                                        }
                                    } else echo "error";
                                    
                                    ?>
                                   </div> 
                                   
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                    </div>    
                    <!--end row-->

                    <div class="row">
                        <div class="col-xxl-4 col-lg-6">
                            <div class="card pricing-box">
                                <div class="card-body bg-light m-2 p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-grow-1">
                                            <h5 class="mb-0 fw-semibold">Faculty of Social Sciences</h5>
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                    <?php 
                                    // include ("../config.php");
                                    $query = "SELECT faculty.faculty AS faculties, department.department AS departments FROM faculty, department WHERE faculty.id = department.faculty_id AND faculty.faculty = 'social-sciences'";
                                    $result = mysqli_query($connection, $query);
                                    if ($count = mysqli_num_rows($result)!= 0){
                                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                            $faculties = $row["faculties"];
                                            $departments = $row["departments"];
                                            echo "<div class='mb-2'>";
                                            echo "<i class='ri-checkbox-circle-fill fs-15 align-middle text-success me-1'></i>";
                                            echo "$departments <br>";
                                            echo "</div>";
                                        }
                                    } else echo "error";
                                    
                                    ?>
                                   </div> 
                                   
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-4 col-lg-6">
                            <div class="card pricing-box">
                                <div class="card-body bg-light m-2 p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-grow-1">
                                            <h5 class="mb-0 fw-semibold">Faculty of Law</h5>
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                    <?php 
                                    // include ("../config.php");
                                    $query = "SELECT faculty.faculty AS faculties, department.department AS departments FROM faculty, department WHERE faculty.id = department.faculty_id AND faculty.faculty = 'Law'";
                                    $result = mysqli_query($connection, $query);
                                    if ($count = mysqli_num_rows($result)!= 0){
                                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                            $faculties = $row["faculties"];
                                            $departments = $row["departments"];
                                            echo "<div class='mb-2'>";
                                            echo "<i class='ri-checkbox-circle-fill fs-15 align-middle text-success me-1'></i>";
                                            echo "$departments <br>";
                                            echo "</div>";
                                        }
                                    } else echo "error";
                                    
                                    ?>
                                   </div> 
                                   
                                </div>
                            </div>
                        </div>
                        <!--end col-->

                        <!--  List of Departments -->

                        <div class="col-xxl-4 col-lg-6">
                            <div class="card pricing-box">
                                <div class="card-body bg-light m-2 p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="flex-grow-1">
                                            <h5 class="mb-0 fw-semibold">Faculty of Sciences</h5>
                                        </div>

                                    </div>
                                    <div class="mb-3">
                                    <?php 
                                    // include ("../config.php");
                                    $query = "SELECT faculty.faculty AS faculties, department.department AS departments FROM faculty, department WHERE faculty.id = department.faculty_id AND faculty.faculty = 'Sciences'";
                                    $result = mysqli_query($connection, $query);
                                    if ($count = mysqli_num_rows($result)!= 0){
                                        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                            $faculties = $row["faculties"];
                                            $departments = $row["departments"];
                                            echo "<div class='mb-2'>";
                                            echo "<i class='ri-checkbox-circle-fill fs-15 align-middle text-success me-1'></i>";
                                            echo "$departments <br>";
                                            echo "</div>";
                                        }
                                    } else echo "error";
                                    
                                    ?>
                                   </div> 
                                   
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>    
                    <!--end row-->

                    <!-- courses -->
                    <?php 
                    
                    $query = "SELECT faculty.faculty AS faculties, student.faculty AS stud_faculty, course.courses AS courses FROM faculty, student, course WHERE faculty.faculty = '$faculty' AND course.faculty_id = faculty.id AND student.matric_no = '$matric_no'";
                    $result = mysqli_query($connection, $query);
                    if ($count = mysqli_num_rows($result) != 0){
                        
                    ?>
                    <div class="card mt-xxl-5">
                                <div class="card-header m-3">
                                    <h3> Proceed to Course Registration </h3>
                                </div>
                                <div class="card-body p-4">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <p>Course Unit <span class="ms-3">Course</span> </p>
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                    <p>Select</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body p-4">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                            <form action="" method="POST">
                                                <input type="hidden" name="<?php echo $matric_no ; ?>" value="<?php echo $matric_no ; ?>">
                                                    <?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                                        $course = $row["courses"];
                                                        
                                                        ?>
                                                        
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                    
                       
                                                        <div class="mb-3 custom-control custom-checkbox">
                                                            <?php 
                                                            
                                                            $unitquery = "SELECT * FROM course WHERE courses = '$course'";
                                                            $unitresult = mysqli_query($connection, $unitquery);
                                                            $row = mysqli_fetch_assoc($unitresult);
                                                            $unit = $row['unit'];
                                                            echo $unit;
                                                            ?>
                                                            <label for="firstnameInput" class="custom-control-label"><?php echo "<p class='ms-5'>$course </p>";?></label>
                                                            
                                                        </div>
                                                    
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                                       <input type="checkbox" class="custom-control-checkbox" id="course" name="<?php echo $course ;?>"  value="<?php echo $course ;?>" >
                                                    </div>
                                                </div>
                                                <!--end row-->
                                            <?php } ?>
                                            <button type="submit" class="btn btn-primary"> Submit </button>
                                            </form>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                    </div>
                        <?php }?>
                        <div class="mb-3">
                                            <?php include ("includes/success_message.php"); ?>
                                            <?php include ("includes/error_message.php"); ?>
                        </div>
    </div>




<?php include ("footer.stud.php"); ?>