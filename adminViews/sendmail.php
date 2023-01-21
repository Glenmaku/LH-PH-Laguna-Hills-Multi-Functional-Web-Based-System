<?php ?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <title>Send Mail From Localhost</title>
   <link rel="stylesheet" href="../assets/css/style.css">
   <!-- bootstrap cdn link -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.3/js/bootstrap.min.js"></script>

</head>

<body>



   <div class="container">
      <div class="container-form">
         <div class="row">
            <div class="col-lg mail-form">
               <h1 class="text-center">
                  Send Message
               </h1>

               <p class="text-center">
                  Send mail to anyone
               </p>

               <!-- starting php code -->
               <?php
               //first we leave this input field blank
               $recipient = "";
               //if user click the send button
               if (isset($_POST['send'])) {
                  //access user entered data
                  $recipient = $_POST['email'];
                  $subject = $_POST['subject'];
                  $message = $_POST['message'];
                  $sender = "From: guyrx90@gmail.com";

                  //if user leave empty field among one of them
                  if (empty($recipient) || empty($subject) || empty($message)) {
               ?>
                     <!-- display an alert message if one of them field is empty -->
                     <div class="alert alert-danger text-center">
                        <?php echo "All inputs are required!" ?>
                     </div>
                     <?php
                  } else {
                     // PHP function to send mail 
                     if (mail($recipient, $subject, $message, $sender)) {
                     ?>
                        <div class="alert alert-success text-center" role="alert">
                           <?php echo "Your mail successfully sent to $recipient" ?>
                           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                              <span class="close">&times;</span>
                           </button>
                        </div>
                        <!-- display a success message if once mail sent sucessfully -->

                     <?php
                        $recipient = "";
                     } else {
                     ?>
                        <!-- display an alert message if somehow mail can't be sent -->
                        <div class="alert alert-danger text-center">
                           <?php echo "Failed while sending your mail!" ?>
                        </div>
               <?php
                     } // else closing tag
                  } // else closing tag
               } // isset closing tag
               ?> <!-- end of php code -->


               <form id="myform" action="../adminViews/sendmail.php" method="POST">
                  <div class="form-group">
                     <input class="form-control" name="email" type="email" placeholder="Recipients" required value="<?php echo $recipient ?>">
                  </div>
                  <div class="form-group">
                     <input class="form-control" name="subject" type="text" placeholder="Subject" required>
                  </div>
                  <div class="form-group" required>
                     <!-- change this tag name into textarea to show textarea field. Due to more textarea I got an error, so I change the name of this field -->
                     <textarea cols="80" rows="10" class="form-control textarea" name="message" placeholder="Compose your message.."></textarea>
                  </div>
                  <div class="form-group">
                     <input class="form-control button btn-success" type="submit" name="send" value="Send" placeholder="Subject">
                  </div>
               </form>
            </div>


         </div>
      </div>
   </div>


</body>

</html>