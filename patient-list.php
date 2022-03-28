<?php
    require_once('db/connection.php');
   
    if (isset($_POST['del_id'])) {

        $del = "DELETE FROM patient WHERE p_id ='". $_POST['del_id'] . "'";
        if (mysqli_query($con, $del)) {
            echo '<script>alert("Data Sucessfully Deleted........");</script>';
        } else {
            echo '<script>alert("Something Went Wront Data Not Deleted........");</script>';
        }
        header('Refresh:1');
    }

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
                                    <th>Regster Id</th>
                                    <th>Patients Name</th>
                                    <th>Age</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Gender</th>
                                    <th>Insurence</th>
                                    <th>Insurence Number</th>
                                    <th>Note/Message</th>
                                    <th>Actions</th> 

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $query = "SELECT * FROM patient";
                                    $exe = mysqli_query($con, $query);
                                    $index = 1;
                                    while($result = mysqli_fetch_array($exe)){
                                ?>
                                    <tr>
                                        <td><?php echo $index++; ?></td>
                                        <td><?php echo $result['reg_id']; ?></td>
                                        <td><?php echo $result['full_name']; ?></td>
                                        <td><?php echo $result['age']; ?></td>
                                        <td><?php echo $result['phone']; ?></td>
                                        <td><?php echo $result['email']; ?></td>
                                        <td><?php echo $result['gender']; ?></td>
                                        <td><?php echo $result['insure']; ?></td>
                                        <td><?php echo $result['insinfo']; ?></td>
                                        <td><?php echo $result['note']; ?></td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="Basic outlined example">
                                                <button type="button" class="btn btn-outline-secondary"><i class="icofont-fountain-pen text-success"></i>
                                                    <i class="icofont-paper icofont-fountain-pen text-success"></i>
                                                </button>
                                                <a href="patient-add.php?edit&p_id=<?php echo $result['p_id'] ?>" class="btn btn-outline-secondary">
                                                    <i class="icofont-edit text-success"></i></a>
                                                <form method="post">
                                                    <input type="hidden" value="<?php echo $result['p_id'] ?>" name="del_id" >
                                                    <button type="submit" class="btn btn-outline-secondary deleterow" name ="delete">
                                                        <i class="icofont-ui-delete text-danger"></i>Delete</button> 
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                <?php
                                    }
                                ?>
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