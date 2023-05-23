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
        <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label dark-green" for="invalidCheck">
      I agree to the collection and use of my personal information as described in the <a href="#" onclick="PrivacyModal()">Privacy Policy</a> for the purpose of processing my submission.
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
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
<div class="modal fade" id="PrivacyPolicy" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Privacy Policy</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body justify-content-start ms-2 me-2">
      <br><h6 >Introduction:</h6>

At <b>Laguna Hills Subdivision</b>, we are committed to protecting your privacy and the personal information that you share with us. This Privacy Policy sets out the ways in which we collect, use, store, and protect the personal information that you provide to us.<br>

<br><h6 >Personal Information Collection:</h6>

We may collect personal information from you when you interact with us, such as when you visit our website, use our products and services, or contact us with inquiries or support requests. The personal information that we may collect from you includes, but is not limited to, your name, email address, telephone number, and any other information that you choose to provide to us.<br>

<br><h6 >Use of Personal Information:</h6>

The personal information that we collect from you may be used for the following purposes:<br>

To provide you with the products and services that you have requested
To respond to your inquiries and support requests
To improve our products and services
To send you marketing and promotional materials, if you have agreed to receive such materials<br>
<br><h6 >Protection of Personal Information:</h6>
We take the protection of your personal information very seriously and have implemented appropriate technical and organizational measures to protect it from unauthorized access, disclosure, alteration, and destruction. We also take steps to ensure that the personal information that we collect from you is accurate and up-to-date.<br>

<br><h6 >Disclosure of Personal Information:</h6>

We may disclose your personal information to third parties in certain circumstances, such as to our service providers who assist us in providing our products and services, or as required by law. We will only share the minimum amount of personal information necessary to fulfill the purposes outlined in this Privacy Policy.<br>

<br><h6 >Access to Personal Information:</h6>

You have the right to access, update, and correct any personal information that we hold about you. If you would like to exercise these rights, please contact us at lagunahillshoa@gmail.com.<br>

<br><h6 >Changes to this Privacy Policy:</h6>
We may update this Privacy Policy from time to time to reflect changes in our privacy practices or applicable laws. If we make any changes to this Privacy Policy, we will notify you by posting the updated policy on our website.<br>

<br><h6 >Contact Us:</h6>

If you have any questions or concerns about this Privacy Policy or our privacy practices, please contact us at  lagunahillshoa@gmail.com.<br>

This Privacy Policy was last updated on February 12, 2023.<br>
      </div>
      <div class="modal-footer">

      </div>
    </div>
  </div>
</div>

<script>
 function PrivacyModal() {
      $("#PrivacyPolicy").modal("show");
    }

  </script>
<!-- END GREEN CONTACT FORM-->
<!-- SCRIPTS -->
<script type="text/javascript" src="Bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script type="text/javascript" src="script.js"></script>
  <script  src="script.js"></script>
  <script src='https://npmcdn.com/flickity@2/dist/flickity.pkgd.js'></script>
  
