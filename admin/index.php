<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="admin_login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<div>
    <div class="row d-flex m-5">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="assets/login_background.png" class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form name="f1" onsubmit="return validation()" action="script/admi_login.php" method="post" style="
    box-shadow: 5px 5px 13px 6px lightgrey;" class="card p-5">
                <div class="d-flex align-items-center justify-content-center my-4">
                    <h3 class="text-center fw-bold mx-3 mb-0">Admin Login</h3>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">User name</label>
                    <input type="email" name="email" id="form3Example3" class="form-control form-control-lg"
                        placeholder="Enter a valid email address" />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-3">
                    <label class="form-label" for="form3Example4">Password</label>
                    <input type="password" name="pwd" id="form3Example4" class="form-control form-control-lg"
                        placeholder="Enter password" />
                </div>
                <div class="text-center text-lg-start mt-4 pt-2">
                    <button class="btn  rounded-5  btn-lg btn-danger"
                        style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                </div>



            </form>
        </div>
    </div>
</div>

<script>
    function validation() {
        var email = document.f1.email.value;
        var password = document.f1.pwd.value;

        if (email.length == "" && password.length == "") {
            alert("Please enter Requied Details");
            return false;
        }
        else {
            if (email.length == "") {
                alert("EmailID is empty");
                return false;
            }
            if (password.length == "") {
                alert("Password  is empty");
                return false;
            }
        }
    }
</script>