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
    <div class="body d-flex py-lg-3 py-md-2">
        <div class="container-xxl">
            <div class="row align-items-center">
                <div class="border-0 mb-4">
                    <div class="card-header py-3 no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                        <h3 class="fw-bold mb-0">Doctor Schedule</h3>
                        <div class="col-auto d-flex w-sm-100">
                            <button type="button" class="btn btn-primary btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#depadd"><i class="icofont-plus-circle me-2 fs-6"></i>Add Schedule</button>
                        </div>
                    </div>
                </div>
            </div> <!-- Row end  -->
            <div class="row clearfix g-3">
                <div class="col-sm-12">
                    <div class="card mb-3">
                        <div class="card-body overflow-auto">
                            <div class="schedule">

                                <div class="schedule_header">
                                    <span class="dl">Time</span>
                                    <span class="ds">Ti</span>
                                </div>

                                <!-- week-->
                                <div class="schedule_header schedule-sunday">
                                    <span class="dl">Sunday</span>
                                    <span class="ds">Su</span>
                                </div>
                                <div class="schedule_header schedule-monday">
                                    <span class="dl">Monday</span>
                                    <span class="ds">M</span>
                                </div>
                                <div class="schedule_header schedule-tuesday">
                                    <span class="dl">Tuesday</span>
                                    <span class="ds">T</span>
                                </div>
                                <div class="schedule_header schedule-wednesday">
                                    <span class="dl">Wednesday</span>
                                    <span class="ds">W</span>
                                </div>
                                <div class="schedule_header schedule-thursday">
                                    <span class="dl">Thursday</span>
                                    <span class="ds">Th</span>
                                </div>
                                <div class="schedule_header schedule-friday">
                                    <span class="dl">Friday</span>
                                    <span class="ds">F</span>
                                </div>
                                <div class="schedule_header schedule-saturday">
                                    <span class="dl">Saturday</span>
                                    <span class="ds">Sa</span>
                                </div>

                                <!-- Time-->

                                <div class="schedule_time time-from-s">07:00 AM</div>
                                <div class="schedule_time time-from-sf">08:15 AM</div>
                                <div class="schedule_time time-from-st">10:30 AM</div>
                                <div class="schedule_time time-from-sff">12:45 AM</div>

                                <div class="schedule_time time-from-e">01:00 PM</div>
                                <div class="schedule_time time-from-ef">02:15 PM</div>
                                <div class="schedule_time time-from-et">03:30 PM</div>
                                <div class="schedule_time time-from-eff">04:45 PM</div>

                                <div class="schedule_time time-from-n">05:00 PM</div>
                                <div class="schedule_time time-from-nf">06:15 PM</div>
                                <div class="schedule_time time-from-nt">07:30 PM</div>
                                <div class="schedule_time time-from-nff">09:45 PM</div>

                                <!--  Grid Rows-->

                                <div class="grid time-from-s time-to-sf schedule-row-from-sunday schedule-row-to-saturday"></div>
                                <div class="grid time-from-sf time-to-st schedule-row-from-sunday schedule-row-to-saturday"></div>
                                <div class="grid time-from-st time-to-sff schedule-row-from-sunday schedule-row-to-saturday"></div>

                                <div class="grid time-from-sff time-to-e schedule-row-from-sunday schedule-row-to-saturday"></div>
                                <div class="grid time-from-e time-to-ef schedule-row-from-sunday schedule-row-to-saturday"></div>
                                <div class="grid time-from-ef time-to-et schedule-row-from-sunday schedule-row-to-saturday"></div>
                                <div class="grid time-from-et time-to-eff schedule-row-from-sunday schedule-row-to-saturday"></div>

                                <div class="grid time-from-eff time-to-n schedule-row-from-sunday schedule-row-to-saturday"></div>
                                <div class="grid time-from-n time-to-nf schedule-row-from-sunday schedule-row-to-saturday"></div>
                                <div class="grid time-from-nf time-to-nt schedule-row-from-sunday schedule-row-to-saturday"></div>
                                <div class="grid time-from-nt time-to-nff schedule-row-from-sunday schedule-row-to-saturday"></div>
                                <div class="grid grid-last time-from-nff time-to-nff schedule-row-from-sunday schedule-row-to-saturday"></div>

                                <!--   ./Grid Rows-->

                                <div class="grid schedule-sunday time-from-s time-to-nff"></div>
                                <div class="grid grid-last schedule-sunday time-from-nff time-to-nff"></div>
                                <div class="grid schedule-monday time-from-s time-to-nff"></div>
                                <div class="grid grid-last schedule-monday time-from-nff time-to-nff"></div>

                                <div class="grid schedule-tuesday time-from-s time-to-nff"></div>
                                <div class="grid grid-last schedule-tuesday time-from-nff time-to-nff"></div>

                                <div class="grid schedule-wednesday time-from-s time-to-nff"></div>
                                <div class="grid grid-last schedule-wednesday time-from-nff time-to-nff"></div>

                                <div class="grid schedule-thursday time-from-s time-to-nff"></div>
                                <div class="grid grid-last schedule-thursday time-from-nff time-to-nff"></div>

                                <div class="grid schedule-friday time-from-s time-to-nff"></div>
                                <div class="grid grid-last schedule-friday time-from-nff time-to-nff"></div>

                                <div class="grid schedule-saturday time-from-s time-to-nff"></div>
                                <div class="grid grid-last schedule-saturday time-from-nff time-to-nff"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Row End -->
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

    <!-- Add Schedule-->
    <div class="modal fade" id="depadd" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="depaddLabel"> Schedule Add</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="deadline-form">
                        <form>
                            <div class="row g-3 mb-3">
                                <div class="col-sm-6">
                                    <label for="depone" class="form-label">Schedule Day</label>
                                    <input type="text" class="form-control" id="depone">
                                </div>
                                <div class="col-sm-6">
                                    <label for="deptwo" class="form-label">Schedule Time</label>
                                    <input type="time" class="form-control" id="deptwo">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Schedule Note</label>
                        <textarea class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
        </div>
    </div>

</div>

</div>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>


<!-- Jquery Page Js -->
<script src="../js/template.js"></script>
<script src="../js/page/schedule.js"></script>

</body>

<!-- Mirrored from pixelwibes.com/template/ihealth/html/dist/doctor-schedule.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Oct 2021 06:30:01 GMT -->

</html>