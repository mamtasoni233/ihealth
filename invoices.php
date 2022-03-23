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
    </div>
</div>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script>

<!-- Jquery Page Js -->
<script src="assets/js/template.js"></script>

</body>

<!-- Mirrored from pixelwibes.com/template/ihealth/html/dist/invoices.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Oct 2021 06:30:03 GMT -->
</html>