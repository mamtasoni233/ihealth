<?php
    require_once('db/connection.php');

    include_once('head.php');

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
                            <h3 class="fw-bold mb-0">Patient Register</h3>
                        </div>
                    </div>
                </div> <!-- Row end  -->
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <div class="card mb-3">
                            <div class="card-header py-3 d-flex justify-content-between bg-transparent border-bottom-0">
                                <h6 class="mb-0 fw-bold ">Patient Basic Inforamtion</h6>
                            </div>
                            <div class="card-body">
                                <form method="POST">  
                                    <div class="row g-3 align-items-center">
                                    <div class="col-md-6">
                                            <label for="regi_num" class="form-label">Registration Number</label>
                                            <input type="text" class="form-control" id="regi_num">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="full_name" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" id="fullname" name="full_name">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phone" class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" id="phone" name="phone">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="email" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" id="email" name="email">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="age" class="form-label">Age</label>
                                            <input type="text" class="form-control" id="age" name="age">
                                        </div>
                                        <div class="col-md-6">
                                            <label  class="form-label">Gender</label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gender" id="exampleRadios11" value="male" checked>
                                                        <label class="form-check-label" for="male">
                                                        Male
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                                        <label class="form-check-label" for="female">
                                                        Female
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="gender" id="other" value="other">
                                                        <label class="form-check-label" for="other">
                                                        Other
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label  class="form-label">Insurance Information</label>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="insure" id="insure" value="option1" checked>
                                                        <label class="form-check-label" for="insure">
                                                          Yes I have Insurance
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="insure_num" id="insure" value="option2">
                                                        <label class="form-check-label" for="insure">
                                                            No I haven't Insurance
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="insinfo" class="form-label">Insurance Number</label>
                                            <input type="text" class="form-control" id="insinfo" name="insinfo">
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <label for="addnote" class="form-label">Add Note</label>
                                            <textarea  class="form-control" id="addnote" rows="3"></textarea> 
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary mt-4" name="submit" >Submit</button>
                                    </div>
                                </form>
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
        <!-- Add Booking-->
        <div class="modal fade" id="depform" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title  fw-bold" id="depaddLabel"> Appointment Booking</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                        <form method="POST">  
                                    <div class="row g-3 align-items-center">
                                    <div class="col-md-6">
                                            <label for="regi_num" class="form-label">Registration Number</label>
                                            <input type="text" class="form-control" id="regi_num">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="firstname" class="form-label">Full Name</label>
                                            <input type="text" class="form-control" id="firstname">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="phonenumber" class="form-label">Phone Number</label>
                                            <input type="text" class="form-control" id="phonenumber">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="emailaddress" class="form-label">Email Address</label>
                                            <input type="email" class="form-control" id="emailaddress">
                                        </div>
                                        <div class="col-md-6">
                                            <label  class="form-label">Gender</label>
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
                                            <label for="admitdate" class="form-label">Appointment Date</label>
                                            <input type="date" class="form-control" id="admitdate">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="admittime" class="form-label">Appointment Time</label>
                                            <input type="time" class="form-control" id="admittime">
                                        </div>
                                        <div class="col-md-6">
                                            <label  class="form-label">Select Reson</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Select Reson</option>
                                                <option value="1">Surgeory</option>
                                                <option value="2">Dentist Chekup</option>
                                                <option value="3">Body Chekup</option>
                                                <option value="4">Gynecologist Chekup</option>
                                                <option value="5">Other Service</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label  class="form-label">Select Department</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Select Department</option>
                                                <option value="1">DR.Peter</option>
                                                <option value="2">DR.Mary</option>
                                                <option value="3">DR.Zoe</option>
                                                <option value="4">DR.Lily</option>
                                                <option value="5">DR.Adrian</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
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
                                            <label for="addnote" class="form-label">Add Note</label>
                                            <textarea  class="form-control" id="addnote" rows="3"></textarea> 
                                        </div>
                                    </div>
                                    <!-- <div class="text-center">
                                        <button type="submit" class="btn btn-primary mt-4" name="submit" >Submit</button>
                                    </div> -->
                                </form>
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
<script src="assets/js/jquery-3.6.0.min.js"></script>
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>



<!-- Jquery Page Js -->
<script src="assets/js/template.js"></script>
<script>
    <?php 
        if(isset($_POST['submit']))  {?>
            $(function(){
                $("#depform").modal("show");
            })
    <?php 
        }
    ?>
</script> 

 
</body>

<!-- Mirrored from pixelwibes.com/template/ihealth/html/dist/appointment.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Oct 2021 06:30:00 GMT -->
</html> 