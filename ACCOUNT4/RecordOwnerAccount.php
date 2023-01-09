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
    <h1>Homeowner Account</h1>
    <section><!--SECTION NG BUONG CONTENT-->

        <div><!--PINAKA TOP- hingin saken layout Searchbar, Add new account button - -->
        <form action="" method="GET">
            <div class="input-group mb-3">
                <input type="text" name="search" value = "<?php if(isset($_GET['search'])){ echo $_GET['search'];
                    }?>" class="form-control" placeholder="Search Data">

                <button type="Submit" id="search_owner_data">Search</button>
            </div>
        </form>

           <a name="AssignOwnerLot" href="AssignLot.php">Assign Owner Lot</a><!--ETO UNG BUTTON PATUNGO SA ASSIGN LOTS PAGAWA NALANG NA BUTTON IF DI KERI -->
        <a name="AddOwnerAccount" href="AddOwnerAccount.php">Add New Account +</a><!--ETO UNG BUTTON PATUNGO SA ADD ACCOUNT PAGAWA NALANG NA BUTTON IF DI KERI -->

         

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
            $query = "SELECT * FROM owner_accounts";
            $result = mysqli_query($con, $query);
            ?>
            <table id="Owner_Account_Table" class="Owner_Account_Table">
                <thread>
                    <tr>
                        <th>Owner ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Date Added</th>
                        <th>View</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thread>
                <?php if(isset($_GET['search'])){
                    $filtervalues = $_GET['search'];
                    $queryfilter = "SELECT * FROM owner_accounts WHERE CONCAT(owner_id, owner_fname, owner_lname, owner_username,owner_email,owner_date_added) LIKE '%$filtervalues%'";
                    
                    $resultfilter =mysqli_query($con,$queryfilter);
                    if(mysqli_num_rows($resultfilter)>0){
                        foreach($resultfilter as $items){

                        ?>
                        <tbody>
                        <tr>
                            <td><?= $items['owner_id'];?></td>
                            <td><?= $items['owner_fname'];?></td>
                            <td><?= $items['owner_lname'];?></td>
                            <td><?= $items['owner_username'];?></td>
                            <td><?= $items['owner_email'];?></td>
                            <td><?= $items['owner_date_added'];?></td>

                            <td> <button data-bs-toggle="modal" data-bs-target="#ownerviewmodal" id="btn_view_owner_acc" class="btn_view_owner_acc" name="view_button">VIEW</button> </td><!--VIEW-EYE ICON-->
                                <td> <button data-bs-toggle="modal" data-bs-target="#ownerupdatemodal" id="btn_edit_owner_acc" class="btn_edit_owner_acc" name="edit_button">EDIT</button> </td><!--EDIT ICON-->
                                <td> <button data-bs-toggle="modal" data-bs-target="#ownerdeletemodal" id="btn_delete_owner_acc" class="btn_delete_owner_acc" name="delete_button">DELETE</button> </td><!--TRASHICON-->
                        </tr></tbody>
<?php
                    }}

                }
               
                else if ($result) {
                    foreach ($result as $row) {
                ?>
                        <tbody>
                         
                            <tr>
                                <td> <?php echo $row['owner_id']; ?> </td>
                                <td> <?php echo $row['owner_fname']; ?> </td>
                                <td> <?php echo $row['owner_lname']; ?> </td>
                                <td> <?php echo $row['owner_username']; ?> </td>
                                <td> <?php echo $row['owner_email']; ?> </td>
                                <td> <?php echo $row['owner_date_added']; ?> </td>
                                <td> <button data-bs-toggle="modal" data-bs-target="#ownerviewmodal" id="btn_view_owner_acc" class="btn_view_owner_acc" name="view_button">VIEW</button> </td><!--VIEW-EYE ICON-->
                                <td> <button data-bs-toggle="modal" data-bs-target="#ownerupdatemodal" id="btn_edit_owner_acc" class="btn_edit_owner_acc" name="edit_button">EDIT</button> </td><!--EDIT ICON-->
                                <td> <button data-bs-toggle="modal" data-bs-target="#ownerdeletemodal" id="btn_delete_owner_acc" class="btn_delete_owner_acc" name="delete_button">DELETE</button> </td><!--TRASHICON-->
                            </tr>
                        </tbody>

                <?php
                    }
                } else {
                    ?><tbody>
                    <tr>
                        <td colspan="9">No record found</td>
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

    <div class="modal fade" id="ownerupdatemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Account Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="includes/Act-UpdateOwner.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="ownerupdate_id" id="ownerupdate_id">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="owner_username" id="owner_username" class="form-control" disabled>
                        <div class="form-group">
                            <label>First Name</label>
                            <input type="text" name="owner_fname" id="owner_fname" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="owner_lname" id="owner_lname" class="form-control" placeholder="">
                        </div>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="owner_email" id=owner_email class="form-control" placeholder="">
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" name="btn_updateowneracc">Save Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!-- DeleteModal -->

    <div class="modal fade" id="ownerdeletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Warning!</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="includes/Act-DeleteOwner.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="ownerdelete_id" id="ownerdelete_id">
                        <h4>Are you sure you want to delete this account?</h4>
                    </div>
                    <div class="mo dal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                        <button type="submit" class="btn btn-primary" name="btn_deleteowneracc">Proceed</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- ViewModal -->

    <div class="modal fade" id="ownerviewmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Personal Information</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="includes/Act-ViewOwner.php" method="POST">
                    <div class="modal-body">
                        <input type="hidden" name="ownerview_id" id="ownerview_id">
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
            $('.btn_edit_owner_acc').on('click', function() {
                $('#ownerupdatemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#owner_username').val(data[3]);
                $('#owner_fname').val(data[1]);
                $('#owner_lname').val(data[2]);
                $('#owner_email').val(data[4]);
                

                

            });
        });
    </script>

    <!--SCRIPT FOR DELETE ACCOUNT-->
    <script>
        $(document).ready(function() {
            $('.btn_delete_owner_acc').on('click', function() {
                $('#ownerdeletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#ownerdelete_id').val(data[0]);

            });
        });
    </script>

    <!--SCRIPT FOR VIEW ACCOUNT-->
    <script>
        $(document).ready(function() {
            $('.btn_view_owner_acc').on('click', function() {
                $('#ownerviewmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#ownerview_id').val(data[0]);

            });
        });
    </script>





</body>

</html>