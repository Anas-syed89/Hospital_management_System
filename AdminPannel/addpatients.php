<?php
 include("header.php");
include("../connection.php");
if(isset($_POST['btnAdd'])){
    $Patient_Name = $_POST['PName'];
    $Patient_Age = $_POST['PAge'];
    $Patient_Gender = $_POST['gender'];
    $Patient_Number = $_POST['PNumber'];
    $Patient_Disease = $_POST['Pdisease'];
    $query = "INSERT INTO patients (patient_name, age, gender, phone_number, disease) VALUES ('$Patient_Name', '$Patient_Age', '$Patient_Gender', '$Patient_Number', '$Patient_Disease')";
    mysqli_query($connection, $query);
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
                                <h1 class="h4 text-gray-900 mb-4">Register Patient</h1>
                            </div>
                            <form class="user" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Patient Name" name="PName">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user" id="exampleLastName" placeholder="Age" name="PAge" min="1" max="120">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Gender</label>
                                    <select class="form-control" name="gender">
                                        <option value="">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Phone Number" name="PNumber" min="1" max="11">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Disease" name="Pdisease">
                                    </div>
                                </div>
                                <input type="submit" value="Add Patient" class="btn btn-primary btn-user btn-block" name="btnAdd">
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