<head>
    <?php
    session_start();
    include '../db_conn.php';
    $id = $_SESSION['id'];
    $role = $_SESSION['role'];

    // $sql = "SELECT * FROM users WHERE id='$id' AND role ='$role'";
    
    $sql = "SELECT * FROM users WHERE id ='$id'";
    $donor_data = mysqli_query($conn, $sql);
    $donor_data = $donor_data->fetch_assoc();

    $sql = "SELECT * FROM users WHERE role ='3'";
    $result = mysqli_query($conn, $sql);

    $sql = "SELECT * FROM users WHERE status='2'";
    $total_completed_req = mysqli_query($conn, $sql); // total completed req
    $total_completed_req = mysqli_num_rows($total_completed_req);



    $sql = "SELECT * FROM users WHERE status='3'";
    $total_rejected_req = mysqli_query($conn, $sql); // total rejected req
    $total_rejected_req = mysqli_num_rows($total_rejected_req);

    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
    }
    ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .nav-tabs .nav-item.show .nav-link,
        .nav-tabs .nav-link {
            /*background: white !important;*/
            color: #dc3545 !important;
        }

        .nav-tabs .nav-link.active {
            color: white !important;
            background-color: #dc3545 !important;
            /*border-color: black !important;*/
        }

        .l-navbar {
            left: 0;
            padding: 1rem 1rem 0 0
        }

        a {
            text-decoration: none !important;
            color: white !important;
        }

        .caption-list-two {
            background-color: #FB36401a;
        }

        .caption-list-two li .caption {
            width: 20%;
            position: relative;
            font-weight: 700;
            padding-right: 10px;
        }

        .caption-list-two li .value {
            width: 80%;
            padding-left: 20px;
        }

        .caption-list-two li {
            font-family: "Fira Sans", sans-serif;
            font-weight: 500;
            color: #17173A;
            font-size: 0.875rem;
            padding: 0.5rem 0;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            border-bottom: 1px dashed #c7c7c7;
        }
    </style>
</head>

<body id="body-pd ">
    <div class="l-navbar text-bg-danger" id="nav-bar">
        <nav class="nav">
            <div class="container-fluid">
                <ul class="nav">
                    <li class="nav-item text-bg-dark">
                        <a class="nav-link active" href="#"><i class="fa fa-user" aria-hidden="true"></i>
                            Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="donor_request_track.php"><i class="fa fa-user"
                                aria-hidden="true"></i>
                            Request</a>
                    </li>
                    <li class="nav-item active" style="position: absolute;right: 10px">
                        <a class="nav-linkb active" href="../index.php"><i class="fa fa-sign-out"
                                aria-hidden="true"></i>
                            Logout</a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
    <section >
        <div class="container-fluid w-100 m-2">
            <div class="row">
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <h5 class="my-3">
                                <?php echo $donor_data['f_name'] ?>
                            </h5>
                            <h5 class="text-muted mb-4">
                                <?php echo $donor_data['mobile'] ?>
                            </h5>
                            <h5 class="text-muted mb-5">
                                <?php echo $donor_data['email'] ?>
                            </h5>
                        </div>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="col-xl-12 mt-2 col-lg-6 col-sm-6">
                        <div class="widget-stat card">
                            <div class="card-body p-4">
                                <h4 class="card-title">Total Accepted request</h4>
                                <h3>
                                    <?php echo $total_completed_req ?>
                                </h3>
                                <div class="progress mb-2">
                                    <div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
                                </div>
                                <small>80% Increase in 20 Days</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 mt-2 col-lg-6 col-sm-6">
                        <div class="widget-stat card">
                            <div class="card-body p-4">
                                <h4 class="card-title">Total Rejected request</h4>
                                <h3>
                                    <?php echo $total_completed_req ?>
                                </h3>
                                <div class="progress mb-2">
                                    <div class="progress-bar progress-animated bg-primary" style="width: 80%"></div>
                                </div>
                                <small>80% Increase in 20 Days</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <ul class="caption-list-two">
                        <li>
                            <span class="caption">Name</span>
                            <span class="value">
                                <?php echo $donor_data['f_name'] ?>
                            </span>
                        </li>
                        <li>
                            <span class="caption">Gender</span>
                            <span class="value">
                                <?php echo $donor_data['gender'] ?>
                            </span>
                        </li>
                        <li>
                            <span class="caption">Age</span>
                            <span class="value">
                                <?php echo $donor_data['age'] ?>
                            </span>
                        </li>

                        <li>
                            <span class="caption">Mobile</span>
                            <span class="value">
                                <?php echo $donor_data['mobile'] ?>
                            </span>
                        </li>
                        <li>
                            <span class="caption">Email</span>
                            <span class="value">
                                <?php echo $donor_data['email'] ?>
                            </span>
                        </li>
                        <li>
                            <span class="caption">BloodGroup</span>
                            <span class="value">
                                <?php echo $donor_data['bloodgroup'] ?>
                            </span>
                        </li>
                        <li>
                            <span class="caption">Weight</span>
                            <span class="value">
                                <?php echo $donor_data['weight'] ?>
                            </span>
                        </li>
                    </ul>

                </div>
                <div class="col-lg-6">
                    <ul class="caption-list-two">
                        <li>
                            <span class="caption">Address</span>
                            <span class="value">
                                <?php echo $donor_data['address'] ?>
                            </span>
                        </li>
                        <li>
                            <span class="caption">Diseases</span>
                            <span class="value">
                                <?php echo $donor_data['health'] ?>
                            </span>
                        </li>
                        <li>
                            <span class="caption">previously Donated</span>
                            <span class="value">
                                <?php echo $donor_data['prev_donate'] ?>
                            </span>
                        </li>
                        <li>
                            <span class="caption">Conservation</span>
                            <span class="value">
                                <?php echo $donor_data['alchohol'] ?>
                            </span>
                        </li>
                        <li>
                            <span class="caption">Surgery</span>
                            <span class="value">
                                <?php echo $donor_data['surgery'] ?>
                            </span>
                        </li>
                        <li>
                            <span class="caption">others</span>
                            <span class="value">
                                <?php echo $donor_data['other'] ?>
                            </span>
                        </li>

                    </ul>

                </div>
            </div>
        </div>
    </section>


</body>