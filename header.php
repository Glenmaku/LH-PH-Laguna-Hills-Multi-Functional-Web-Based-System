<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--CSS-->
    <link rel="stylesheet" href="style.css">

    <link rel='stylesheet' href='https://npmcdn.com/flickity@2/dist/flickity.css'>
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="Bootstrap/css/bootstrap.min.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />


    <title>Laguna Hills Subdivision</title>
    <link rel="icon" type="image/x-icon" href="images/Untitled.png">
</head>

<body>
    <!--Navigation Bar-->
    <nav class="navbar navbar-expand-lg fixed-top   p-md-1">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="Images/LHPHlogo.png" class="logo">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon nas"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto">
                    <ul class="navbar-nav me-auto mt-mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link nas">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="AboutUs.php" class="nav-link  nas">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a href="Amenities.php" class="nav-link nas">Amenities</a>
                        </li>
                        <li class="nav-item">
                            <a href="PropertyFinder.php" class="nav-link nas">Property Finder</a>
                        </li>
                        <li class="nav-item">
                            <a href="ContactUs.php" class="nav-link nas">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="btn loginbutton nas" onclick="login_function()">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

    </nav><!--END--Navigation Bar-->
    <!-- LOGIN MODAL --><!--SHOW ON CLICK-->
    <div class="modal fade" id="Login" tabindex="-1" aria-labelledby="LoginLabel" aria-hidden="true">
        <div class="login modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="login-content justify-content-between">
                    <div class="login_banner justify-content-center d-flex forms">
                        <div class="justify-content-center align-self-center login_banner_2  d-flex flex-column ">
                            <img src="Images/LHPHlogo.png " class="d-flex align-self-center">
                            <h1 class="text-center">Welcome!</h1>

                        </div>
                    </div>
                    <div class="right_side forms  justify-content-center d-flex flex-column">
                        <div class="modal-header">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <h2 class="text-center" class="modal-title">Login</h2>
                            <div id="login-message" class="alert-red"></div>
                            <form class="login_form">

                                <div class="form_input ">
                                    <div class="login_input_field mb-4">
                                        <label for="Email" class="mb-2"></i>Email/Username</label>
                                        <div class="">
                                            <input class="form-control" id="login_emailusername" name="login_emailusername">
                                        </div>
                                    </div>
                                </div>
                                <div class=" login_input_field ">
                                    <label for="Password" class="mb-2">Password</label>
                                    <input class="form-control" type="password" placeholder="*********" name="login_password" id="login_password">
                                    <a class="d-flex justify-content-end mb-2 text-reset" onclick="forgot_function()">Forgot
                                        Password?</a>
                                </div>
                                <div class=" login_button_area d-flex justify-content-center">

                                    <button class="btn-submit4 btn-submit-5" name="Login_button" id="Login_button" type="button" onclick="login_function();">
                                        <div class="btn-submit-6">
                                            <p class='bx-fw bx bx-log-in'></p>
                                        </div>
                                        <a class="text-white">Log in</a>
                                    </button>
                                </div>
                                <p class="text-center"> Don't have an account?<a href="Signup.php" class="text-center text-reset">Click here</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- END--LOGIN MODAL -->
    <!-- FORGOT PASSWORD --><!--SHOW ON CLICK-->
    <div class="modal fade" id="FORGOTMODAL" tabindex="-1" aria-labelledby="LoginLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <div class="right_side ">
                    <div class="modal-header justify-content-center login_input_field ">
                        <a onclick="login_function()" class="d-flex dark-green text-reset"><-Back to Login</a>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body pb-0">

                        <h2 class="text-center" class="modal-title">Forgot Password</h2>
                        <div id="forgot_errors" class="dark-green text-center ms-5 me-5 mb-4"></div>
                        <form class="login_form">

                            <div class="form_input mb-auto">


                                <div class="login_input_field">

                                    <div class="">
                                        <input class="form-control mb-2" id="forgot_emailusername" name="forgot_emailusername" placeholder="Email/Username">


                                    </div>
                                </div>
                            </div>
                            <div class=" login_button_area d-flex justify-content-center">
                                <button class="btn-submit4 btn-submit-5" name="sending_button" id="sending_button" type="button" onclick="sending_function()">
                                    <span class="btn-submit-6">
                                        <p class='bx-fw bx bxs-send'></p>
                                    </span>
                                    <a class="text-white">Submit</a>
                                </button>
                            </div>
                        </form>
                        <div class="justify-content-center lh-1 border-0 p-0 pb-3">
                            <p class="text-center mb-auto"> Don't have an account?<a href="Signup.php" class="text-center dark-green text-reset">Click here</a></p>
                            <p class="text-center mb-auto"> If you encountered a problem, please <a href="ContactUs.php" class="text-center  dark-green text-reset">Contact Us</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END--LOGIN MODAL -->


    <!--/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    <script>
        //LOGIN FUNCTION
        function login_function() {
            $(document).on('click', '#Login_button', function() {
                var emailusername = $('#login_emailusername').val();
                var password = $('#login_password').val();

                $.ajax({
                    url: 'includes/Act-login.php',
                    method: 'post',
                    data: {
                        EU: emailusername,
                        PASS: password
                    },
                    success: function(data) {
                        $('#login-message').html(data);
                        $('#Login').modal("show");
                        $('form').trigger('reset');
                    }

                })
            })
            $('#Login').modal("show");
            $(document).on('click', '#btn_close', function() {
                $('form').trigger('reset');
                $('#message').html('');
            })
            $('#FORGOTMODAL').modal("hide");
        }
        //FORGOT PASSWORD FUNCTION
        function forgot_function() {


            $('#FORGOTMODAL').modal("show");
            $('#Login').modal("hide");
        }


        function sending_function() {
            var email = $("#forgot_emailusername").val();
            if (email == "") {
                $("#forgot_errors").html("Email field is required");
                return false;
            } else {
                $.ajax({
                    type: "POST",
                    url: "includes/Act-show.php",
                    data: {email: email},
                    success: function(data) {
                        if(data.trim() === "match") {
                            $("#forgot_errors").html("We sent a password reset otp in your email, please enter the code");
                            $("#forgot_emailusername").after("<input class='form-control' type='text' id='verification_code' placeholder='Enter the otp code'/>");
                            
                            $("#sending_button").replaceWith(' <button class="btn-submit4 btn-submit-5" name="submit_button" id="submit_button" type="button" onclick="verify_function();">' + '<span class="btn-submit-6">' + '<p class="bx-fw bx bxs-send"></p>' +'</span>' +'<a class="text-white">Verify</a>' +'</button>');
                        }
                        else if(data.trim() === "no match") {
                            $("#forgot_errors").html("Email does not match any data in the database");
                        }
                        else{
                            $("#forgot_errors").html("LUH");
                        }
                    }
                });
            }
        }
    </script>