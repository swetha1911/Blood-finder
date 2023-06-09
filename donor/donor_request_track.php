<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/37af1810bd.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>


    <!-- <link rel="stylesheet" href="admin/admin_login.css"> -->
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
    </style>
    <?php
    if (!isset($_SESSION)) {
        session_start();
    }
    ?>
</head>



<body id="body-pd">
    <div class="l-navbar text-bg-danger" id="nav-bar">
        <nav class="nav">
            <div class="container-fluid">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="donor_home.php"><i class="fa fa-user" aria-hidden="true"></i>
                            Profile</a>
                    </li>
                    <li class="nav-item text-bg-dark">
                        <a class="nav-link active" href="#"><i class="fa fa-user" aria-hidden="true"></i>
                            Request</a>
                    </li>
                    <li class="nav-item" style="position: absolute;right: 10%;top: 6%">
                        <label>
                            <?php echo $_SESSION['fname'] ?>
                        </label>
                    </li>
                    <li class="nav-item" style="position: absolute;right: 10px">
                        <a class="nav-link active" href="../index.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
                            Logout</a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
    <div class="w-100">
        <div class="d-flex flex-column ">
            <!-- <h3 class="text-center fw-bold mx-3 mb-0">Request List</h3> -->
            <ul class="container mt-4 nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="new-tab" data-bs-toggle="tab" data-bs-target="#new"
                        type="button" role="tab" aria-controls="new" aria-selected="true">New Req</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">Accepted</button>
                </li>
                <!-- <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                        type="button" role="tab" aria-controls="contact" aria-selected="false">Rejected</button>
                </li> -->
            </ul>
            <div class="tab-content" id="myTabContent">
                <!-- new req content -->
                <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="new-tab">
                    <div class="d-flex flex-row">
                        <div class="container py-5 h-100">
                            <div class="row d-flex  align-items-center h-100">
                                <?php
                                if (!isset($_SESSION)) {
                                    session_start();
                                }
                                include '../db_conn.php';
                                $bgroupval = $_SESSION['bgroup'];
                                $sql = "SELECT * FROM users WHERE role ='2' AND status='1' AND bloodgroup='$bgroupval'";
                                $result = mysqli_query($conn, $sql);
                                if ($result) {
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            $bgroup = '';
                                            switch ($row['bloodgroup']) {
                                                case "1":
                                                    $bgroup = "O+";
                                                    break;
                                                case "2":
                                                    $bgroup = "O-";
                                                    break;
                                                case "3":
                                                    $bgroup = "A+";
                                                    break;
                                                case "4":
                                                    $bgroup = "A-";
                                                    break;
                                                case "5":
                                                    $bgroup = "B+";
                                                    break;
                                                case "6":
                                                    $bgroup = "B-";
                                                    break;
                                                case "7":
                                                    $bgroup = "AB+";
                                                    break;
                                                default:
                                                    $bgroup = "AB-";
                                            }
                                            ;
                                            ?>
                                            <div class="col-6">
                                                <div class="card mb-5" style="border-radius: 15px;">
                                                    <div class="card-body p-4">
                                                        <h3 class="mb-3"></h3>
                                                        <p class="card-header d-flex justify-content-between">
                                                            <span>
                                                                <?php echo $row['f_name'] ?>
                                                            </span>
                                                            <badge class="badge bg-primary">New</badge>
                                                        </p>
                                                        <div class="card-body" class="d-flexs">
                                                            <div class="d-flex flex-row justify-content-between flex-wrap">

                                                                <p class="small mt-1 w-25">
                                                                    Mobile : <strong>
                                                                        <?php echo $row['mobile'] ?>
                                                                    </strong>
                                                                </p>
                                                                <p class="small mt-1 w-25">
                                                                    Email : <strong>
                                                                        <?php echo $row['email'] ?>
                                                                    </strong>
                                                                </p>
                                                                <p class="small mt-1 w-25">
                                                                    required Blood: <strong>
                                                                        <?php echo $bgroup ?>
                                                                    </strong>
                                                                </p>
                                                                <p class="small mt-1 w-25">
                                                                    required unit: <strong>
                                                                        <?php echo $row['unit'] ?>
                                                                    </strong>
                                                                </p>
                                                                <p class="small mt-1 w-25">
                                                                    gender: <strong>
                                                                        <?php echo $row['gender'] ?>
                                                                    </strong>
                                                                </p>
                                                                <p class="small mt-1 w-25">
                                                                    Admission Number: <strong>
                                                                        <?php echo $row['admission_no'] ?>
                                                                    </strong>
                                                                </p>
                                                                <p class="small mt-1 w-25">
                                                                    Admission date: <strong>
                                                                        <?php echo $row['admission_date'] ?>
                                                                    </strong>
                                                                </p>
                                                                <p class="small mt-1 w-25">
                                                                    Hospital Name: <strong>
                                                                        <?php echo $row['hospital_name'] ?>
                                                                    </strong>
                                                                </p>
                                                                <p class="small mt-1 w-25">
                                                                    address: <strong>
                                                                        <?php echo $row['address'] ?>
                                                                    </strong>
                                                                </p>
                                                                <div class="text-start w-100">
                                                                    <button
                                                                        onclick="<?php $_SESSION['donor_req_id'] = $row['id'];
                                                                        $_SESSION['action'] = 'accept'; ?>;window.location.href = 'donor_action.php';"
                                                                        class="btn btn-success">Accept</button>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?Php

                                        }
                                    } else {
                                        echo '<h4>No Record Found!<h4>';
                                    }
                                }

                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- accepted req content -->
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="d-flex flex-row">
                        <div class="container py-5 h-100">
                            <div class="row d-flex  align-items-center h-100">
                                <?php
                                if (!isset($_SESSION)) {
                                    session_start();
                                }
                                include '../db_conn.php';
                                $id = $_SESSION['id'];
                                $bgroupvalue = $_SESSION['bgroup'];
                                $sql = "SELECT * FROM users WHERE role ='2' AND status='2' AND donor_id='$id'";
                                $result = mysqli_query($conn, $sql);
                                if ($result) {
                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            switch ($row['bloodgroup']) {
                                                case "1":
                                                    $bgroup = "O+";
                                                    break;
                                                case "2":
                                                    $bgroup = "O-";
                                                    break;
                                                case "3":
                                                    $bgroup = "A+";
                                                    break;
                                                case "4":
                                                    $bgroup = "A-";
                                                    break;
                                                case "5":
                                                    $bgroup = "B+";
                                                    break;
                                                case "6":
                                                    $bgroup = "B-";
                                                    break;
                                                case "7":
                                                    $bgroup = "AB+";
                                                    break;
                                                default:
                                                    $bgroup = "AB-";
                                            }
                                            ;
                                            ?>
                                            <div class="col-6">
                                                <div class="card mb-5" style="border-radius: 15px;">
                                                    <div class="card-body p-4">
                                                        <h3 class="mb-3"></h3>
                                                        <p class="card-header d-flex justify-content-between">
                                                            <span>
                                                                <?php echo $row['f_name'] ?>
                                                            </span>
                                                            <badge class="badge bg-success">Accepted</badge>
                                                        </p>
                                                        <div class="card-body" class="d-flexs">
                                                            <div class="d-flex flex-row justify-content-between flex-wrap">
                                                                <p class="small mt-1 w-25">
                                                                    Mobile : <strong>
                                                                        <?php echo $row['mobile'] ?>
                                                                    </strong>
                                                                </p>
                                                                <p class="small mt-1 w-25">
                                                                    Email : <strong>
                                                                        <?php echo $row['email'] ?>
                                                                    </strong>
                                                                </p>
                                                                <p class="small mt-1 w-25">
                                                                    required Blood: <strong>
                                                                        <?php echo $bgroup ?>
                                                                    </strong>
                                                                </p>
                                                                <p class="small mt-1 w-25">
                                                                    required unit: <strong>
                                                                        <?php echo $row['unit'] ?>
                                                                    </strong>
                                                                </p>
                                                                <p class="small mt-1 w-25">
                                                                    gender: <strong>
                                                                        <?php echo $row['gender'] ?>
                                                                    </strong>
                                                                </p>
                                                                <p class="small mt-1 w-25">
                                                                    Admission Number: <strong>
                                                                        <?php echo $row['admission_no'] ?>
                                                                    </strong>
                                                                </p>
                                                                <p class="small mt-1 w-25">
                                                                    Admission date: <strong>
                                                                        <?php echo $row['admission_date'] ?>
                                                                    </strong>
                                                                </p>
                                                                <p class="small mt-1 w-25">
                                                                    Hospital Name: <strong>
                                                                        <?php echo $row['hospital_name'] ?>
                                                                    </strong>
                                                                </p>
                                                                <p class="small mt-1 w-25">
                                                                    address: <strong>
                                                                        <?php echo $row['address'] ?>
                                                                    </strong>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    } else {
                                        echo '<h4>No Record Found!<h4>';
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

</body>