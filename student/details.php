<?php include ("header.stud.php"); ?>


<div class="row">
                        <div class="col-xxl-3">
                            <div class="card mt-n5">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <div class="profile-user position-relative d-inline-block mx-auto  mb-4">
                                            <img src="../uploads/<?php echo $image; ?>" class="rounded-circle avatar-xl img-thumbnail user-profile-image">
                                            <div class="avatar-xs p-0 rounded-circle profile-photo-edit">
                                                <input id="profile-img-file-input" type="file" class="profile-img-file-input">
                                                <label for="profile-img-file-input" class="profile-photo-edit avatar-xs">
                                                    <span class="avatar-title rounded-circle bg-light text-body">
                                                        <i class="ri-camera-fill"></i>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <h5 class="fs-16 mb-1"><?php echo $firstname .' '. $lastname; ?></h5>
                                        <p class="text-muted mb-0">Undergraduate</p>
                                    </div>
                                </div>
                            </div>
                            <!--end card-->
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center mb-5">
                                        <div class="flex-grow-1">
                                            <h5 class="card-title mb-0">Complete Your Profile</h5>
                                        </div>
                                        <div class="flex-shrink-0">
                                            <a href="javascript:void(0);" class="badge bg-light text-primary fs-12"><i class="ri-edit-box-line align-bottom me-1"></i> Edit</a>
                                        </div>
                                    </div>
                                    <div class="progress animated-progress custom-progress progress-label">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                            <div class="label">30%</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title mb-3">Info</h5>
                                    <div class="table-responsive">
                                        <table class="table table-borderless mb-0">
                                            <tbody>
                                                <tr>
                                                    <th class="ps-0" scope="row">Full Name :</th>
                                                    <td class="text-muted"><?php echo $firstname .' '. $lastname; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-0" scope="row">Mobile :</th>
                                                    <td class="text-muted"><?php echo $phone_no; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-0" scope="row">E-mail :</th>
                                                    <td class="text-muted"><?php echo $email; ?></td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-0" scope="row">Matric Number :</th>
                                                    <td class="text-muted"> <?php echo $matric_no ;?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th class="ps-0" scope="row">Current Level</th>
                                                    <td class="text-muted"> 200 level</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- end card body -->
                            </div>
                            <!--end card-->
                        </div>
                        <!--end col-->
                        <div class="col-xxl-9">
                            <div class="card mt-xxl-n5">
                                <div class="card-header">
                                    <ul class="nav nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab">
                                                <i class="fas fa-home"></i> Personal Details
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab">
                                                <i class="far fa-user"></i> Change Password
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#experience" role="tab">
                                                <i class="far fa-envelope"></i> Level Adviser
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body p-4">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="personalDetails" role="tabpanel">
                                            <!-- <form action="javascript:void(0);"> -->
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="firstnameInput" class="form-label">First Name</label>
                                                            <input type="text" class="form-control" id="firstnameInput"  value="<?php echo $firstname; ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="lastnameInput" class="form-label">Last Name</label>
                                                            <input type="text" class="form-control" id="lastnameInput" value="<?php echo $lastname; ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="middlenameInput" class="form-label">Middle Name</label>
                                                            <input type="text" class="form-control" id="middlenameInput" value="<?php echo $middlename; ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="dobInput" class="form-label">Date of Birth</label>
                                                            <input type="text" class="form-control" id="dobInput" value="<?php echo $dob; ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="mstric-noInput" class="form-label">Matric Number</label>
                                                            <input type="text" class="form-control" id="matric-noInput" value="<?php echo $matric_no; ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="facultyInput" class="form-label">Faculty</label>
                                                            <input type="text" class="form-control" id="facultyInput" value="<?php echo $faculty; ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="departmentInput" class="form-label">Department</label>
                                                            <input type="text" class="form-control" id="departmentInput" value="<?php echo $department; ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="level" class="form-label">Level</label>
                                                            <input type="text" class="form-control" id="level" value="<?php echo $level; ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="studentemailInput" class="form-label">Student Email Address</label>
                                                            <input type="email" class="form-control" id="studentemailInput" value="<?php echo $level; ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="studentemailInput" class="form-label">Current CGPA</label>
                                                            <input type="email" class="form-control" id="studentemailInput" value="<?php echo $cgpa; ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="phonenumberInput" class="form-label">Phone Number</label>
                                                            <input type="text" class="form-control" id="phonenumberInput" value="<?php echo $phone_no; ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-6">
                                                        <div class="mb-3">
                                                            <label for="emailInput" class="form-label">Email Address</label>
                                                            <input type="email" class="form-control" id="emailInput" value="<?php echo $email; ?>" disabled>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="mb-3 pb-2">
                                                            <label for="exampleFormControlTextarea" class="form-label">Summary</label>
                                                            <textarea class="form-control" id="exampleFormControlTextarea" placeholder="Enter your description" rows="3" disabled> <?php echo $firstname .' '. $lastname; ?> is a <?php echo $level ?> level student of the department of <?php echo $department ?>, faculty of <?php echo $faculty ?>, University of My school with a CGPA of <?php echo $cgpa ?> . He can be contacted on phone through <?php echo $phone_no ?> or on mail through <?php echo $email ?> . </textarea>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            <!-- </form> -->
                                        </div>
                                        <!--end tab-pane-->
                                        <div class="tab-pane" id="changePassword" role="tabpanel">
                                            <form action="javascript:void(0);">
                                                <div class="row g-2">
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <label for="oldpasswordInput" class="form-label">Old Password*</label>
                                                            <input type="password" class="form-control" id="oldpasswordInput" placeholder="Enter current password">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <label for="newpasswordInput" class="form-label">New Password*</label>
                                                            <input type="password" class="form-control" id="newpasswordInput" placeholder="Enter new password">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-4">
                                                        <div>
                                                            <label for="confirmpasswordInput" class="form-label">Confirm Password*</label>
                                                            <input type="password" class="form-control" id="confirmpasswordInput" placeholder="Confirm password">
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="mb-3">
                                                            <a href="javascript:void(0);" class="link-primary text-decoration-underline">Forgot Password ?</a>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                    <div class="col-lg-12">
                                                        <div class="text-end">
                                                            <button type="submit" class="btn btn-success">Change Password</button>
                                                        </div>
                                                    </div>
                                                    <!--end col-->
                                                </div>
                                                <!--end row-->
                                            </form>
                                            <div class="mt-4 mb-3 border-bottom pb-2">
                                                <div class="float-end">
                                                    <a href="javascript:void(0);" class="link-primary">All Logout</a>
                                                </div>
                                                <h5 class="card-title">Login History</h5>
                                            </div>
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="flex-shrink-0 avatar-sm">
                                                    <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                                        <i class="ri-smartphone-line"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6>iPhone 12 Pro</h6>
                                                    <p class="text-muted mb-0">Los Angeles, United States - March 16 at 2:47PM</p>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);">Logout</a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="flex-shrink-0 avatar-sm">
                                                    <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                                        <i class="ri-tablet-line"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6>Apple iPad Pro</h6>
                                                    <p class="text-muted mb-0">Washington, United States - November 06 at 10:43AM</p>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);">Logout</a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mb-3">
                                                <div class="flex-shrink-0 avatar-sm">
                                                    <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                                        <i class="ri-smartphone-line"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6>Galaxy S21 Ultra 5G</h6>
                                                    <p class="text-muted mb-0">Conneticut, United States - June 12 at 3:24PM</p>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);">Logout</a>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center">
                                                <div class="flex-shrink-0 avatar-sm">
                                                    <div class="avatar-title bg-light text-primary rounded-3 fs-18">
                                                        <i class="ri-macbook-line"></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1 ms-3">
                                                    <h6>Dell Inspiron 14</h6>
                                                    <p class="text-muted mb-0">Phoenix, United States - July 26 at 8:10AM</p>
                                                </div>
                                                <div>
                                                    <a href="javascript:void(0);">Logout</a>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- start experience -->
                                        <div class="tab-pane" id="experience" role="tabpanel">
                                            <div class="card rounded-0 bg-soft-primary mx-n4 mt-n4 border-top">
                                                <div class="px-4">
                                                    <div class="row">
                                                        <div class="col-xxl-5 align-self-center">
                                                            <div class="py-4">
                                                                <h4 class="display-6 coming-soon-text text-dark">Level Adviser</h4>
                                                                <p class="text-dark fs-15 mt-3">If you have any issue with your academics or student life, you can always contact or email your Level adviser.He/she will always be available to help!</p>
                                                                <div class="hstack flex-wrap gap-2">
                                                                    <button type="button" class="btn btn-primary btn-label rounded-pill"><i class="ri-mail-line label-icon align-middle rounded-pill fs-16 me-2"></i> samuela@gmail.com</button>
                                                                    <button type="button" class="btn btn-info btn-label rounded-pill"><i class="ri-twitter-line label-icon align-middle rounded-pill fs-16 me-2"></i> @drsamuelajewole</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xxl-5 ms-auto">
                                                            <div class="card">
                                                                <img class="card-img-top img-fluid" src="../uploads/user-265.jpg"  alt="Card image cap">
                                                                <div class="card-body">
                                                                    <p class="card-text">Dr Samuel got his LLB from the University of ASUU, Nigeria, his LLM from the University of Sapa and his PHD from Shewo University, United Kingdom. He has written over 50 articles in both national and global journals and is specially recognised in Sapataical.</p>
                                                                </div>
                                                                <ul class="list-group list-group-flush">
                                                                    <li class="list-group-item"><strong>Name:</strong> Dr Samuel Ajewole</li>
                                                                    <li class="list-group-item"><strong>Phone Number :</strong> 070 4382 0070</li>
                                                                    <li class="list-group-item"><strong> Email :</strong> samuela@gmail.com</li>
                                                                </ul>
                                                            </div><!-- end card -->
                                                        </div>
                            
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!--end tab-pane-->
                                        <!--end tab-pane-->
                                        <!--end tab-pane-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->


<?php include ("footer.stud.php"); ?>