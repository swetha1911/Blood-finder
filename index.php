<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Boold_AI Intelligence</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/37af1810bd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles/style_1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <?php
    if (isset($_SESSION)) {
        session_unset();
        session_destroy();
    }
    ?>
</head>

<body>
    <!-- ==== topbar start ==== -->
    <div class="container-fluid topbar_1_line">
        <div class="row ">
            <div class="col-lg-8 topbarline">
                <div class="container">
                    <div class="row">
                        <!-- <div class="col-lg-4">
                            <i class="fa-solid fa-phone"></i>
                            <a>9948185828</a>
                        </div> -->
                        <!-- <div class="col-lg-4">
                            <i class="fa-solid fa-envelope"></i>
                            <a>info@namastechservices.com</a>
                        </div> -->
                        <!-- <div class="col-lg-4">
                            <i class="fa-solid fa-location-dot"></i>
                            <a>Jublihills Road</a>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- <div class="col-lg-4 container topbarline_right">
                <div class="row">
                    <div class="col-lg-6">
                        <a style="color: #ffffff;font-weight: 500;font-size: 16px;">Follow Now</a>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-around">
                        <i class="fa-brands fa-facebook-f topbaricon"></i>
                        <i class="fa-brands fa-twitter topbaricon"></i>
                        <i class="fa-brands fa-instagram topbaricon"></i>
                        <i class="fa-brands fa-pinterest-p topbaricon"></i>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
    <!-- ==== #topbar end ==== -->

    <!-- ==== #2 menubar ==== -->
    <div class="container-fluid">
        <div class="row" style="height: 50px;">
            <div class="col-lg-12 menubar2_left text-center" style="font-size: 31px;">
                <p>Intelligent Blood Finder</p>
            </div>
        </div>
    </div>
    <!-- ==== #2 menubar ==== -->

    <!-- ==image== -->
    <div id="bgimage" class="container-fluid"></div>

    <!--grid-->
    <div class="container upward" style=" margin-top: -152px">
        <div class="row justify-content-center">
            <div class="card col-4  m-3 text-bg-danger" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title" style="color: #ffffff;text-align: center;margin-bottom: 30px"">Donors</h5>
                    <p class=" card-text">But I must explain to you how all this mistaken idea of denouncing
                        pleasure and praising pain was born and I will give pleasure</p>
                        <a href="donor/donorsregistration.php" class="btn btn-danger border">Register</a>
                        <a href="donor/donorlogin.php" class="btn btn-danger border">Login</a>
                </div>
            </div>
            <div class="card col-4  m-3 " style="width: 18rem;background-color: black;color: white">
                <div class="card-body">
                    <h5 class="card-title" style="color: #ffffff;text-align: center;margin-bottom: 30px"">volunteer</h5>
                    <p class=" card-text">Nor again is there anyone who loves or pursues or desires to obtain pain of
                        itself, because it is
                        pain</p>
                        <a href="volunteer/volunteerlogin.php" class="btn btn-danger border mt-4">Login</a>
                </div>
            </div>
            <div class="card col-4 m-3 text-bg-danger" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title" style="color: #ffffff;text-align: center;margin-bottom: 30px">Donees</h5>
                    <p class=" card-text">Nor again is there anyone who loves or pursues or desires to obtain pain of
                        itself, because it is
                        pain</p>
                    <a href="donees/doneesrequest.php" class="btn btn-danger border mt-4">Request</a>
                    <a href="donees/donees_request_track.php" class="btn btn-danger border mt-4">Track</a>
                </div>
            </div>




        </div>

        <div class="row my-5">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <img src="img/card1.png" alt="img" class="cardimage">
                    </div>
                    <div class="card-body">
                        <h6 class="cardh6">Why Give Blood?</h6>
                        <p class="cardp">But I must explain to you how
                            all this mistaken idea of denouncing pleasure and praising pain was born and I will give
                            pleasure
                        </p>
                    </div>
                    <div>
                        <a href="#" class="cardbutton">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <img src="img/card2.png" alt="img" class="cardimage">
                    </div>
                    <div class="card-body">
                        <h6 class="cardh6">Become a Donor</h6>
                        <p class="cardp">But I must explain to you how
                            all this mistaken idea of denouncing pleasure and praising pain was born and I will give
                            pleasure
                        </p>
                    </div>
                    <div>
                        <a href="#" class="cardbutton">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <img src="img/card3.png" alt="img" class="cardimage">
                    </div>
                    <div class="card-body">
                        <h6 class="cardh6">How Donations Helps</h6>
                        <p class="cardp">But I must explain to you how
                            all this mistaken idea of denouncing pleasure and praising pain was born and I will give
                            pleasure
                        </p>
                    </div>
                    <div>
                        <a href="#" class="cardbutton">Read More</a>
                    </div>
                </div>
            </div>
        </div>

        <!--==card with image==-->


        <!--  ==image==  -->
        <section class="bgimage2">
            <div class="container" style="display: flex;justify-content: center;align-items: center;">
                <!-- <div class="callarea">
                    <div class="callarea1">
                        <i class="fa-solid fa-phone callicon"></i>
                        <h2 class="calltext">Call Now : 333 555 9090</h2>
                    </div>
                    <div class="callarea1">
                        <i class="fa-solid fa-location-dot"></i>
                        <span>New York – 1075 Firs Avenue</span>
                        <i class="fa-solid fa-envelope"></i>
                        <span>donate@gmail.com</span>
                    </div>
                </div> -->
            </div>
        </section>

        <!--==Footer==-->
        <footer>
            <div class="container-fluid footer1">
                <div class="row">
                    <div class="col-lg-3 footercontent">
                        <h4 class="footerheading">About US</h4>
                        <p>Duis aute irure dolor in reprehenderit velit esse cillum dolore eu fugiat nulla pariatur.
                            Excepteur sint occaecat</p>
                        <!-- <p><b>Phone :</b>+1(456)657-887, 999</p> -->
                        <!-- <p><b>Email :</b>contactblood@gmail.com</p> -->
                    </div>
                    <div class="col-lg-3 footertextlist">
                        <h4 class="footerheading">Quick Links</h4>
                        <p>New Campaign</p>
                        <p>Latest News</p>
                        <p>contact</p>
                    </div>
                    <div class="col-lg-3 footertextlist">
                        <h4 class="footerheading">Services</h4>
                        <p>New Campaign</p>
                        <p>Latest News</p>
                        <p>contact</p>
                    </div>
                    <div class="col-lg-3 footercontent">
                        <h4 class="footerheading">Latest News</h4>
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="img/news1.png" alt="news1" class="newsfooter">
                            </div>
                            <div class="col-sm-6">
                                <p>A Formula For Help And Happiness<br> 18 February, 2022</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>




</body>

</html>