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
    <link rel="stylesheet" href="admin/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        /*///tabs code*/
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

        @media screen and (min-width: 768px) {
            body {
                margin: calc(var(--header-height) + 1rem) 0 0 0;
                padding-left: calc(var(--nav-width) + 2rem)
            }

            .header {
                height: calc(var(--header-height) + 1rem);
                padding: 0 2rem 0 calc(var(--nav-width) + 2rem)
            }

            .header_img {
                width: 40px;
                height: 40px
            }

            .header_img img {
                width: 45px
            }

            .l-navbar {
                left: 0;
                padding: 1rem 1rem 0 0
            }

            .show {
                width: calc(var(--nav-width) + 156px)
            }

            .body-pd {
                padding-left: calc(var(--nav-width) + 188px)
            }
        }

        a {
            text-decoration: none !important;
            color: white !important;
        }


        .header {
            background-color: firebrick !important;
        }

        .logo {
            position: fixed;
            width: 7em;
            top: 4em;
            /* border-radius: 50%; */
        }

        .img-thumbnail {
            border-radius: 50% !important;
        }
    </style>
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
                    <li class="nav-item">
                        <a class="nav-link " href="#"><i class="fa fa-user" aria-hidden="true"></i>
                            Request</a>
                    </li>
                    <li class="nav-item" style="position: absolute;right: 0">
                        <a class="nav-link" href="../index.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
                            Logout</a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
    <div class="w-100" style="margin-top: 3em">
        <div class="d-flex flex-column ">
            <h3 class="text-center fw-bold mx-3 mb-0">Track Request</h3>
            <ul class="container mt-4 nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="new-tab" data-bs-toggle="tab" data-bs-target="#new"
                        type="button" role="tab" aria-controls="new" aria-selected="true">New Req</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link " id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                        type="button" role="tab" aria-controls="profile" aria-selected="false">Accepted</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                        type="button" role="tab" aria-controls="contact" aria-selected="false">Rejected</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="new-tab">
                    <div class="d-flex flex-row">
                        <div class="container py-5 h-100">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-6">
                                    <div class="card mb-5" style="border-radius: 15px;">
                                        <div class="card-body p-4">
                                            <h3 class="mb-3"></h3>
                                            <p class="card-header d-flex justify-content-between">
                                                <span>Sujay S</span>
                                                <badge class="badge bg-primary">New</badge>
                                            </p>
                                            <div class="card-body" class="d-flexs">
                                                <div class="d-flex flex-row justify-content-between flex-wrap">
                                                    <p class="small mt-1">
                                                        Age : <strong>18</strong>
                                                    </p>
                                                    <p class="small mt-1">
                                                        Mobile : <strong>73838383838</strong>
                                                    </p>
                                                    <p class="small mt-1">
                                                        Email : <strong>sijsu@gai.com</strong>
                                                    </p>
                                                    <p class="small mt-1">
                                                        required Blood: <strong>O+ ve</strong>
                                                    </p>
                                                    <div>
                                                        <button class="btn btn-danger">Reject</button>
                                                        <button class="btn btn-success">Accept</button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="d-flex flex-row">
                        <div class="container py-5 h-100">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-6">
                                    <div class="card mb-5" style="border-radius: 15px;">
                                        <div class="card-body p-4">
                                            <h3 class="mb-3"></h3>
                                            <p class="card-header">
                                            <p class="card-header d-flex justify-content-between">
                                                <span>Sujay S</span>
                                                <badge class="badge bg-success">Accepted</badge>
                                            </p>
                                            <div class="card-body" class="d-flexs">
                                                <div class="d-flex flex-row justify-content-between flex-wrap">
                                                    <p class="small mt-1">
                                                        Age : <strong>18</strong>
                                                    </p>
                                                    <p class="small mt-1">
                                                        Mobile : <strong>73838383838</strong>
                                                    </p>
                                                    <p class="small mt-1">
                                                        Email : <strong>sijsu@gai.com</strong>
                                                    </p>
                                                    <p class="small mt-1">
                                                        required Blood: <strong>O+ ve</strong>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="d-flex flex-row">
                        <div class="container py-5 h-100">
                            <div class="row d-flex justify-content-center align-items-center h-100">
                                <div class="col-6">
                                    <div class="card mb-5" style="border-radius: 15px;">
                                        <div class="card-body p-4">
                                            <h3 class="mb-3"></h3>
                                            <p class="card-header d-flex justify-content-between">
                                                <span>Sujay S</span>
                                                <badge class="badge bg-danger">Rejected</badge>
                                            </p>
                                            <div class="card-body" class="d-flexs">
                                                <div class="d-flex flex-row justify-content-between flex-wrap">
                                                    <p class="small mt-1">
                                                        Age : <strong>18</strong>
                                                    </p>
                                                    <p class="small mt-1">
                                                        Mobile : <strong>73838383838</strong>
                                                    </p>
                                                    <p class="small mt-1">
                                                        Email : <strong>sijsu@gai.com</strong>
                                                    </p>
                                                    <p class="small mt-1">
                                                        required Blood: <strong>O+ ve</strong>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>