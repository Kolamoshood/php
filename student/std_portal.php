<?php include ("header.stud.php"); ?>

                    <div class="row">
                        <div class="col-lg-12">
                            <div>
                                <div class="d-flex">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills animation-nav profile-nav gap-2 gap-lg-3 flex-grow-1" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link fs-14 active" data-bs-toggle="tab" href="#overview-tab" role="tab">
                                                <i class="ri-airplay-fill d-inline-block d-md-none"></i> <span class="d-none d-md-inline-block">Overview</span>
                                            </a>
                                        </li>
                                    </ul>
                                    <div class="flex-shrink-0">
                                        <a href="details.php" class="btn btn-success"><i class="ri-edit-box-line align-bottom"></i> View Profile</a>
                                    </div>
                                </div>
                                <!-- Tab panes -->
                                <div class="tab-content pt-4 text-muted">
                                    <div class="tab-pane active" id="overview-tab" role="tabpanel">
                                        <div class="row">
                                            <div class="col-xxl-3">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title mb-5">Complete Your Profile</h5>
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
                                                </div><!-- end card -->

                                                
                                                
                                                <!--end card-->
                                                <!--end card-->
                                            </div>
                                            <!--end col-->
                                            <div class="col-xxl-9">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title mb-3">About</h5>
                                                        <p><?php echo $firstname .' '. $lastname; ?> is a <?php echo $level ?> level student of the department of <?php echo $department ?>, faculty of <?php echo $faculty ?>, University of My school with a CGPA of <?php echo $cgpa ?> . He can be contacted on phone through <?php echo $phone_no ?> or on mail through <?php echo $email ?> .</p>                                                        <div class="row">
                                                            <div class="col-6 col-md-4">
                                                                <div class="d-flex mt-4">
                                                                    <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                        <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                                            <i class="ri-user-2-fill"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1 overflow-hidden">
                                                                        <p class="mb-1">Matric Number :</p>
                                                                        <h6 class="text-truncate mb-0"><?php echo $matric_no ?></h6>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                            <div class="col-6 col-md-4">
                                                                <div class="d-flex mt-4">
                                                                    <div class="flex-shrink-0 avatar-xs align-self-center me-3">
                                                                        <div class="avatar-title bg-light rounded-circle fs-16 text-primary">
                                                                            <i class="ri-global-line"></i>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex-grow-1 overflow-hidden">
                                                                        <p class="mb-1">Level :</p>
                                                                        <a href="#" class="fw-semibold"><?php echo $level ?></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!--end col-->
                                                        </div>
                                                        <!--end row-->
                                                    </div>
                                                    <!--end card-body-->
                                                </div><!-- end card -->

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
                                                                <img class="card-img-top img-fluid" src="assets/images/users/avatar-9.jpg" alt="Card image cap">
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
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </div>
                                    <!--end tab-pane-->
                                    
                                <!--end tab-content-->
                            </div>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->

                </div><!-- container-fluid -->
            </div><!-- End Page-content -->

            <?php include ("footer.stud.php"); ?>