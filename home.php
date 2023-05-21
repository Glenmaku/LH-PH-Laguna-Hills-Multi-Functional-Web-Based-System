
<!--Carousel-->
<div id="carouselMain" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
    <button type="button" data-bs-target="#carouselMain" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>

  </div>
  <!--Carousel Content-->
  <div class="carousel-inner">
    <!--Carousel Content 1-->
    <div class="carousel-item active">
      <img src="Images/upperame.png" class="ImageCarouselMain">
    </div>
    <!--Carousel Content 2-->
    <div class="carousel-item ">
      <img src="Images/RESIDENTIAL3b.jpeg" class="ImageCarouselMain">
    </div> 
    <!--Carousel Content 3 -->
    <div class="carousel-item ">
      <img src="Images/NATURE26.jpeg" class="ImageCarouselMain">
    </div>

  </div>
  <div class="carousel-caption d-block">
    <h3 class="display-3">The</h3>
    <h1 class="TextFont display-1">Laguna Hills Subdivision</h1>
    <h5 class="display-4">#AboveEverythingElse</h5>
    <div>
      <button type="button" class="custom-btn1 btn-1 "><a href="#AboutUs" class="nav-link  nas" onclick="setActiveLink(this);AboutUsnav()">Read More</a></button>
      <button class="custom-btn1 btn-1 "><a href="#ContactUs" class="nav-link nas" onclick="setActiveLink(this);ContactUsnav()">Contact Us</a></button>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselMain" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselMain" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  

</div>
<!--End of Carousel First-->

<!--START OF CONTENT-->
<div class="content">
  <!--WHITE WELCOME TO LAGUNA HILLS-->
  <section class="justify-content-around text-center section1 minheight bg-light">
    <div class="fortops reveal">
      <h2 class="">Welcome to</h2>
      <h1>Laguna Hills</h1>
    </div> <br>
    <p class="revealing">There's a dreamland away from the hustle and bustle of city life.A home resting on a hilltop
      amid the chirping of
      birds.<br>A place where a welcome breeze caresses the gentle slope of hills.<br> There is such a place.<br>A
      place conceived and made real by dreams.<br>The Laguna Hills Subdivision.</p>
    <p class="fw-bold loc revealing"><i class=' bx-fw bx bxs-map'></i>159 Mutya St. Barangay Pansol 4027 Calamba,
      Laguna,
      Philippines</p>
    <br>
    <a href="#AboutUs" class="nav-link  nas" onclick="setActiveLink(this);AboutUsnav()"><button class="custom-btn btn-4 revealing">Read More</button></a>
    <br><br>
  </section>
  <!--END- WHITE WELCOME TO LAGUNA HILLS-->

  <!--ENJOY GREAT AMENITIES-->
  <section class=" section6 justify-content-around text-center">
    <div class="d-flex justify-content-center flex-wrap reveal fortops text-white">
      <h2 class=" align-self-center ">Experience Great&nbsp; </h2>
      <h1 class=" align-self-center"> &nbsp;Amenities</h1>
    </div>
    <div class="ame_combine">
      <div class="Amenities_BG d-block reveal p-2 flex-grow-1"></div>
      <div class="ame_panel reveal">
        <div class="Ame">
          <button onmouseover='imgChange("Images/CLUBHOUSE4.jpeg")' class="Ame1 d-inline">
            <a href="Amenities.php#clubhouse">Clubhouse</a>
          </button>
        </div>
        <div class="Ame">
          <button onmouseover='imgChange("Images/bgame.png")' class=" Ame2 d-inline">
            <a href="Amenities.php#swimmingpool">Swimming Pool</a>
          </button>
        </div>
        <div class="Ame">
          <button onmouseover='imgChange("images/COVEREDCOURT6b.jpg")' class="Ame3 d-inline">
            <a href="Amenities.php#basketballcourt">Covered Court</a>
          </button>
        </div>
        <div class="Ame">
          <button onmouseover='imgChange("Images/TENNISCOURT1.jpeg")' class="Ame4 d-inline">
            <a href="Amenities.php#tenniscourt">Tennis Court</a>
          </button>
        </div>
      </div>
    </div>
   <a href="Amenities.php"><button class="custom-btn btn-5 revealing" >Visit Amenities</button> </a>
  </section>
  <!--END- ENJOY GREAT AMENITIES-->
  <!--HIGHLIGHTS-->
  <section class="Highlights section1 bg-light">
    <div class="d-flex justify-content-center flex-wrap reveal">
      <h1 class="align-self-center">Highlights&nbsp;</h1>
      <h2 class="align-self-center">&&nbsp;</h2>
      <h1 class="align-self-center">&nbsp;Features</h1>
    </div>

    <div class="d-flex flex-wrap topdivhighlights">
<style>
  .iconbig {
  transition: all 0.1s ease-in-out;
}

.iconbig:hover {
  transform: translateY(-10px);
}
</style>
      <div class="divhighlights d-block reveal">
        <div class="iconbig align-self-center"><i class=' bx bxs-tree'></i></div>
        <div class="texticon flex-grow-1 align-self-center">
          <h6>Abundant in Nature</h6>
        </div>
      </div>

      <div class="d-block divhighlights reveal">
        <div class="iconbig"><i class=' bx bxs-building-house'></i></div>
        <div class="texticon flex-grow-1 align-self-center">
          <h6>Residential and Commercial Area</h6>
        </div>
      </div>
      <div class="d-block divhighlights reveal">
        <div class="iconbig"><i class=' bx bxs-landscape'></i></div>
        <div class="texticon flex-grow-1 align-self-center">
          <h6>Landscaped entrance gate and guarhouse</h6>
        </div>
      </div>
      <div class="d-block divhighlights reveal">
        <div class="iconbig"><i class=' bx bxs-cctv'></i></div>
        <div class="texticon flex-grow-1 align-self-center">
          <h6>24-hour security service</h6>
        </div>
      </div>
      <div class="d-block divhighlights reveal">
        <div class="iconbig forfa"><i class="fa-solid fa-road"></i></div>
        <div class="texticon flex-grow-1 align-self-center">
          <h6>Wide Subdivision Roads</h6>
        </div>
      </div>
      <div class="d-block divhighlights reveal">
        <div class="iconbig"><i class="bx bx-water"></i></div>
        <div class="texticon flex-grow-1 align-self-center">
          <h6>Underground drainage system</h5>
        </div>
      </div>
      <div class="d-block divhighlights reveal">
        <div class="iconbig"><i class="bx bxs-bulb"></i></div>
        <div class="texticon flex-grow-1 align-self-center">
          <h6>MERALCO Facilities</h6>
        </div>
      </div>

    </div>
  </section>
  <!--END-HIGHLIGHTS-->
  <!--GREEN COMMUNE WITH NATURE-->

</div>
<div class=" commune d-flex flex-wrap align-content-center">
  <div class=" col-md-5 align-content-center flex-wrap d-flex p-4 pfonts">
    <div class="container-fluid text-white">
      <div class="row justify-content-center text-center fortops">
        <div class="section1 h-100 fortops">
          <div class="justify-content-around text-center text-white section2 titles">
            <div class="sliders">
              <div class="spaces justify-content-center">
                <h2 class="">Commune with</h2>
                <h1 class="">Nature</h1>
              </div>
              <div class="justify-content-center flex-wrap spaces">
                <h2 class="align-self-center">Explore Breathtaking</h2>
                <h1 class="align-self-center">Sceneries</h1>
              </div>
              <div class="d-flex justify-content-center flex-wrap spaces ">
                <h2 class="align-self-center">Tourist&nbsp;</h2>
                <h1 class="align-self-center"> &nbsp;Haven</h1>
              </div>
            </div>
          </div>

          <p class="text-white revealing ">The beauty of the nearby lake sparkles like a million gems
            with the glimmer of the
            early
            sunshine.<br> Indulge with the family in some outdoor fun.<br> Picnic in a hidden valley.<br> Boar ride
            to a
            waterfall.<br>A welcome dip in a hot spring resort.<br> And as the sun goes displaying impressive
            streaks and
            patches of orange and vermillion, making one look forward to yet another wonderful day.<br>Always.</p>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-7 section4">
    <div class="carousels" data-flickity='{ "autoPlay": true }'>
      <div class="carousel-cell"><img src="Images/NATURE11.jpg"></div>
      <div class="carousel-cell"><img src="Images/PIC/SCENERIES111.jpg"></div>
      <div class="carousel-cell"><img src="Images/NATURE28.jpg"></div>
      <div class="carousel-cell"><img src="Images/bg34.jpg"></div>
      <div class="carousel-cell"><img src="Images/NATURE1.jpeg"></div>
      <div class="carousel-cell"><img src="Images/SCENERIES(4a).jpg"></div>
      
    </div>
  </div>
</div>


<!--END- GREEN COMMUNE WITH NATURE-->
<!--FIND YOUR DREAM HOME PROPERTY FINDER-->
<section class="section1 minheight  text-center minheight bg-light">
  <div class="justify-content-center fortops">
    <h1 class="align-self-center reveal">Property Finder</h1>
    <p class="revealing">Find your Dream Home.</p>
    <?php
  include 'map-pfinder.php';
?>

  </div>
 

  <a href="PropertyFinder.php"><button class="custom-btn btn-4 revealing">View Properties</button></a>
</section>
<!--END--PROPERTY FINDER-->
<!--FEEDBACKS-->
<section class="section1 minheight  text-center minheight section3 align-content-center justify-content-center ">
  <div class="justify-content-center text-white reveal fortops">
    <h2 class="align-self-center">Checkout Amazing&nbsp;</h2>
    <h1 class="align-self-center">Feedbacks</h1>
  </div>
  <div class="expanding">
    <div class="feedback_carousels reveal  align-content-center justify-content-center" data-flickity='{ "autoPlay": true}'>
      <div class="feedback_container active feedback_carousel-cell d-flex justify-content-center">
        <div class="feedback_slide">
          <i class="bx bxs-user-circle"></i>
          <i class='bx bxs-quote-alt-right icon'></i>

          <div class="person d-block align-content-center justify-content-center">
            <div class="person_info">
              <h3>Irene Mariano</h3>
              <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
                <i class='bx bxr-star'></i>
              </div>
            </div>
          </div>
          <p class="reviews">Quiet, safe, relaxing, and cool weather. A private residential space and if you are looking for a retirement option, highly recommended.</p>
        </div>
      </div>
      <div class="feedback_container active feedback_carousel-cell d-flex justify-content-center">
        <div class="feedback_slide">
        <i class="bx bxs-user-circle"></i>
          <i class='bx bxs-quote-alt-right icon'></i>

          <div class="person d-block align-content-center justify-content-center">
            <div class="person_info">
              <h3>Cristy Barrion Razon</h3>
              <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
                <i class='bx bxr-star'></i>
              </div>
            </div>
          </div>
          <p class="reviews">This is a super gorgeous place..quite and serene..</p>
        </div>
      </div>
      <div class="feedback_container active feedback_carousel-cell d-flex justify-content-center">
        <div class="feedback_slide">
        <i class="bx bxs-user-circle"></i>
          <i class='bx bxs-quote-alt-right icon'></i>

          <div class="person d-block align-content-center justify-content-center">
            <div class="person_info">
              <h3>Miriam Cayetano</h3>
              <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
                <i class='bx bxr-star'></i>
              </div>
            </div>
          </div>
          <p class="reviews">Nice place, clean, secured, nature ambience, spacious, warm&hot water, shower areas, 3 separate pools, good for relaxation and unwind moods.. natures na natures,  there's spaces for any functions occasions,</p>
        </div>
      </div>
      <div class="feedback_container active feedback_carousel-cell d-flex justify-content-center">
        <div class="feedback_slide">
        <i class="bx bxs-user-circle"></i>
          <i class='bx bxs-quote-alt-right icon'></i>

          <div class="person d-block align-content-center justify-content-center">
            <div class="person_info">
              <h3>Gene Salo Fontanilla</h3>
              <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
                <i class='bx bxr-star'></i>
              </div>
            </div>
          </div>
          <p class="reviews">Secured and private. Nice nature ambience, 3 hot spring pools Multiple rooms, showers, toilets, karaoke, full size indoor basketball court.</p>
        </div>
      </div>
      <div class="feedback_container active feedback_carousel-cell d-flex justify-content-center">
        <div class="feedback_slide">
        <i class="bx bxs-user-circle"></i>
          <i class='bx bxs-quote-alt-right icon'></i>

          <div class="person d-block align-content-center justify-content-center">
            <div class="person_info">
              <h3>Jun  Pal-ing Tumulak</h3>
              <div class="stars">
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star'></i>
                <i class='bx bxs-star-half'></i>
                <i class='bx bxr-star'></i>
              </div>
            </div>
          </div>
          <p class="reviews">Perfect place for our Church Community Family Day acticity.. Terrific view and mountainous surroundings..</p>
        </div>
      </div>
    </div>
  </div>


</section>
<!--END--FEEDBACKS-->
<!-- GREEN CONTACT FORM-->
<div class="d-flex flex-wrap align-content-center section1 bg-light">
  <section class="col-md-6 align-content-center flex-wrap d-flex fortops">
    <div class="container-fluid text-white p-3">
      <div class="row justify-content-around text-md-start">
        <div class="section1">
          <h2>Got a question?</h2>
          <h1>Reaching us</h1>
          <h2>has never been easier</h2>
          <p>Send us a message and we'll get right back to you.<br> You can also reach us through:</p>
          <ul class="list-unstyled section1">
            <li class="">
              <i class='bx-fw bx bxl-facebook-square'></i>
              <a class="contacta">facebook.com/LagunaHillsSubdivision</a>
            </li>
            <li class="">
              <i class='bx-fw bx bxl-gmail'></i>
              <a class="contacta">lagunahillshoa@gmail.com</a>
            </li>
            <li class="">
              <i class=' bx-fw bx bxs-phone'></i>
              <a class="contacta">(049)539-2062</a>
            </li>
            <li class="">
              <i class=' bx-fw bx bxs-map'></i>
              <a class="contacta">159 Mutya St. Barangay Pansol 4027 Calamba, Laguna, Philippines</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <div class="col-md-6 section4 fortops">

  <form class="contactform align-content-center fortops needs-validation" id="cont">
  <div class="form-floating mb-5">
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
    <textarea class="form-control" id="Messages" placeholder="Your Message" style="height: 100px" name="Message" required></textarea>
    <label for="Messages">Message</label>
    <div class="invalid-tooltip text-white">
      Please enter your message.
    </div>
  </div>
  <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label text-white" for="invalidCheck">
      I agree to the collection and use of my personal information as described in the <a href="#" onclick="PrivacyModal()">Privacy Policy</a> for the purpose of processing my submission.
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>

  <div class="d-flex justify-content-center">
  <button class="btn-submit btn-submit-2" id="sends" onclick="send_contacts(); return false;">
<span class="btn-submit-3">
<p class='bx-fw bx bxs-send'></p>
</span>
<a class="text-white">Submit</a>
</button>

  </div>
</form>
  </div>
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
  <script src='https://npmcdn.com/flickity@2/dist/flickity.pkgd.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
