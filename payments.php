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
                            <h3 class="fw-bold mb-0">Payments</h3>
                        </div>
                    </div>
                </div> <!-- Row end  -->

                <div class="row g-3">
                    <div class="col-md-12">
                        <div class="card mb-3">
                            <div class="card-body">
                                <table id="myProjectTable" class="table table-hover align-middle mb-0" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>Item</th>
                                            <th>Company Name</th>
                                            <th>Date Start</th>
                                            <th>Date End</th>
                                            <th>Amount</th>
                                            <th>status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="invoices.html" class="fw-bold text-secondary">#00001</a></td>
                                            <td><a href="projects.html">Remdesivir Injection</a></td>
                                            <td>Zydus Hospital</td>
                                            <td>10-01-2021</td>
                                            <td>10-02-2021</td>
                                            <td>$3250</td>
                                            <td><span class="badge bg-warning">Pending</span></td>
                                        </tr>
                                        <tr>
                                            <td><a href="invoices.html" class="fw-bold text-secondary">#00002</a></td>
                                            <td><a href="projects.html">Vitamin D3</a></td>
                                            <td>Solvay Pharma </td>
                                            <td>12-02-2021</td>
                                            <td>10-04-2021</td>
                                            <td>$1578</td>
                                            <td><span class="badge bg-success">Paid</span></td>
                                        </tr>
                                        <tr>
                                            <td><a href="invoices.html" class="fw-bold text-secondary">#00003</a></td>
                                            <td><a href="projects.html">Fabiflu</a></td>
                                            <td>Forgo Pharmaceuticals</td>
                                            <td>18-02-2021</td>
                                            <td>20-04-2021</td>
                                            <td>$1978</td>
                                            <td><span class="badge bg-lavender-purple">Draf</span></td>
                                        </tr>
                                        <tr>
                                            <td><a href="invoices.html" class="fw-bold text-secondary">#00004</a></td>
                                            <td><a href="projects.html">Vitamin c</a></td>
                                            <td>Abott Healthcare </td>
                                            <td>28-02-2021</td>
                                            <td>30-04-2021</td>
                                            <td>$1978</td>
                                            <td><span class="badge bg-lavender-purple">Draf</span></td>
                                        </tr>
                                        <tr>
                                            <td><a href="invoices.html" class="fw-bold text-secondary">#00005</a></td>
                                            <td><a href="projects.html">Paracetamol</a></td>
                                            <td>Sun Pharma</td>
                                            <td>11-02-2021</td>
                                            <td>10-04-2021</td>
                                            <td>$1578</td>
                                            <td><span class="badge bg-success">Paid</span></td>
                                        </tr>
                                        <tr>
                                            <td><a href="invoices.html" class="fw-bold text-secondary">#00006</a></td>
                                            <td><a href="projects.html">Dolo 650 MG</a></td>
                                            <td>Cipla</td>
                                            <td>17-02-2021</td>
                                            <td>20-04-2021</td>
                                            <td>$1978</td>
                                            <td><span class="badge bg-lavender-purple">Draf</span></td>
                                        </tr>
                                        <tr>
                                            <td><a href="invoices.html" class="fw-bold text-secondary">#00007</a></td>
                                            <td><a href="projects.html">Azithromycin</a></td>
                                            <td>FDC</td>
                                            <td>14-02-2021</td>
                                            <td>30-04-2021</td>
                                            <td>$1978</td>
                                            <td><span class="badge bg-lavender-purple">Draf</span></td>
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
    });
</script>
</body>

<!-- Mirrored from pixelwibes.com/template/ihealth/html/dist/payments.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Oct 2021 06:30:03 GMT -->
</html>