<head>
    <link rel="stylesheet" href="admin_login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .w-48 {
            width: 48%
        }
    </style>

</head>
<?php

session_start();
include '../db_conn.php';
$sql = "SELECT * FROM users WHERE role ='2' AND (status = '0' OR status = '1' OR  status = '2')";
$result = mysqli_query($conn, $sql);
?>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <!-- <div class="header_img"> <img src="assets/profile.png" alt=""> </div> -->
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
                    <a class="nav-link" href="dashboard.php"><i class="fa fa-user" aria-hidden="true"></i>
                        Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="volunteer_list.php"><i class="fa fa-user" aria-hidden="true"></i>
                            View Volunteer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="donees_list.php"><i class="fa fa-user" aria-hidden="true"></i>
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

    <div class="row d-flex flex-row flex-wrap"
        style="padding: inherit;transition: all 0s ease 0s;margin-right: 0px;margin-top: 5em">
        <div class="d-flex align-items-center justify-content-center my-4">
            <h3 class="text-center fw-bold mx-3 mb-0">Donees List</h3>
        </div>
        <div class="d-flex justify-content-start flex-row flex-wrap">

            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = $result->fetch_assoc()) {
                    $status = '';
                    switch ($row['status']) {
                        case "0":
                            $status = '<p class="me-2 text-center mt-4 rounded-5  bg-info ">waiting for Verificaton
                            </p>';
                            break;
                        case "1":
                            $status = '<p class="me-2 text-center mt-4 rounded-5  bg-warning">looking for donor
                            </p>';
                            break;
                        case "2":
                            $status = '<p class="me-2 text-center mt-4 rounded-5  bg-success">Request completed 
                            </p>';
                            break;

                    }
                    echo '<div class="w-48 mx-1">
            <div class="card mb-4">
                <div class="card-body d-flex justify-content-around flex-row" style="box-shadow: 5px 5px 13px 6px lightgrey">
                
                    <div class="d-flex flex-column w-25">
                        <img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o="
                            alt="avatar" class="rounded-circle img-fluid" style="width: 50%;">
                        <h5 class="text-start mt-3">
                            ' . $row['f_name'] . ' </h5>
                            ' . $status . '
                    </div>

                    <div class="w-75 d-flex flex-wrap">
                        <p class="w-50"><strong>Email:</strong> <span>' . $row['email'] . '</span></p>
                        <p class="w-50"><strong>Mobile:</strong> <span>' . $row['mobile'] . '</span></p>
                        <p class="w-50"><strong>Gender:</strong> <span>' . $row['gender'] . '</span></p>
                        <p class="w-50"><strong>Blood Group:</strong> <span>' . $row['bloodgroup'] . '</span></p>
                        <p class="w-50"><strong>Hospital Name:</strong> <span>' . $row['hospital_name'] . '</span></p>

                        <p class="w-50"><strong>Address:</strong> <span>' . $row['address'] . '</span></p>
                        <p class="w-50"><strong>Admission No:</strong> <span>' . $row['admission_no'] . '</span></p>
                        <p class="w-50"><strong>Admission Date:</strong> <span>' . $row['admission_date'] . '</span></p>
                        <p class="w-50"><strong>Health issues:</strong> <span>' . $row['health'] . '</span></p>
                        <p class="w-50"><strong>Mobile:</strong> <span>' . $row['address'] . '</span></p>
                    </div>

                   
                    </div>
                    </div>  
            </div> ';
                }

            } else {
                echo '<div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body text-center d-flex justify-content-around flex-row">
                    <div class="d-flex flex-column justify-content-center">
                       <h3>No records Found !!</h3>
                    </div>
                </div>
            </div
        </div>';
            }
            ?>
        </div>

    </div>
    </div>
</body>