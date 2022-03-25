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
                            <h3 class="fw-bold mb-0">Expenses</h3>
                            <div class="col-auto d-flex w-sm-100">
                                <button type="button" class="btn btn-primary btn-set-task w-sm-100" data-bs-toggle="modal" data-bs-target="#expadd"><i class="icofont-plus-circle me-2 fs-6"></i>Add Expenses</button>
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
                                            <th>Exp Id</th>
                                            <th>Item</th>
                                            <th>Order By</th> 
                                            <th>Date</th>
                                            <th>From</th> 
                                            <th>Status</th>   
                                            <th>Actions</th>  
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                #EX-00002
                                            </td>
                                            <td>
                                                Laundry 
                                           </td>
                                           <td>
                                               <img class="avatar rounded-circle" src="assets/images/xs/avatar1.jpg" alt="">
                                               <span class="fw-bold ms-1">Joan Dyer</span>
                                           </td>
                                           <td>
                                                12/03/2021
                                           </td>
                                           <td>Laundry Man</td>
                                           <td><span class="badge bg-warning">In Progress</span></td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                    <button type="button" class="btn btn-outline-secondary"  data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                    <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                #EX-00006
                                            </td>
                                            <td>
                                                Food Order
                                            </td>
                                            <td>
                                                <img class="avatar rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">
                                                <span class="fw-bold ms-1">Ryan	Randall</span>
                                            </td>
                                            <td>
                                                12/03/2021
                                           </td>
                                           <td>Canteen</td>
                                           <td><span class="badge bg-warning">In Progress</span></td>
                                             <td>
                                                 <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                     <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                     <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                 </div>
                                             </td>
                                         </tr>
                                         <tr>
                                            <td>
                                                #EX-00004
                                            </td>
                                            <td>
                                                Utilities
                                            </td>
                                            <td>
                                                <img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                                <span class="fw-bold ms-1">Phil	Glover</span>
                                            </td>
                                            <td>
                                                16/03/2021
                                           </td>
                                           <td>MSD PVt</td>
                                           <td><span class="badge bg-warning">In Progress</span></td>
                                             <td>
                                                 <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                     <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                     <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                 </div>
                                             </td>
                                         </tr>
                                         <tr>
                                            <td>
                                                #EX-00011
                                            </td>
                                            <td>
                                                Nursing services
                                             </td>
                                            <td>
                                                <img class="avatar rounded-circle" src="assets/images/xs/avatar4.jpg" alt="">
                                                <span class="fw-bold ms-1">Victor Rampling</span>
                                            </td>
                                            <td>
                                                25/02/2021
                                            </td>
                                            <td>Staff</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                             <td>
                                                 <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                     <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                     <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                 </div>
                                             </td>
                                         </tr>
                                         <tr>
                                            <td>
                                                #EX-00018
                                            </td>
                                            <td>
                                                Administrative services
                                              </td>
                                            <td>
                                                <img class="avatar rounded-circle" src="assets/images/xs/avatar5.jpg" alt="">
                                                <span class="fw-bold ms-1">Sally Graham</span>
                                            </td>
                                            <td>
                                                16/02/2021
                                              </td>
                                            <td>Hospital</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                             <td>
                                                 <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                     <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
                                                     <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button>
                                                 </div>
                                             </td>
                                         </tr>
                                         <tr>
                                            <td>
                                                #EX-00014
                                            </td>
                                            <td>
                                                Medical Expenses
                                            </td>
                                            <td>
                                                <img class="avatar rounded-circle" src="assets/images/xs/avatar6.jpg" alt="">
                                                <span class="fw-bold ms-1">Robert Anderson</span>
                                            </td>
                                            <td>
                                              18/01/2021
                                            </td>
                                            <td>Hospital</td>
                                            <td><span class="badge bg-success">Completed</span></td>
                                             <td>
                                                 <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                     <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#expedit"><i class="icofont-edit text-success"></i></button>
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

        <!-- Add Expence-->
        <div class="modal fade" id="expadd" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="expaddLabel"> Add Expenses</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="item" class="form-label">Item</label>
                        <input type="text" class="form-control" id="item">
                    </div>
                    <div class="deadline-form">
                        <form>
                            <div class="row g-3 mb-3">
                              <div class="col-sm-6">
                                <label for="depone" class="form-label">Order By</label>
                                <input type="text" class="form-control" id="depone">
                              </div>
                              <div class="col-sm-6">
                                <label for="abc" class="form-label">Date</label>
                                <input type="date" class="form-control" id="abc">
                              </div>
                            </div>
                            <div class="row g-3 mb-3">
                                <div class="col-sm-6">
                                    <label for="deptwo" class="form-label">From</label>
                                    <input type="text" class="form-control" id="deptwo">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Status</label>
                                    <select class="form-select">
                                        <option selected>In Progress</option>
                                        <option value="1">Completed</option>
                                        <option value="2">Wating</option>
                                        <option value="3">Decline</option>
                                    </select>
                                </div>
                              </div>
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

         <!-- Edit Expence-->
        <div class="modal fade" id="expedit" tabindex="-1"  aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-md modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title  fw-bold" id="expeditLabel"> Edit Expenses</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="item1" class="form-label">Item</label>
                        <input type="text" class="form-control" id="item1" value="Laundry"> 
                    </div>
                    <div class="deadline-form">
                        <form>
                            <div class="row g-3 mb-3">
                              <div class="col-sm-6">
                                <label  class="form-label">Order By</label>
                                <select class="form-select">
                                    <option selected>Joan Dyer</option>
                                    <option value="1">Ryan Randall</option>
                                    <option value="2">Phil Glover</option>
                                    <option value="3">Victor Rampling</option>
                                    <option value="4">Sally Graham</option>
                                </select>
                              </div>
                              <div class="col-sm-6">
                                <label for="abc1" class="form-label">Date</label>
                                <input type="date" class="form-control" id="abc1" value="2021-03-12">
                              </div>
                            </div>
                            <div class="row g-3 mb-3">
                                <div class="col-sm-6">
                                    <label for="deptwo1" class="form-label">From</label>
                                    <input type="text" class="form-control" id="deptwo1" value="Laundry Man">
                                </div>
                                <div class="col-sm-6">
                                    <label class="form-label">Status</label>
                                    <select class="form-select">
                                        <option selected>In Progress</option>
                                        <option value="1">Completed</option>
                                        <option value="2">Wating</option>
                                        <option value="3">Decline</option>
                                    </select>
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
        </div>

    </div>     
</div>
 
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<!-- Plugin Js-->
<script src="assets/bundles/dataTables.bundle.js"></script>

<!-- Jquery Page Js -->
<script src="assets/js/template.js"></script>
<script>
    // project data table
    $(document).ready(function() {
        $('#myProjectTable')
        .addClass( 'nowrap' )
        .dataTable( {
            responsive: true,
            columnDefs: [
                { targets: [-1, -3], className: 'dt-body-right' }
            ]
        });
        $('.deleterow').on('click',function(){
        var tablename = $(this).closest('table').DataTable();  
        tablename
                .row( $(this)
                .parents('tr') )
                .remove()
                .draw();

        } );
    });
</script>
</body>

<!-- Mirrored from pixelwibes.com/template/ihealth/html/dist/expenses.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Oct 2021 06:30:03 GMT -->
</html>