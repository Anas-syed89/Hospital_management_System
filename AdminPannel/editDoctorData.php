<?php
include("header.php");
include("../connection.php");
$ID_URL = $_GET['ID'];
$query = "SELECT * FROM doctors WHERE doc_id = '$ID_URL'";
$runQuery = mysqli_query($connection, $query);
$data = mysqli_fetch_assoc($runQuery);

if(isset($_POST['btnUpdate'])){
    $Doc_Name = $_POST['Name'];
    $Doc_Depart = $_POST['Depart'];
    $Doc_Phone = $_POST['Phone'];
    $Doc_Email = $_POST['Email'];
    $Doc_Special = $_POST['Special'];
    $UPquery = "UPDATE doctors SET doc_name = '$Doc_Name', doc_department = '$Doc_Depart', doc_Phone = '$Doc_Phone', doc_Email = '$Doc_Email', doc_specialization = '$Doc_Special' WHERE doc_id = '$ID_URL'";
    mysqli_query($connection, $UPquery);
}
?>


<div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Edit Details</h1>
                            </div>
                            <form class="user" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Doctor Name" name="Name" value="<?php echo $data['doc_name']?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Department" name="Depart" value="<?php echo $data['doc_department']?>">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="phone" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Phone Number" name="Phone" value="<?php echo $data['doc_Phone']?>">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control form-control-user" id="exampleLastName" placeholder="Email" name="Email" value="<?php echo $data['doc_Email']?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Specialization" name="Special" value="<?php echo $data['doc_specialization']?>" >
                                </div>
                                <input type="submit" value="Update" class="btn btn-primary btn-user btn-block" name="btnUpdate">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include("footer.php");
?>