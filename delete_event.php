<?php 
include 'init.php';

// incase of exist session
/*if(isset($_SESSION['username'])){
}else{ echo "<div class='alert alert-danger'>you can not see this page id not exist</div>";
    header("refresh:5;url=index.html");
    exit();
}*/
if (isset($_POST['id']) && is_numeric($_POST['id'])) {
    $id=($_POST['id']);
     //delete member
     delete_by_id('events' ,$id);
    //delete_scuess
         echo "
         <script>
             toastr.success('Great ,successfully:Deleted Event .')
         </script>";
           
         header("Location: all_events.php"); 
}else{
    echo "<h3 class='alert alert-danger'>you can not reach this page</h3>";
    header("Refresh:3;url=index.html"); 
           
}
require_once "./includes/template/footer.php";