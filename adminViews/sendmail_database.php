<div class="container">

   <div class="container-form">

      <div class="row">
         <div class="custom-switch button_section d-flex flex-row-reverse">
            <div class="switch_label">
               <button class="btn btn-success" onclick="showAllSend()">Send to One</button>
            </div>
         </div>
         <div class=" mail-form">
            <h1>Notify All Homeowners</h1>
            <div class="listed-container">
               <div class="list-header">
                  <h3>Subject: Notification from Laguna Hills Philippines</h3>
                  <h4>List of Emails in Database</h4>
               </div>

               <div class="list-container ">
                  <?php
                  // require('../send_email/functions.php');
                  require('phpmailer/all_functions.php');
                  $conn = dbConnection();
                  $fetch_users_sql = "SELECT * FROM owner_accounts";
                  $fetch_result = mysqli_query($conn, $fetch_users_sql);
                  while ($user = mysqli_fetch_assoc($fetch_result)) { ?>
                     <div class="user-details-container">
                        <div class="username"><?php echo $user['owner_fname']; ?> <?php echo $user['owner_lname']; ?> - <?php echo $user['owner_email']; ?></div>
                        <!--<div class="userEmail"><?php echo $user['owner_email']; ?></div>-->
                     </div>
                  <?php } ?>
               </div>
            </div>

            <!-- message -->
            <form id="message-form">
               <div class="form-group" required>
                  <textarea cols="80" rows="10" class="form-control textarea" name="message" id="message" placeholder="Compose your message.." required></textarea>
                  <div class="modal-footer">
                        <button type="submit" class="btn btn-success  btn-block">Send Email</button>
                        <div class="info-msg"></div>
                    </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>

<script>
   $(function() {
      $("#message-form").submit(function(e) {
         e.preventDefault();
         var form = this;
         $(".info-msg").text('sending email...');

         $.ajax({
            url: '../adminViews/phpmailer/all_emailHandler.php',
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

   // $("#s1d").change(function() {
   //     if(!this.checked) {
   //         show_email_one();
   //     } else if(this.checked) {
   //         show_email_all();
   //     }
   // });
   // function show_email_one(){  
   //     $.ajax({
   //         url:"../sendmail_email.php",
   //         method:"post",
   //         data:{record:1},
   //         success:function(data){
   //             $('.container').html(data);
   //             // console.log(data);
   //         }
   //     });
   // }

   // function show_email_all(){  
   //     $.ajax({
   //         url:"sendmail_database.php",
   //         method:"post",
   //         data:{record:1},
   //         success:function(data){
   //             $('.container').html(data);
   //             console.log(data);
   //         }
   //     });
   // }

   function showAllSend(){  //sidebar
    $.ajax({
        url:"adminViews/act-sendToOne.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.all-send').html(data);
        }
    });
}
</script>