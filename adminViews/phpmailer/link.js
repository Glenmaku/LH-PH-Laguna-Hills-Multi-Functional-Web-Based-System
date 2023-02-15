$("#s1d").change(function() {
    if(this.checked) {
        show_email_all();
    } else if(!this.checked) {
        show_email_one();
    }
});
function show_email_all(){  
    $.ajax({
        url:"../adminViews/sendmail_database.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.container').html(data);
            console.log(data);
        }
    });
}

function show_email_one(){  
    $.ajax({
        url:"../adminViews/sendmail_email.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.container').html(data);
            // console.log(data);
        }
    });
}
