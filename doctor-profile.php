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

            <div class="row g-3">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="card teacher-card  mb-3">
                        <div class="card-body d-flex teacher-fulldeatil">
                            <div class="profile-teacher pe-xl-4 pe-md-2 pe-sm-4 pe-4 text-center w220">
                                <a href="#">
                                    <img src="assets/images/lg/avatar3.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                </a>
                                <div class="about-info d-flex align-items-center mt-3 justify-content-center flex-column">
                                    <span class="text-muted small">Doctor ID : PXL-0001</span>
                                </div>
                            </div>
                            <div class="teacher-info border-start ps-xl-4 ps-md-4 ps-sm-4 ps-4 w-100">
                                <h6 class="mb-0 mt-2  fw-bold d-block fs-6">Dr.Joan Wilson</h6>
                                <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted">Heart Surgeon,London, England</span>
                                <p class="mt-2">Duis felis ligula, pharetra at nisl sit amet, ullamcorper fringilla mi. Cras luctus metus non enim porttitor sagittis. Sed tristique scelerisque arcu id dignissim. Aenean sed erat ut est commodo tristique ac a metus. Praesent efficitur congue orci. Fusce in mi condimentum mauris maximus sodales. Quisque dictum est augue, vitae cursus quam finibus in. Nulla at tempus enim. Fusce sed mi et nibh laoreet consectetur nec vitae lacus.</p>
                                <div class="row g-2 pt-2">
                                    <div class="col-xl-5">
                                        <div class="d-flex align-items-center">
                                            <i class="icofont-ui-touch-phone"></i>
                                            <span class="ms-2">202-555-0174 </span>
                                        </div>
                                    </div>
                                    <div class="col-xl-5">
                                        <div class="d-flex align-items-center">
                                            <i class="icofont-email"></i>
                                            <span class="ms-2">joanwilson@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-5">
                                        <div class="d-flex align-items-center">
                                            <i class="icofont-birthday-cake"></i>
                                            <span class="ms-2">19/03/1980</span>
                                        </div>
                                    </div>
                                    <div class="col-xl-5">
                                        <div class="d-flex align-items-center">
                                            <i class="icofont-address-book"></i>
                                            <span class="ms-2">2734 West Fork Street,EASTON.</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- Row End -->

            <div class="row g-3 mb-3">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Resent Review</h6>
                        </div>
                        <div class="card-body">
                            <div class="row clearfix g-3">
                                <div class="col-lg-4 col-md-12">
                                    <div class="feedback-info sticky-top">
                                        <div class="card">
                                            <div class="card-body">
                                                <h2 class=" display-6 fw-bold mb-0">4.5</h2>
                                                <small class="text-muted">based on 1,032 ratings</small>
                                                <div class="d-flex align-items-center">
                                                    <span class="mb-2 me-3">
                                                        <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                        <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                        <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                        <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                        <a href="#" class="rating-link active"><i class="bi bi-star-half text-warning"></i></a>
                                                    </span>
                                                </div>
                                                <div class="progress-count mt-2">
                                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                                        <h6 class="mb-0 fw-bold d-flex align-items-center">5<i class="bi bi-star-fill text-warning ms-1 small-11 pb-1"></i></h6>
                                                        <span class="small text-muted">661</span>
                                                    </div>
                                                    <div class="progress" style="height: 10px;">
                                                        <div class="progress-bar light-success-bg" role="progressbar" style="width: 92%" aria-valuenow="92" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-count mt-2">
                                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                                        <h6 class="mb-0 fw-bold d-flex align-items-center">4<i class="bi bi-star-fill text-warning ms-1 small-11 pb-1"></i></h6>
                                                        <span class="small text-muted">237</span>
                                                    </div>
                                                    <div class="progress" style="height: 10px;">
                                                        <div class="progress-bar bg-info-light" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-count mt-2">
                                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                                        <h6 class="mb-0 fw-bold d-flex align-items-center">3<i class="bi bi-star-fill text-warning ms-1 small-11 pb-1"></i></h6>
                                                        <span class="small text-muted">76</span>
                                                    </div>
                                                    <div class="progress" style="height: 10px;">
                                                        <div class="progress-bar bg-lightyellow" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-count mt-2">
                                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                                        <h6 class="mb-0 fw-bold d-flex align-items-center">2<i class="bi bi-star-fill text-warning ms-1 small-11 pb-1"></i></h6>
                                                        <span class="small text-muted">19</span>
                                                    </div>
                                                    <div class="progress" style="height: 10px;">
                                                        <div class="progress-bar light-danger-bg " role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="progress-count mt-2">
                                                    <div class="d-flex justify-content-between align-items-center mb-1">
                                                        <h6 class="mb-0 fw-bold d-flex align-items-center">1<i class="bi bi-star-fill text-warning ms-1 small-11 pb-1"></i></h6>
                                                        <span class="small text-muted">39</span>
                                                    </div>
                                                    <div class="progress" style="height: 10px;">
                                                        <div class="progress-bar bg-careys-pink" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                                <div class="customer-like mt-5">
                                                    <h6 class="mb-0 fw-bold ">What Customers Like</h6>
                                                    <ul class="list-group mt-3">
                                                        <li class="list-group-item d-flex">
                                                            <div class="number border-end pe-2 fw-bold">
                                                                <strong class="color-light-success">1</strong>
                                                            </div>
                                                            <div class="cs-text flex-fill ps-2">
                                                                <span>Fun Factor</span>
                                                            </div>
                                                            <div class="vote-text">
                                                                <span class="text-muted">72 votes</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item d-flex">
                                                            <div class="number border-end pe-2 fw-bold">
                                                                <strong class="color-light-success">2</strong>
                                                            </div>
                                                            <div class="cs-text flex-fill ps-2">
                                                                <span>Great Value</span>
                                                            </div>
                                                            <div class="vote-text">
                                                                <span class="text-muted">52 votes</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item d-flex">
                                                            <div class="number border-end pe-2 fw-bold">
                                                                <strong class="color-light-success">3</strong>
                                                            </div>
                                                            <div class="cs-text flex-fill ps-2">
                                                                <span>Doctor</span>
                                                            </div>
                                                            <div class="vote-text">
                                                                <span class="text-muted">35 votes</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="customer-like mt-5">
                                                    <h6 class="mb-0 fw-bold ">What Need Improvement</h6>
                                                    <ul class="list-group mt-3">
                                                        <li class="list-group-item d-flex">
                                                            <div class="number border-end pe-2 fw-bold">
                                                                <strong class="color-careys-pink">1</strong>
                                                            </div>
                                                            <div class="cs-text flex-fill ps-2">
                                                                <span>Value for Money</span>
                                                            </div>
                                                            <div class="vote-text">
                                                                <span class="text-muted">12 votes</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item d-flex">
                                                            <div class="number border-end pe-2 fw-bold">
                                                                <strong class="color-careys-pink">2</strong>
                                                            </div>
                                                            <div class="cs-text flex-fill ps-2">
                                                                <span>Customer service</span>
                                                            </div>
                                                            <div class="vote-text">
                                                                <span class="text-muted">8 votes</span>
                                                            </div>
                                                        </li>
                                                        <li class="list-group-item d-flex">
                                                            <div class="number border-end pe-2 fw-bold">
                                                                <strong class="color-careys-pink">3</strong>
                                                            </div>
                                                            <div class="cs-text flex-fill ps-2">
                                                                <span>Helth Issue</span>
                                                            </div>
                                                            <div class="vote-text">
                                                                <span class="text-muted">2 votes</span>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-12">
                                    <ul class="list-unstyled mb-4">
                                        <li class="card mb-2">
                                            <div class="card-body p-lg-4 p-3">
                                                <div class="d-flex mb-3 pb-3 border-bottom flex-wrap">
                                                    <img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="mb-0"><span>Diane Fisher</span> <span class="text-muted small">450 Followers</span></h6>
                                                        <span class="text-muted">3 hours ago</span>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="mb-2 me-3">
                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                            <a href="#" class="rating-link active"><i class="bi bi-star-half text-warning"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="timeline-item-post">
                                                    <h6 class="">Great experience as a first timer</h6>
                                                    <p> barely waited to be helped when I checked in. The staff and Dr. (Name) were all very friendly and helpful. I especially loved how Dr. .Joan Wilson really took his time to explain my conditions with me as well as my treatment options. </p>
                                                </div>
                                            </div>
                                        </li> <!-- .Card End -->
                                        <li class="card mb-2">
                                            <div class="card-body p-lg-4 p-3">
                                                <div class="d-flex mb-3 pb-3 border-bottom flex-wrap">
                                                    <img class="avatar rounded-circle" src="assets/images/xs/avatar8.jpg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="mb-0"><span>Andrea Gill</span> <span class="text-muted small">724 Followers</span></h6>
                                                        <span class="text-muted">1 Day ago</span>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="mb-2 me-3">
                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                            <a href="#" class="rating-link active"><i class="bi bi-star-half text-warning"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="timeline-item-post">
                                                    <h6 class="">His excellent treatment,</h6>
                                                    <p>investigative mind and ability to connect, you know where you stand immediately and what next steps look like.</p>
                                                </div>
                                            </div>
                                        </li> <!-- .Card End -->
                                        <li class="card mb-2">
                                            <div class="card-body p-lg-4 p-3">
                                                <div class="d-flex mb-3 pb-3 border-bottom flex-wrap">
                                                    <img class="avatar rounded-circle" src="assets/images/xs/avatar7.jpg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="mb-0"><span>Avery Bond</span> <span class="text-muted small">439 Followers</span></h6>
                                                        <span class="text-muted">5 Day ago</span>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span class="mb-2 me-3">
                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                            <a href="#" class="rating-link active"><i class="bi bi-star-fill text-warning"></i></a>
                                                            <a href="#" class="rating-link active"><i class="bi bi-star-half text-warning"></i></a>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="timeline-item-post">
                                                    <h6 class=""> This practice is terrific</h6>
                                                    <p>Dr.Joan Wilson combines expertise and a willingness to listen and discuss. She’s also an excellent surgeon. Also,</p>
                                                    <div>
                                                        <div class="d-flex mt-3 pt-3 border-top">
                                                            <img class="avatar rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">
                                                            <div class="flex-fill ms-3 text-truncate">
                                                                <p class="mb-0"><span>Karen Clark</span> <small class="msg-time">5 Day ago</small></p>
                                                                <span class="text-muted">staff is very friendly and professional. I’ve never had to wait more than a few minutes when I arrive on time for an appointment.</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="mt-4">
                                                        <textarea class="form-control" placeholder="Replay"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> <!-- .Card End -->
                                    </ul>
                                    <nav aria-label="...">
                                        <ul class="pagination justify-content-end">
                                            <li class="page-item disabled">
                                                <span class="page-link">Previous</span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                                            <li class="page-item active" aria-current="page">
                                                <span class="page-link">2</span>
                                            </li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item">
                                                <a class="page-link" href="#">Next</a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div><!-- Row End -->
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Doctors Expertabilities</h6>
                        </div>
                        <div class="card-body">
                            <div class="mt-3" id="incomeanalytics"></div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Health Survey</h6>
                        </div>
                        <div class="card-body">
                            <div class="ac-line-transparent" id="apex-emplyoeeAnalytics"></div>
                        </div>
                    </div>
                    <div class="card mb-3">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Patient Survey</h6>
                        </div>
                        <div class="card-body">
                            <div class="ac-line-transparent" id="apex-patient"></div>
                        </div>
                    </div>
                </div>
            </div><!-- Row End -->

            <div class="row g-3 mb-3">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                            <h6 class="mb-0 fw-bold ">Appointment</h6>
                        </div>
                        <div class="card-body">
                            <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width: 100%;">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Patient</th>
                                        <th>Appointment</th>
                                        <th>Last Visit</th>
                                        <th>Age</th>
                                        <th>Number</th>
                                        <th>Address</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>P015</td>
                                        <td>
                                            <img src="assets/images/xs/avatar1.jpg" class="avatar rounded-circle me-2" alt="profile-image">
                                            <span class="fw-bold">Alexander</span>
                                        </td>
                                        <td>Jan 11, 2021</td>
                                        <td>Dec 25, 2020</td>
                                        <td>23</td>
                                        <td>404-447-6013</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                    </tr>
                                    <tr>
                                        <td>P016</td>
                                        <td>
                                            <img src="assets/images/xs/avatar2.jpg" class="avatar rounded-circle me-2" alt="profile-image">
                                            <span class="fw-bold">Cameron</span>
                                        </td>
                                        <td>Jan 11, 2021</td>
                                        <td>Dec 26, 2020</td>
                                        <td>30</td>
                                        <td>404-447-9696</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                    </tr>
                                    <tr>
                                        <td>P017</td>
                                        <td>
                                            <img src="assets/images/xs/avatar3.jpg" class="avatar rounded-circle me-2" alt="profile-image">
                                            <span class="fw-bold">Alex lee</span>
                                        </td>
                                        <td>Jan 16, 2021</td>
                                        <td>Dec 28, 2020</td>
                                        <td>55</td>
                                        <td>404-447-5858</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                    </tr>
                                    <tr>
                                        <td>P018</td>
                                        <td>
                                            <img src="assets/images/xs/avatar4.jpg" class="avatar rounded-circle me-2" alt="profile-image">
                                            <span class="fw-bold">Richard</span>
                                        </td>
                                        <td>Jan 20, 2021</td>
                                        <td>Dec 28, 2020</td>
                                        <td>47</td>
                                        <td>404-447-6013</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                    </tr>
                                    <tr>
                                        <td>P020</td>
                                        <td>
                                            <img src="assets/images/xs/avatar5.jpg" class="avatar rounded-circle me-2" alt="profile-image">
                                            <span class="fw-bold">Stephen</span>
                                        </td>
                                        <td>Jan 20, 2021</td>
                                        <td>Dec 30, 2020</td>
                                        <td>26</td>
                                        <td>404-447-2536</td>
                                        <td>123 6th St. Melbourne, FL 32904</td>
                                    </tr>
                                </tbody>
                            </table>
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
</div>

</div>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>


<!-- Plugin Js-->
<script src="assets/bundles/apexcharts.bundle.js"></script>
<script src="assets/bundles/dataTables.bundle.js"></script>

<!-- Jquery Page Js -->
<script src="assets/js/template.js"></script>
<script src="assets/js/page/doctor-profile.js"></script>

</body>

<!-- Mirrored from pixelwibes.com/template/ihealth/html/dist/doctor-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Oct 2021 06:30:00 GMT -->

</html>