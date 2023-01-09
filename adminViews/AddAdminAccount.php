
<div class="add-account-content">
    <div class="add-account-title">
    <h1>Admin Account</h1>
    </div>
    <div class="account-fillup"> 
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
        <form method="POST" action="/adminViews/includes/Act-AddAdmin.php"><!--container-->
            <div class="add-form"><!--FOR ADMIN FIRSTNAME FIELD-->
                <label for="">First Name:</label>
                <input name="admin_fname" id="admin_fname" placeholder="First Name">
            </div>
            <div class="add-form"><!--FOR ADMIN LASTNAME FIELD-->
                <label for="">Last Name:</label>
                <input name="admin_lname" id="admin_lname" placeholder="Last Name">
            </div>
            <div class="add-form"><!--FOR ADMIN USERNAME FIELD-->
                <label for="">Username:</label>
                <input name="admin_username" id="admin_username" placeholder="lhph_adminusername_123">
            </div>
            <div class="add-form"><!--FOR ADMIN EMAIL FIELD-->
                <label for="">Email:</label>
                <input type="email" name="admin_email" id="admin_email" placeholder="admin@example.com">
            </div>
            <div class="add-form"><!--FOR ADMIN PASSWORD FIELD-->
                <label for="">Password:</label>
                <input type="password" name="admin_password" id="admin_password" placeholder="Please enter a Strong Password">
            </div>
            <div class="add-form"><!--with Icon bago mag word tapos color green mo this and red for reset-->
                <button type="submit" value="Submit" name="addadmin_button">Add Account</button>
                <button type="reset" value="reset">Reset</button>
            </div>
        </form>
    </div>

    <div class="account-admin-homeowners-records">
        <button><a href="RecordAdminAccount.php"><i class="fa-solid fa-user-tie"></i> Admin Account Records</a></button>
        <button><a href="RecordOwnerAccount.php"><i class="fa-solid fa-users"></i> OWNER Account Records</a></button>
       
    </div>           
    <!--FOR NAVIGATION TO, NILAGAY KO LANG PARA MABILIS KO MAACCESS HEHE-->
</div>

