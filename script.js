$("#navbarNav").on('show.bs.collapse', function() {
    $('a.nav-link').click(function() {
        $("#navbarNav").collapse('hide');
    });
});


$(document).ready(function() {
    $("#Loffgin").modal("show");
});
$(document).ready(function(){
    $("#SubmitModal").modal("show");
})

