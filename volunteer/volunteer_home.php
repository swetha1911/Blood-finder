<head>
    <?php
    session_start();
    include '../db_conn.php';
    $id = $_SESSION['id'];
    $role = $_SESSION['role'];

    $sql = "SELECT * FROM users WHERE id='$id' AND role ='$role'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
    }
    ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .nav-link.active {
            color: white !important;
            back ground-color: #dc3545 !important;
        }

        .l-navbar {
            left: 0;
            padding: 1rem 1rem 0 0
        }
    </style>
</head>

<body id="body-pd">
    <div class="l-navbar text-bg-danger" id="nav-bar">
        <nav class="nav">
            <div class="container-fluid">
                <ul class="nav">
                    <li class="nav-item text-bg-dark">
                        <a class="nav-link active" href="#"><i class="fa fa-user" aria-hidden="true"></i>
                            Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../volunteer/volunteer_request_track.php"><i class="fa fa-user"
                                aria-hidden="true"></i>
                            Request</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="verification_criteria.php"><i class="fa fa-user"
                                aria-hidden="true"></i>
                            Screening Criteria</a>
                    </li>
                    <li class="nav-item" style="position: absolute;right: 10%;top: 4%">
                        <label>
                            <?php echo $_SESSION['fname'] ?>
                        </label>
                    </li>
                    <li class="nav-item active" style="position: absolute;right: 0">
                        <a class="nav-link active" href="../index.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
                            Logout</a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
    <div class="row d-flex flex-row flex-wrap">
        <div class="d-flex align-items-center justify-content-center my-4">
            <h3 class="text-center fw-bold mx-3 mb-0">Volunteer Profile</h3>
        </div>

        <div class="col-md-12 mt-3">
            <div class="d-flex flex-row border rounded">
                <section class="w-100">
                    <div class="container py-5">
                        <div class="row w-100">
                            <div class="col-lg-4">
                                <div class="card mb-4">
                                    <div class="card-body text-center">
                                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                                            alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                                        <h5 class="my-3">
                                            <?php
                                            echo "$row[f_name]";
                                            ?>
                                        </h5>
                                        <div class="d-flex justify-content-center mb-2">
                                            <a href="volunteer_update.php"><button type="button"
                                                    class="btn btn-danger">update</button></a>
                                            <!-- <button type="button" class="btn btn-outline-primary ms-1">Message</button> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="card mb-4">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Full Name</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">
                                                    <?php
                                                    echo "$row[f_name].$row[l_name]";
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Email</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">
                                                    <?php
                                                    echo "$row[email]";
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Landline</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">
                                                    <?php
                                                    echo "$row[mobile]";
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Mobile</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">
                                                    <?php
                                                    echo "$row[mobile]";
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <p class="mb-0">Blood Group</p>
                                            </div>
                                            <div class="col-sm-9">
                                                <p class="text-muted mb-0">
                                                    <?php
                                                    switch ($row['bloodgroup']) {
                                                        case "1":
                                                            echo "O+";
                                                            break;
                                                        case "2":
                                                            echo "O-";
                                                            break;
                                                        case "3":
                                                            echo "A+";
                                                            break;
                                                        case "4":
                                                            echo "A-";
                                                            break;
                                                        case "5":
                                                            echo "B+";
                                                            break;
                                                        case "6":
                                                            echo "B-";
                                                            break;
                                                        case "7":
                                                            echo "AB+";
                                                            break;
                                                        default:
                                                            echo "AB-";
                                                    }
                                                    ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</body>