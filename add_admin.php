<?php
session_start();
ob_start(); 
$style="addMember.css";
include 'init.php';

// incase of exist session
// if(isset($_SESSION['username'])){

// incase of send from post and some filed is not empty 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty( $_POST['name'])&& !empty($_POST['email']) ){
        $name      = FILTER_VAR( $_POST['name'], FILTER_SANITIZE_STRING);
        $email          = FILTER_VAR( $_POST['email'], FILTER_SANITIZE_EMAIL);
        $password       = sha1      ( $_POST['password']);
        $reg_state       = FILTER_VAR( $_POST['reg_state'], FILTER_SANITIZE_NUMBER_INT);

            insert_admin($name,$email,$password,$reg_state);

    }
    // else{
    //     echo "<div class='alert alert-danger'>you can not add member</div>";
    //     header("refresh:5;url=index.html");
    // }
// }
// else{ echo "<div class='alert alert-danger'>you can not see this page id not exist</div>";
//     header("refresh:5;url=index.html");
//     exit();
// }

?>

<div id="layoutSidenav">

           
 <?php 
    require './layout/sidNav.php';
?> 
</div>
    <div class="container mainAddForm">
        <img class="addMemberMainImg pt-5" src="img/addMember.png">
        <p class="firstParagraph text-center">Welcome to website dashboard</p>
        <p class="secondParagraph text-center pb-5">From this page you can add new Admin to dashboard</p>
        <form method="POST" action="" >
           
            <div class="row  m-2">
              <!--User Name-->
                <div class="col-md-6 mb-3 col-xs-12">
                    <label for="Name">Admin Name</label>
                    <input type="text" class="form-control"  id="Name " 
                        placeholder="Enter User name" name="name" autocomplete="off">
                </div>

                <!--Email-->           
                <div class="col-md-6 mb-3 col-xs-12">
                    <label for="Email">Email</label>
                    <input type="email" class="form-control" id="Email"
                            placeholder="Enter Email" name="email" >
                </div><!--autocomplete="new-off"-->


                <!--password--->
                <div class="col-md-6 mb-3 col-xs-12">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" id="Password"
                    placeholder="Enter email password" name="password" autocomplete="new-password">
                </div>

                <!--position--->
                <div class="col-md-6 mb-3 col-xs-12">
                    <label for="reg_state">Role</label>
                    <select class="custom-select ui search dropdown"  name="reg_state" id="reg_state" required>
                      <option selected disabled value="">Choose...</option>
                      <option value="0">Height Board</option>
                      <option value="1">Head</option>
                      <option value="2">Vice</option>
                  </select>
                </div>

              </div><!--<div class="row  m-2"></div>-->
              
              <!--btn -> add--->
                <button class="btn btn-primary mt-3 ml-4">Add to Admins </button>
            </form>
        </div>
    <?php
    require_once "./includes/template/footer.php";
    ob_end_flush();?>
