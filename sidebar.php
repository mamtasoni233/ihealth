<?php
    require_once('db/connection.php');
?>
<?php
    include_once('head.php');
?>
    
    <!-- sidebar -->
    <div class="sidebar px-4 py-4 py-md-5 me-0">
        <div class="d-flex flex-column h-100">
            <a href="index.php" class="mb-0 brand-icon">
                <span class="logo-icon">
                    <i class="icofont-heart-beat fs-2"></i>
                </span>
                <span class="logo-text">I-Health</span>
            </a>
            <!-- Menu: main ul -->

            <ul class="menu-list flex-grow-1 mt-3">
                <li class="collapsed">
                <a class="m-link active" data-bs-toggle="collapse" data-bs-target="#dashboard" href="#">
                <i class="icofont-ui-home fs-5"></i> <span>Dashboard</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse show" id="dashboard">
                        <li><a class="ms-link active" href="index.php">Hospital Dashboard</a></li>
                    </ul>
                </li> 
                <li><a class="m-link" href="department.php"><i class="icofont-hospital fs-5"></i> <span>Department</span></a></li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Doctor" href="#">
                        <i class="icofont-doctor-alt fs-5"></i>  <span>Doctor</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-Doctor">
                            <li><a class="ms-link" href="doctor-all.php">All Doctors</a></li>
                            <li><a class="ms-link" href="doctor-detail.php">Doctor Details</a></li>
                        </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Patient" href="#">
                    <i class="icofont-blind fs-5"></i> <span>Patient</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-Patient">
                        <li><a class="ms-link" href="patient-list.php">Patient List</a></li>
                        <li><a class="ms-link" href="patient-add.php">Add Patient</a></li>
                        <li><a class="ms-link" href="appointment.php">Appointment</a></li>
                    </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Staff" href="#">
                        <i class="icofont-waiter-alt fs-5"></i>  <span>Staff</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                        <!-- Menu: Sub menu ul -->
                        <ul class="sub-menu collapse" id="menu-Staff">
                            <li><a class="ms-link" href="staff-all.php">All Staff</a></li>
                            <li><a class="ms-link" href="staff-detail.php">Staff Details</a></li>
                        </ul>
                </li>
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#menu-Componentsone" href="#"><i
                            class="icofont-ui-calculator"></i> <span>Accounts</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="menu-Componentsone">
                        <li><a class="ms-link" href="invoices.php"><span>Invoices</span> </a></li>
                        <li><a class="ms-link" href="payments.php"><span>Payments</span> </a></li>
                        <li><a class="ms-link" href="expenses.php"><span>Expenses</span> </a></li>
                    </ul>
                </li>
            
                <!-- <li><a class="m-link" href="ui-elements/ui-alerts.html"><i class="icofont-paint fs-5"></i> <span>UI Components</span></a></li> -->
               
                <li class="collapsed">
                    <a class="m-link" data-bs-toggle="collapse" data-bs-target="#page" href="#">
                    <i class="icofont-page fs-5"></i> <span>Pages Example</span> <span class="arrow icofont-rounded-down ms-auto text-end fs-5"></span></a>
                    <!-- Menu: Sub menu ul -->
                    <ul class="sub-menu collapse" id="page">
                        <li><a class="ms-link" href="contact.php"> Contact Example</a></li>
                    </ul>
                </li>
                
            </ul>
            
            <!-- Menu: menu collepce btn -->
            <button type="button" class="btn btn-link sidebar-mini-btn text-light">
                <span class="ms-2"><i class="icofont-bubble-right"></i></span>
            </button>
        </div>
    </div>