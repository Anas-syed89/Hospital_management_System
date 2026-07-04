<?php
include("header.php");
include("../connection.php");
if(isset($_POST['btnAdd'])){
    $Doc_Name = $_POST['docName'];
    $Doc_Depart = $_POST['docDepart'];
    $Doc_Phone = $_POST['docPhone'];
    $Doc_Email = $_POST['docEmail'];
    $Doc_Special = $_POST['docSpecial'];
    $query = "INSERT INTO doctors (doc_name, doc_department, doc_Phone, doc_Email, doc_specialization) VALUES ('$Doc_Name', '$Doc_Depart','$Doc_Phone', '$Doc_Email', '$Doc_Special')";
    mysqli_query($connection, $query);
    $doc_id = mysqli_insert_id($connection);

// Doctor schedule table mein insert
    $sql2 = "INSERT INTO doctor_schedule (doc_id, day_of_week, start_time, end_time)
         VALUES ('$doc_id', '$day', 'STime', 'ETime')";
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
                                <h1 class="h4 text-gray-900 mb-4">Register Doctor</h1>
                            </div>
                            <form class="user" method="post">
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Doctor Name" name="docName">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Department" name="docDepart">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="phone" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Phone Number" name="docPhone">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control form-control-user" id="exampleLastName" placeholder="Email" name="docEmail">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="phone" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Start Time" name="STime">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="email" class="form-control form-control-user" id="exampleLastName" placeholder="End Time" name="ETime">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Specialization" name="docSpecial">
                                </div>
                                <input type="submit" value="Add Doctor" class="btn btn-primary btn-user btn-block" name="btnAdd">
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