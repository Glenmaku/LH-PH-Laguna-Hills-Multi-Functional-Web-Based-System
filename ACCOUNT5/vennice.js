$(document).ready(function(){
    Insert_addowner_record();
    get_Username();
    Assign_Lots();
    get_Usernames();

    delete_owner_record();


    
})

//GET USERNAME FOR INSERTING OWNER ACCOUNT
function get_Username(){
    $(document).on('click','#usernamegenerate',function(){
        $.ajax({
            method:"post",
            url: "includes/username.php", 
            success: function(data){
                $("#owner_username").val(data);
            }
        });
    });
}

//INSERTING OWNER ACCOUNT
function Insert_addowner_record(){
     $(document).on('click','#addowner_button', function(){
        var OFname = $('#owner_fname').val();
        var OLname = $('#owner_lname').val();
        var OEmail = $('#owner_email').val();
        var OUsername = $('#owner_username').val();
        var OPassword = $('#owner_password').val();

            $.ajax({
                url:'includes/Act-AddOwner.php',
                method:'post',
                data:{ OwnerFname:OFname,OwnerLname:OLname,OwnerEmail:OEmail,OwnerUsername:OUsername,OwnerPassword:OPassword},
                success: function(data){
                    $('#message-addowner').html(data);
                    $('#owneraddaccountmodal').modal('show');
                    $('reset').trigger('click');
                    $('#usernamegenerate').trigger('click');

                }   
            }) 
     })
     $(document).on('click','#btn_close',function(){
        $('form').trigger('reset');
        $('#message-addowner').html('');
     })
     $(document).on('click','#reset',function(){
        $('#usernamegenerate').trigger('click');
     })
     $(document).on('click','#btn_add_owner_acc',function(){
        $('#usernamegenerate').trigger('click');
     })
     
}
//GETTING USERNAMES FOR ASSIGNING LOTS
function get_Usernames(){
    $('.btn_assign_owner_lot').on('click', function() {
        $.ajax({
            method:"post",
            url: "includes/username-assign.php", 
            success: function(data){
                $("#ownerusername").html(data);
            }
        });
    });
}
//ASSIGNING LOTS TO ACCOUNTS
function Assign_Lots(){
    $(document).on('click','#assignlot_button', function(){
       var LUsername = $('#ownerusername').val();
       var LProperty = $('#property').val();
       //var LOwnership = $('#ownership').val();
       var OwnerType =[];


       $('.ownership').each(function(){
        if($(this).is(":checked"))
        {
            OwnerType.push($(this).val());
        }
        });

         OwnerType=OwnerType.toString();

           $.ajax({
               url:'includes/Act-AssignLot.php',
               method:'post',
               data:{ LotUsername:LUsername,
                   LotProperty:LProperty,
                   OwnerType:OwnerType,
                    },
               success: function(data){
                   $('#message-assignlot').html(data);
                   $('#assignlotmodal').modal('show');
                   $('reset').trigger('click');
                   $('#usernameupdate').trigger('click');

               }
               
           })
       
    })

    $(document).on('click','#btn_close',function(){
       $('form').trigger('reset');
       $('#message-assignlot').html('');
    })
}
//display the table 
//function display_owner_table_record(){
   // $.ajax({
      //  url:'includes/Act-display-owner-records.php',
        //method:'post',
      //  success: function(data){
           // data=$.parseJSON(data);
          //  if(data.status=='success'){
             //   $('#owneraccounttable').html(data.html);
          //  }
     //   }

   // })
//}
//view owner information



//AQUIRE OWNER RECORDS FIRST BEFORE EDIT
//function get_owner_record()
//{
    //$(document).on('click','#btn_edit_owner_acc',function()
   // {
       // var Update_Owner_ID = $(this).attr('data-id1');
    //   $.ajax(
         // {
              //  url: 'includes/Act-GetOwnerRecord.php',
               // method: 'post',
               // data:{UpdateOwner:Update_Owner_ID},
               // dataType: 'JSON',
               // success: function(data)
              //  {
                   // console.log(data[0]);
                 // $('#ownerupdate_id').val(data[0]);
                  //$('#up_owner_fname').val(data[2]);
                  //$('#up_owner_lname').val(data[3]);  
                 // $('#up_owner_username').val(data[1]);
                  //$('#up_owner_email').val(data[4]);
                 //$('#updateOwnerModal').modal('show');
              // }   
          // })
 //   })
//}
//edit owner records

//delete owner records
function delete_owner_record(){
    $(document).on('click','#btn_delete_owner_acc',function(){
        
        var Delete_Owner_ID = $(this).attr('data-id2');

        $(document).on('click','#btn_deleteowneracc',function(){
            $.ajax({
                url:'includes/Act-DeleteOwner.php',
                method:'post',
                data:{DeleteOwner:Delete_Owner_ID},
                success:function(data){
                    $('#deleteOwnerModal').modal('hide');
                    $('#delete-message').html(data);//.hide(5000);
                    display_owner_table_record();
                }
            })
        })
    })
}