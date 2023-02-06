<div>
    <div class="custom-switch button_section d-flex flex-row-reverse">
        <div class="switch_label">
            <button class="btn btn-success" onclick="showAllSend()">Send to All</button>
        </div>
    </div>
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

        <div class="form-group" id="txtareabox">
            <textarea cols="80" rows="10" class="form-control textarea " name="message" id="message" placeholder="Compose your message.." required></textarea>
        </div>
    </form>
</div>

<script>
        function showAllSend(){  //sidebar
    $.ajax({
        url:"adminViews/sendmail_database.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.all-send').html(data);
        }
    });
}
</script>