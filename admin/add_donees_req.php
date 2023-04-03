<head>
    <link rel="stylesheet" href="admin_login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                    <a class="nav-link " href="#"><i class="fa fa-user" aria-hidden="true"></i>
                        Volunteer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="donees_list.php"><i class="fa fa-user" aria-hidden="true"></i>
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
    <div class="col-md-8">
        <div class="d-flex align-items-center justify-content-center my-4">
            <h3 class="text-center fw-bold mx-3 mb-0">Add Donees</h3>
        </div>
        <form>
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
                <input type="text" name="mobile" id="form3Example3" maxlength="10" class="form-control" />
            </div>


            <!-- mobile input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Blood Group required</label>
                <select name="mobile" id="form3Example3" class="form-control" >
                    <option>O+ ve</option>
                    <option>O- ve</option>
                    <option>AB+ ve</option>
                    <option>AB- ve</option>
                    <option>B+ ve</option>

                </select>
            </div>


            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Email address</label>
                <input type="email" name="email" id="form3Example3" class="form-control" />
            </div>

            <!-- addresss -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">address</label>
                <textarea type="text" name="address" id="form3Example3" class="form-control"></textarea>
            </div>

            <!-- addresss -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form3Example3">Hospital Name</label>
                <textarea type="text" name="hospital" id="form3Example3" class="form-control"></textarea>
            </div>



            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-block mb-4">Submit</button>

            </div>
        </form>
    </div>

</div>
</body>

<!--Container Main start-->

<!--Container Main end-->