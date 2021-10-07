<?php
session_start();
ob_start(); 
$style="addMember.css";
include 'init.php';
     if($_SERVER['REQUEST_METHOD'] =='POST' && !empty($_POST['eventName']) && !empty($_POST['eventYear'])){
        $eventName              =FILTER_VAR($_POST['eventName'],FILTER_SANITIZE_STRING);
        $eventSeason            =FILTER_VAR($_POST['eventSeason'],FILTER_SANITIZE_STRING);
        $eventYear              =FILTER_VAR($_POST['eventYear'],FILTER_SANITIZE_STRING);
        $eventDescription       =FILTER_VAR($_POST['eventDescription'],FILTER_SANITIZE_STRING);
        $eventLink              =FILTER_VAR($_POST['eventLink'],FILTER_SANITIZE_STRING);

        $avatar_name            = $_FILES["eventImg"]["name"];
        $size                   = $_FILES["eventImg"]["size"];
        $tmp_name               = $_FILES["eventImg"]["tmp_name"];
        $type                   = $_FILES["eventImg"]["type"];
        $ext_allowed            = array("png","jpg","jpeg","");
        @$extention             = strtolower(end(explode(".",$avatar_name)));

        if(in_array($extention,$ext_allowed)){
            $avatar = rand(0,1000000) . "_" . $avatar_name ;
            
            $destination = "img/ieee-events/" . $avatar ;
    
            
            /*check if info already added*/
    
            global $con;
            $stmt = $con->prepare("SELECT * FROM events WHERE name = ?");
            $stmt->execute(array($eventName));
            $rows = $stmt->fetch(PDO::FETCH_ASSOC);
            $count = $stmt->rowCount();
            if ($count){
                echo "
                    <script>
                        toastr.error('Sorry This Event Name is already excit.')
                    </script>";
            }
            else{
              if(!empty($avatar_name)){
                addEvent($eventName,$eventSeason, $eventYear, $avatar, $eventDescription, $eventLink);  
                move_uploaded_file($tmp_name,$destination);
              }else{
                $avatar="0";
                addEvent($eventName,$eventSeason, $eventYear, $avatar, $eventDescription, $eventLink); 
              }


            }   
    
            
        }else{
          echo "
          <script>
              toastr.error('Sorry This Extention not excit.')
          </script>";
        }    
     }
?>

<div id="layoutSidenav">

           
 <?php 
    require './layout/sidNav.php';
?> 
    <div id="layoutSidenav_content">
    <div class="container mainAddForm">
        <img class="addMemberMainImg mt-5" src="img/add_event.png" >
        <p class="firstParagraph text-center">Welcome to Event page </p>
        <p class="secondParagraph text-center">From this page you can add new Event to dashboard</p>
        <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" enctype="multipart/form-data">
            <!--Event Name-->
            <div class="row">

                <div class=" col-12 m-3">
                    <label for="Name">Event Name</label>
                    <input type="text" class="form-control"  id="Name " required
                        placeholder="Enter Event name"  autocomplete="off" name="eventName">
                </div>
             

              <!--Season  -->

                <div class=" col-12 m-3">
                <label for="season">Season</label>
                <select class="form-control  ui search dropdown"  id="season" name="eventSeason">
                      <option selected disabled value="">Choose...</option>
                      <option value="Summer">Summer</option>
                      <option value="Winter">Winter</option>
                </select>
                </div>

                <!--year -->
            
                <div class=" col-12 m-3">
                    <label for="year">Year</label>
                    <select class="custom-select ui search dropdown"  name="eventYear" id="season" required>
                      <option selected disabled value="">Choose...</option>
                      <?php for($i=1 ; $i<=date('Y')-2009 ; $i++){?>
                      <option value="<?php echo (2009 + $i - 1) . " / " . (2009 + $i)?>"><?php echo (2009 + $i - 1) . " / " . (2009 + $i)?></option>
                      <?php } ?>
                  </select>
                </div>                           
                <!--Event link-->
                <div class=" col-12 m-3">
                    <label for="link">Event link</label>
                    <input type="text" class="form-control"  id="link " 
                        placeholder="Enter Event link"  autocomplete="off"
                        name="eventLink">
                </div>  
             <!--description-->
                <div class=" col-12 m-3">
                    <label for="des">Description</label>
                    <textarea id="des" name="eventDescription" class="form-control" placeholder="Enter event description:" rows="4" required autocomplete="off"></textarea>
                </div>  
                <!--img-->
                <div class=" col-12 m-3 ">
                    <label for="img">img</label>
                    <input type="file" class="form-control" id="img" name="eventImg" >
                </div>
              <button name="submit" class="btn btn-primary m-4 ">Add to board </button>

                        </div>
                        </div>
            </form>
            </div>
        </div>

<?php
require_once "./includes/template/footer.php";
ob_end_flush();?>
