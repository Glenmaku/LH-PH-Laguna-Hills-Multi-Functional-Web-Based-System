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
    <h1>Owner Account</h1>

    <form method="POST" action=""><!--container-->
        <div><!--FOR OWNER FIRSTNAME FIELD-->
            <label for="">First Name</label>
            <input name="owner_fname" id="owner_fname" placeholder="First Name">
        </div>
        <div><!--FOR OWNER LASTNAME FIELD-->
            <label for="">Last Name</label>
            <input name="owner_lname" id="owner_lname" placeholder="Last Name">
        </div>
        <div><!--FOR OWNER USERNAME FIELD-->
            <label for="">Username</label>
            <input name="owner_username" id="owner_username" placeholder="lhph_ownerusername_123">
        </div>
        <div><!--FOR OWNER PASSWORD FIELD-->
            <label for="">Password</label>
            <input type="password" name="owner_password" id="owner_password" placeholder="Password">
        </div>
        <div>
            <div><!--FOR OWNER PROPERTIES FIELD-->
                <label for="">Properties</label>
                <input list="blkandlots" name="Properties" id="Properties" placeholder="blk0lot0">
                <datalist id="blkandlots">
                    <option value="blk1lot1">
                    <option value="blk1lot2">
                    <option value="blk1lot3">
                    <option value="blk1lot4">
                    <option value="blk1lot5">
                    <option value="blk1lot6">
                    <option value="blk1lot7">
                    <option value="blk1lot8">
                    <option value="blk1lot9">
                    <option value="blk1lot10">
                    <option value="blk1lot11">
                    <option value="blk1lot12"><!--END FOR BLOCK 1-->
                    <option value="blk2lot1">
                    <option value="blk2lot2">
                    <option value="blk2lot3">
                    <option value="blk2lot4">
                    <option value="blk2lot5">
                    <option value="blk2lot6">
                    <option value="blk2lot7">
                    <option value="blk2lot8">
                    <option value="blk2lot9">
                    <option value="blk2lot10">
                    <option value="blk2lot11">
                    <option value="blk2lot12">
                    <option value="blk2lot13">
                    <option value="blk2lot14">
                    <option value="blk2lot15">
                    <option value="blk2lot16">
                    <option value="blk2lot17">
                    <option value="blk2lot18">
                    <option value="blk2lot19">
                    <option value="blk2lot20">
                    <option value="blk2lot21">
                    <option value="blk2lot22">
                    <option value="blk2lot23">
                    <option value="blk2lot24">
                    <option value="blk2lot25">
                    <option value="blk2lot26">
                    <option value="blk2lot27">
                    <option value="blk2lot28">
                    <option value="blk2lot29">
                    <option value="blk2lot30">
                    <option value="blk2lot31">
                    <option value="blk2lot32">
                    <option value="blk2lot33">
                    <option value="blk2lot34">
                    <option value="blk2lot35">
                    <option value="blk2lot36">
                    <option value="blk2lot37">
                    <option value="blk2lot38">
                    <option value="blk2lot39">
                    <option value="blk1lot12">
                    <option value="blk2lot40"><!--END FOR BLOCK 2-->
                    <option value="blk3lot1">
                    <option value="blk3lot2">
                    <option value="blk3lot3">
                    <option value="blk3lot4">
                    <option value="blk3lot5">
                    <option value="blk3lot6">
                    <option value="blk3lot7">
                    <option value="blk3lot8">
                    <option value="blk3lot9">
                    <option value="blk3lot10">
                    <option value="blk3lot11">
                    <option value="blk3lot12">
                    <option value="blk3lot13">
                    <option value="blk3lot14">
                    <option value="blk3lot15">
                    <option value="blk3lot16">
                    <option value="blk3lot17">
                    <option value="blk3lot18">
                    <option value="blk3lot19">
                    <option value="blk3lot20">
                    <option value="blk3lot21">
                    <option value="blk3lot22">
                    <option value="blk3lot23">
                    <option value="blk3lot24">
                    <option value="blk3lot25">
                    <option value="blk3lot26">
                    <option value="blk3lot27">
                    <option value="blk3lot28">
                    <option value="blk3lot29">
                    <option value="blk3lot30">
                    <option value="blk3lot31">
                    <option value="blk3lot32">
                    <option value="blk3lot33">
                    <option value="blk3lot34">
                    <option value="blk3lot35"><!--END FOR BLOCK 3-->
                    <option value="blk4lot1">
                    <option value="blk4lot2">
                    <option value="blk4lot3">
                    <option value="blk4lot4">
                    <option value="blk4lot5">
                    <option value="blk4lot6">
                    <option value="blk4lot7">
                    <option value="blk4lot8">
                    <option value="blk4lot9">
                    <option value="blk4lot10">
                    <option value="blk4lot11">
                    <option value="blk4lot12">
                    <option value="blk4lot13">
                    <option value="blk4lot14"><!--END FOR BLOCK 4-->
                    <option value="blk5lot1">
                    <option value="blk5lot2">
                    <option value="blk5lot3">
                    <option value="blk5lot4">
                    <option value="blk5lot5">
                    <option value="blk5lot6">
                    <option value="blk5lot7">
                    <option value="blk5lot8">
                    <option value="blk5lot9">
                    <option value="blk5lot10">
                    <option value="blk5lot11">
                    <option value="blk5lot12">
                    <option value="blk5lot13">
                    <option value="blk5lot14">
                    <option value="blk5lot15">
                    <option value="blk5lot16">
                    <option value="blk5lot17">
                    <option value="blk5lot18">
                    <option value="blk5lot19">
                    <option value="blk5lot20">
                    <option value="blk5lot21">
                    <option value="blk5lot22">
                    <option value="blk5lot23">
                    <option value="blk5lot24">
                    <option value="blk5lot25">
                    <option value="blk5lot26">
                    <option value="blk5lot27"><!--END FOR BLOCK 5-->
                    <option value="blk6lot1"><!--END FOR BLOCK 6-->



                </datalist>
            </div>
            <!--
            <label for="">Type of Ownership</label>

            <input type="checkbox" id="homeowner" name="homeowner" value="Homeowner">
            <label for="vehicle1"> Homeowner</label><br>

            <input type="checkbox" id="lotowner" name="lotowner" value="Lotowner">
            <label for="vehicle2"> Lotowner</label><br>

            <input type="checkbox" id="tenant" name="tenant" value="Tenant">
            <label for="vehicle3">Tenant</label><br><br>-->
            <!--PWEDE ILAGAY 1 COLUMN PER CATEGORY, PARA NASA IISANG LINE LANG SILA SA DB-->
                        <!--KASO DAPAT PAG SINELECT PALA UNG PLUS DAPAT MACOPY DIN YUNG BLK AND LOT SAKA NAME-->
        </div>


        <div><!--with Icon bago mag word tapos color green mo this and red for reset-->
            <button type="submit" value="Submit">Add Account</button>
            <button type="reset" value="reset">Reset</button>
        </div>



    </form>

















</body>

</html>