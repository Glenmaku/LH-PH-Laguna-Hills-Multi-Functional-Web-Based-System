<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Send Mail From Localhost</title>
   <!-- bootstrap cdn link -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>

   <link rel="stylesheet" href="/adminViews/phpmailer/mailstyle.css">
</head>

<body>

   <div class="container">
      <div class="container-form">
         <div class="row">
           <div class="custom-switch button_section d-flex flex-row-reverse">
            <div class="switch_label">
               <div class="text_switch">Send to All</div>
               <input id="s1d" type="checkbox" class="switch">
               <label for="s1d">Switch</label>
            </div>
               

            </div>
            <div class="col-lg mail-form">


               <h1 class="text-center">
                  Send Email
               </h1>

               <!-- message -->
               <form id="message-form">
                  <div class="form-group">
                     <!-- <label for="exampleFormControlInput1">Email address</label> -->
                     <span>Email address</span>
                     <input type="email" class="form-control emailadd_send" id="send_email" placeholder="name@example.com" required>
                  </div>

                  <div class="form-group">
                     <!-- <label for="subject">Subject</label> -->
                     <span>Subject</span>
                     <input type="subject" class="form-control emailadd_send" id="send_subject" placeholder="Subject" required>
                  </div>

                  <div class="info-msg"> <br></div>
                  <div class="form-group" id="txtareabox" >
                     <textarea cols="80" rows="10" class="form-control textarea " name="message" id="message" placeholder="Compose your message.."required></textarea>
                  </div>
                  <div class="btn-container">
                     <button class="btn btn-success btn-lg btn-block">Send Email</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>

   <script src="/adminViews/phpmailer/sendmail_database/link.js"></script>
   <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
   <script>
      $(function() {
         var messagevar = $("#message");
         var emailvar = $("#send_email");
         var subjectvar = $("#send_subject");
         $("#message-form").submit(function(e) {
            e.preventDefault();
            var form = this;
            $(".info-msg").text('sending email...');

            $.ajax({
               url: './adminViews/phpmailer/emailHandler.php',

               method: 'POST',
               data: {
                  message: messagevar.val(),
                  email: emailvar.val(),
                  subject: subjectvar.val()
               },
            }).done(function(response) {
               $(".info-msg").html(response);
               // $(".info-msg").html(response);
               // $(".info-msg").html("<button class='message-sent-btn'>Message Sent</button>");
               setTimeout(function() {
                  $(".info-msg").hide();
               }, 5000);
            })
         })
      })

      $("#s1d").change(function() {
    if(this.checked) {
        show_email_all();
    }
});
function show_email_all(){  
    $.ajax({
        url:"./adminViews/phpmailer/sendmail_database/sendmail_database.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.container').html(data);
            console.log(data);
        }
    });
}

   </script>
</body>

</html>