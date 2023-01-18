$(document).ready(function(){
    $(".edit-info").on("click", function(){
      $("#editModal").modal("show");
      $.ajax({
        type: "GET",
        url: "adminViews/includes/mapdata.php",
        success: function(data){
          // Populate the form fields with the returned data
          $("#editForm").html(data);
        }
      });
    });
  
    $("#saveChanges").on("click", function(){
      $.ajax({
        type: "POST",
        url: "update_information.php",
        data: $("#editForm").serialize(),
        success: function(data){
          // Handle the response from the server
          $("#editModal").modal("hide");
        }
      });
    });
  });