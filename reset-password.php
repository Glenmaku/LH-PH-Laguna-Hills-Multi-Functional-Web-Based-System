<?php
session_start();
if((isset($_SESSION['email']) && $_SESSION['email'])|| (isset($_SESSION['username']) && $_SESSION['username'])!= false){
  $email = $_SESSION['email'];
  $username = $_SESSION['username'];
}
else{
  header('Location: index.php');
  exit();}
  
require_once('header.php');
require_once('includes/connection.php');
?>

<section class="reset-pass justify-content-center d-flex align-items-center">

  <div class=" reset-container  d-flex flex-column " id="reset-container">
   
    <h3 class="text-center mt-5 mb-2">Create New Password</h3>



    <div id="reset-error" class="error-div text-center text-white success"  > <?php
    if (isset($_GET['reset'])) {
        if ($_SESSION['email']) {
         //   echo $_SESSION['email'];
            echo 'You can now reset your password. Please enter a strong new password.';
            
        } else {
        }
    } else {
        header("location:index.php");
        exit();
    }
    ?></div>
    <form >
    <input class="form-control" id="hide-email" value="<?php echo $_SESSION['email'];?>"hidden>
    <input class="form-control" id="hide-username" value="<?php echo $_SESSION['username'];?>"hidden>
      <div class="group-reset">
      <label for="New-Pass" class="mb-2 align-content-center text-center">New Password</label>
      <input class="form-control mb-3" id="New-Pass" type="password">
      </div>
      <div class="group-reset">
      <label for="Confirm-Pass" class="mb-2 text-center">Confirm Password</label>
      <input class="form-control mb-2" id="Confirm-Pass" type="password">
      </div>

      <div class=" login_button_area d-flex justify-content-center">
      <button class="btn-submit4 btn-submit-5" name="updatepass_button" id="updatepass_button" type="button" onclick="update_pass()">
        <span class="btn-submit-6 "><p class='bx-fw bx bxs-check-shield'></p></span>
        <a class="text-white">Update Password</a>
      </button>
      </div>
    </form>
  </div>
  
</section>

<script>
function update_pass(){

    var newPassword = $("#New-Pass").val();
    var confirmPassword = $("#Confirm-Pass").val();
    var Email = $("#hide-email").val();
      $.ajax({
        type: "POST",
        url: "includes/Act-reset-password.php",
        data: { newPassword: newPassword, confirmPassword:confirmPassword,Email:Email},
        success: function(data) {
          //console.log(data);
       $('#reset-error').html(data); 
       var resetError = document.getElementById("reset-error");
            if (data === "Both fields are required. Please try again."||"Passwords do not match. Please try again."||"An error occurred. Please try again later.") {
               resetError.classList.add("error");
        }
       if(data == "Password updated successfully"){
            $("#reset-container").replaceWith(' <div class=" reset-containers d-flex flex-column text-center justify-content-center p-4"  id="success-reset" >'+'<p class=" bx bxs-check-circle"></p>'+'<h3>You successfully updated your Password.</h3>' +'<p>You can now login your account. </p>'+'<button class="btn-submit4 btn-submit-5" name="updatepass_button" id="updatepass_button" type="submit" onclick="login_function()">'+'<span class="btn-submit-6 successive">'+'<p class="bx-fw bx bx-log-in"></p>'+'</span>'+'<a class="text-white">Login</a>'+' </button>'+'</div>');
           
          }
        }
      });
  }
</script>

<!-- SCRIPTS NAVBAR -->
<script>
  var nav = document.querySelector('nav');
  window.addEventListener('scroll', function() {
    if (window.pageYOffset > 30) {
      nav.classList.add('responsivenavi')
    } else {
      nav.classList.remove('responsivenavi');
    }
  });
</script>
<script>
  var nava = document.querySelectorAll('.nas');
  for (let i = 0; i < nava.length; i++)
    window.addEventListener('scroll', function() {
      if (window.pageYOffset > 30) {
        nava[i].classList.add('mas')
      } else {
        nava[i].classList.remove('mas');
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
      } else {
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
      } else {
        revealss[i].classList.remove('active');
      }
    }
  }
</script>

<!-- SCRIPTS -->
<script type="text/javascript" src="Bootstrap/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
<script type="text/javascript" src="script.js"></script>
<script src="./script.js"></script>
<script src='https://npmcdn.com/flickity@2/dist/flickity.pkgd.js'></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- partial -->

</body>
</html>
