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
    <link rel="stylesheet" href="../styles/registration.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,300&display=swap" rel="stylesheet"> -->
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

    <!-- // logo -->

    <!-- <div class=" header" style="position: absolute"> -->
    <!-- <img src="img/bloog_logo.jpeg" alt=""> -->
    <!-- <a href="../index.php" target=""> -->
    <!-- <img src="../img/blood_logo.jpg" style="width: 22%" class="logo" alt="logo"></a> -->
    <!-- </div> -->


    <div class="container" style="width: 70%; border: 1px solid;box-shadow: 5px 5px 13px 6px lightgrey">

        <div class="row mt-3">
            <!-- <div class="col-lg-4 grid1_2">
                <img src="../img/registrationform.jpg" alt="image1" class="img1">
            </div> -->
            <div class="mb-2">
                <h3 class="titleone">Donors Registration Form</h3>
            </div>
            <form name="f1" class="my-5" action="../script/donor_registration.php" onsubmit="return validation()"
                method="post">
                <div class="d-flex flex-row justify-content-between align-items-center flex-wrap">
                    <div class="mt-3 w-48">
                        <input type="text" name="fname" class="form-control" placeholder="First Name">
                    </div>
                    <div class="mt-3 w-48">
                        <input type="text" name="lname" class="form-control" placeholder="Last Name">
                    </div>
                    <div class="mt-3 w-48">
                        <textarea type="text" name="address" class="form-control" placeholder="Address"></textarea>
                    </div>
                    <div class="mt-3  w-48">
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
                    <div class="mt-3 w-48">
                        <input type="tel" class="form-control" name="mobile" placeholder="Phone Number">
                    </div>
                    <div class="mt-3 w-48">
                        <input type="email" class="form-control" name="email" placeholder="Email Id">
                    </div>
                    <div class="radio1 mt-3 w-48">
                        <section>
                            <label class="  m-2"><strong>Gender:</strong></label>
                        </section>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="radio1" name="gender" value="male" checked>
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

                    <div class="mt-3 w-48">
                        <section>
                            <label class="m-2"><strong> Do you suffer from or have suffered from any of the following
                                    diseases?</strong>
                            </label>
                        </section>
                        <div>
                            <div class="form-check w-48" style="display: inline-block">
                                <input class="form-check-input" name="health[]" type="checkbox" value="Heart Disease"
                                    id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">
                                    Heart Disease
                                </label>
                            </div>
                            <div class="form-check w-48" style="display: inline-block">
                                <input class="form-check-input" name="health[]" type="checkbox" value="Diabetes"
                                    id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Diabetes
                                </label>
                            </div>
                            <div class="form-check w-48" style="display: inline-block">
                                <input class="form-check-input" name="health[]" type="checkbox"
                                    value=" Sexually Transmitted Diseases" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Sexually Transmitted Diseases
                                </label>
                            </div>
                            <div class="form-check w-48" style="display: inline-block">
                                <input class="form-check-input" name="health[]" type="checkbox" value="Lung Disease"
                                    id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Lung Disease
                                </label>
                            </div>
                            <div class="form-check w-48" style="display: inline-block">
                                <input class="form-check-input" name="health[]" type="checkbox" value="Allergic Disease"
                                    id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Allergic Disease
                                </label>
                            </div>
                            <div class="form-check w-48" style="display: inline-block">
                                <input class="form-check-input" name="health[]" type="checkbox" value="kidney Disease"
                                    id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    kidney Disease
                                </label>
                            </div>
                            <div class="form-check w-48" style="display: inline-block">
                                <input class="form-check-input" name="health[]" type="checkbox" value="none"
                                    id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    None
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="radio1 mt-3 w-48">
                        <section>
                            <label class="m-2"> <strong>Have you donated previously?</strong></label>
                        </section>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="prevdonate" id="radio6" value="yes"
                                checked>
                            <label class="form-check-label" for="radio4">Yes</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" id="radio7" name="prevdonate" value="no">
                            <label class="form-check-label" for="radio5">No</label>
                        </div>
                    </div>

                    <div class="mt-3 w-48">
                        <section>
                            <label class="m-2"><strong> Are you taking or have you taken
                                    any of these in the past 72 hours?
                                </strong>
                            </label>
                        </section>
                        <div class="form-check w-48" style="display: inline-block">
                            <input class="form-check-input" name="alchohol[]" type="checkbox" value="Antibiotics"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Antibiotics
                            </label>
                        </div>
                        <div class="form-check w-48" style="display: inline-block">
                            <input class="form-check-input" name="alchohol[]" type="checkbox" value="Steroids"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Steroids
                            </label>
                        </div>
                        <div class="form-check w-48" style="display: inline-block">
                            <input class="form-check-input" name="alchohol[]" type="checkbox" value="Aspirin"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Aspirin
                            </label>
                        </div>
                        <div class="form-check w-48" style="display: inline-block">
                            <input class="form-check-input" name="alchohol[]" type="checkbox" value="Vaccinations"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Vaccinations
                            </label>
                        </div>
                        <div class="form-check w-48" style="display: inline-block">
                            <input class="form-check-input" name="alchohol[]" type="checkbox" value="Alchohol"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Alchohol
                            </label>
                        </div>
                        <div class="form-check w-48" style="display: inline-block">
                            <input class="form-check-input" name="alchohol[]" type="checkbox" value="none"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                None
                            </label>
                        </div>
                    </div>
                    <div class="mt-3 w-48">
                        <section>
                            <label class="m-2"><strong> Is there any history of surgery or blood transfusion in the past
                                    six
                                    months?</strong>
                            </label>
                        </section>
                        <div class="form-check w-48" style="display: inline-block">
                            <input class="form-check-input" name="surgery[]" type="checkbox" value="Major"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Major
                            </label>
                        </div>
                        <div class="form-check w-48" style="display: inline-block">
                            <input class="form-check-input" name="surgery[]" type="checkbox" value="Minor"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Minor
                            </label>
                        </div>
                        <div class="form-check w-48" style="display: inline-block">
                            <input class="form-check-input" name="surgery[]" type="checkbox" value="Bloood Transfusion"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Bloood Transfusion
                            </label>
                        </div>
                        <div class="form-check w-48" style="display: inline-block">
                            <input class="form-check-input" name="surgery[]" type="checkbox" value="none"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                None
                            </label>
                        </div>

                    </div>
                    <div class="mt-3 w-48">
                        <section>
                            <label class="m-2"><strong> In the last six months have you had any of the
                                    following?</strong>
                            </label>
                        </section>
                        <div class="form-check w-48" style="display: inline-block">
                            <input class="form-check-input" name="other[]" type="checkbox" value="Tattooing"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Tattooing
                            </label>
                        </div>
                        <div class="form-check w-48" style="display: inline-block">
                            <input class="form-check-input" name="other[]" type="checkbox" value="Ear piercing"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Ear piercing
                            </label>
                        </div>
                        <div class="form-check w-48" style="display: inline-block">
                            <input class="form-check-input" name="other[]" type="checkbox" value="Dental Extraction"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Dental Extraction
                            </label>
                        </div>
                        <div class="form-check w-48" style="display: inline-block">
                            <input class="form-check-input" name="other[]" type="checkbox" value="none"
                                id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                None
                            </label>
                        </div>
                    </div>
                    <div class="mt-3 w-48">
                        <input type="number" class="form-control" name="age" placeholder="Age">
                    </div>
                    <div class="mt-3 w-48">
                        <input type="text" class="form-control" name="weight" placeholder="weight">
                        <span(Kg)></span>
                    </div>


                    <div class="mt-4 text-center w-100">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        &nbsp; &nbsp;
                        <!-- <a href="donorlogin.php"><button type="button" class="btn btn-danger">Login</button></a> -->
                        &nbsp; &nbsp;
                        <a href="../index.php"><button type="button" class="btn btn-danger">Home</button></a>

                    </div>
                </div>
            </form>
        </div>
    </div>
    <script>
        function validation() {
            console.log(document.f1)
            var address = document.f1.address.value;
            var bgroup = document.f1.bgroup.value;
            var mobile = document.f1.mobile.value;
            var email = document.f1.email.value;
            var gender = document.f1.gender.value;
            var health = document.f1.health.value;
            var prevdonate = document.f1.prevdonate.value;
            var alchohol = document.f1.alchohol.value;
            var surgery = document.f1.surgery.value;
            var other = document.f1.other.value;
            var age = document.f1.age.value;
            var weight = document.f1.weight.value;


            if (fname.length == "" && lname.length == "" && prevdonate.length == "" && surgery.length == "" && other.length == "" && age.length == "" & weight.length == "" && address.length == "" && gender.length == "" && bgroup.length == "" && alchohol.length == "" && health.length == "" && mobile.length == "" && email.length == "") {
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
                if (address.length == "") {
                    alert("Address field is empty");
                    return false;
                }
                if (bgroup.length == "") {
                    alert("please select Blood group Type");
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

                if (gender.length == "") {
                    alert("please select Gender");
                    return false;
                }
                if (health.length == "") {
                    alert("health field is empty");
                    return false;
                }
                if (prevdonate.length == "") {
                    alert("please choose previous donation");
                    return false;
                }
                if (alchohol.length == "") {
                    alert("please Choose Alchohol");
                    return false;
                }

                if (surgery.length == "") {
                    alert("surgery is empty");
                    return false;
                }
                if (other.length == "") {
                    alert("other is empty");
                    return false;
                }

                if (age.length == "") {
                    alert("age field is empty");
                    return false;
                }
                if (weight.length == "") {
                    alert("weight field is empty");
                    return false;
                }
            }
        }
    </script>

</body>

</html>