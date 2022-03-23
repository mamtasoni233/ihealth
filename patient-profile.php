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
                            <h3 class="fw-bold mb-0">Patient Overview</h3>
                        </div>
                    </div>
                </div> <!-- Row end  -->
                <div class="row g-3 mb-3">
                    <div class="col-xl-4 col-lg-12 col-md-12">
                        <div class="card teacher-card mb-3 flex-column">
                            <div class="card-body d-flex teacher-fulldeatil flex-column">
                                <div class="profile-teacher text-center w220 mx-auto">
                                    <a href="#">
                                        <img src="assets/images/lg/avatar4.jpg" alt="" class="avatar xl rounded-circle img-thumbnail shadow-sm">
                                    </a>
                                    <div class="about-info d-flex align-items-center mt-3 justify-content-center flex-column">
                                        <span class="text-muted small">Patient ID : PXL-0001</span>
                                    </div>
                                </div>
                                <div class="teacher-info   w-100">
                                    <h6  class="mb-0 mt-2  fw-bold d-block fs-6 text-center">Adrian	Allan</h6>
                                    <span class="py-1 fw-bold small-11 mb-0 mt-1 text-muted text-center mx-auto d-block">24 years, California</span>
                                    <p class="mt-2">Duis felis ligula, pharetra at nisl sit amet, ullamcorper fringilla mi. Cras luctus metus non enim porttitor sagittis. Sed tristique scelerisque arcu id dignissim. Aenean sed erat ut est commodo tristique ac a metus. Praesent efficitur congue orci. Fusce in mi condimentum mauris maximus sodales. Quisque dictum est augue, vitae cursus quam finibus in. Nulla at tempus enim. Fusce sed mi et nibh laoreet consectetur nec vitae lacus.</p>
                                    <div class="row g-2 pt-2">
                                        <div class="col-xl-12">
                                            <div class="d-flex align-items-center">
                                                <i class="icofont-ui-touch-phone"></i>
                                                <span class="ms-2">202-555-0174 </span>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="d-flex align-items-center">
                                                <i class="icofont-email"></i>
                                                <span class="ms-2">joanwilson@gmail.com</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="d-flex align-items-center">
                                                <i class="icofont-birthday-cake"></i>
                                                <span class="ms-2">19/03/1980</span>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="d-flex align-items-center">
                                                <i class="icofont-address-book"></i>
                                                <span class="ms-2">2734  West Fork Street,EASTON 02334.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Calorie Counter</h6>
                            </div>
                            <div class="card-body">
                                <div class="d-flex justify-content-end text-center">
                                    <div class="p-2">
                                        <h6 class="mb-0 fw-bold">1790 Kcal</h6>
                                        <span class="text-muted">Eaten</span>
                                    </div>
                                    <div class="p-2 ms-4">
                                        <h6 class="mb-0 fw-bold">450 Kcal</h6>
                                        <span class="text-muted">Burned</span>
                                    </div>
                                </div>
                                <div id="apex-circle-gradient"></div>
                                <div class="row">
                                    <div class="col">
                                        <span class="mb-3 d-block">Fat</span>
                                        <div class="progress-bar  bg-secondary" role="progressbar" style="width: 55%; height: 5px;"></div>
                                        <span class="mt-2 d-block text-secondary">24g left</span>
                                    </div>
                                    <div class="col">
                                        <span class="mb-3 d-block">Carbs</span>
                                        <div class="progress-bar  bg-primary" role="progressbar" style="width: 60%; height: 5px;"></div>
                                        <span class="mt-2 d-block text-primary">78g left</span>
                                    </div>
                                    <div class="col">
                                        <span class="mb-3 d-block">Protein</span>
                                        <div class="progress-bar  bg-lavender-purple" role="progressbar" style="width: 70%; height: 5px;"></div>
                                        <span class="mt-2 d-block color-lavender-purple">28 left</span> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Payment Method</h6>
                            </div>
                            <div class="card-body">
                                <div class="payment-info">
                                    <h5 class="payment-name text-muted"><i class="icofont-visa-alt fs-3"></i> Visa *******7548</h5>
                                    <span>Next billing charged $48</span>
                                    <br>
                                    <em class="text-muted">Autopay on July 20, 2021</em>
                                    <a href="javascript:void(0);" class="edit-payment-info text-secondary">Edit Payment Info</a>
                                </div>
                                <p class="mt-3"><a href="javascript:void(0);" class="btn btn-primary"> Add Payment Info</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-12 col-md-12">
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Documents </h6>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#depadd">Add Documents</button>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-3 row-cols-xl-3 row-cols-xxl-4">
                                    <div class="col">
                                        <div class="patientinfo-file shadow-sm p-3">
                                            <div class="patient-did p-2 bg-primary">
                                                <i class="icofont-surgeon fs-4 text-white"></i>
                                            </div>
                                            <span class="text-end float-end small">14.05</span>
                                            <h6 class="fw-bold mt-4 pt-4 mb-4">Visit Surgeon</h6>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/xs/avatar1.jpg" class="avatar   rounded-circle me-2" alt="profile-image">
                                                <span class="ms-1 small">DR.Alexander</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="patientinfo-file shadow-sm p-3">
                                            <div class="patient-did p-2 light-danger-bg">
                                                <i class="icofont-brain-alt fs-4 text-white"></i>
                                            </div>
                                            <span class="text-end float-end small">14.05</span>
                                            <h6 class="fw-bold mt-4 pt-4 mb-4">MRI Brain</h6>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/xs/avatar12.jpg" class="avatar   rounded-circle me-2" alt="profile-image">
                                                <span class="ms-1 small">DR.Peter</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="patientinfo-file shadow-sm p-3">
                                            <div class="patient-did p-2 bg-secondary">
                                                <i class="icofont-ui-cut fs-4 text-white"></i>
                                            </div>
                                            <span class="text-end float-end small">14.05</span>
                                            <h6 class="fw-bold mt-4 pt-4 mb-4">ECG</h6>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/xs/avatar2.jpg" class="avatar   rounded-circle me-2" alt="profile-image">
                                                <span class="ms-1 small">DR.Mary</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="patientinfo-file shadow-sm p-3">
                                            <div class="patient-did p-2 bg-warning">
                                                <i class="icofont-xray fs-4 text-white"></i>
                                            </div>
                                            <span class="text-end float-end small">14.05</span>
                                            <h6 class="fw-bold mt-4 pt-4 mb-4">XRAY</h6>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/xs/avatar3.jpg" class="avatar   rounded-circle me-2" alt="profile-image">
                                                <span class="ms-1 small">DR.Zoe</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="patientinfo-file shadow-sm p-3">
                                            <div class="patient-did p-2 bg-danger">
                                                <i class="icofont-laboratory fs-4 text-white"></i>
                                            </div>
                                            <span class="text-end float-end small">14.05</span>
                                            <h6 class="fw-bold mt-4 pt-4 mb-4">Basic Metabolic</h6>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/xs/avatar4.jpg" class="avatar   rounded-circle me-2" alt="profile-image">
                                                <span class="ms-1 small">DR.Lily</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="patientinfo-file shadow-sm p-3">
                                            <div class="patient-did p-2 bg-lavender-purple">
                                                <i class="icofont-injection-syringe fs-4 text-white"></i>
                                            </div>
                                            <span class="text-end float-end small">14.05</span>
                                            <h6 class="fw-bold mt-4 pt-4 mb-4">Injection Syringe</h6>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/xs/avatar5.jpg" class="avatar   rounded-circle me-2" alt="profile-image">
                                                <span class="ms-1 small">DR.Grace</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="patientinfo-file shadow-sm p-3">
                                            <div class="patient-did p-2 bg-lightblue">
                                                <i class="icofont-heartbeat fs-4 text-white"></i>
                                            </div>
                                            <span class="text-end float-end small">14.05</span>
                                            <h6 class="fw-bold mt-4 pt-4 mb-4">Heartbeat Check</h6>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/xs/avatar6.jpg" class="avatar   rounded-circle me-2" alt="profile-image">
                                                <span class="ms-1 small">DR.Jasmine</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="patientinfo-file shadow-sm p-3">
                                            <div class="patient-did p-2 bg-lightgreen">
                                                <i class="icofont-pills fs-4 text-white"></i>
                                            </div>
                                            <span class="text-end float-end small">14.05</span>
                                            <h6 class="fw-bold mt-4 pt-4 mb-4">Pain Pills</h6>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/xs/avatar7.jpg" class="avatar   rounded-circle me-2" alt="profile-image">
                                                <span class="ms-1 small">DR.Diana</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="patientinfo-file shadow-sm p-3">
                                            <div class="patient-did p-2 bg-lightblue">
                                                <i class="icofont-dna fs-4 text-white"></i>
                                            </div>
                                            <span class="text-end float-end small">14.05</span>
                                            <h6 class="fw-bold mt-4 pt-4 mb-4">DNA Test</h6>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/xs/avatar8.jpg" class="avatar   rounded-circle me-2" alt="profile-image">
                                                <span class="ms-1 small">DR.Richard</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="patientinfo-file shadow-sm p-3">
                                            <div class="patient-did p-2 bg-santa-fe">
                                                <i class="icofont-blood-test fs-4 text-white"></i>
                                            </div>
                                            <span class="text-end float-end small">14.05</span>
                                            <h6 class="fw-bold mt-4 pt-4 mb-4">Blood Test</h6>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/xs/avatar9.jpg" class="avatar   rounded-circle me-2" alt="profile-image">
                                                <span class="ms-1 small">DR.Adrian</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="patientinfo-file shadow-sm p-3">
                                            <div class="patient-did p-2 bg-careys-pink">
                                                <i class="icofont-thermometer fs-4 text-white"></i>
                                            </div>
                                            <span class="text-end float-end small">14.05</span>
                                            <h6 class="fw-bold mt-4 pt-4 mb-4">Temperature Test</h6>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/xs/avatar10.jpg" class="avatar   rounded-circle me-2" alt="profile-image">
                                                <span class="ms-1 small">DR.Sally</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="patientinfo-file shadow-sm p-3">
                                            <div class="patient-did p-2 light-orange-bg">
                                                <i class="icofont-tooth fs-4 text-white"></i>
                                            </div>
                                            <span class="text-end float-end small">14.05</span>
                                            <h6 class="fw-bold mt-4 pt-4 mb-4">Artificial Teeth Set</h6>
                                            <div class="d-flex align-items-center">
                                                <img src="assets/images/xs/avatar11.jpg" class="avatar   rounded-circle me-2" alt="profile-image">
                                                <span class="ms-1 small">DR.Sarah</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Daily Task</h6>
                            </div>
                            <div class="card-body">
                                <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-md-3">
                                    <div class="col">
                                        <div class="d-flex align-items-center justify-content-between shadow-sm p-3">
                                            <div class="left-info">
                                                <span class="text-muted">Breakfast</span>
                                                <h5 class="fw-bold my-2">390 Kcal</h5>
                                                <span class="text-muted">Eaten</span>
                                            </div>
                                            <div class="right-info">
                                                <i class="icofont-coffee-mug fs-1 color-danger"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center justify-content-between shadow-sm p-3">
                                            <div class="left-info">
                                                <span class="text-muted">Lunch</span>
                                                <h5 class="fw-bold my-2">390 Kcal</h5>
                                                <span class="text-muted">Eaten</span>
                                            </div>
                                            <div class="right-info">
                                                <i class="icofont-spoon-and-fork fs-1 color-lightgreen"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex align-items-center justify-content-between shadow-sm p-3">
                                            <div class="left-info">
                                                <span class="text-muted">Dinner</span>
                                                <h5 class="fw-bold my-2">390 Kcal</h5>
                                                <span class="text-muted">Recommended</span>
                                            </div>
                                            <div class="right-info">
                                                <i class="icofont-restaurant fs-1 color-lavender-purple"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Healthy Dishes </h6>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#foodadd">Order Food</button>
                            </div>
                            <div class="card-body">
                                <div class="owl-carousel owl-theme owl-carouselthree food-order">
                                    <div class="item border">
                                        <i class="icofont-egg-poached text-center mx-auto d-block pt-3 color-lightyellow"></i>
                                        <h5 class="fw-bold my-3 px-3">Omelette</h5>
                                        <div class="food-order-btn d-flex justify-content-between my-3 px-3">
                                            <span class="text-muted">340 Kcal</span>
                                            <button type="button" class="btn btn-light text-light"><i class="icofont-plus text-primary"></i></button>
                                        </div>
                                    </div>
                                    <div class="item border">
                                        <i class="icofont-fruits text-center mx-auto d-block pt-3 color-lavender-purple"></i>
                                        <h5 class="fw-bold my-3 px-3">Fruits Dishes</h5>
                                        <div class="food-order-btn d-flex justify-content-between my-3 px-3">
                                            <span class="text-muted">640 Kcal</span>
                                            <button type="button" class="btn btn-light text-light"><i class="icofont-plus text-primary"></i></button>
                                        </div>
                                    </div>
                                    <div class="item border">
                                        <i class="icofont-soup-bowl text-center mx-auto d-block pt-3 color-light-orange"></i>
                                        <h5 class="fw-bold my-3 px-3">Soup </h5>
                                        <div class="food-order-btn d-flex justify-content-between my-3 px-3">
                                            <span class="text-muted">140 Kcal</span>
                                            <button type="button" class="btn btn-light text-light"><i class="icofont-plus text-primary"></i></button>
                                        </div>
                                    </div>
                                    <div class="item border">
                                        <i class="icofont-chicken text-center mx-auto d-block pt-3 color-careys-pink"></i>
                                        <h5 class="fw-bold my-3 px-3">Chicken </h5>
                                        <div class="food-order-btn d-flex justify-content-between my-3 px-3">
                                            <span class="text-muted">840 Kcal</span>
                                            <button type="button" class="btn btn-light text-light"><i class="icofont-plus text-primary"></i></button>
                                        </div>
                                    </div>
                                    <div class="item border">
                                        <i class="icofont-juice text-center mx-auto d-block pt-3 color-light-success"></i>
                                        <h5 class="fw-bold my-3 px-3">Juice </h5>
                                        <div class="food-order-btn d-flex justify-content-between my-3 px-3">
                                            <span class="text-muted">180 Kcal</span>
                                            <button type="button" class="btn btn-light text-light"><i class="icofont-plus text-primary"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- Row End -->
            </div>
        </div>
      
        <!-- Modal Custom Settings-->
       <div class="modal fade right" id="Settingmodal" tabindex="-1"  aria-hidden="true">
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
                                <li data-theme="indigo"><div class="indigo"></div></li>
                                <li data-theme="tradewind" class="active"><div class="tradewind"></div></li>
                                <li data-theme="monalisa"><div class="monalisa"></div></li>
                                <li data-theme="blue"><div class="blue"></div></li>
                                <li data-theme="cyan"><div class="cyan"></div></li>
                                <li data-theme="green"><div class="green"></div></li>
                                <li data-theme="orange"><div class="orange"></div></li>
                                <li data-theme="blush"><div class="blush"></div></li>
                                <li data-theme="red"><div class="red"></div></li>
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
                                <li data-theme="dynamic"><div class="dynamic"><i class="icofont-paint me-2"></i> Click to Dyanmic Setting</div></li>
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

        <!-- Add Document-->
        <div class="modal fade" id="depadd" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="depaddLabel"> Documents Add</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="deadline-form">
                        <form>
                            <div class="row g-3 mb-3">
                              <div class="col-sm-12">
                                <label for="depone" class="form-label">Documents Upload</label>
                                <input type="file" class="form-control" id="depone">
                              </div>
                              <div class="col-md-12">
                                <label  class="form-label">Select Doctor</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Doctor</option>
                                    <option value="1">DR.Peter</option>
                                    <option value="2">DR.Mary</option>
                                    <option value="3">DR.Zoe</option>
                                    <option value="4">DR.Lily</option>
                                    <option value="5">DR.Adrian</option>
                                </select>
                              </div>
                              <div class="col-md-12">
                                <label  class="form-label">Select Reson</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Doctor</option>
                                    <option value="1">Visit Surgeon</option>
                                    <option value="2">MRI Brain</option>
                                    <option value="3">ECG</option>
                                    <option value="4">XRAY</option>
                                    <option value="5">Injection Syringe</option>
                                    <option value="6">Basic Metabolic</option>
                                    <option value="7">Heartbeat Check</option>
                                    <option value="8">Artificial Teeth Set</option>
                                </select>
                              </div>
                              <div class="col-sm-12">
                                <label for="deptwo145" class="form-label">Documents Upload Date</label>
                                <input type="date" class="form-control" id="deptwo145">
                              </div>
                              <div class="col-sm-12">
                                <label for="deptwo" class="form-label">Documents Time</label>
                                <input type="time" class="form-control" id="deptwo">
                              </div>
                            </div>
                        </form>
                    </div>
                    <div class="mb-3">
                        <label  class="form-label">Documents Note</label>
                        <textarea class="form-control" rows="4"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </div>
            </div>
        </div>

        <!-- Add Foodorder-->
        <div class="modal fade" id="foodadd" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="foodaddLabel"> Food Order</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="deadline-form">
                        <form>
                            <div class="row g-3 mb-3">
                              <div class="col-md-12">
                                <label  class="form-label">Select Food</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Select Order</option>
                                    <option value="1">Chicken</option>
                                    <option value="2">Juice</option>
                                    <option value="3">Omelette</option>
                                    <option value="4">Fruits Dishes</option>
                                    <option value="5">Soup</option>
                                </select>
                              </div>
                              <div class="col-md-12">
                                <label  class="form-label">Select Quantity</label>
                                <input type="number" class="form-control" id="deptwo1455">
                              </div>
                              <div class="col-sm-12">
                                <label for="deptwo145" class="form-label">Food Order Date</label>
                                <input type="date" class="form-control" id="deptwo145">
                              </div>
                              <div class="col-sm-12">
                                <label for="deptwo" class="form-label">Food Order Time</label>
                                <input type="time" class="form-control" id="deptwo">
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                    <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Order</button>
                </div>
            </div>
            </div>
        </div>

    </div>  
  
</div>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<!-- Plugin Js -->
<script src="assets/bundles/apexcharts.bundle.js"></script>
<script src="assets/plugin/owlcarousel/owl.carousel.js"></script>

<!-- Jquery Page Js -->
<script src="assets/js/template.js"></script>
<script src="assets/js/page/patient-profile.js"></script>
 
</body>

<!-- Mirrored from pixelwibes.com/template/ihealth/html/dist/patient-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Oct 2021 06:30:02 GMT -->
</html> 