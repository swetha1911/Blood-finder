<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Registrationform</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/37af1810bd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/donees.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<?php
session_start();
include "../db_conn.php";
$sql = "SELECT * FROM blood_list";
$result = mysqli_query($conn, $sql);
?>

<!-- <body
    style="background-image: url(
    https://script.viserlab.com/bloodlab/assets/images/frontend/how_it_work/60fff8d9bc57d1627388121.jpg);color: white;"> -->

<body>
    <!-- <div class="header" style="position: absolute"> -->
    <!-- <img src="img/bloog_logo.jpeg" alt=""> -->
    <!-- <a href="../index.php"> -->
    <!-- <img src="../img/blood_logo.jpg" style="width: 22%" class="logo" alt="logo"></a> -->
    <!-- </div> -->
    <!--==grid body== -->
    <div class="container w-50" style="border: 1px solid;box-shadow: 5px 5px 13px 6px lightgrey">

        <div class="row d-flex mt-2 justify-content-between">
            <!-- <div class="col-lg-6 grid1_2">
                <img src="../img/doneesform2.jpg" alt="image1" class="img1">
            </div> -->
            <div class="col-lg-12 grid1_2">
                <div class="mb-5">
                    <h3 class="grid2h3 m-2 mb-2 ">Donees Request Form</h3>
                </div>
                <form name="f1" action="../script/request_now.php" onsubmit="return validation()" method="post">
                    <div class="row">
                        <div class="col singlefield">
                            <input type="text" name="fname" class="form-control" placeholder="First Name">
                        </div>
                        <div class="col singlefield">
                            <input type="text" name="lname" class="form-control" placeholder="Last Name">
                        </div>
                    </div>

                    <div class="singlefield">
                        <input type="text" name="hospital_name" class="form-control" placeholder="Hospital Name">
                    </div>
                    <div>
                        <div class="singlefield">
                            <textarea type="text" name="address" class="form-control"
                                placeholder="Hospital Address"></textarea>
                        </div>
                        <div class="singlefield">
                            <input type="number" name="admission_no" class="form-control" placeholder="Admission No">
                        </div>
                        <div class="singlefield">
                            <input type="date" name="admission_date" class="form-control" placeholder="Admission Date">
                        </div>
                        <div class="radio1">
                            <section>
                                <h4 class="singlefield">Gender:</h4>
                            </section>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="radio1" name="gender" value="male"
                                    checked>
                                <label class="form-check-label" for="radio1">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="radio2" name="gender" value="female">
                                <label class="form-check-label" for="radio2">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="radio3" name="gender" value="others">
                                <label class="form-check-label">Others</label>
                            </div>
                        </div>
                        <div class="singlefield">
                            <!-- <input type="text" value="O+" class="form-control" name="bloodgroup" pladceholer="Blood Group"> -->
                            <select name="bgroup" class="w-100 form-select">
                                <?php
                                if ($result) {
                                    while ($rows = $result->fetch_assoc()) {
                                        echo "
                                    <option value=" . $rows['id'] . ">" . $rows['name'] . " </option>
                                    ";
                                    }
                                }
                                ?>
                            </select>
                        </div>
                        <div class="singlefield">
                            <input type="number" class="form-control" name="unit" placeholder="unit required">
                        </div>

                        <div class="singlefield">
                            <input type="text" class="form-control" name="health" placeholder="Health Issues">
                        </div>
                        <div class="singlefield">
                            <input type="tel" class="form-control" maxlength="10" name="mobile"
                                placeholder="Phone Number">
                        </div>
                        <div class="singlefield">
                            <input type="email" class="form-control" name="email" placeholder="Email Id">
                        </div>
                        <div class="singlefield">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            &nbsp; &nbsp;
                            <a href="donees_request_track.php"><button type="button"
                                    class="btn btn-danger">Track</button></a>
                            &nbsp; &nbsp;
                            <a href="../index.php"><button type="button" class="btn btn-danger">Home</button></a>
                            &nbsp; &nbsp;
                        </div>
                        <div style="margin-bottom: 10px">
                            <b>Note:</b> <strong>Once you subimitted form , we will update
                                    your requirements List
                                    and we will notify all our donors by sending Email . Once you find donor so we will
                                    remove your contact number from all our post and we will mark it as closed.</strong>
                            
                        </div>
                </form>

            </div>
        </div>
    </div>
    <script>
        function validation() {
            var fname = document.f1.fname.value;
            var lname = document.f1.lname.value;
            var hospitalname = document.f1.hospital_name.value;
            var address = document.f1.address.value; hospital_name
            var adm_no = document.f1.admission_no.value;
            var adm_date = document.f1.admission_date.value;
            var gender = document.f1.gender.value;
            var bgroup = document.f1.bgroup.value;
            var unit = document.f1.unit.value;
            var health = document.f1.health.value;
            var mobile = document.f1.mobile.value;
            var email = document.f1.email.value;

            if (fname.length == "" && lname.length == "" && adm_no.length == "" && adm_date.length == "" && address.length == "" && gender.length == "" && bgroup.length == "" && unit.length == "" & health.length == "" && mobile.length == "" && email.length == "") {
                alert("Please enter Requied Details");
                return false;
            }
            else {
                if (fname.length == "") {
                    alert("First Name is empty");
                    return false;
                }
                if (lname.length == "") {
                    alert("Last Name is empty");
                    return false;
                }
                if (hospital_name.length == "") {
                    alert("Hospital Name field is empty");
                    return false;
                }
                if (address.length == "") {
                    alert("Address field is empty");
                    return false;
                }
                if (adm_no.length == "") {
                    alert("admission Number is empty");
                    return false;
                }
                if (adm_date.length == "") {
                    alert("admission date is empty");
                    return false;
                }
                if (gender.length == "") {
                    alert("please select Gender");
                    return false;
                }

                if (bgroup.length == "") {
                    alert("please select Blood group Type");
                    return false;
                }

                if (unit.length == "") {
                    alert("please select unit");
                    return false;
                }
                if (health.length == "") {
                    alert("health field is empty");
                    return false;
                }
                if (mobile.length == "") {
                    alert("Mobile Number is empty");
                    return false;
                }
                if (email.length == "") {
                    alert("Email field is empty");
                    return false;
                }
            }
        }
    </script>
</body>

</html>