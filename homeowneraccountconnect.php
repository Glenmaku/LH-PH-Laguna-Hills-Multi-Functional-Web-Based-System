<!--JUST COPY THE CODE BETWEEN THE COMMENT AND PASTE IT TO THE HOMEOWNER BODY OR HEADER-->
<?php
session_start();
if (!empty($_SESSION['owner_I_D'])) {
    $username = $_SESSION['owner_username'];
    $ownerid = $_SESSION['owner_I_D'];
} else{
    header("location:index.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymosus">
    <title>ACCESS OWNER ACCOUNT</title>
</head>

<body>
    <!--///////////////////////////////////////FOR LOGIN PURPOSE////////////////////////////////////////////-->
    <?php
    if (isset($_GET['Welcome'])) {
        echo '<div>HOMEOWNER, You have successfully logged in!</div>';
        echo $_SESSION['owner_username'];
    }
    ?>
    <!--///////////////////////////////////////FOR LOGIN PURPOSE////////////////////////////////////////////-->
    <h1>Owner Account</h1>
    <div>
        <h3>SETTINGS</h3>

        <button onclick="get_user_info()" id="btn_setting_owner_acc" class="btn_setting_owner_acc" name="setting_button">SETTING</button>


        <div class="modal fade" id="settingOwnerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable " role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Personal Information</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        </button>
                    </div>
                    <div class="modal-body">
                        <div id="message-updateownerinfo"></div>
                        <form>
                            <input  name="owner_username" id="owner_username" 
                            value="<?php echo $username ?>" readonly >

                            <input name="ownerview_id" id="ownerview_id" value="<?php echo $ownerid?>" readonly>

                            <div class="form-group">
                                <label for="">First Name</label>
                                <input type="text" name="owner_fname" id="owner_fname" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Last Name</label>
                                <input type="text" name="owner_lname" id="owner_lname" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="owner_gender">Gender</label><br>
                                <select name="owner_gender" id="owner_gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Others">Others</option>
                            </select>
                            </div>
                            <div class="form-group">
                                <label for="birthdate">Birthdate</label><br>
                                <input type="date" id="owner_birthdate" name="owner_birthdate">
                            </div><br>
                            <h5>Contact Details</h5>
                            <div class="form-group">
                                <label for="owner_email">Email Address</label>
                                <input type="text" name="owner_email" id="owner_email" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Cellphone Number</label>
                                <input type="number" name="owner_cpnum" id="owner_cpnum" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Telephone Number</label>
                                <input type="number" name="owner_telnum" id="owner_telnum" class="form-control" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="">Home Address</label>
                                <textarea name="owner_add" id="owner_add" class="form-control" placeholder=""></textarea>
                            </div>
                            <div>
                                <h3>Change Password</h3>
                                <label>Enter old password</label>
                                <input type="password" name="owner_pass" id="owner_pass" class="form-control" placeholder="">

                            </div>
                    </div>

                    <div class="mo dal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="btn_close">Close</button>
                        <button type="button" class="btn btn-primary" id="btn_updateuserinfo" name="btn_updateuserinfo" onclick="updateuserinfo()">Save Data</button>
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
<a href="includes/Act-logout.php">Logout</a>


    </div>
    <!--BOOTSTRAP SCRIPTS FOR MODALS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


    <!--ETO JQUERY BAKA MERON NA U NETO-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>

</html>

<script>
    $(document).ready(function() {
        //get_user_info();
    });
</script>
<script>
//SCRIPTS FOR UPDATING ACCOUNT BUTTONS
function get_user_info() { // to show the current data
        // $('#owner_username').val(ownerusername);
        //$('#ownerview_id').val(ownerid);
        var ownerusername = $('#owner_username').val();
        //var ownerid = $('#ownerview_id').val();
        
       $.post("includes/Act-OwnerInfo.php", {ownerusername :ownerusername }, function(data, status) {
           var owner = JSON.parse(data);

           $('#owner_fname').val(owner.owner_fname);
           $('#owner_lname').val(owner.owner_lname);
            $('#owner_gender').val(owner.owner_gender);
           $('#owner_birthdate').val(owner.owner_birthdate);
          
           $('#owner_email').val(owner.owner_email);
           $('#owner_cpnum').val(owner.owner_mobile);
           $('#owner_telnum').val(owner.owner_telephone);
           $('#owner_add').val(owner.owner_address);
        });
        $('#settingOwnerModal').modal("show");
    }

    function updateuserinfo() { // updating the data
        var ownerview_id     = $('#ownerview_id').val();
        var owner_username   = $('#owner_username').val();
        var owner_fname      = $('#owner_fname').val();
        var owner_lname      = $('#owner_lname').val();
        var owner_gender     = $('#owner_gender').val();

        var owner_birthdate  = $('#owner_birthdate').val();
        var owner_email      = $('#owner_email').val();
        var owner_cpnum      = $('#owner_cpnum').val();
        var owner_telnum     = $('#owner_telnum').val();
        var owner_add        = $('#owner_add').val();
       
            $.post('includes/Act-OwnerInfo.php', {
            
            ownerview_id     : ownerview_id,
            owner_username   : owner_username,
            owner_fname      : owner_fname,
            owner_lname      : owner_lname,
            owner_gender     : owner_gender,
            owner_birthdate  : owner_birthdate,
            owner_email      : owner_email,
            owner_cpnum      : owner_cpnum,
            owner_telnum     : owner_telnum,
            owner_add        : owner_add
           
            },
            function(data, status) {
                $('#settingOwnerModal').modal('show');
                $('#message-updateownerinfo').html(data);
            });
        }
</script><?php
    // logout code goes here
 
    //unset($_SESSION);
    ?>