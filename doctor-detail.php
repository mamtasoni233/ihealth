<?php
    require_once('db/connection.php');

    $regi_id = "";
    $hod = "";
    $dept_id ="";
    $f_name = "";
    $l_name = "";
    $phone = "";
    $email = "";
    $join_date = "";
    $gender = "";
    $note = "";
    $payment_mode = "";
    $cabin_num = "";
    $speciality = "";
    $vc_attend = "";
    $social_media = "";
    $created = "";
    $updated = "";

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
    <?php
        include_once('modal_custom.php');
    ?>
    <!--Add Doctor  -->
    <div class="modal fade" id="depadd" tabindex="-1"  aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="depaddLabel">Doctor Add</h5>
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