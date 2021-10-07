<?php 
include 'init.php';

// incase of exist session
/*if(isset($_SESSION['username'])){
}else{ echo "<div class='alert alert-danger'>you can not see this page id not exist</div>";
    header("refresh:5;url=index.html");
    exit();
}*/
if (isset($_GET['id']) && is_numeric($_GET['id'])/*&&check_user ( 'email' , 'password')*/) {
    $id=($_GET['id']);
     //delete member
        delete_by_id('admins' ,$id);
           
         header("Location: all_admins.php"); 
}else{
    echo "<h3 class='alert alert-danger'>you can not reach this page</h3>";
    header("Refresh:5;url=index.html"); 
           
}
require_once "./includes/template/footer.php";