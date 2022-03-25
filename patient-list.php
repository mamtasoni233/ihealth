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
                        <h3 class="fw-bold mb-0">Patient List</h3>
                    </div>
                </div>
            </div> <!-- Row end  -->
            <div class="row mb-3">
                <div class="card">
                    <div class="card-body">
                        <table id="patient-table" class="table table-hover align-middle mb-0" style="width: 100%;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Patients</th>
                                    <th>Age</th>
                                    <th>Adress</th>
                                    <th>Admited</th>
                                    <th>Discharge</th>
                                    <th>Status</th>
                                    <th>Actions</th> 

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>PT-0001</td>
                                    <td><img src="assets/images/xs/avatar3.jpg" class="avatar  rounded-circle me-2" alt="profile-image"><span>Molly </span></td>
                                    <td>45</td>
                                    <td>70 Bowman St. South Windsor, CT 06074</td>
                                    <td>May 13, 2021</td>
                                    <td>May 16, 2021</td>
                                    <td><span class="badge bg-info">Admit</span></td>
                                    <td>
                                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                                            <button type="button" class="btn btn-outline-secondary"><i class="icofont-fountain-pen text-success"></i><i class="icofont-paper icofont-fountain-pen text-success"></i></button>
                                            <!-- <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#depedit"><i class="icofont-edit text-success"></i></button>
                                            <button type="button" class="btn btn-outline-secondary deleterow"><i class="icofont-ui-delete text-danger"></i></button> -->
                                        </div>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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
<script src="assets/bundles/dataTables.bundle.js"></script>

<!-- Jquery Page Js -->
<script src="assets/js/template.js"></script>
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

<!-- Mirrored from pixelwibes.com/template/ihealth/html/dist/patient-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Oct 2021 06:30:01 GMT -->

</html>