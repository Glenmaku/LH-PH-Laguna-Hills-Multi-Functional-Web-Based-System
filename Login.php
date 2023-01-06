<?php require_once('header.php'); ?>
<?php session_start(); ?>

 <!-- LOGIN -->

 <section class="login_container " id="Logging in">

            <div class="modals-content">
                <div class="login-content ">

                    <div class="login_banner">

                        <div class="justify-content-center align-self-center login_banner_2  d-flex flex-column ">
                            <img src="Images/LHPHlogo.png " class="d-flex align-self-center">
                            <h1 class="text-center">Welcome!</h1>
                        </div>

                    </div>
                    
                    <div class="right_side">
                        <div class="modal-body">
                            <div class="login_title">
                            <h2 class="text-center modals-title">Login</h2>
                <?php
                if(isset($_GET['Empty']))
                {
                    $Message=$_GET['Empty'];
                    $Message= "Please fill in the Blanks";
               ?>
               <div class="alert-red"><?php echo $Message?></div> 
               <?php
                }
                ?>

                <?php
                if(isset($_GET['U_Invalid']))
                {
                    $Message=$_GET['U_Invalid'];
                    $Message= "User not found";
               ?>
               <div class="alert-red"><?php echo $Message?></div> 
               <?php
                }
                ?>

                <?php
                if(isset($_GET['P_Invalid']))
                {
                    $Message=$_GET['P_Invalid'];
                    $Message= "Invalid Password";
               ?>
               <div class="alert-red"><?php echo $Message?></div> 
               <?php
                }
                ?></div>

                            <form class="login_form" id="form" action="includes/login-act.php" method="POST" novalidate>
                                <div class="form_input ">
                                    <div class="login_input_field mb-4">
                                        <label for="Email" class="mb-2"></i>Email</label>
                                        <div class="">
                                            <input class="form-control" type="email" id="email" placeholder="example@gmail.com" name="email" />
                                            <div class="invalid-tooltip text-white">Please add a subject.</div>
                                        </div>
                                    </div>
                                </div>
                                <div class=" login_input_field ">
                                    <label for="Password" class="mb-2">Password</label>
                                    <input class="form-control" type="password" placeholder="*********" name="password" id="password" />
                                    <a href="forgotpass.php" class="d-flex justify-content-end mb-2">Forgot
                                        Password?</a>
                                </div>
                                <div class=" login_button_area d-flex justify-content-center">

                                    <button type="submit" class="btn-submit4 btn-submit-5" name="login_button" id="login_button">
                                        <span class="btn-submit-6">
                                            <p class='bx-fw bx bx-log-in'></p>
                                        </span>
                                        <a class="text-white">Log in</a>
                                    </button>
                                </div>
                                <p class="text-center"> Don't have an account?<a href="Signup.php" class="text-center">Click here</a></p>
                            </div>
                        </div>
                    </div>
                </div>
  </section>
    <!-- END--LOGIN MODAL -->
    


<?php require_once('footer.php'); ?>
