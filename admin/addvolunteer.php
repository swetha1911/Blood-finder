<head>
    <link rel="stylesheet" href="admin_login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body id="body-pd">
    <header class="header  " id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <!-- <div class="header_img"> <img src="assets/profile.png" alt=""> </div> -->
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <div>
                    <img class="logo" src="assets/profile.png"></img>
                </div>
                <ul class="nav mt-5">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard.php"><i class="fa fa-user" aria-hidden="true"></i>
                            Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#"><i class="fa fa-user" aria-hidden="true"></i>
                            Volunteer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="donees_list.php"><i class="fa fa-user" aria-hidden="true"></i>
                            Donees List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="donor_list.php"><i class="fa fa-user" aria-hidden="true"></i>
                            Donor List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
                            Logout</a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>



    <div class="row d-flex flex-row justify-content-center"
        style="padding: inherit;transition: all 0s ease 0s;margin-right: 0px;margin-top: 5em">
        <div class="col-md-8" style="box-shadow: 5px 5px 13px 6px lightgrey">
            <div class="d-flex align-items-center justify-content-center my-4">
                <h3 class="text-center fw-bold mx-3 mb-0">Add Volunteer</h3>
            </div>
            <form name="f1" onsubmit="return validation()" action="script/add_volunteer.php" method="post">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4">
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form3Example1">First name</label>
                            <input type="text" name="fname" id="form3Example1" class="form-control" />
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-outline">
                            <label class="form-label" for="form3Example2">Last name</label>
                            <input type="text" name="lname" id="form3Example2" class="form-control" />
                        </div>
                    </div>
                </div>

                <!-- mobile input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Mobile number</label>
                    <input type="text" name="mobile" maxlength="10" id="form3Example3" class="form-control" />
                </div>


                <!-- Email input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example3">Email address</label>
                    <input type="email" name="email" id="form3Example3" class="form-control" />
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">Password</label>
                    <input type="password" name="pwd" id="form3Example4" class="form-control" />
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4">confirm Password</label>
                    <input type="password" name="cpwd" id="form3Example4" class="form-control" />
                </div>


                <div class="text-center">
                    <button type="submit" class="btn btn-danger rounded-5 btn-block mb-4">Submit</button>

                </div>
            </form>
        </div>

    </div>
    <script>
        function validation() {
            var fname = document.f1.fname.value;
            var lname = document.f1.lname.value;
            var mobile = document.f1.mobile.value;
            var email = document.f1.email.value;
            var password = document.f1.pwd.value;
            var cpassword = document.f1.cpwd.value;


            if (fname.length == "" && lname.length == "" && mobile.length == "" && email.length == "" && password.length == '' && cpassword.length == '') {
                alert("Please enter Requied Details");
                return false;
            }
            else {
                if (fname.length == "") {
                    alert("Please enter First name");
                    return false;
                }
                if (lname.length == "") {
                    alert("Please enter Last name");
                    return false;
                }
                if (mobile.length == "") {
                    alert("Please enter mobile");
                    return false;
                }
                if (email.length == "") {
                    alert("please enter email");
                    return false;
                }
                if (password.length == "") {
                    alert("please enter password");
                    return false;
                }
                if (cpassword.length == "") {
                    alert("please enter confirm Password");
                    return false;
                }
                if (password != cpassword) {
                    alert("please enter same value in password and confirm password field");
                    return false;
                }
            }
        }
    </script>
</body>

<!--Container Main start-->

<!--Container Main end-->