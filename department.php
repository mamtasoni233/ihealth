<?php
    require_once('db/connection.php');

    include_once('head.php');

    include_once('sidebar.php');

    $depart_name = "";

    if(isset($_GET('id'))){
        $sel = "select * from department where id = '".$_GET['id']."'";
        $exe = mysqli_query($con, $sel);
        $result = mysqli_fetch_array($exe);

        $depart_name = $result['depart_name'];
    }
    

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
                            <h3 class="fw-bold mb-0">Departments</h3>
                            <div class="col-auto d-flex w-sm-100">
                                <button type="button" class="btn btn-primary btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#depadd">
                                    <i class="icofont-plus-circle me-2 fs-6"></i>Add Departments</button>
                            </div>
                        </div>
                    </div>
                </div> 
                <!-- Row end  -->
                <div class="row clearfix g-3">
                  <div class="col-sm-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Department Head</th> 
                                            <th>Department Name</th> 
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
            </div>
        </div>
        
        <!-- Modal Custom Settings-->
        <?php
            include_once('modal_custom.php');
        ?>

        <!-- Add Department-->
        <div class="modal fade" id="depadd" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title  fw-bold" id="depaddLabel"> Department Add</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <form action="" method="POST">
                                <label for="depart_name" class="form-label">Department Name</label>
                                <input type="text" class="form-control" id="depart_name" name="depart_name">
                            </form>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit Department-->
        <!-- <div class="modal fade" id="depedit" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="depeditLabel"> Department Edit</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="exampleFormControlInput11111" class="form-label">Department Name</label>
                        <input type="text" class="form-control" id="exampleFormControlInput11111" value="Admissions"> 
                    </div>
                    <div class="deadline-form">
                        <form>
                            <div class="row g-3 mb-3">
                              <div class="col-sm-6">
                                <label class="form-label">Department Head</label>
                                <select class="form-select">
                                    <option selected>DR.Joan Dyer</option>
                                    <option value="1">DR.Ryan Randall</option>
                                    <option value="2">DR.Phil Glover</option>
                                    <option value="3">DR.Victor Rampling</option>
                                    <option value="4">DR.Sally Graham</option>
                                </select>
                              </div>
                              <div class="col-sm-6">
                                <label for="deptwo48" class="form-label">Staff UnderWork</label>
                                <input type="text" class="form-control" id="deptwo48" value="40">
                              </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Done</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </div>
            </div>
        </div>  -->
    </div>         
</div>
 
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<!-- Plugin Js-->
<script src="assets/bundles/dataTables.bundle.js"></script>

<!-- Jquery Page Js -->
<script src="assets/js/template.js"></script>
<script>
    // // project data table
    // $(document).ready(function() {
    //     $('#myProjectTable')
    //     .addClass( 'nowrap' )
    //     .dataTable( {
    //         responsive: true,
    //         columnDefs: [
    //             { targets: [-1, -3], className: 'dt-body-right' }
    //         ]
    //     });
    //     $('.deleterow').on('click',function(){
    //     var tablename = $(this).closest('table').DataTable();  
    //     tablename
    //         .row( $(this)
    //         .parents('tr') )
    //         .remove()
    //         .draw();

    //     } );
    // });
</script>
</body>

<!-- Mirrored from pixelwibes.com/template/ihealth/html/dist/department.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Oct 2021 06:30:03 GMT -->
</html>