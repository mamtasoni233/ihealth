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
                        <div class="card-header no-bg bg-transparent d-flex align-items-center px-0 justify-content-between border-bottom flex-wrap">
                            <h3 class="fw-bold mb-0 py-3 pb-2">Invoices</h3>
                            <div class="col-auto py-2 w-sm-100">
                                <ul class="nav nav-tabs tab-body-header rounded invoice-set" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#Invoice-list" role="tab">Invoice List</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Invoice-Simple" role="tab">Simple invoice</a></li>
                                    <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#Invoice-Email" role="tab">Email invoice</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> <!-- Row end  -->

                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="Invoice-list">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 col-md-12">
                                        <div class="card mb-3">
                                            <div class="card-body d-sm-flex justify-content-between">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded-circle" src="assets/images/xs/avatar1.jpg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="d-flex justify-content-between mb-0"><span>Dr.Ryan MacLeod</span></h6>
                                                        <span class="text-muted">Box of Crayons</span>
                                                    </div>
                                                </a>
                                                <div class="text-end d-none d-md-block">
                                                    <p class="mb-1"><i class="icofont-location-pin ps-1"></i> 2211 Jones Avenue,Winston Salem FL 27107</p>
                                                    <span class="text-muted"><i class="icofont-money ps-1"></i> $500</span>
                                                </div>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-none d-md-block">
                                                    <strong>Applied on:</strong>
                                                    <span>23 Feb, 2021</span>
                                                </div>
                                                <div class="card-hover-show">
                                                    <a class="btn btn-sm btn-white border lift" href="#">Download</a>
                                                    <a class="btn btn-sm btn-white border lift" href="#">Send</a>
                                                    <a class="btn btn-sm btn-white border lift" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-3">
                                            <div class="card-body d-sm-flex justify-content-between">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="d-flex justify-content-between mb-0"><span>Dr.Penelope Stewart</span></h6>
                                                        <span class="text-muted">Fast Cad</span>
                                                    </div>
                                                </a>
                                                <div class="text-end d-none d-md-block">
                                                    <p class="mb-1"><i class="icofont-location-pin ps-1"></i> 3154  Sampson Street,Aurora CT 80014</p>
                                                    <span class="text-muted"><i class="icofont-money ps-1"></i> $433</span>
                                                </div>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-none d-md-block">
                                                    <strong>Applied on:</strong>
                                                    <span>14 Apr, 2021</span>
                                                </div>
                                                <div class="card-hover-show">
                                                    <a class="btn btn-sm btn-white border lift" href="#">Download</a>
                                                    <a class="btn btn-sm btn-white border lift" href="#">Send</a>
                                                    <a class="btn btn-sm btn-white border lift" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-3">
                                            <div class="card-body d-sm-flex justify-content-between">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded-circle" src="assets/images/xs/avatar3.jpg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="d-flex justify-content-between mb-0"><span>Dr.Diane	Slater</span></h6>
                                                        <span class="text-muted">Gob Geeklords</span>
                                                    </div>
                                                </a>
                                                <div class="text-end d-none d-md-block">
                                                    <p class="mb-1"><i class="icofont-location-pin ps-1"></i> 49 Stamford Road. West Chicago, IL 60185</p>
                                                    <span class="text-muted"><i class="icofont-money ps-1"></i> $255</span>
                                                </div>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-none d-md-block">
                                                    <strong>Applied on:</strong>
                                                    <span>16 Mar, 2021</span>
                                                </div>
                                                <div class="card-hover-show">
                                                    <a class="btn btn-sm btn-white border lift" href="#">Download</a>
                                                    <a class="btn btn-sm btn-white border lift" href="#">Send</a>
                                                    <a class="btn btn-sm btn-white border lift" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-3">
                                            <div class="card-body d-sm-flex justify-content-between">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded-circle" src="assets/images/xs/avatar4.jpg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="d-flex justify-content-between mb-0"><span>Dr.Amy Mills</span></h6>
                                                        <span class="text-muted">Java Dalia</span>
                                                    </div>
                                                </a>
                                                <div class="text-end d-none d-md-block">
                                                    <p class="mb-1"><i class="icofont-location-pin ps-1"></i> 2698  Northumberland. Melbourne, FL 32904</p>
                                                    <span class="text-muted"><i class="icofont-money ps-1"></i> $555</span>
                                                </div>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-none d-md-block">
                                                    <strong>Applied on:</strong>
                                                    <span>17 Mar, 2021</span>
                                                </div>
                                                <div class="card-hover-show">
                                                    <a class="btn btn-sm btn-white border lift" href="#">Download</a>
                                                    <a class="btn btn-sm btn-white border lift" href="#">Send</a>
                                                    <a class="btn btn-sm btn-white border lift" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-3">
                                            <div class="card-body d-sm-flex justify-content-between">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded-circle" src="assets/images/xs/avatar5.jpg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="d-flex justify-content-between mb-0"><span>Dr.Tim Mitchell</span></h6>
                                                        <span class="text-muted">Practice to Perfect</span>
                                                    </div>
                                                </a>
                                                <div class="text-end d-none d-md-block">
                                                    <p class="mb-1"><i class="icofont-location-pin ps-1"></i> 35 Gubener Str. Emmering, FL 32904</p>
                                                    <span class="text-muted"><i class="icofont-money ps-1"></i> $288</span>
                                                </div>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-none d-md-block">
                                                    <strong>Applied on:</strong>
                                                    <span>12 Feb, 2021</span>
                                                </div>
                                                <div class="card-hover-show">
                                                    <a class="btn btn-sm btn-white border lift" href="#">Download</a>
                                                    <a class="btn btn-sm btn-white border lift" href="#">Send</a>
                                                    <a class="btn btn-sm btn-white border lift" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-3">
                                            <div class="card-body d-sm-flex justify-content-between">
                                                <a href="javascript:void(0);" class="d-flex">
                                                    <img class="avatar rounded-circle" src="assets/images/xs/avatar2.jpg" alt="">
                                                    <div class="flex-fill ms-3 text-truncate">
                                                        <h6 class="d-flex justify-content-between mb-0"><span>Dr.Brian Swader</span></h6>
                                                        <span class="text-muted">Rhinestone</span>
                                                    </div>
                                                </a>
                                                <div class="text-end d-none d-md-block">
                                                    <p class="mb-1"><i class="icofont-location-pin ps-1"></i> 70 Bowman St. South Windsor, CT 06074</p>
                                                    <span class="text-muted"><i class="icofont-money ps-1"></i> $655</span>
                                                </div>
                                            </div>
                                            <div class="card-footer justify-content-between d-flex align-items-center">
                                                <div class="d-none d-md-block">
                                                    <strong>Applied on:</strong>
                                                    <span>18 Feb, 2020</span>
                                                </div>
                                                <div class="card-hover-show">
                                                    <a class="btn btn-sm btn-white border lift" href="#">Download</a>
                                                    <a class="btn btn-sm btn-white border lift" href="#">Send</a>
                                                    <a class="btn btn-sm btn-white border lift" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <nav aria-label="Page navigation">
                                            <ul class="pagination mt-4">
                                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>  <!-- Row end  -->
                            </div> <!-- tab end  -->
                            <div class="tab-pane fade" id="Invoice-Simple">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 col-md-12">
                                        <div class="card p-xl-5 p-lg-4 p-0">
                                            <div class="card-body">
                                                <div class="mb-3 pb-3 border-bottom">
                                                    Invoice
                                                    <strong>27/May/2021</strong>
                                                    <span class="float-end"> <strong>Status:</strong> Pending</span>
                                                </div>

                                                <div class="row mb-4">
                                                    <div class="col-sm-6">
                                                        <h6 class="mb-3">From:</h6>
                                                        <div><strong>I-Health Hospital</strong></div>
                                                        <div>111  Berkeley Rd</div>
                                                        <div>STREET ON THE FOSSE, Poland</div>
                                                        <div>Email: info@ihealth.com</div>
                                                        <div>Phone: +44 888 666 3333</div>
                                                    </div>
                                                    
                                                    <div class="col-sm-6">
                                                        <h6 class="mb-3">To:</h6>
                                                        <div><strong>Zydus Hospital</strong></div>
                                                        <div>45 Larissa Court</div>
                                                        <div>Victoria, BIRDWOODTON</div>
                                                        <div>Email: info@zydus.com</div>
                                                        <div>Phone: +66 243 456 789</div>
                                                    </div>
                                                </div> <!-- Row end  -->
                                                
                                                <div class="table-responsive-sm">
                                                    <table class="table table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th class="text-center">#</th>
                                                                <th>Item</th>
                                                                <th>Description</th>
                                                                <th class="text-end">Item Cost</th>
                                                                <th class="text-center">Products Item</th>
                                                                <th class="text-end">Total</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td class="text-center">1</td>
                                                                <td>Oxygen Concentrator</td>
                                                                <td>Extended Production License</td>
                                                                <td class="text-end">$1999,00</td>
                                                                <td class="text-center">1</td>
                                                                <td class="text-end">$1999,00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">2</td>
                                                                <td>Fabiflu Tablet </td>
                                                                <td>Extended Production License (cost per hour)</td>
                                                                <td class="text-end">$50,00</td>
                                                                <td class="text-center">2</td>
                                                                <td class="text-end">$100,00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">3</td>
                                                                <td>Remdesivir Injection</td>
                                                                <td>1 year Production</td>
                                                                <td class="text-end">$499,00</td>
                                                                <td class="text-center">1</td>
                                                                <td class="text-end">$499,00</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center">4</td>
                                                                <td>vitamin D3</td>
                                                                <td>Extended Production License</td>
                                                                <td class="text-end">$3.999,00</td>
                                                                <td class="text-center">1</td>
                                                                <td class="text-end">$3.999,00</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                
                                                <div class="row">
                                                    <div class="col-lg-4 col-sm-5">
                                                    
                                                    </div>
                                                    
                                                    <div class="col-lg-4 col-sm-5 ms-auto">
                                                        <table class="table table-clear">
                                                            <tbody>
                                                                <tr>
                                                                    <td ><strong>Subtotal</strong></td>
                                                                    <td class="text-end">$6.597,00</td>
                                                                </tr>
                                                                <tr>
                                                                    <td ><strong>VAT (10%)</strong></td>
                                                                    <td class="text-end">$659,7</td>
                                                                </tr>
                                                                <tr>
                                                                    <td ><strong>Total</strong></td>
                                                                    <td class="text-end"><strong>$7.256,7</strong></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div> <!-- Row end  -->
                
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <h6>Terms &amp; Condition</h6>
                                                        <p class="text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over</p>
                                                    </div>
                                                    <div class="col-lg-12 text-end">
                                                        <button type="button" class="btn btn-outline-secondary btn-lg my-1"><i class="fa fa-print"></i> Print</button>
                                                        <button type="button" class="btn btn-primary btn-lg my-1"><i class="fa fa-paper-plane-o"></i> Send Invoice</button>
                                                    </div>
                                                </div> <!-- Row end  -->
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- Row end  -->
                            </div> <!-- tab end  -->
                            <div class="tab-pane fade" id="Invoice-Email">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8 col-md-12">
                                        <div class="d-flex justify-content-center">
                                            <table class="card p-5">
                                                <tr>
                                                    <td></td>
                                                    <td class="text-center">
                                                        <table>
                                                            <tr>
                                                                <td class="text-center">
                                                                    <h2>$48.98 Paid</h2>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-center py-2">
                                                                    <h4 class="mb-0">Thanks for using I-Health.</h4>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pt-2 pb-4">
                                                                    <table>
                                                                        <tr>
                                                                            <td>
                                                                                Attn: <strong>Zydus Hospital</strong> Winston Salem FL 27107<br>
                                                                                Email: info@zydus.com<br>
                                                                                Phone: +88 123 456 789<br>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td class="pt-2">
                                                                                <table class="table table-bordered">
                                                                                    <tr>
                                                                                        <td class="text-start">Extended Production License</td>
                                                                                        <td class="text-end">$ 20.99</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="text-start">1 year Production License</td>
                                                                                        <td class="text-end">$ 19.99</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="text-start">Production and Distribution n</td>
                                                                                        <td class="text-end">$ 8.00</td>
                                                                                    </tr>
                                                                                    <tr>
                                                                                        <td class="text-start w-80"><strong>Total</strong></td>
                                                                                        <td class="text-end fw-bold">$ 48.98</td>
                                                                                    </tr>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="pt-2 pb-2 text-center">
                                                                    <a href="#">View in browser</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="p-0 text-center">
                                                                    PXL Inc. 47 Aurora St. South West, CT 06074
                                                                </td>
                                                            </tr>
                                                        </table>
                                                        <table class="mt-3 text-center w-100">
                                                            <tr>
                                                                <td class="aligncenter content-block">Questions? Email <a href="mailto:">info@pixelwibes.com</a></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div> <!-- Row end  -->
                            </div> <!-- tab end  -->
                        </div>
                    </div>

                </div> <!-- Row end  -->
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

<!-- Jquery Page Js -->
<script src="assets/js/template.js"></script>

</body>

<!-- Mirrored from pixelwibes.com/template/ihealth/html/dist/invoices.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Oct 2021 06:30:03 GMT -->
</html>