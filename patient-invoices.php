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
                            <h3 class="fw-bold mb-0">Patient Invoices</h3>
                        </div>
                    </div>
                </div> <!-- Row end  -->
                <div class="row mb-3">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="patient-table" class="table table-hover align-middle mb-0" style="width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Patients</th>
                                            <th>Doctor Name</th>
                                            <th>Ward No</th>
                                            <th>Admited Date</th>
                                            <th>Billing Date</th>
                                            <th>Adv.Amount</th>
                                            <th>Total Amount</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>PT-0001</td>
                                            <td><img src="assets/images/xs/avatar3.jpg" class="avatar  rounded-circle me-2" alt="profile-image"><span>Molly </span></td>
                                            <td>DR.Alexander</td>
                                            <td>A-101</td>
                                            <td>May 13, 2021</td>
                                            <td>May 16, 2021</td>
                                            <td>$212</td>
                                            <td>$684</td>
                                            <td>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-print fs-5"></i></a>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-download fs-5"></i></a>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-send-mail fs-4"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PT-0011</td>
                                            <td><img src="assets/images/xs/avatar1.jpg" class="avatar  rounded-circle me-2" alt="profile-image"><span>Brian</span></td>
                                            <td>DR.Peter</td>
                                            <td>C-103</td>
                                            <td>May 13, 2021</td>
                                            <td>May 22, 2021</td>
                                            <td>$612</td>
                                            <td>$6684</td>
                                            <td>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-print fs-5"></i></a>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-download fs-5"></i></a>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-send-mail fs-4"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PT-0045</td>
                                            <td><img src="assets/images/xs/avatar2.jpg" class="avatar  rounded-circle me-2" alt="profile-image"><span>Julia</span></td>
                                            <td>DR.Mary</td>
                                            <td>D-104</td>
                                            <td>May 17, 2021</td>
                                            <td>May 16, 2021</td>
                                            <td>$612</td>
                                            <td>$4562</td>
                                            <td>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-print fs-5"></i></a>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-download fs-5"></i></a>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-send-mail fs-4"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PT-0030</td>
                                            <td><img src="assets/images/xs/avatar4.jpg" class="avatar  rounded-circle me-2" alt="profile-image"><span>Sonia</span></td>
                                            <td>DR.Zoe</td>
                                            <td>E-105</td>
                                            <td>May 13, 2021</td>
                                            <td>May 23, 2021</td>
                                            <td>$112</td>
                                            <td>$456</td>
                                            <td>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-print fs-5"></i></a>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-download fs-5"></i></a>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-send-mail fs-4"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PT-0078</td>
                                            <td><img src="assets/images/xs/avatar5.jpg" class="avatar  rounded-circle me-2" alt="profile-image"><span>Adam H</span></td>
                                            <td>DR.Lily</td>
                                            <td>F-106</td>
                                            <td>May 18, 2021</td>
                                            <td>May 18, 2021</td>
                                            <td>$300</td>
                                            <td>$600</td>
                                            <td>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-print fs-5"></i></a>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-download fs-5"></i></a>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-send-mail fs-4"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PT-0098</td>
                                            <td><img src="assets/images/xs/avatar9.jpg" class="avatar  rounded-circle me-2" alt="profile-image"><span>Alexander</span></td>
                                            <td>DR.Grace</td>
                                            <td>G-107</td>
                                            <td>May 13, 2021</td>
                                            <td>May 22, 2021</td>
                                            <td>$330</td>
                                            <td>$6500</td>
                                            <td>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-print fs-5"></i></a>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-download fs-5"></i></a>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-send-mail fs-4"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PT-0999</td>
                                            <td><img src="assets/images/xs/avatar11.jpg" class="avatar  rounded-circle me-2" alt="profile-image"><span>Gabrielle</span></td>
                                            <td>DR.Diana</td>
                                            <td>H-108</td>
                                            <td>May 17, 2021</td>
                                            <td>May 16, 2021</td>
                                            <td>$370</td>
                                            <td>$1200</td>
                                            <td>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-print fs-5"></i></a>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-download fs-5"></i></a>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-send-mail fs-4"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PT-0101</td>
                                            <td><img src="assets/images/xs/avatar12.jpg" class="avatar  rounded-circle me-2" alt="profile-image"><span>Grace</span></td>
                                            <td>DR.Jasmine</td>
                                            <td>I-109</td>
                                            <td>May 17, 2021</td>
                                            <td>May 16, 2021</td>
                                            <td>$170</td>
                                            <td>$200</td>
                                            <td>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-print fs-5"></i></a>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-download fs-5"></i></a>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-send-mail fs-4"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PT-1001</td>
                                            <td><img src="assets/images/xs/avatar8.jpg" class="avatar  rounded-circle me-2" alt="profile-image"><span>Ryan </span></td>
                                            <td>DR.Richard</td>
                                            <td>J-110</td>
                                            <td>May 13, 2021</td>
                                            <td>May 16, 2021</td>
                                            <td>$500</td>
                                            <td>$700</td>
                                            <td>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-print fs-5"></i></a>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-download fs-5"></i></a>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-send-mail fs-4"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>PT-1101</td>
                                            <td><img src="assets/images/xs/avatar7.jpg" class="avatar  rounded-circle me-2" alt="profile-image"><span>Christian</span></td>
                                            <td>DR.Adrian</td>
                                            <td>K-111</td>
                                            <td>May 13, 2021</td>
                                            <td>May 22, 2021</td>
                                            <td>$900</td>
                                            <td>$900</td>
                                            <td>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-print fs-5"></i></a>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-download fs-5"></i></a>
                                                <a class="btn btn-sm btn-white" href="#"><i class="icofont-send-mail fs-4"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
        .addClass( 'nowrap' )
        .dataTable( {
            responsive: true,
            columnDefs: [
                { targets: [-1, -3], className: 'dt-body-right' }
            ]
        });
    });

</script>
 
</body>

<!-- Mirrored from pixelwibes.com/template/ihealth/html/dist/patient-invoices.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Oct 2021 06:30:02 GMT -->
</html> 