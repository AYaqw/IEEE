<?php       
$style="updateMember.css";
include "init.php";
$members=getAllData('members');
//if has session
/*if(!isset($_SESSION['username'])){
echo "<div class='alert alert-danger'>you can not see this page id not exist</div>";
    header("refresh:5;url=index.html");
    exit();}*/?>

<div id="layoutSidenav">     
    <?php 
      require './layout/sidNav.php';
    ?> 
    <div id="layoutSidenav_content">
      <div class="container-fluid ">
        <div class="allContent">

          <div class="tableOfHosters table-responsive">
              <a href="add_member.php">  <button style="padding: 7px 25px;" type="button" name="add" class="btn btn-success ml-4 mt-5">Add  <i class='bx bxs-user-plus'></i></button></a>
              <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">IEEE-BUB SB</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">All Members</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                    Branch Members
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                               
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Phone</th>                                             
                                                <th>Commity</th>
                                                <th>Season</th>
                                                <th>College-Name</th>
                                                <th>College-Year</th>
                                                <th>Status</th>
                                                <th>Image</th>
                                                <th>Edit</th> 
                                                <th>profile</th>             
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>                                             
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Phone</th>                                               
                                                <th>Commity</th>
                                                <th>Season</th>
                                                <th>College-Name</th>
                                                <th>College-Year</th>
                                                <th>Status</th>
                                                <th>Image</th>
                                                <th>Edit</th>
                                                <th>profile</th>           
                                                <th>Delete</th>                                  
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                           <?php foreach($members as $member){?>
                                            <tr> 
                                                <td><?php echo $member['name']; ?></td>
                                                <td><?php echo $member['email']; ?></td>
                                                <td><?php echo $member['phone']; ?></td>                                                                                               
                                                <td><?php echo $member['commity']; ?></td>
                                                <td><?php echo $member['season']; ?></td>
                                                <td><?php echo $member['college-name']; ?></td>
                                                <td><?php echo $member['college-year']; ?></td>
                                                <td><?php 
                                                
                                                if($member['old-member'] == "0"){
                                                echo "Active Member"; 
                                                }else if($member['old-member'] == "1"){
                                                  echo "Old Member";
                                                }?>

                                                <td>
                                                    <?php if($member['img'] != "0"){?>
                                                    <img src="./img/ieee-members/<?php echo $member['img'];?>" width="100" height="100">
                                                    <?php }else{?>
                                                    <img src="./img/icons8-user-50.png" width="100" height="100">
                                                    <?php } ?>
                                                    </td>;

                                                <?php
                                                echo "<td>
                                                <a href='update_member.php?id=".$member['id']. "'
                                                class='btn editbtn btn-primary m-2' style='display: flex;'><i class='bx bxs-edit m-1 '></i> Edit</a> " . "</td>";
                                                echo "<td>
                                                <a href='profile.php?id=".$member['id']. "'
                                                class='btn editbtn btn-warning m-2' style='display: flex;'><i class='far fa-user'></i> Profile</a> " . "</td>";
                                                echo "<td>
                                                <a href='delete_member.php?id=".$member['id']. "'
                                                class='btn deletebtn btn-danger m-2' style='display: flex;'><i class='bx bxs-user-minus m-1'></i> Delete</a> " . "</td>";
                                                
                                                
                                                ?></td>
                                            </tr>
                                            <?php }?>
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
<?php 
require_once "./includes/template/footer.php";