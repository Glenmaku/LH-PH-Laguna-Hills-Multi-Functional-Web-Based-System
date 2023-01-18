<?php
require_once('includes/connection.php');

//autogenerate for username
$query = "SELECT * FROM owner_accounts order by owner_id desc limit 1";//change to username if mali
$result=mysqli_query($con,$query);
$row = mysqli_fetch_array($result);
$lastid=$row['owner_id'];

$YearJoined= date("Y");
$IDnum=sprintf("%04s",($lastid+1));

$OwnerUsername="LHS".$YearJoined."-".$IDnum;
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--CSS ni ahanz -->
    <!--Script ni ahanz-->
    <title>Add Owner</title>

</head>

<body>
    <a href="RecordAdminAccount.php">Admin Account Records</a>
    <a href="RecordOwnerAccount.php">OWNER Account Records</a><!--nilipat ko lang muna sa taas pero di tlga to kasali para lang maaccess ko agad ehe-->
    <h1>Owner Account</h1>
    <div> 
                <!--ETO UNG SA VALIDATION-->
                <!--CLASS-->
                <!--ALERTRED = RED-BG WHITE-TEXT-CENTER-->
                <!--ALERTGREEN = GREEN-BG WHITE-TEXT-CENTER-->
                <?php
                if (isset($_GET['empty'])) {
                    $Message = $_GET['empty'];
                    $Message = "All input fields are required.";
                ?>
                    <div class="alertred"><?php echo $Message ?></div>
                <?php
                }
                ?>

                <!--Invalid characters -->
                <?php
                if (isset($_GET['Invalid'])) {
                    $Message = $_GET['Invalid'];
                    $Message = "<b>Invalid name character.</b> Numbers and other special characters other than space and - is not allowed.";
                ?>
                    <div class="alertred"><?php echo $Message ?></div>
                <?php
                }
                ?>

                <!--Invalid Email-->
                <?php
                if (isset($_GET['VEmail'])) {
                    $Message = $_GET['VEmail'];
                    $Message = "Invalid email.";
                ?>
                    <div class="alertred"><?php echo $Message ?></div>
                <?php
                }
                ?>
                <!--Invalid UserName-->
                <?php
                if(isset($_GET['User']))
                {
                $Message=$_GET['User'];
                $Message="Username is already taken.";
                ?>      
                <div><?php echo $Message?></div>
                <?php
                }
                ?>  
                <!--emailtaken-->
                <?php
                if (isset($_GET['Email'])) {
                    $Message = $_GET['Email'];
                    $Message = "Email is already taken";
                ?>
                    <div class="alertred"><?php echo $Message ?></div>
                <?php
                }
                ?>
                <!--success-->
                <?php
                if (isset($_GET['success'])) {
                    $Message = $_GET['success'];
                    $Message = "User Successfully Added";
                ?>
                    <div class="alertgreen"><?php echo $Message ?></div>
                <?php
                }
                ?>

                <!--END OF VALIDATION-->
    <form method="POST" action="includes/Act-AddOwner.php"><!--container-->
        <div><!--FOR OWNER FIRSTNAME FIELD-->
            <label for="">First Name</label>
            <input name="owner_fname" id="owner_fname" placeholder="First Name">
        </div>
        <div><!--FOR OWNER LASTNAME FIELD-->
            <label for="">Last Name</label>
            <input name="owner_lname" id="owner_lname" placeholder="Last Name">
        </div>
        <div><!--FOR OWNER EMAIL FIELD-->
            <label for="">Email Address</label>
            <input type="email"name="owner_email" id="owner_email" placeholder="owner@email.com">
        </div>
        <div><!--FOR OWNER USERNAME FIELD-->
            <label for="">Username</label>
            <input name="owner_username" id="owner_username" value="<?php echo $OwnerUsername;?>" readonly >
        </div>

        <div><!--FOR OWNER PASSWORD FIELD-->
            <label for="">Password</label>
            <input  name="owner_password" id="owner_password" value="" placeholder="password">


            <button onclick=" getPassword() " id="passgenerate" name="passgenerate" type="button">Generate</button>

        </div>

        <div><!--with Icon bago mag word tapos color green mo this and red for reset-->
            <button type="submit" value="Submit" name="addowner_button">Add Account</button>
            <button type="reset" value="reset">Reset</button>
        </div>
    </form>

    <div><!--IHIWALAY NA DIV DITO UNG ASSIGN LOTS PAGKAADD NG ACCOUNT -->

    <h3>ASSIGN LOTS</h3>
<div>
    <!--success-->
    <?php
                if (isset($_GET['successassign'])) {
                    $Message = $_GET['successassign'];
                    $Message = "Successfully assigned property";
                ?>
                    <div class="alertgreen"><?php echo $Message ?></div>
                <?php
                }
                ?>
<div id="results" name="results"></div>
    <form method="POST" action="includes/Act-trial.php" id="forms"><!--container-->
        <div><!--FOR OWNER LAST USERNAME FIELD-->
            <label for="">Owner Username</label>
            <select name="ownerusername" id="ownerusername">
                <?php
                $sqli = "select * from owner_accounts order by owner_id desc";
                $result = mysqli_query($con,$sqli);
                while ($row=mysqli_fetch_array($result)){
                    echo '<option>'.$row['owner_username'].'</option>';
                }
                ?>
            </select>
        </div>
        <div><!--FOR OWNER lot_id FIELD-->
            <label for="">PROPERTY</label>
            <input list="blkandlots" name="property" id="property" placeholder="property">
        <datalist id="blkandlots">
          <option value="blk1lot1"></option>
          <option value="blk1lot2"></option>
          <option value="blk1lot3"></option>
          <option value="blk1lot4"></option>
          <option value="blk1lot5"></option>
          <option value="blk1lot6"></option>
          <option value="blk1lot7"></option>
          <option value="blk1lot8"></option>
          <option value="blk1lot9"></option>
          <option value="blk1lot10"></option>
          <option value="blk1lot11"></option>
          <option value="blk1lot12"></option><!--END FOR BLOCK 1-->
          <option value="blk2lot1"></option>
          <option value="blk2lot2"></option>
          <option value="blk2lot3"></option>
          <option value="blk2lot4"></option>
          <option value="blk2lot5"></option>
          <option value="blk2lot6"></option>
          <option value="blk2lot7"></option>
          <option value="blk2lot8"></option>
          <option value="blk2lot9"></option>
          <option value="blk2lot10"></option>
          <option value="blk2lot11"></option>
          <option value="blk2lot12"></option>
          <option value="blk2lot13"></option>
          <option value="blk2lot14"></option>
          <option value="blk2lot15"></option>
          <option value="blk2lot16"></option>
          <option value="blk2lot17"></option>
          <option value="blk2lot18"></option>
          <option value="blk2lot19"></option>
          <option value="blk2lot20"></option>
          <option value="blk2lot21"></option>
          <option value="blk2lot22"></option>
          <option value="blk2lot23"></option>
          <option value="blk2lot24"></option>
          <option value="blk2lot25"></option>
          <option value="blk2lot26"></option>
          <option value="blk2lot27"></option>
          <option value="blk2lot28"></option>
          <option value="blk2lot29"></option>
          <option value="blk2lot30"></option>
          <option value="blk2lot31"></option>
          <option value="blk2lot32"></option>
          <option value="blk2lot33"></option>
          <option value="blk2lot34"></option>
          <option value="blk2lot35"></option>
          <option value="blk2lot36"></option>
          <option value="blk2lot37"></option>
          <option value="blk2lot38"></option>
          <option value="blk2lot39"></option>
          <option value="blk1lot12"></option>
          <option value="blk2lot40"></option><!--END FOR BLOCK 2-->
          <option value="blk3lot1"></option>
          <option value="blk3lot2"></option>
          <option value="blk3lot3"></option>
          <option value="blk3lot4"></option>
          <option value="blk3lot5"></option>
          <option value="blk3lot6"></option>
          <option value="blk3lot7"></option>
          <option value="blk3lot8"></option>
          <option value="blk3lot9"></option>
          <option value="blk3lot10"></option>
          <option value="blk3lot11"></option>
          <option value="blk3lot12"></option>
          <option value="blk3lot13"></option>
          <option value="blk3lot14"></option>
          <option value="blk3lot15"></option>
          <option value="blk3lot16"></option>
          <option value="blk3lot17"></option>
          <option value="blk3lot18"></option>
          <option value="blk3lot19"></option>
          <option value="blk3lot20"></option>
          <option value="blk3lot21"></option>
          <option value="blk3lot22"></option>
          <option value="blk3lot23"></option>
          <option value="blk3lot24"></option>
          <option value="blk3lot25"></option>
          <option value="blk3lot26"></option>
          <option value="blk3lot27"></option>
          <option value="blk3lot28"></option>
          <option value="blk3lot29"></option>
          <option value="blk3lot30"></option>
          <option value="blk3lot31"></option>
          <option value="blk3lot32"></option>
          <option value="blk3lot33"></option>
          <option value="blk3lot34"></option>
          <option value="blk3lot35"></option><!--END FOR BLOCK 3-->
          <option value="blk4lot1"></option>
          <option value="blk4lot2"></option>
          <option value="blk4lot3"></option>
          <option value="blk4lot4"></option>
          <option value="blk4lot5"></option>
          <option value="blk4lot6"></option>
          <option value="blk4lot7"></option>
          <option value="blk4lot8"></option>
          <option value="blk4lot9"></option>
          <option value="blk4lot10"></option>
          <option value="blk4lot11"></option>
          <option value="blk4lot12"></option>
          <option value="blk4lot13"></option>
          <option value="blk4lot14"></option><!--END FOR BLOCK 4-->
          <option value="blk5lot1"></option>
          <option value="blk5lot2"></option>
          <option value="blk5lot3"></option>
          <option value="blk5lot4"></option>
          <option value="blk5lot5"></option>
          <option value="blk5lot6"></option>
          <option value="blk5lot7"></option>
          <option value="blk5lot8"></option>
          <option value="blk5lot9"></option>
          <option value="blk5lot10"></option>
          <option value="blk5lot11"></option>
          <option value="blk5lot12"></option>
          <option value="blk5lot13"></option>
          <option value="blk5lot14"></option>
          <option value="blk5lot15"></option>
          <option value="blk5lot16"></option>
          <option value="blk5lot17"></option>
          <option value="blk5lot18"></option>
          <option value="blk5lot19"></option>
          <option value="blk5lot20"></option>
          <option value="blk5lot21"></option>
          <option value="blk5lot22"></option>
          <option value="blk5lot23"></option>
          <option value="blk5lot24"></option>
          <option value="blk5lot25"></option>
          <option value="blk5lot26"></option>
          <option value="blk5lot27"></option><!--END FOR BLOCK 5-->
          <option value="blk6lot1"></option><!--END FOR BLOCK 6-->
      </datalist>
        </div>
        <div><!--FOR OWNERSHIP FIELD-->
            <label for="">OWNERSHIP</label>
            <input type="checkbox" class="ownership" name="ownership" id="ownership" value="homeowner">Homeowner
            <input type="checkbox" class="ownership" name="ownership" id="ownership" value="Lotowner">Lot owner
        </div>

        <div><!--with Icon bago mag word tapos color green mo this and red for reset-->
            <button type="submit" value="submit" name="assignlot_button" id="assignlot_button">Assign Property</button>
            <button type="reset" value="reset">Reset</button>
        </div>
    </form></div>
  
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
function getPassword() {
    const chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$%";
let passwordLength = 8;
let owner_password = '';
for(let i = 0; i<passwordLength;i++ ){
let randomNumber = Math.floor(Math.random()*chars.length);
owner_password+= chars.substring(randomNumber,randomNumber+1);
}
document.getElementById('owner_password').value= owner_password;
}
</script>

<!--THIS IS FOR ASSIGNED LOT-->
<script>
$(document).ready(function(){

    $('#assignlot_button').click(function(e){
        e.preventDefault();
        var  AssignLot = $('#property').val();
        var Usernameid = $('#ownerusername').val();
        var OwnerType =[];

        $('.ownership').each(function(){
            if($(this).is(":checked")){
                OwnerType.push($(this).val());
            }
        });

        OwnerType=OwnerType.toString();

        $.ajax({
            url:'includes/Act-trial.php',
            method:'POST',
            data:{  AssignLot:AssignLot, Usernameid:Usernameid, OwnerType:OwnerType},
            success:function(data){
                $('#results').html(data);
                

            }
        });
    });
});
</script>
</body>

</html>