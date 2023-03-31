<head>
    <link rel="stylesheet" href="admin_login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<?php
session_start();
include '../db_conn.php';
$sql = "SELECT * FROM users WHERE role ='3'";
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
                        <a class="nav-link " href="donees_list.php"><i class="fa fa-user" aria-hidden="true"></i>
                            View Donees</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="donor_list.php"><i class="fa fa-user" aria-hidden="true"></i>
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
            <h3 class="text-center fw-bold mx-3 mb-0">Donor List</h3>
        </div>
        <div class="d-flex justify-content-start flex-row flex-wrap">

            <?php
            if (!isset($_SESSION)) {
                session_start();
            }
            if (mysqli_num_rows($result) > 0) {
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
                    echo '<div class="col-lg-3 mx-1">
            <div class="card mb-4">
                <div class="card-body d-flex justify-content-around flex-row">
                
                    <div class="d-flex flex-column justify-content-center">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp"
                            alt="avatar" class="rounded-circle img-fluid" style="width: 50%;">
                        <h5 class="my-3 text-start mx-4">
                            ' . $row['f_name'] . ' </h5>
                    </div>

                    <div>
                        <p><strong>Email:</strong> <span>' . $row['email'] . '</span></p>
                        <p><strong>Mobile:</strong> <span>' . $row['mobile'] . '</span></p>
                        <p><strong>Blood Group:</strong> <span>' . $bgroup . '</span></p>
                    </div>
                   
                    </div>
                    <div class="card-footer text-center">
                    <a href="donor_info.php"><button onclick= '.$_SESSION['donor_id'] = $row['id'].'" type="button" class="btn btn-primary">view</button> </a>                 
                    </div> 
                    </div> 
                   
            </div>';
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

<!--Container Main start-->

<!--Container Main end-->