<?php       
$style="updateMember.css";
include "init.php";
$board=getAllData('board');
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
              <a href="add_board_member.php">  <button style="padding: 7px 25px;" type="button" name="add" class="btn btn-success ml-4 mt-5">Add  <i class='bx bxs-user-plus'></i></button></a>
              <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">IEEE-BUB SB</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">All Board</li>
                        </ol>

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                    Branch Board
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                              <th>Name</th>
                                              <th>Email</th>
                                              <th>phone</th>
                                              <th>position</th>
                                              <th>commity</th>
                                              <th>season</th>
                                              <th>college-name</th>
                                              <th>college-Year</th>
                                              <th>old-board</th>
                                              <th>Image</th>
                                              <th>FaceBook</th>
                                              <th>Edit</th>               
                                              <th>Delete</th> 
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                              <th>Name</th>
                                              <th>Email</th>
                                              <th>Phone</th>
                                              <th>Position</th>
                                              <th>Commity</th>
                                              <th>Season</th>
                                              <th>College-Name</th>
                                              <th>College-Year</th>
                                              <th>Old-Board</th>
                                              <th>Image</th>
                                              <th>FaceBook</th>
                                              <th>Edit</th>               
                                              <th>Delete</th> 
                                              </tr>            
                                        </tfoot>
                                        <tbody>
                                           <?php foreach($board as $boardMember){
                                            echo"<tr>";
                                                    echo "<td>".  $boardMember['name']  	."</td>";
                                                    echo "<td>".  $boardMember['email']      	."</td>";
                                                    echo "<td>".  $boardMember['phone']     		."</td>";
                                                    echo "<td>".  $boardMember['position']      	."</td>";
                                                    echo "<td>".  $boardMember['commity']    	."</td>";
                                                    echo "<td>".  $boardMember['season']  	   	."</td>";
                                                    echo "<td>".  $boardMember['college_name'] ."</td>";
                                                    echo "<td>".  $boardMember['college_year'] ."</td>";
                                                    if($boardMember['old_member']==1){
                                                      echo "<td>". "Yes"	."</td>";}
                                                      elseif ($boardMember['old_member']==0) {
                                                        echo "<td>". "No"	."</td>";}?>

                                                        <td>
                                                          <?php if($boardMember['img'] != "0"){?>
                                                            <img src="./img/ieee-board/<?php echo $boardMember['img'];?>" width="100" height="100">
                                                            <?php }else{?>
                                                              <img src="./img/icons8-user-50.png" width="100" height="100">
                                                            <?php } ?>
                                                            </td>;
                                                            
                                                            <?php  
                                                            echo "<td>".  $boardMember['facebook'] ."</td>";
                                                    echo "<td>
                                                    <a href='update_board_member.php?id=".$boardMember['id']. "'
                                                    class='btn editbtn btn-primary m-2' style='display: flex;'><i class='bx bxs-edit m-1 '></i> Edit</a> " . "</td>";
                                                    echo "<td>
                                                    <a href='delete_board_member.php?id=".$boardMember['id']. "'
                                                    class='btn deletebtn btn-danger m-2' style='display: flex;'><i class='bx bxs-user-minus m-1'></i> Delete</a> " . "</td>";
                                        
                                
                                            echo "</td>";?>
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