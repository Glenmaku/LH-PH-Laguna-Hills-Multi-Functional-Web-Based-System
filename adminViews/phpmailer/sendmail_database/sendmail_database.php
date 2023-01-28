<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Send Mail From Localhost</title>
   <!-- bootstrap cdn link -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>

   <!-- <link rel="stylesheet" href="../sendmail_database/mailstyle.css"> -->
   <link rel="stylesheet" href="../sendmail_database/mailstyle.css">
   <link rel="stylesheet" href="../mailstyle.css">
</head>

<body>

   <div class="container">
      <div class="switch_label">
         <div class="text_switch">Send to All</div>
         <input id="s1d" type="checkbox" class="switch">
         <label for="s1d">Switch</label>
      </div>
      <div class="container-form">

         <div class="row">

            <div class="col-lg mail-form">
               <h1 class="text-center">
                  Notify All Homeowners
               </h1>

               <div class="listed-container">

                  <div class="list-header">
                     <h3>Subject: Notification from Laguna Hills Philippines</h3>
                     <h4>List of Emails in Database</h4>
                  </div>

                  <div class="list-container overflow-auto">
                     <?php
                     // require('../send_email/functions.php');
                     require('../sendmail_database/functions.php');
                     $conn = dbConnection();
                     $fetch_users_sql = "SELECT * FROM dummyowner_accounts";
                     $fetch_result = mysqli_query($conn, $fetch_users_sql);
                     while ($user = mysqli_fetch_assoc($fetch_result)) { ?>
                        <div class="user-details-container">
                           <div class="username"><?php echo $user['owner_username']; ?></div>
                           <div class="userEmail"><?php echo $user['owner_email']; ?></div>
                        </div>
                     <?php } ?>
                  </div>
               </div>

               <!-- message -->
               <form id="message-form">
                  <div class="info-msg"> <br></div>
                  <div class="form-group" required>
                     <textarea cols="80" rows="10" class="form-control textarea" name="message" id="message" placeholder="Compose your message.."></textarea>
                  </div>
                  <div class="btn-container">
                     <button class="btn btn-success btn-lg btn-block">Send Email</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>

   <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
   <script>
      $(function() {
         $("#message-form").submit(function(e) {
            e.preventDefault();
            var form = this;
            $(".info-msg").text('sending email...');

            $.ajax({
               url: '../sendmail_database/emailHandler.php',
               data: $(form).serialize(),
               method: 'POST'
            }).done(function(response) {
               $(".info-msg").html("<p>Message Sent</p>");
               //  $(".info-msg").html(response);
               setTimeout(function() {
                  $(".info-msg").hide();
               }, 4000);
            })
         })
      })
   </script>
</body>

</html>