<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Volunteer Login</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/37af1810bd.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/registration.css">
    <link rel="stylesheet" href="../styles/style_1.css">
</head>
<style>
    .img-overlay::before {
        position: absolute;
        content: '';
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        mix-blend-mode: multiply;
        background: #FB3640;
        background: -webkit-linear-gradient(to right, #17173A, #FB3640);
        background: linear-gradient(to right, #17173A, #FB3640);
        z-index: -1;
    }


    input,
    textarea {
        padding: 10px 12px 10px 12px;
        border: 1px solid lightgrey;
        border-radius: 2px;
        margin-bottom: 5px;
        margin-top: 2px;
        width: 100%;
        box-sizing: border-box;
        color: #2C3E50;
        font-size: 14px;
        letter-spacing: 1px;
    }

    input:focus,
    textarea:focus {
        -moz-box-shadow: none !important;
        -webkit-box-shadow: none !important;
        box-shadow: none !important;
        border: 1px solid #304FFE;
        outline-width: 0;
    }

    a {
        color: inherit;
        cursor: pointer;
    }
</style>

<body class="bg_img footer img-overlay"
    style="background-image: url(https://script.viserlab.com/bloodlab/assets/images/frontend/footer/61023b2b0ac1b1627536171.jpg);color: white">
    <!-- <div class="header" style="position: absolute"> -->
    <!-- <img src="img/bloog_logo.jpeg" alt=""> -->
    <!-- <a href="../index.php" target="">
            <img src="../img/blood_logo.jpg" style="width: 22%" class="logo" alt="logo"></a>
    </div> -->

    <div class="container w-50 d-flex justify-content-center">

        <!-- <div class="row"> -->
        <!-- <div class="col-lg-6 grid1_2">
                <img src="../img/registrationform.jpg" alt="image1" class="img1">
            </div> -->
        <!-- <div class="col-lg-6 grid1_2 card donologin" style="display: flex; justify-content: center;">
                <div style="background-color: #ffffff;">
                    <h3 class="grid2h3">volunteers Login Form</h3>
                </div>
                <form name="f1" onsubmit="return validation()" action="../script/volunteer_login.php" method="post">

                    <div class="singlefield">
                        <input type="text" name="uname" class="form-control" placeholder="User Name">
                    </div>
                    <div class="singlefield">
                        <input type="text" name="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="singlefield">
                        <button type="submit" class="btn btn-primary">Login</button>
                        or
                        <a href="../index.php"><button type="button" class="btn btn-danger">Home</button></a>
                    </div>
                </form>

            </div> -->
        <div class="card2   py-5 mt-5 w-50" style="color: white">
            <div class="mb-2 mt-5 mb-5">
                <h4 class="text-center">Volunteer Login</h4>
            </div>
            <form name="f1" onsubmit="return validation()" action="../script/volunteer_login.php" method="post">
                <div>
                    <input class="mb-4" type="email" name="uname" placeholder="Enter a valid email address">
                </div>
                <div class="row px-3">

                    <input type="password" name="password" placeholder="Enter password">
                </div>

                <div class="row mb-3 px-3 mt-4">
                    <button type="submit" class="btn btn-danger text-center">Login</button>
                </div>
                <div class="row mb-3">
                    <a class="text-danger" href="../index.php"><button type="button"
                            class="btn btn-primary w-100 text-center">Home</button>
                    </a>
                </div>
            </form>
        </div>
    </div>
    </div>
    <script>
        function validation() {
            var uname = document.f1.uname.value;
            var pwd = document.f1.password.value;

            if (uname.length == "" && pwd.length == "") {
                alert("Please enter Requied Details");
                return false;
            }
            else {
                if (uname.length == "") {
                    alert("user NameF is empty");
                    return false;
                }
                if (pwd.length == "") {
                    alert("mobile number is empty");
                    return false;
                }

            }
        }
    </script>

</body>

</html>