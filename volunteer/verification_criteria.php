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

        .pb-100 {
            padding-bottom: 100px;
        }

        .pt-100 {
            padding-top: 100px;
        }

        .shade--bg {
            background: #FB3640;
            background: -webkit-linear-gradient(to bottom, rgba(251, 54, 64, 0.15), #fff);
            background: linear-gradient(to bottom, rgba(251, 54, 64, 0.15), #fff);
        }

        .about-thumb img,
        .volunteer-card__thumb img,
        .donor-card__thumb img,
        .involve-item__thumb img,
        .blog-post__thumb img {
            object-fit: cover;
            -o-object-fit: cover;
            object-position: center;
            -o-object-position: center;
        }


        .gy-5 {
            --bs-gutter-y: 3rem;
        }

        .about-thumb {
            height: 100%;
            position: relative;
        }

        .about-thumb .play-btn,
        {
        background-color: #FB3640;
        }

        .section-title {
            font-size: 2.625rem;
            font-weight: 700;
        }

        .about-item__icon,
        {
        background-color: #17173A;
        }

        .las {
            font-family: 'Line Awesome Free';
            font-weight: 900;
        }

        .las {
            -moz-osx-font-smoothing: grayscale;
            -webkit-font-smoothing: antialiased;
            display: inline-block;
            font-style: normal;
            font-variant: normal;
            text-rendering: auto;
            line-height: 1;
        }

        .about-item__content {
            width: calc(100% - 65px);
            padding-left: 1.5625rem;
        }

        .about-item__title {
            margin-bottom: 0.625rem;
        }
    </style>
</head>
<?php
session_start();
?>


<body id="body-pd">
    <div class="l-navbar text-bg-danger" id="nav-bar">
        <nav class="nav">
            <div class="container-fluid">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="volunteer_home.php"><i class="fa fa-user"
                                aria-hidden="true"></i>
                            Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="volunteer_request_track.php"><i class="fa fa-user"
                                aria-hidden="true"></i>
                            Request</a>
                    </li>
                    <li class="nav-item text-bg-dark">
                        <a class="nav-link active" href="#"><i class="fa fa-user" aria-hidden="true"></i>
                            Screening Criteria</a>
                    </li>
                    <li class="nav-item" style="position: absolute;right: 10%;top: 4%">
                        <label>
                            <?php echo $_SESSION['fname'] ?>
                        </label>
                    </li>
                    <li class="nav-item" style="position: absolute;right: 0">
                        <a class="nav-link active" href="../index.php"><i class="fa fa-sign-out" aria-hidden="true"></i>
                            Logout</a>
                    </li>
                </ul>

            </div>
        </nav>
    </div>
    <div class="w-100" style="margin-top: 3em">
        <section class="pt-100 pb-100 shade--bg">
            <div class="container">
                <div class="row gy-5">
                    <div class="col-lg-6">
                        <div class="about-thumb">
                            <a class="play-btn" href="https://www.youtube.com/embed/WOb4cj7izpE"
                                data-rel="lightcase:myCollection"><i class="las la-play"></i></a>
                            <img src="https://script.viserlab.com/bloodlab/assets/images/frontend/about/60fff7dc7c1141627387868.jpg"
                                alt="image" class="w-100 h-100">
                        </div>
                    </div>

                    <div class="col-lg-6 ps-lg-5">
                        <div class="section-header mb-5 text-sm-start text-center">
                            <h2 class="section-title">Important things to note</h2>
                            <p>* &nbsp; Age between 18 and 60 years</p>
                            <p>* &nbsp;Haemoglobin - not less than 12.5g/DI</p>
                            <p>* &nbsp;Pulse - between 50 and 100/minute with no irregularities</p>
                            <p>* &nbsp;Blood Pressure - Systolic 100-180 mm Hg and Diastolic 50-100 mm Hg</p>
                            <p>* &nbsp;Temprature - Normal (oral temprature not exceeding 37.50C)</p>

                            <p>
                                Body weight - not less than 45 Kg
                                Health conditions: The donor should be in a healthy state of mind and body.
                                They should fulfill the following criteria:
                                Past one year - not been treated for Rabies or received Hepatitis B immune globulin.
                                Past six months - not had a tattoo, ear or skin piercing or acupuncture, not received
                                blood or
                                blood products, no serious illness or major surgery, no contact with a person with
                                hepatitis or
                                yellow jaundice.
                                Past three months - not donated blood or been treated for Malaria.
                                Past one month - had any immunizations.
                                5. Past 48 hours taken any antibiotics or any other medications (Allopathic or Ayurveda
                                or
                                Sidha or Homeo)
                                Past 24 hours - taken alcoholic beverages
                                Past 72 hours - had dental work or taken Aspirin
                                Present - not suffering from cough, influenza or sore throat, common cold
                                Women should not be pregnant or breast feeding her child
                                Women donor should not donate during her menstrual cycles
                                Free from Diabetes, not suffering from chest pain, heart disease or high BP, cancer,
                                blood
                                clotting problem or blood disease, unexplained fever, weight loss, fatigue, night
                                sweats,
                                enlarged lymph nodes in armpits, neck or groin, white patches in the mouth etc.
                                Ever had TB, bronchial asthma or allergic disorder, liver disease, kidney disease, fits
                                or fainting,
                                blue or purple spots on the skin or mucous membranes, received human pituitary-growth
                                hormones etc.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</body>