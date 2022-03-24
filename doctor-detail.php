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
                        <h3 class="fw-bold mb-0">Add Doctor</h3>
                        <div class="col-auto d-flex w-sm-100">
                            <button type="button" class="btn btn-primary btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#depadd">
                            <i class="icofont-plus-circle me-2 fs-6"></i>Add Doctor</button>
                        </div>
                    </div>
                </div>
            </div> <!-- Row end  -->
            <div class="row clearfix g-3">
                  <div class="col-sm-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Department Head</th> 
                                            <th>Department Name</th> 
                                            <th>Staff UnderWork</th>   
                                            <th>Actions</th>  
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">1</span>
                                            </td>
                                           <td>
                                               <img class="avatar rounded-circle" src="assets/images/xs/avatar1.jpg" alt="">
                                               <span class="fw-bold ms-1">DR.Joan Dyer</span>
                                           </td>
                                           <td>
                                                Admissions
                                           </td>
                                           <td>
                                                40
                                           </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#depedit"><i class="icofont-edit text-success"></i></button>
                                                    <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="fw-bold">2</span>
                                            </td>
                                            <td>
                                                <img class="avatar rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">
                                                <span class="fw-bold ms-1">DR.Ryan	Randall</span>
                                            </td>
                                            <td>
                                                Cardiology
                                            </td>
                                            <td>
                                                48
                                            </td>
                                             <td>
                                                 <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                     <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#depedit"><i class="icofont-edit text-success"></i></button>
                                                     <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                 </div>
                                             </td>
                                         </tr>
                                         <tr>
                                            <td>
                                                <span class="fw-bold">3</span>
                                            </td>
                                            <td>
                                                <img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                                <span class="fw-bold ms-1">DR.Phil	Glover</span>
                                            </td>
                                            <td>
                                                Chaplaincy
                                            </td>
                                            <td>
                                                 15
                                            </td>
                                             <td>
                                                 <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                     <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#depedit"><i class="icofont-edit text-success"></i></button>
                                                     <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                 </div>
                                             </td>
                                         </tr>    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                  </div>
            </div><!-- Row End -->

            <div class="card mb-3">
                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                    <h6 class="mb-0 fw-bold ">Authentication Information</h6>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row g-3 align-items-center">
                            <div class="col-md-6">
                                <label for="user" class="form-label">User Name</label>
                                <input type="text" class="form-control" id="user" required>
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" required>
                            </div>
                            <div class="col-md-6">
                                <label for="cnpassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="cnpassword" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Login Permission </label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios07" value="option1" checked>
                                            <label class="form-check-label" for="exampleRadios07">
                                                Hospital Only
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios08" value="option2">
                                            <label class="form-check-label" for="exampleRadios08">
                                                Any where
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary mt-4">Submit</button>
                    </form>
                </div>
            <div>
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

    <!--Add Doctor  -->
    <div class="modal fade" id="depadd" tabindex="-1"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="depaddLabel"> Staff Add</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <div class="card mb-3">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Doctor Basic Inforamtion</h6>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row g-3 align-items-center">
                                            <div class="col-md-6">
                                                <label for="firstname" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="firstname" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="lastname" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" id="lastname" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="phonenumber" class="form-label">Phone Number</label>
                                                <input type="text" class="form-control" id="phonenumber" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="emailaddress" class="form-label">Email Address</label>
                                                <input type="email" class="form-control" id="emailaddress" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Department</label>
                                                <select class="form-select">
                                                    <option selected>Department</option>
                                                    <option value="1">DR.Ryan Randall</option>
                                                    <option value="2">DR.Phil Glover</option>
                                                    <option value="3">DR.Victor Rampling</option>
                                                    <option value="4">DR.Sally Graham</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">HOD</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="yes" id="yes" value="option1" checked>
                                                            <label class="form-check-label" for="yes">
                                                                Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" name="no" id="no" value="option2">
                                                            <label class="form-check-label" for="no">
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="admitdate" class="form-label">Join Date</label>
                                                <input type="date" class="form-control" id="admitdate" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="admittime" class="form-label">Join Time</label>
                                                <input type="time" class="form-control" id="admittime" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="formFileMultiple" class="form-label"> Document Upload</label>
                                                <input class="form-control" type="file" id="formFileMultiple" multiple required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">Gender</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios11" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios11">
                                                                Male
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios22" value="option2">
                                                            <label class="form-check-label" for="exampleRadios22">
                                                                Female
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="roominfo" class="form-label">Cabin Number</label>
                                                <input type="text" class="form-control" id="roominfo" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="speciality" class="form-label">Speciality</label>
                                                <input type="text" class="form-control" id="speciality" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">I-Health Virtual call Attend?</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios111" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios111">
                                                                Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios222" value="option2">
                                                            <label class="form-check-label" for="exampleRadios222">
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="speciality" class="form-label">Social link</label>
                                                <div class="row g-3 row-cols-1 row-cols-lg-3">
                                                    <div class="col"><input type="text" class="form-control" id="speciality" required placeholder="Facebook Link"></div>
                                                    <div class="col"><input type="text" class="form-control" id="speciality" required placeholder="Instagram Link"></div>
                                                    <div class="col"><input type="text" class="form-control" id="speciality" required placeholder="linkedin Link"></div>
                                                </div>

                                            </div>
                                            <div class="col-md-12">
                                                <label for="addnote" class="form-label">Add Note</label>
                                                <textarea class="form-control" id="addnote" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-primary mt-4">Submit</button>  
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- <div class="card mb-3">
                                <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                    <h6 class="mb-0 fw-bold ">Personal Information</h6>
                                </div>
                                <div class="card-body">
                                    <form>
                                        <div class="row g-3 align-items-center">
                                            <div class="col-md-6">
                                                <label class="form-label">Doctor Payment Option</label>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Payment Option</option>
                                                    <option value="1">Credit Card</option>
                                                    <option value="2">Debit Card</option>
                                                    <option value="3">Case Money</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="roominfo" class="form-label">Cabin Number</label>
                                                <input type="text" class="form-control" id="roominfo" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="speciality" class="form-label">Speciality</label>
                                                <input type="text" class="form-control" id="speciality" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label">I-Health Virtual call Attend?</label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios111" value="option1" checked>
                                                            <label class="form-check-label" for="exampleRadios111">
                                                                Yes
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios222" value="option2">
                                                            <label class="form-check-label" for="exampleRadios222">
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <label for="speciality" class="form-label">Social link</label>
                                                <div class="row g-3 row-cols-1 row-cols-lg-3">
                                                    <div class="col"><input type="text" class="form-control" id="speciality" required placeholder="Facebook Link"></div>
                                                    <div class="col"><input type="text" class="form-control" id="speciality" required placeholder="Instagram Link"></div>
                                                    <div class="col"><input type="text" class="form-control" id="speciality" required placeholder="linkedin Link"></div>
                                                </div>

                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary mt-4">Submit</button>
                                    </form>
                                </div>
                            </div>-->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                    <!-- <button type="submit" class="btn btn-primary">Add</button> -->
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


</body>

<!-- Mirrored from pixelwibes.com/template/ihealth/html/dist/doctor-add.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Oct 2021 06:30:00 GMT -->

</html>