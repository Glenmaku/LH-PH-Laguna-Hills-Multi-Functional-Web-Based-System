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

    <h1>ASSIGN LOTS</h1>
    <form method="POST" action="includes/Act-AssignLot.php"><!--container-->
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
  
    </div>

    <!--FOR NAVIGATION TO, NILAGAY KO LANG PARA MABILIS KO MAACCESS HEHE-->



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

</body>

</html>