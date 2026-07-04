<?php
include("header.php");
include("../connection.php");

$query = "SELECT * FROM doctors";
$result = mysqli_query($connection, $query);
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">All Doctors</h1>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Doctors Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Department</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Specialization</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                    <?php
                                        foreach($data as $record){ 
                                    ?>
                                        <tr>
                                            <td>
                                                <?php
                                                    echo $record['doc_id'];
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                    echo $record['doc_name'];
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                    echo $record['doc_department'];
                                                    ?>
                                            </td>
                                            <td>
                                                <?php
                                                    echo $record['doc_Phone'];
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                    echo $record['doc_Email'];
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                    echo $record['doc_specialization'];
                                                ?>
                                            </td>
                                            <td class="text-center">
                                                <a href="editDoctorData.php?ID=<?php echo $record['doc_id']; ?>">
                                                    <button class="btn btn-outline-warning">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <!-- <a href="deleteDoctorData.php?ID=">
                                                    <button class="btn btn-outline-danger">
                                                        <i class="fa-solid fa-trash"></i>
                                                    </button>
                                                </a> -->
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