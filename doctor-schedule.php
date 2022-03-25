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
    <?php
        include_once('modal_custom.php');
    ?>
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
<script src="assets/js/template.js"></script>
<script src="assets/js/page/schedule.js"></script>

</body>

<!-- Mirrored from pixelwibes.com/template/ihealth/html/dist/doctor-schedule.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Oct 2021 06:30:01 GMT -->

</html>