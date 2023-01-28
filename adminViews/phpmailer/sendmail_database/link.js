$("#s1d").change(function() {
    if(this.checked) {
        show_email_all();
    }
});
function show_email_all(){  
    $.ajax({
        url:"/sendmail_database.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.container').html(data);
            console.log(data);
        }
    });
}
