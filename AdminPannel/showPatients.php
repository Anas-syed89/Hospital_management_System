<?php
include("header.php");
include("../connection.php");

$query = "SELECT * FROM patients";
$result = mysqli_query($connection, $query);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">
    
                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">All Patients</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Patients Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Age</th>
                                            <th>Gender</th>
                                            <th>Phone Number</th>
                                            <th>Disease</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                    <?php
                                        foreach($data as $record){ 
                                    ?>
                                        <tr>
                                            <td>
                                                <?php
                                                    echo $record['patient_id'];
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                    echo $record['patient_name'];
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                    echo $record['age'];
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                    echo $record['gender'];
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                    echo $record['phone_number'];
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                    echo $record['disease'];
                                                ?>
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

<?php
include("footer.php");
?>