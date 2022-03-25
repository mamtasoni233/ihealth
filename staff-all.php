<?php
require_once('db/connection.php');

?>
<?php
include_once('head.php');
?>
<?php
include_once('sidebar.php');
?>

<!-- main body area -->
<div class="main px-lg-4 px-md-4">

    <?php
    include_once('header.php');
    ?>

    <!-- Body: Body -->
    <div class="body d-flex py-3">
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Doctor List </h3>
                    </div>
                </div>
            </div> <!-- Row end  -->
            <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-4 row-deck py-1 pb-4">
                <div class="col">
                    <div class="card teacher-card ">
                        <div class="card-body d-flex flex-column">
                            <div class="profile-av mx-auto text-center w220">
                                <img src="assets/images/sm/avatar3.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                <div class="about-info d-flex align-items-center mt-3 justify-content-center">
                                    <div class="followers rounded-circle me-3">
                                        <a href="#">
                                            <i class="bi bi-facebook fs-5 text-blue"></i>
                                        </a>
                                    </div>
                                    <div class="own-video rounded-circle me-3">
                                        <a href="#">
                                            <i class="bi bi-instagram fs-5 text-danger"></i>
                                        </a>
                                    </div>
                                    <div class="star rounded-circle ">
                                        <a href="#">
                                            <i class="bi bi-linkedin fs-5 text-blue"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="teacher-info  w-100 text-center mt-3">
                                <h6 class="mb-2 mt-2  fw-bold d-block fs-6">Dr.Joan Wilson</h6>
                                <span class="light-info-bg py-2 px-2 rounded-1 d-inline-block fw-bold small-11 mb-0 mt-1">Heart Surgeon</span>
                                <a href="doctor-profile.php" class="btn btn-primary btn-sm">Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card teacher-card ">
                        <div class="card-body d-flex flex-column">
                            <div class="profile-av mx-auto text-center w220">
                                <img src="assets/images/lg/avatar2.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                <div class="about-info d-flex align-items-center mt-3 justify-content-center">
                                    <div class="followers rounded-circle me-3">
                                        <a href="#">
                                            <i class="bi bi-facebook fs-5 text-blue"></i>
                                        </a>
                                    </div>
                                    <div class="own-video rounded-circle me-3">
                                        <a href="#">
                                            <i class="bi bi-instagram fs-5 text-danger"></i>
                                        </a>
                                    </div>
                                    <div class="star rounded-circle ">
                                        <a href="#">
                                            <i class="bi bi-linkedin fs-5 text-blue"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="teacher-info  w-100 text-center mt-3">
                                <h6 class="mb-2 mt-2  fw-bold d-block fs-6">DR.Alexander</h6>
                                <span class="light-info-bg py-2 px-2 rounded-1 d-inline-block fw-bold small-11 mb-0 mt-1">Dentist</span>
                                <a href="doctor-profile.php" class="btn btn-primary btn-sm">Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card teacher-card ">
                        <div class="card-body d-flex flex-column">
                            <div class="profile-av mx-auto text-center w220">
                                <img src="assets/images/sm/avatar4.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                <div class="about-info d-flex align-items-center mt-3 justify-content-center">
                                    <div class="followers rounded-circle me-3">
                                        <a href="#">
                                            <i class="bi bi-facebook fs-5 text-blue"></i>
                                        </a>
                                    </div>
                                    <div class="own-video rounded-circle me-3">
                                        <a href="#">
                                            <i class="bi bi-instagram fs-5 text-danger"></i>
                                        </a>
                                    </div>
                                    <div class="star rounded-circle ">
                                        <a href="#">
                                            <i class="bi bi-linkedin fs-5 text-blue"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="teacher-info  w-100 text-center mt-3">
                                <h6 class="mb-2 mt-2  fw-bold d-block fs-6">DR.Peter</h6>
                                <span class="light-info-bg py-2 px-2 rounded-1 d-inline-block fw-bold small-11 mb-0 mt-1">Dermatologists</span>
                                <a href="doctor-profile.php" class="btn btn-primary btn-sm">Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card teacher-card ">
                        <div class="card-body d-flex flex-column">
                            <div class="profile-av mx-auto text-center w220">
                                <img src="assets/images/sm/avatar5.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                <div class="about-info d-flex align-items-center mt-3 justify-content-center">
                                    <div class="followers rounded-circle me-3">
                                        <a href="#">
                                            <i class="bi bi-facebook fs-5 text-blue"></i>
                                        </a>
                                    </div>
                                    <div class="own-video rounded-circle me-3">
                                        <a href="#">
                                            <i class="bi bi-instagram fs-5 text-danger"></i>
                                        </a>
                                    </div>
                                    <div class="star rounded-circle ">
                                        <a href="#">
                                            <i class="bi bi-linkedin fs-5 text-blue"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="teacher-info  w-100 text-center mt-3">
                                <h6 class="mb-2 mt-2  fw-bold d-block fs-6">DR.Mary</h6>
                                <span class="light-info-bg py-2 px-2 rounded-1 d-inline-block fw-bold small-11 mb-0 mt-1">Gynecologist</span>
                                <a href="doctor-profile.php" class="btn btn-primary btn-sm">Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card teacher-card ">
                        <div class="card-body d-flex flex-column">
                            <div class="profile-av mx-auto text-center w220">
                                <img src="assets/images/sm/avatar5.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                <div class="about-info d-flex align-items-center mt-3 justify-content-center">
                                    <div class="followers rounded-circle me-3">
                                        <a href="#">
                                            <i class="bi bi-facebook fs-5 text-blue"></i>
                                        </a>
                                    </div>
                                    <div class="own-video rounded-circle me-3">
                                        <a href="#">
                                            <i class="bi bi-instagram fs-5 text-danger"></i>
                                        </a>
                                    </div>
                                    <div class="star rounded-circle ">
                                        <a href="#">
                                            <i class="bi bi-linkedin fs-5 text-blue"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="teacher-info  w-100 text-center mt-3">
                                <h6 class="mb-2 mt-2  fw-bold d-block fs-6">DR.Zoe</h6>
                                <span class="light-info-bg py-2 px-2 rounded-1 d-inline-block fw-bold small-11 mb-0 mt-1">ENT Specialist</span>
                                <a href="doctor-profile.php" class="btn btn-primary btn-sm">Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card teacher-card ">
                        <div class="card-body d-flex flex-column">
                            <div class="profile-av mx-auto text-center w220">
                                <img src="assets/images/sm/avatar8.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                <div class="about-info d-flex align-items-center mt-3 justify-content-center">
                                    <div class="followers rounded-circle me-3">
                                        <a href="#">
                                            <i class="bi bi-facebook fs-5 text-blue"></i>
                                        </a>
                                    </div>
                                    <div class="own-video rounded-circle me-3">
                                        <a href="#">
                                            <i class="bi bi-instagram fs-5 text-danger"></i>
                                        </a>
                                    </div>
                                    <div class="star rounded-circle ">
                                        <a href="#">
                                            <i class="bi bi-linkedin fs-5 text-blue"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="teacher-info  w-100 text-center mt-3">
                                <h6 class="mb-2 mt-2  fw-bold d-block fs-6">DR.Grace</h6>
                                <span class="light-info-bg py-2 px-2 rounded-1 d-inline-block fw-bold small-11 mb-0 mt-1">Cardiologist</span>
                                <a href="doctor-profile.php" class="btn btn-primary btn-sm">Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card teacher-card ">
                        <div class="card-body d-flex flex-column">
                            <div class="profile-av mx-auto text-center w220">
                                <img src="assets/images/sm/avatar9.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                <div class="about-info d-flex align-items-center mt-3 justify-content-center">
                                    <div class="followers rounded-circle me-3">
                                        <a href="#">
                                            <i class="bi bi-facebook fs-5 text-blue"></i>
                                        </a>
                                    </div>
                                    <div class="own-video rounded-circle me-3">
                                        <a href="#">
                                            <i class="bi bi-instagram fs-5 text-danger"></i>
                                        </a>
                                    </div>
                                    <div class="star rounded-circle ">
                                        <a href="#">
                                            <i class="bi bi-linkedin fs-5 text-blue"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="teacher-info  w-100 text-center mt-3">
                                <h6 class="mb-2 mt-2  fw-bold d-block fs-6">DR.Diana</h6>
                                <span class="light-info-bg py-2 px-2 rounded-1 d-inline-block fw-bold small-11 mb-0 mt-1">General Surgeon</span>
                                <a href="doctor-profile.php" class="btn btn-primary btn-sm">Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card teacher-card ">
                        <div class="card-body d-flex flex-column">
                            <div class="profile-av mx-auto text-center w220">
                                <img src="assets/images/sm/avatar10.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                <div class="about-info d-flex align-items-center mt-3 justify-content-center">
                                    <div class="followers rounded-circle me-3">
                                        <a href="#">
                                            <i class="bi bi-facebook fs-5 text-blue"></i>
                                        </a>
                                    </div>
                                    <div class="own-video rounded-circle me-3">
                                        <a href="#">
                                            <i class="bi bi-instagram fs-5 text-danger"></i>
                                        </a>
                                    </div>
                                    <div class="star rounded-circle ">
                                        <a href="#">
                                            <i class="bi bi-linkedin fs-5 text-blue"></i>
                                        </a>
                                    </div>

                                </div>
                            </div>
                            <div class="teacher-info  w-100 text-center mt-3">
                                <h6 class="mb-2 mt-2  fw-bold d-block fs-6">DR.Sarah</h6>
                                <span class="light-info-bg py-2 px-2 rounded-1 d-inline-block fw-bold small-11 mb-0 mt-1">Pediatricians</span>
                                <a href="doctor-profile.php" class="btn btn-primary btn-sm">Profile</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Custom Settings-->
    <?php
        include_once('modal_custom.php');
    ?>

</div>

</div>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<!-- Plugin Js-->
<script src="assets/bundles/dataTables.bundle.js"></script>

<!-- Jquery Page Js -->
<script src="asstes/js/template.js"></script>
<script>
    $(document).ready(function() {
        $('#patient-table')
            .addClass('nowrap')
            .dataTable({
                responsive: true,
                columnDefs: [{
                    targets: [-1, -3],
                    className: 'dt-body-right'
                }]
            });
    });
</script>

</body>

<!-- Mirrored from pixelwibes.com/template/ihealth/html/dist/doctor-all.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Oct 2021 06:30:00 GMT -->

</html>