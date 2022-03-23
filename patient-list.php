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
                                    <th>Progress</th>
                                    <th>Status</th>
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
                                    <td>
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"> <span class="sr-only">40% Complete</span> </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-info">Admit</span></td>
                                </tr>
                                <tr>
                                    <td>PT-0011</td>
                                    <td><img src="assets/images/xs/avatar1.jpg" class="avatar  rounded-circle me-2" alt="profile-image"><span>Brian</span></td>
                                    <td>35</td>
                                    <td>123 6th St. Melbourne, FL 32904</td>
                                    <td>May 13, 2021</td>
                                    <td>May 22, 2021</td>
                                    <td>
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">Discharge</span></td>
                                </tr>
                                <tr>
                                    <td>PT-0045</td>
                                    <td><img src="assets/images/xs/avatar2.jpg" class="avatar  rounded-circle me-2" alt="profile-image"><span>Julia</span></td>
                                    <td>42</td>
                                    <td>4 Shirley Ave. West Chicago, IL 60185</td>
                                    <td>May 17, 2021</td>
                                    <td>May 16, 2021</td>
                                    <td>
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">Discharge</span></td>
                                </tr>
                                <tr>
                                    <td>PT-0030</td>
                                    <td><img src="assets/images/xs/avatar4.jpg" class="avatar  rounded-circle me-2" alt="profile-image"><span>Sonia</span></td>
                                    <td>25</td>
                                    <td>123 6th St. Melbourne, FL 32904</td>
                                    <td>May 13, 2021</td>
                                    <td>May 23, 2021</td>
                                    <td>
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar bg-info" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"> <span class="sr-only">15% Complete</span> </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-info">Admit</span></td>
                                </tr>
                                <tr>
                                    <td>PT-0078</td>
                                    <td><img src="assets/images/xs/avatar5.jpg" class="avatar  rounded-circle me-2" alt="profile-image"><span>Adam H</span></td>
                                    <td>18</td>
                                    <td>4 Shirley Ave. West Chicago, IL 60185</td>
                                    <td>May 18, 2021</td>
                                    <td>May 18, 2021</td>
                                    <td>
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"> <span class="sr-only">85% Complete</span> </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-info">Admit</span></td>
                                </tr>
                                <tr>
                                    <td>PT-0098</td>
                                    <td><img src="assets/images/xs/avatar9.jpg" class="avatar  rounded-circle me-2" alt="profile-image"><span>Alexander</span></td>
                                    <td>38</td>
                                    <td>123 6th St. Melbourne, FL 32904</td>
                                    <td>May 13, 2021</td>
                                    <td>May 22, 2021</td>
                                    <td>
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">Discharge</span></td>
                                </tr>
                                <tr>
                                    <td>PT-0999</td>
                                    <td><img src="assets/images/xs/avatar11.jpg" class="avatar  rounded-circle me-2" alt="profile-image"><span>Gabrielle</span></td>
                                    <td>65</td>
                                    <td>4 Shirley Ave. West Chicago, IL 60185</td>
                                    <td>May 17, 2021</td>
                                    <td>May 16, 2021</td>
                                    <td>
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">Discharge</span></td>
                                </tr>
                                <tr>
                                    <td>PT-0101</td>
                                    <td><img src="assets/images/xs/avatar12.jpg" class="avatar  rounded-circle me-2" alt="profile-image"><span>Grace</span></td>
                                    <td>40</td>
                                    <td>4 Shirley Ave. West Chicago, IL 60185</td>
                                    <td>May 17, 2021</td>
                                    <td>May 16, 2021</td>
                                    <td>
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">Discharge</span></td>
                                </tr>
                                <tr>
                                    <td>PT-1001</td>
                                    <td><img src="assets/images/xs/avatar8.jpg" class="avatar  rounded-circle me-2" alt="profile-image"><span>Ryan </span></td>
                                    <td>34</td>
                                    <td>70 Bowman St. South Windsor, CT 06074</td>
                                    <td>May 13, 2021</td>
                                    <td>May 16, 2021</td>
                                    <td>
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"> <span class="sr-only">40% Complete</span> </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-info">Admit</span></td>
                                </tr>
                                <tr>
                                    <td>PT-1101</td>
                                    <td><img src="assets/images/xs/avatar7.jpg" class="avatar  rounded-circle me-2" alt="profile-image"><span>Christian</span></td>
                                    <td>21</td>
                                    <td>123 6th St. Melbourne, FL 32904</td>
                                    <td>May 13, 2021</td>
                                    <td>May 22, 2021</td>
                                    <td>
                                        <div class="progress" style="height: 3px;">
                                            <div class="progress-bar bg-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-success">Discharge</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
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