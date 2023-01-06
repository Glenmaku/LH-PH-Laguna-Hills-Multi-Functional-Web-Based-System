$(document).ready(function() {
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var table = $('#input_table'); //Table selector
    var fieldHTML = '<tr><td><input type="text" name="field1" /></td><td><input type="text" name="field2" /></td><td><input type="text" name="field3" /></td><td><input type="text" name="field4" /></td><td><a href="javascript:void(0);" class="remove_button">Remove</a></td></tr>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(table).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(table).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parents('tr').remove(); //Remove field html
        x--; //Decrement field counter
    });
  });

 
$("#addRow").click(function() {
  // Get the table object
  var table = $("#input_table"
  // Create a new row
  var row = $("<tr>"
  // Add 4 cells to the new row
  row.append($("<td>").html('<input type="text" name="field1[]">'));
  row.append($("<td>").html('<input type="text" name="field2[]">'));
  row.append($("<td>").html('<input type="text" name="field3[]">'));
  row.append($("<td>").html('<input type="text" name="field4[]">')
  // Add a delete button to the new row
  row.append(
    $("<td>").html(
      '<button class="deleteButton">Delete</button>'
    )
  
  // Add the new row to the table
  table.append(row);
}
// Delete a row when the delete button is clicked
$(document).on("click", ".deleteButton", function() {
  $(this)
    .closest("tr")
    .remove();
});
