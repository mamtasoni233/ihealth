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
    <div class="modal fade right" id="Settingmodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog  modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Custom Settings</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body custom_setting">
                    <!-- Settings: Color -->
                    <div class="setting-theme pb-3">
                        <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-color-bucket fs-4 me-2 text-primary"></i>Template Color Settings</h6>
                        <ul class="list-unstyled row row-cols-3 g-2 choose-skin mb-2 mt-2">
                            <li data-theme="indigo">
                                <div class="indigo"></div>
                            </li>
                            <li data-theme="tradewind" class="active">
                                <div class="tradewind"></div>
                            </li>
                            <li data-theme="monalisa">
                                <div class="monalisa"></div>
                            </li>
                            <li data-theme="blue">
                                <div class="blue"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                            </li>
                            <li data-theme="blush">
                                <div class="blush"></div>
                            </li>
                            <li data-theme="red">
                                <div class="red"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-gradient py-3">
                        <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-paint fs-4 me-2 text-primary"></i>Sidebar Gradient</h6>
                        <div class="form-check form-switch gradient-switch pt-2 mb-2">
                            <input class="form-check-input" type="checkbox" id="CheckGradient">
                            <label class="form-check-label" for="CheckGradient">Enable Gradient! ( Sidebar )</label>
                        </div>
                    </div>
                    <!-- Settings: Template dynamics -->
                    <div class="dynamic-block py-3">
                        <ul class="list-unstyled choose-skin mb-2 mt-1">
                            <li data-theme="dynamic">
                                <div class="dynamic"><i class="icofont-paint me-2"></i> Click to Dyanmic Setting</div>
                            </li>
                        </ul>
                        <div class="dt-setting">
                            <ul class="list-group list-unstyled mt-1">
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label>Primary Color</label>
                                    <button id="primaryColorPicker" class="btn bg-primary avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label>Secondary Color</label>
                                    <button id="secondaryColorPicker" class="btn bg-secondary avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted">Chart Color 1</label>
                                    <button id="chartColorPicker1" class="btn chart-color1 avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted">Chart Color 2</label>
                                    <button id="chartColorPicker2" class="btn chart-color2 avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted">Chart Color 3</label>
                                    <button id="chartColorPicker3" class="btn chart-color3 avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted">Chart Color 4</label>
                                    <button id="chartColorPicker4" class="btn chart-color4 avatar xs border-0 rounded-0"></button>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center py-1 px-2">
                                    <label class="text-muted">Chart Color 5</label>
                                    <button id="chartColorPicker5" class="btn chart-color5 avatar xs border-0 rounded-0"></button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Settings: Font -->
                    <div class="setting-font py-3">
                        <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-font fs-4 me-2 text-primary"></i> Font Settings</h6>
                        <ul class="list-group font_setting mt-1">
                            <li class="list-group-item py-1 px-2">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="radio" name="font" id="font-poppins" value="font-poppins">
                                    <label class="form-check-label" for="font-poppins">
                                        Poppins Google Font
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item py-1 px-2">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="radio" name="font" id="font-opensans" value="font-opensans" checked="">
                                    <label class="form-check-label" for="font-opensans">
                                        Open Sans Google Font
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item py-1 px-2">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="radio" name="font" id="font-montserrat" value="font-montserrat">
                                    <label class="form-check-label" for="font-montserrat">
                                        Montserrat Google Font
                                    </label>
                                </div>
                            </li>
                            <li class="list-group-item py-1 px-2">
                                <div class="form-check mb-0">
                                    <input class="form-check-input" type="radio" name="font" id="font-mukta" value="font-mukta">
                                    <label class="form-check-label" for="font-mukta">
                                        Mukta Google Font
                                    </label>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- Settings: Light/dark -->
                    <div class="setting-mode py-3">
                        <h6 class="card-title mb-2 fs-6 d-flex align-items-center"><i class="icofont-layout fs-4 me-2 text-primary"></i>Contrast Layout</h6>
                        <ul class="list-group list-unstyled mb-0 mt-1">
                            <li class="list-group-item d-flex align-items-center py-1 px-2">
                                <div class="form-check form-switch theme-switch mb-0">
                                    <input class="form-check-input" type="checkbox" id="theme-switch">
                                    <label class="form-check-label" for="theme-switch">Enable Dark Mode!</label>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center py-1 px-2">
                                <div class="form-check form-switch theme-high-contrast mb-0">
                                    <input class="form-check-input" type="checkbox" id="theme-high-contrast">
                                    <label class="form-check-label" for="theme-high-contrast">Enable High Contrast</label>
                                </div>
                            </li>
                            <li class="list-group-item d-flex align-items-center py-1 px-2">
                                <div class="form-check form-switch theme-rtl mb-0">
                                    <input class="form-check-input" type="checkbox" id="theme-rtl">
                                    <label class="form-check-label" for="theme-rtl">Enable RTL Mode!</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="modal-footer justify-content-start">
                    <button type="button" class="btn btn-white border lift" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary lift">Save Changes</button>
                </div>
            </div>
        </div>
    </div>

</div>

</div>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<!-- Plugin Js-->
<script src="assets/bundles/dataTables.bundle.js"></script>

<!-- Jquery Page Js -->
<script src="../js/template.js"></script>
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