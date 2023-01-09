<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>

    <h1>Admin Account</h1>
    <section><!--SECTION NG BUONG CONTENT-->

        <div><!--PINAKA TOP- hingin saken layout Searchbar, Add new account button - -->
        <form action="" method="GET">
            <div class="input-group mb-3">
                <input type="text" name="search" value = "<?php if(isset($_GET['search'])){ echo $_GET['search'];
                    }?>" class="form-control" placeholder="Search Data">

                <button type="Submit" id="search_admin_data">Search</button>
            </div>
        </form>

            <a name="AddAdminAccount" href="AddAdminAccount.php">Add New Account +</a><!--ETO UNG BUTTON PATUNGO SA ADD ACCOUNT PAGAWA NALANG NA BUTTON IF DI KERI -->
        </div>
        <div><!--DISPLAY NG MGA ALERTS HERE-->
            <!--success update-->
            <?php
            if (isset($_GET['successupdate'])) {
                $Message = $_GET['successupdate'];
                $Message = "Information Successfully Updated.";
            ?>
                <div><?php echo $Message ?></div>
            <?php
            }
            ?>

            <!--success delete-->
            <?php
            if (isset($_GET['successdelete'])) {
                $Message = $_GET['successdelete'];
                $Message = "Successfully deleted information.";
            ?>
                <div><?php echo $Message ?></div>
            <?php
            }
            ?>
        </div>
        <div><!--for the table-->
            <?php
            require_once('includes/connection.php');
            $query = "SELECT * FROM admin_accounts";
            $result = mysqli_query($con, $query);
            ?>
            <table id="Admin_Account_Table" class="Admin_Account_Table">
                <thread>
                    <tr>
                        <th>Admin ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thread>
                <?php if(isset($_GET['search'])){
                    $filtervalues = $_GET['search'];
                    $queryfilter = "SELECT * FROM admin_accounts WHERE CONCAT(admin_id, admin_fname, admin_lname, admin_username,admin_email) LIKE '%$filtervalues%'";
                    
                    $resultfilter =mysqli_query($con,$queryfilter);
                    if(mysqli_num_rows($resultfilter)>0){
                        foreach($resultfilter as $items){

                        ?>
                        <tbody>
                        <tr>
                            <td><?= $items['admin_id'];?></td>
                            <td><?= $items['admin_fname'];?></td>
                            <td><?= $items['admin_lname'];?></td>
                            <td><?= $items['admin_username'];?></td>
                            <td><?= $items['admin_email'];?></td>
                            <td> <button data-bs-toggle="modal" data-bs-target="#adminviewmodal" id="btn_view_admin_acc" class="btn_view_admin_acc" name="edit_button">VIEW</button> </td><!--VIEW-EYE ICON-->
                                <td> <button data-bs-toggle="modal" data-bs-target="#adminupdatemodal" id="btn_edit_admin_acc" class="btn_edit_admin_acc" name="edit_button">EDIT</button> </td><!--EDIT ICON-->
                                <td> <button data-bs-toggle="modal" data-bs-target="#admindeletemodal" id="btn_delete_admin_acc" class="btn_delete_admin_acc" name="delete_button">DELETE</button> </td><!--TRASHICON-->
                        </tr></tbody>
<?php
                    }}

                }
               
                else if ($result) {
                    foreach ($result as $row) {
                ?>
                        <tbody>
                         
                            <tr>
                                <td> <?php echo $row['admin_id']; ?> </td>
                                <td> <?php echo $row['admin_fname']; ?> </td>
                                <td> <?php echo $row['admin_lname']; ?> </td>
                                <td> <?php echo $row['admin_username']; ?> </td>
                                <td> <?php echo $row['admin_email']; ?> </td>
                                <td> <button data-bs-toggle="modal" data-bs-target="#adminviewmodal" id="btn_view_admin_acc" class="btn_view_admin_acc" name="edit_button">VIEW</button> </td><!--VIEW-EYE ICON-->
                                <td> <button data-bs-toggle="modal" data-bs-target="#adminupdatemodal" id="btn_edit_admin_acc" class="btn_edit_admin_acc" name="edit_button">EDIT</button> </td><!--EDIT ICON-->
                                <td> <button data-bs-toggle="modal" data-bs-target="#admindeletemodal" id="btn_delete_admin_acc" class="btn_delete_admin_acc" name="delete_button">DELETE</button> </td><!--TRASHICON-->
                            </tr>
                        </tbody>

                <?php
                    }
                } else {
                    ?><tbody>
                    <tr>
                        <td colspan="8">No record found</td>
                    <tr></tbody>
                    <?php
                }  ?>
            </table>
        </div>
        <button><i class=""></i>Download</button><!--button to open a pdf to be downloaded-->
    </section>
    <!--////////////////////////////////////////////////////////////////////////////-->
    <!-- POP UP MODALSSS-->
    <!-- UpdateModal -->

    <div class="modal fade" id="adminupdatemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Account Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="includes/Act-UpdateAdmin.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="adminupdate_id" id="adminupdate_id">
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="admin_fname" id="admin_fname" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="admin_lname" id="admin_lname" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="admin_username" id="admin_username" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="admin_email" id=admin_email class="form-control" placeholder="">
                        </div>

                    </div>
                    <div class="mo dal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="btn_updateadminacc">Save Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- DeleteModal -->

    <div class="modal fade" id="admindeletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Warning!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="includes/Act-DeleteAdmin.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="admindelete_id" id="admindelete_id">
                        <h4>Are you sure you want to delete this account?</h4>
                    </div>
                    <div class="mo dal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary" name="btn_deleteadminacc">Proceed</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ViewModal -->

    <div class="modal fade" id="adminviewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">View Personal Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="includes/Act-ViewAdmin.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="adminview_id" id="adminview_id">
                        <h4>View Information</h4>
                    </div>
                    <div class="mo dal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    </div>
                </form>
            </div>
        </div>
    </div>





    <!--////////////////////////////////////////////////////////////////////////////-->
    <!--BOOTSTRAP SCRIPTS FOR MODALS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


    <!--ETO JQUERY BAKA MERON NA U NETO-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    

    <!--SCRIPT FOR UPDATE ACCOUNT-->
    <script>
        $(document).ready(function() {
            $('.btn_edit_admin_acc').on('click', function() {
                $('#adminupdatemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#adminupdate_id').val(data[0]);
                $('#admin_fname').val(data[1]);
                $('#admin_lname').val(data[2]);
                $('#admin_username').val(data[3]);
                $('#admin_email').val(data[4]);
                

                

            });
        });
    </script>

    <!--SCRIPT FOR DELETE ACCOUNT-->
    <script>
        $(document).ready(function() {
            $('.btn_delete_admin_acc').on('click', function() {
                $('#admindeletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#admindelete_id').val(data[0]);

            });
        });
    </script>

    <!--SCRIPT FOR VIEW ACCOUNT-->
    <script>
        $(document).ready(function() {
            $('.btn_view_admin_acc').on('click', function() {
                $('#adminviewmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#adminview_id').val(data[0]);

            });
        });
    </script>





</body>

</html>