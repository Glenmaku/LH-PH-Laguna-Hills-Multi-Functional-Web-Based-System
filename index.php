<?php require_once('header.php'); ?>

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
      <img src="Images/amenities-bg.jpg" class="ImageCarouselMain">
    </div>
    <!--Carousel Content 3 -->
    <div class="carousel-item">
      <img src="Images/amenities-bg2.jpg" class="ImageCarouselMain">
    </div>
  </div>
  <div class="carousel-caption d-block">
    <h3>The</h3>
    <h1 class="TextFont">Laguna Hills Subdivision</h1>
    <h5>#AboveEverythingElse</h5>
    <div>
      <button type="button" class="custom-btn1 btn-1 "><a href="AboutUs.php" class="nav-link">Read More</a></button>
      <button class="custom-btn1 btn-1 "><a href="ContactUs.php" class="nav-link ">Contact Us</a></button>
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
    <a href="AboutUs.php"><button class="custom-btn btn-4 revealing">Read More</button></a>
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
          <button onmouseover='imgChange("images/upperame.png")' class="Ame1 d-inline">
            <a href="Amenities.php#clubhouse">Clubhouse</a>
          </button>
        </div>
        <div class="Ame">
          <button onmouseover='imgChange("images/bg2.jpg")' class=" Ame2 d-inline">
            <a href="Amenities.php#swimmingpool">Swimming Pool</a>
          </button>
        </div>
        <div class="Ame">
          <button onmouseover='imgChange("images/bg1.jpg")' class="Ame3 d-inline">
            <a href="Amenities.php#basketballcourt">Covered Court</a>
          </button>
        </div>
        <div class="Ame">
          <button onmouseover='imgChange("images/bgame.png")' class="Ame4 d-inline">
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
      <div class="carousel-cell"><img src="Images/amenities-bg.jpg"></div>
      <div class="carousel-cell"><img src="Images/amenities-bg.jpg"></div>
      <div class="carousel-cell"><img src="Images/amenities-bg.jpg"></div>
      <div class="carousel-cell"><img src="Images/amenities-bg.jpg"></div>
      <div class="carousel-cell"><img src="Images/amenities-bg.jpg"></div>
    </div>
  </div>
</div>


<!--END- GREEN COMMUNE WITH NATURE-->
<!--FIND YOUR DREAM HOME PROPERTY FINDER-->
<section class="section1 minheight  text-center minheight bg-light">
  <div class="justify-content-center fortops">
    <h1 class="align-self-center">Property Finder</h1>
    <p class="revealing">Find your Dream Home.</p>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

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

    <form class="contactform align-content-center fortops needs-validation" method="POST" id="form" novalidate>
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
        <textarea class="form-control" id="floatingTextarea2" placeholder="Your Message" style="height: 100px" name="Message" required></textarea>
        <label for="floatingTextarea2">Message</label>
        <div class="invalid-tooltip text-white">
          Please enter your message.
        </div>
      </div>

      <div class="d-flex justify-content-center">
        <button class="btn-submit btn-submit-2" name="Submit" type="submit">
          <div class="btn-submit-3">
            <p class='bx-fw bx bxs-send'></p>
          </div>
          <a class="text-white">Submit</a>
        </button>
      </div>
    </form>
  </div>
</div>

<?php
require_once('includes/connection.php');

if (isset($_POST['Submit'])) {

  $Full_Name = mysqli_real_escape_string($con, $_POST['Full_Name']);
  $Email_Address = mysqli_real_escape_string($con, $_POST['Email_Address']);
  $Cellphone_Number = mysqli_real_escape_string($con, $_POST['Cellphone_Number']);
  $Subject = mysqli_real_escape_string($con, $_POST['Subject']);
  $Message = mysqli_real_escape_string($con, $_POST['Message']);

  $query = "insert into contact_us (Full_Name, Email_Address, Cellphone_Number, Subject, Message) values ('$Full_Name','$Email_Address','$Cellphone_Number', '$Subject', '$Message')";
  $result = mysqli_query($con, $query);
  if ($query) {
?>

    <script>
      swal({
        title: "Thank you for reaching out!",
        text: "We will respond to you as soon as possible.",
        icon: "success",
      });
    </script>
  
<?php
  }
}
?>
<!-- END GREEN CONTACT FORM-->
<?php require_once('footer.php'); ?>