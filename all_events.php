<?php       
$style="updateMember.css";
include "init.php";
$events=getAllData('events');

?>

<div id="layoutSidenav">

           
 <?php 
    require './layout/sidNav.php';
?> 

    <div id="layoutSidenav_content">
    <div class="container-fluid ">
        <div class="allContent">

          <div class="tableOfHosters table-responsive">
          <a href="add_events.php">
                <button type="button" style="padding: 7px 25px;" name="add" class="ml-4 btn btn-success mb-3 mt-3"> Add  <i class='bx bxs-user-plus'></i></button></a>
              <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">IEEE-BUB SB</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">All Events</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                    Branch Events
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr> 
                                            <th>Event name</th>
                                            <th>Season</th>
                                            <th>Year</th>
                                            <th>Description</th>
                                            <th>Image</th>
                                            <th>Link</th>
                                            <th>Edit</th>            
                                            <th>Delete</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <?php foreach ($events as $event) {
                                                ?>
                                        
                                            <td><?php echo $event['name'] ?></td>
                                            <td><?php echo $event['season']?></td>
                                            <td><?php echo $event['year'] ?></td>
                                            <td><?php echo $event['description'] ?></td>
                                                <td>
                                                <?php if($event['img'] != "0"){?>
                                                <img src="./img/ieee-events/<?php echo $event['img'];?>" width="100" height="100">
                                                <?php }else{?>
                                                    <img src="./img/icons8-user-50.png" width="100" height="100">
                                                <?php } ?>
                                                </td>;
                                            <td><?php echo $event['link']?></td>

                                            <td>
                                            <form action="update_event.php" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $event['id'] ?>">
                                            <div class="cancelbtn" >
                                            <button class="btn editbtn btn-primary m-2" type="submit" value="edit" name="submit">
                                            <i style="font-size: 20px;" class='bx bxs-edit m-1 '></i></a> 
                                            </button>
                                            </div>
                                            </form>
                                            </td>

                                            <td>
                                            
                                            <form action="delete_event.php" method="POST">
                                            <input type="hidden" name="id" value="<?php echo $event['id'] ?>">
                                            <div class="cancelbtn" >
                                            <button class="btn deletebtn btn-danger m-2" type="submit" value="delete" name="submit">
                                            <i style="font-size: 20px;" class='bx bxs-user-minus m-1'></i></a> 
                                            </button>
                                            </div>
                                            </form>
                                            </td>
                                        </tr>
                                        <?php    }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

          </div>
        </div>
      </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
<?php 
require_once "./includes/template/footer.php";