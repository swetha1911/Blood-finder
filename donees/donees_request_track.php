<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Track Request</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/37af1810bd.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        /*///tabs code*/
        .nav-link {
            /*background: white !important;*/
            color: #dc3545 !important;
        }

        .nav-link.active {
            color: white !important;
            background-color: #dc3545 !important;
        }

        .w-48 {
            width: 48%;
        }
    </style>
</head>

<body style="background-image: url(
    https://script.viserlab.com/bloodlab/assets/images/frontend/how_it_work/60fff8d9bc57d1627388121.jpg)">
    <section class="container-fluid">
        <nav class="nav text-bg-danger" style="position: sticky; top: 0">
            <div class="d-flex flex-row w-100">
                <div>
                    <a class="nav-link active" href="../index.php"></i>
                        Track Request</a>
                    </a>
                </div>
                <div class="text-right">
                    <a class="nav-link active" href="../index.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
                        Logout</a>
                    </a>
                </div>

            </div>
        </nav>

        <div class="d-flex flex-column">
            <div class="container mt-3 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12">
                        <div class="card mb-3" style="border-radius: 15px;">
                            <div class="card-body p-4">
                                <form name="form" method="post" action="donees_request_track.php">
                                    <div class="col singlefield">
                                        <label class="mb-2">Enter Your Register Phone No:</label>

                                        <input type="text" id="userName" name="userName" class="form-control"
                                            placeholder="Phone no">

                                    </div>
                                    <div class="col d-flex my-4 justify-content-center">
                                        <a class="btn btn-danger" href="../index.php">Home</a>
                                        <button type='submit' class="btn btn-primary mx-2">Track</button>


                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex flex-row">
                <div class="container  h-100">
                    <div class="row d-flex flex-wrap h-100">
                        <?php // LOOP TILL END OF DATA
                        if (!isset($_SESSION)) {
                            session_start();
                        }
                        if (isset($_REQUEST['userName'])) {
                            include '../db_conn.php';
                            $id = $_REQUEST['userName'];
                            // SQL query to select data from database
                            $sql = "SELECT * FROM users WHERE mobile='$id'";
                            $result = $conn->query($sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($rows = $result->fetch_assoc()) {
                                    $bgroup = '';
                                    switch ($rows['bloodgroup']) {
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
                                            break;
                                        }
                                        ;
                                        if ($rows['status'] === '0') {
                                        echo "<div class=\"w-48\">
                                <div class=\"card mb-2\" style=\"border-radius: 15px;\">
                                    <div class=\"card-body p-4\">
                                        <h3 class=\"mb-3\"></h3>
                                        <p class=\"card-header d-flex justify-content-between\">
                                            <span><strong classs=\"text-warning\">
                                            " . $rows['f_name'] . "
                                            </strong>
                                            </span>

                                            <badge class=\"badge bg-info\">Waiting for the verification</badge>
                                            </p>
                                            <div class=\"mt-2\" class=\"d-flexs\">
                                            <div class=\"d-flex flex-row justify-content-start flex-wrap\">
                                                <p class=\"small    mx-3 w-25\">
                                                    Mobile : <strong>
                                                        " . $rows['mobile'] . "
                                                    </strong>
                                                </p>
                                            <p class=\"small   mx-3 w-25\">
                                                            Email : <strong>
                                                                " . $rows['email'] . "
                                                            </strong>
                                                        </p> 
                                                <p class=\"small   mx-3 w-25\">
                                                    required Blood: <strong>
                                                        " . $bgroup . "
                                                    </strong>
                                                </p>
                                                <p class=\"small   mx-3 w-25\">
                                                required unit: <strong>
                                                " . $rows['unit'] . "
                                                </strong>
                                                </p>
                                                <p class=\"small   mx-3 w-25\">
                                                    Gender: <strong>
                                                        " . $rows['gender'] . "
                                                    </strong>
                                                </p>
                                                <p class=\"small   mx-3 w-25\">
                                                    Admission Number: <strong>
                                                        " . $rows['admission_no'] . "
                                                    </strong>
                                                </p>
                                                <p class=\"small   mx-3 w-25\">
                                                Admission date: <strong>
                                                        " . $rows['admission_date'] . "
                                                </strong>
                                                </p>
                                                <p class=\"small   mx-3 w-25\">
                                                Hospital Name: <strong>
                                                        " . $rows['hospital_name'] . "
                                                </strong>
                                                </p>
                                                <p class=\"small   mx-3 w-25\">
                                                Hospital Address: <strong>
                                                        " . $rows['address'] . "
                                                        </strong>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>";
                                        }
                                            if ($rows['status'] === '1') {
                                        echo "<div class=\"w-48\">
                                        <div class=\"card mb-2\" style=\"border-radius: 15px;\">
                                            <div class=\"card-body p-4\">
                                                <h3 class=\"mb-3\"></h3>
                                                <p class=\"card-header d-flex justify-content-between\">
                                                    <span><strong class=\"text-warning\">
                                                    " . $rows['f_name'] . "</strong>
                                                    </span>
                                                    <badge class=\"badge bg-warning\">Waiting for Donor</badge>
                                                </p>
                                                <div class=\"card-body\" class=\"d-flexs\">
                                                    <div class=\"d-flex flex-row justify-content-start flex-wrap\">
        
                                                        <p class=\"small   mx-3 w-25\">
                                                            Mobile : <strong>
                                                                " . $rows['mobile'] . "
                                                            </strong>
                                                        </p>
                                                    <p class=\"small   mx-3 w-25\">
                                                                    Email : <strong>
                                                                        " . $rows['email'] . "
                                                                    </strong>
                                                                </p> 
                                                        <p class=\"small   mx-3 w-25\">
                                                            required Blood: <strong>
                                                            " . $bgroup . "
                                                            </strong>
                                                        </p>
                                                        <p class=\"small   mx-3 w-25\">
                                                        required unit: <strong>
                                                        " . $rows['unit'] . "
                                                        </strong>
                                                    </p>
                                                        <p class=\"small   mx-3 w-25\">
                                                            Gender: <strong>
                                                                " . $rows['gender'] . "
                                                            </strong>
                                                        </p>
                                                        <p class=\"small   mx-3 w-25\">
                                                        Admission Number: <strong>
                                                            " . $rows['admission_no'] . "
                                                        </strong>
                                                    </p>
                                                    <p class=\"small   mx-3 w-25\">
                                                    Admission date: <strong>
                                                            " . $rows['admission_date'] . "
                                                    </strong>
                                                    </p>
                                                    <p class=\"small   mx-3 w-25\">
                                                    Hospital Name: <strong>
                                                            " . $rows['hospital_name'] . "
                                                    </strong>
                                                    </p>
                                                    <p class=\"small   mx-3 w-25\">
                                                    Hospital Address: <strong>
                                                            " . $rows['address'] . "
                                                            </strong>
                                                    </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                    ";
                                        }
                                        if ($rows['status'] === '2') {
                                        $id = $rows['donor_id'];
                                        $sql1 = "SELECT * FROM users WHERE id='$id'";
                                        $result1 = $conn->query($sql1);
                                        while ($donordata = $result1->fetch_assoc()) {
                                            $bgroup = '';
                                            switch ($donordata['bloodgroup']) {
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
                                                    break;
                                            }
                                            ;
                                            echo "<div class=\"w-48\">
                                        <div class=\"card mb-2\" style=\"border-radius: 15px;\">
                                            <div class=\"card-body p-4\">
                                                <h3 class=\"mb-3\"></h3>
                                                <p class=\"card-header d-flex justify-content-between\">
                                                    <span><strong class=\"text-warning\">
                                                    " . $rows['f_name'] . "</strong>
                                                    </span>
        
                                                    <badge class=\"badge bg-success\">Blood request approved</badge>
                                                </p>
                                                <div class=\"mt-2\" class=\"d-flexs\">
                                                    <div class=\"d-flex flex-row justify-content-start flex-wrap\">
        
                                                        <p class=\"small   mx-3 w-25\">
                                                            Mobile : <strong>
                                                                " . $rows['mobile'] . "
                                                            </strong>
                                                        </p>
                                                    <p class=\"small   mx-3 w-25\">
                                                                    Email : <strong>
                                                                        " . $rows['email'] . "
                                                                    </strong>
                                                                </p> 
                                                        <p class=\"small   mx-3 w-25\">
                                                            required Blood: <strong>
                                                            " . $bgroup . "
                                                            </strong>
                                                        </p>
                                                        <p class=\"small   mx-3 w-25\">
                                                            required unit: <strong>
                                                            " . $rows['unit'] . "
                                                            </strong>
                                                        </p>
                                                        <p class=\"small   mx-3 w-25\">
                                                            Gender: <strong>
                                                                " . $rows['gender'] . "
                                                            </strong>
                                                        </p>
                                                        <p class=\"small   mx-3 w-25\">
                                                        Admission Number: <strong>
                                                            " . $rows['admission_no'] . "
                                                        </strong>
                                                    </p>
                                                    <p class=\"small   mx-3 w-25\">
                                                    Admission date: <strong>
                                                            " . $rows['admission_date'] . "
                                                    </strong>
                                                    </p>
                                                    <p class=\"small   mx-3 w-25\">
                                                    Hospital Name: <strong>
                                                            " . $rows['hospital_name'] . "
                                                    </strong>
                                                    </p>
                                                    <p class=\"small   mx-3 w-25\">
                                                    Hospital Address: <strong>
                                                            " . $rows['address'] . "
                                                            </strong>
                                                    </p> 
                                                        <p class=\"w-100 mt-4 card-header\"><strong class=\"rounded-1 text-success text-\">Donor Details</strong>
                                                <div class=\"w-100 mt-2 d-flex flex-row flex-wrap\">
                                                <p class=\"small  mx-3 w-25\">
                                                Name: <strong>
                                                " . $donordata['f_name'] . "
                                                </strong>
                                            </p>
                                            <p class=\"small   mx-3 w-25\">
                                                Mobile: <strong>
                                                " . $donordata['mobile'] . "
                                                </strong>
                                            </p>
                                            <p class=\"small   mx-3 w-25\">
                                            Email-Id: <strong>
                                                " . $donordata['email'] . "
                                            </strong>
                                            </p>
                                            <p class=\"small   mx-3 w-25\">
                                            gender: <strong>
                                                " . $donordata['gender'] . "
                                            </strong>
                                            </p>
                                        <p class=\"small   mx-3 w-25\">
                                        Location: <strong>
                                                " . $donordata['address'] . "
                                        </strong>
                                        </p>
                                        <p class=\"small   mx-3 w-25\">
                                        Location: <strong>
                                                " . $bgroup . "
                                        </strong>
                                        </p>
                                            </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>";
                                        }

                                    } 

                                }
                            } else {
                                echo "<div class=\"card mb-2\" style=\"border-radius: 15px;\">
                                <div class=\"card-body\" class=\"d-flexs\">
                                <h3>No data available</h3>
                                </div>";
                            }
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- <style>
        .transparent:hover {
            opacity: 1.0;
        }
    </style> -->

</body>

</html>