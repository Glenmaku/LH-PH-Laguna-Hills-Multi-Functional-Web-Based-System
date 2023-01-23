<?php require_once('header.php'); ?>
<?php require_once('includes/connection.php'); ?>


            <!--success-->
                <?php
                if (isset($_GET['success'])) {
                    $Alert = $_GET['success'];
                    $Alert= "<script> confirm ('You have successfully submitted a message. Please wait for a reply to your email and we will get to you as soon as possible.');</script>";
                ?>
                  <?php echo $Alert ?>
                <?php
                }
                ?>

<!--UPPER BANNER-->
<div class=" Top TopContact Topbanner container-fluid">
    <div class="text-center container-fluid">
        <h5>#Reach&Connect</h5>
        <h1>Contact Us</h1>
    </div>
</div>
<!--END-UPPER BANNER-->


<!-- GREEN CONTACT FORM-->
<div class=" text-white justify-content-between contactarea">
    <div class="d-inline section7 forms">
        <h2>Got a question?</h2>
        <h1>Reaching us</h1>
        <h2>has never been easier</h2>
        <p class="text-white">Send us a message and we'll get right back to you.<br> You can also reach us through:
        </p>
        <ul class="list-unstyled section1">
            <li class="">
                <i class='bx-fw bx bxl-facebook-square text-white'></i>
                <a class="contactb">facebook.com/LagunaHillsSubdivision</a>
            </li>
            <li class="">
                <i class='bx-fw bx bxl-gmail text-white'></i>
                <a class="contactb">lagunahillshoa@gmail.com</a>
            </li>
            <li class="">
                <i class=' bx-fw bx bxs-phone text-white'></i>
                <a class="contactb">(049)539-2062</a>
            </li>
            <li class="">
                <i class=' bx-fw bx bxs-map text-white'></i>
                <a class="contactb">159 Mutya St. Barangay Pansol 4027 Calamba, Laguna, Philippines</a>
            </li>
        </ul>
    </div>


    <form class="contactform1 d-inline align-content-center fortops forms needs-validation" id="cont">
        <div class="form-floating mb-5 formss align-self-center">
            <input type="text" class="form-control" id="Fullnameinput" placeholder="Firstname Surname" name="Full_Name" required>
            <label for="Firstnameinput">Full Name</label>

            <div class="invalid-tooltip text-white">
          Please enter your name.
        </div>
        </div>
        <div class="form-floating mb-5">
            <input type="email" class="form-control" id="Emailinput" placeholder="name@example.com" name="Email_Address" required>
            <label for="Emailinput">Email address</label>
            <div class="invalid-tooltip text-white">
          Please enter a valid email address.
        </div>
        </div>
        <div class="form-floating mb-5">
            <input type="number" class="form-control" id="Numberinput" placeholder="XXXXXXXXXXX" name="Cellphone_Number" required>
            <label for="Numberinput">Cellphone Number</label>
            <div class="invalid-tooltip text-white">
          Please enter a valid number.
        </div>
        </div>
        <div class="form-floating mb-5">
            <input type="text" class="form-control" id="Subjectinput" placeholder="Laguna Hills Inquiries" name="Subject" required>
            <label for="Subjectinput">Subject</label>
            <div class="invalid-tooltip text-white">
          Please add a subject.
        </div>
        </div>
        <div class="form-floating mb-5">
            <textarea class="form-control" id="floatingTextarea2" placeholder="Your Message" style="height: 100px" name="Message"required ></textarea>
            <label for="floatingTextarea2">Message</label>
               <div class="invalid-tooltip text-white">
          Please enter your message.
        </div>
        </div>
        <div class="d-flex justify-content-center">
            <button class="btn-submit4 btn-submit-5" id="sends" onclick="send_contacts(); return false;">
                <span class="btn-submit-6">
                <p class='bx-fw bx bxs-send'></p>
                </span>
                <a class="text-white">Submit</a>
            </button>
        </div>
    </form>
</div>


<!-- END GREEN CONTACT FORM-->
<?php require_once('footer.php'); ?>