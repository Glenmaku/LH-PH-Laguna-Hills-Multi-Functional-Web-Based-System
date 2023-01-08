<footer>
    <!--FOOTER START-->
    <div class="container-fluid text-white p-3">
      <div class="row justify-content-around text-center text-md-start">
        <div class="col-md-3 text-center ">
          <img src="Images/LHPHlogo.png" class="Footerlogo">
          <br>
          <h6>#Above Everything Else</h6>
          <!--Icons here like facebook eme-->
        </div>

        <!--LINKS-->
        <div class="col-md-2 ">
          <ul class="list-unstyled">
            <li class="fw-bold my-2">
              <h6>Links</h6>
            </li>
            <li class="fortext">
              <a href="index.php">Home</a>
            </li>
            <li class="fortext">
              <a href="AboutUs.php">About Us</a>
            </li>
            <li class="fortext">
              <a href="Amenities.php">Amenities</a>
            </li>
            <li class="fortext">
              <a href="PropertyFinder.php">Property Finder</a>
            </li>
            <li class="fortext">
              <a href="ContactUs.php">Contact Us</a>
            </li>
          </ul>

        </div>
        <!--CONTACT US -->
        <div class="col-md-3 ">
          <ul class="list-unstyled">
            <li class="fw-bold my-2">
              <h6>Contact Us</h6>
            </li>
            <li class="fortext">
              <i class='bx-fw bx bxl-facebook-square'></i>
              <a>facebook.com/LagunaHillsSubdivision</a>
            </li>
            <li class="fortext">
              <i class='bx-fw bx bxl-gmail'></i>
              <a>lagunahillshoa@gmail.com</a>
            </li>
            <li class="fortext">
              <i class=' bx-fw bx bxs-phone'></i>
              <a>(049)539-2062</a>
            </li>
            <li class="fortext">
              <i class=' bx-fw bx bxs-map'></i>
              <a>159 Mutya St. Barangay Pansol 4027 Calamba, Laguna, Philippines</a>
            </li>

          </ul>


        </div>
        <div class="col-md-3 ">
          <!--GOOGLE MAP TO LAGNA HILLS-->
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3868.328012462327!2d121.16870172420866!3d14.175556458326778!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33bd61568add84af%3A0xe018debc0f590b0b!2sLaguna%20Hills%20Subdivision!5e0!3m2!1sen!2sph!4v1671894322914!5m2!1sen!2sph"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

  </footer>
  <div class=" lastfooter container-fluid justify-content-around text-center">
    <img src="Images/logo-icon.png" class="Footerlogo1 ">
    <p class="d-inline">Copyright &#169; 2022 | The Laguna Hills Subdivision | All Rights Reserved.</p>
  </div>
  <!--FOOTER END-->

  <!-- SCRIPTS NAVBAR -->
  <script>
    var nav = document.querySelector('nav');
    window.addEventListener('scroll', function () {
      if (window.pageYOffset > 30) {
        nav.classList.add('responsivenavi')
      } else {
        nav.classList.remove('responsivenavi');
      }
    });
  </script>
   <script>
    var nava = document.querySelectorAll('.nas');
    for(let i = 0; i < nava.length; i++)
    window.addEventListener('scroll', function () {
      if (window.pageYOffset > 30) {
        nava[i].classList.add('mas')
      } else {
        nava[i].classList.remove('mas');
      }
    });
  </script>
   <script>
    var navb = document.querySelector('navbar-toggler-icon');
    window.addEventListener('scroll', function () {
      if (window.pageYOffset > 30) {
        navb.classList.add('changetoggle')
      } else {
        navb.classList.remove('changetoggle');
      }
    });
  </script>
  <!-- END-SCRIPTS NAVBAR -->
  <!--SCRIPT HIGHLIGHTS-->
  <script>
    window.addEventListener('scroll', reveal);
    function reveal() {
      var reveals = document.querySelectorAll('.reveal');
      for (var i = 0; i < reveals.length; i++) {

        var windowheight = window.innerHeight;
        var revealtop = reveals[i].getBoundingClientRect().top;
        var revealpoint = 150;

        if (revealtop < windowheight - revealpoint) {
          reveals[i].classList.add('active');
        }
        else {
          reveals[i].classList.remove('active');
        }
      }
    }
  </script>
  <!--END- SCRIPT HIGHLIGHTS-->
  <!--SCROLL APPEAR-->
  <script>
    window.addEventListener('scroll', revealing);
    function revealing() {
      var revealss = document.querySelectorAll('.revealing');
      for (var i = 0; i < revealss.length; i++) {

        var windowheights = window.innerHeight;
        var revealtops = revealss[i].getBoundingClientRect().top;
        var revealpoints = 100;

        if (revealtops < windowheights - revealpoints) {
          revealss[i].classList.add('active');
        }
        else {
          revealss[i].classList.remove('active');
        }
      }
    }
  </script>

  <!--END_SCROLL APPEAR-->
  <!-- SCRIPTS AMENITIES SLIDE -->

  <!-- END- SCRIPTS AMENITIES SLIDE -->

  <!-- SCRIPTS -->
  <script type="text/javascript" src="Bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  <script type="text/javascript" src="script.js"></script>
  <script  src="./script.js"></script>
  <script src='https://npmcdn.com/flickity@2/dist/flickity.pkgd.js'></script>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- partial -->

</body>
</html>
<script>
  let imgChange = (e) => {
    document.querySelector('.Amenities_BG').style.backgroundImage = `url(${e})`;
  }
</script>

<script>// Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
        'use strict'
      
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        const forms = document.querySelectorAll('.needs-validation')
      
        // Loop over them and prevent submission
        Array.from(forms).forEach(form => {
          form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
      
            form.classList.add('was-validated')
          }, false)
        })
      })()</script>
      