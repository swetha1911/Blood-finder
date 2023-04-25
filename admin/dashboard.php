<head>
    <link rel="stylesheet" href="admin_login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<?php

session_start();
include '../db_conn.php';

$sql = "SELECT * FROM users WHERE role='2'";
$total_donees = mysqli_query($conn, $sql); // total donees
$total_donees = mysqli_num_rows($total_donees);

$sql = "SELECT * FROM users WHERE role='3'";
$total_donors = mysqli_query($conn, $sql); // total donors
$total_donors = mysqli_num_rows($total_donors);


$sql = "SELECT * FROM users WHERE role='1'";
$total_volunteers = mysqli_query($conn, $sql); // total volunteer
$total_volunteers = mysqli_num_rows($total_volunteers);


$sql = "SELECT * FROM users WHERE status='0'";
$total_pending_req = mysqli_query($conn, $sql); // total pending req
$total_pending_req = mysqli_num_rows($total_pending_req);


$sql = "SELECT * FROM users WHERE status='2'";
$total_completed_req = mysqli_query($conn, $sql); // total completed req
$total_completed_req = mysqli_num_rows($total_completed_req);



$sql = "SELECT * FROM users WHERE status='3'";
$total_rejected_req = mysqli_query($conn, $sql); // total rejected req
$total_rejected_req = mysqli_num_rows($total_rejected_req);


?>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <div>
            <title>sujay</title>
        </div>
        <nav class="nav">
            <div>
                <div>
                    <img class="logo mx-4" src="assets/profile.png"></img>
                </div>

                <ul class="nav mt-5">
                    <a class="nav-link active" href="#"><i class="fa fa-user" aria-hidden="true"></i>
                        Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="volunteer_list.php"><i class="fa fa-user" aria-hidden="true"></i>
                            View Volunteer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="donees_list.php"><i class="fa fa-user" aria-hidden="true"></i>
                            View Donees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="donor_list.php"><i class="fa fa-user" aria-hidden="true"></i>
                            View Donor</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
                            Logout</a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
    <div class="container-fluid" style="padding: inherit;transition: all 0s ease 0s;margin-right: 0px;margin-top: 7em">
        <div class="row d-flex text-danger w-100 justify-content-center flex-wrap">
            <div class="col-xl-6 mt-2 col-lg-6 col-sm-6">
                <div class="widget-stat card bg-primary">
                    <div class="card-body  p-4">
                        <div class="media">
                            <span class="me-3">
                                <i class="la la-users"></i>
                            </span>
                            <div class="media-body text-white">
                                <h4 class="card-title">Total Donees</h4>
                                <h3 class="text-white">
                                    <?php echo $total_donees ?>
                                </h3>
                                <div class="progress mb-2 bg-secondary">
                                    <div class="progress-bar progress-animated bg-light" style="width: 80%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 mt-2 col-lg-6 col-sm-6">
                <div class="widget-stat card bg-warning">
                    <div class="card-body p-4">
                        <div class="media">
                            <span class="me-3">
                                <i class="la la-user"></i>
                            </span>
                            <div class="media-body text-white">
                                <h4 class="card-title">Total Donors</h4>
                                <h3 class="text-white">
                                    <?php echo $total_donors ?>
                                </h3>
                                <div class="progress mb-2 bg-primary">
                                    <div class="progress-bar progress-animated bg-light" style="width: 30%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 mt-2 col-lg-6 col-sm-6">
                <div class="widget-stat card bg-secondary">
                    <div class="card-body p-4">
                        <div class="media">
                            <span class="me-3">
                                <i class="la la-graduation-cap"></i>
                            </span>
                            <div class="media-body text-white">
                                <h4 class="card-title">Total Volunteers</h4>
                                <h3 class="text-white">
                                    <?php echo $total_volunteers ?>
                                </h3>
                                <div class="progress mb-2 bg-primary">
                                    <div class="progress-bar progress-animated bg-light" style="width: 76%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 mt-2 col-lg-6 col-sm-6">
                <div class="widget-stat card bg-danger ">
                    <div class="card-body p-4">
                        <div class="media">
                            <span class="me-3">
                                <i class="la la-dollar"></i>
                            </span>
                            <div class="media-body text-white">
                                <h4 class="card-title">Total pending Request</h4>
                                <h3 class="text-white">
                                    <?php echo $total_pending_req ?>
                                </h3>
                                <div class="progress mb-2 bg-secondary">
                                    <div class="progress-bar progress-animated bg-light" style="width: 30%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 mt-2 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-4">
                        <h4 class="card-title">Total completed Request</h4>
                        <h3>
                            <?php echo $total_completed_req ?>
                        </h3>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 mt-2 col-lg-6 col-sm-6">
                <div class="widget-stat card">
                    <div class="card-body p-4">
                        <h4 class="card-title">Total Rejected Request</h4>
                        <h3>
                            <?php echo $total_rejected_req ?>
                        </h3>
                        <div class="progress mb-2">
                            <div class="progress-bar progress-animated bg-warning" style="width: 50%"></div>
                        </div>
                    </div>
                </div>
            </div>





        </div>
    </div>
</body>

<!--Container Main start-->

<!--Container Main end-->