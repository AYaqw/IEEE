<?php
  ob_start(); 
  session_start();
//   $page_name = "Committees";
  $style = "comm.css";
  include "init.php";
//   if(isset($_SESSION['first_name'])){
    $i=1;
   
?>


<div id="layoutSidenav">     
    <?php 
      require './layout/sidNav.php';
    ?> 
    <div id="layoutSidenav_content">
      <div class="container-fluid ">
        <div class="allContent">

        <div class="tableOfHosters commite">
              <a href="add_member.php">  <button style="padding: 7px 25px;" type="button" name="add" class="btn btn-success ml-4 mt-5">Add  <i class='bx bxs-user-plus'></i></button></a>
              <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">IEEE-BUB SB</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item">Dashboard</li>
                            <li class="breadcrumb-item active">All committees</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                    Branch committees
                            </div>
                            <div class="card-body">


                            <div class="table-responsive">
                                    <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>committee</th>
                                                <th>Head</th>
                                                <th>Vice</th>
                                                <th>Total Members</th>
                                                <th>Show Members</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>committee</th>
                                                <th>Head</th>
                                                <th>Vice</th>
                                                <th>Total Members</th>
                                                <th>Show Members</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>


                                            <!--Logistics-->
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td>Logistics</td>
                                                <td><?php 
                                                $commity = "Logistics";
                                                $position = "Head";
                                                $head_vice = select_head_vice("board",$commity,$position);

                                                echo $head_vice['name']; 
                                                
                                                ?></td>

                                                <td><?php 
                                                $commity = "Logistics";
                                                $position = "Vice Head";
                                                $head_vice = select_head_vice("board",$commity,$position);

                                                echo $head_vice['name']; 
                                                
                                                ?></td>
                                                <td>

                                                <?php echo count_comittee_members("id","members","Logistics") . " Members"; ?>
                                                </td>
                                                <td><a href="commiteie_member.php?comm=Logistics" ype="button" class="btn btn-success" disabled>Show Members</a></td>
                                            </tr>


                                            <!--HR-->
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td>HR</td>
                                                <td><?php 
                                                $commity = "HR";
                                                $position = "Head";
                                                $head_vice = select_head_vice("board",$commity,$position);

                                                echo $head_vice['name']; 
                                                
                                                ?></td>

                                                <td><?php 
                                                $commity = "HR";
                                                $position = "Vice Head";
                                                $head_vice = select_head_vice("board",$commity,$position);

                                                echo $head_vice['name']; 
                                                
                                                ?></td>
                                                <td>

                                                <?php echo count_comittee_members("id","members","HR") . " Members"; ?>
                                                </td>
                                                <td><a href="commiteie_member.php?comm=HR" type="button" class="btn btn-success disabled">Show Members</a></td>
                                            </tr>


                                            <!--FR-->
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td>FR</td>
                                                <td><?php 
                                                $commity = "FR";
                                                $position = "Head";
                                                $head_vice = select_head_vice("board",$commity,$position);

                                                echo $head_vice['name']; 
                                                
                                                ?></td>

                                                <td><?php 
                                                $commity = "FR";
                                                $position = "Vice Head";
                                                $head_vice = select_head_vice("board",$commity,$position);

                                                echo $head_vice['name']; 
                                                
                                                ?></td>
                                                <td>

                                                <?php echo count_comittee_members("id","members","FR") . " Members"; ?>
                                                </td>
                                                <td><a href="commiteie_member.php?comm=FR" type="button" class="btn btn-success">Show Members</a></td>
                                            </tr>


                                            <!--scientific-->
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td>scientific</td>
                                                <td><?php 
                                                $commity = "scientific";
                                                $position = "Head";
                                                $head_vice = select_head_vice("board",$commity,$position);

                                                echo $head_vice['name']; 
                                                
                                                ?></td>

                                                <td><?php 
                                                $commity = "scientific";
                                                $position = "Vice Head";
                                                $head_vice = select_head_vice("board",$commity,$position);

                                                echo $head_vice['name']; 
                                                
                                                ?></td>
                                                <td>

                                                <?php echo count_comittee_members("id","members","scientific") . " Members"; ?>
                                                </td>
                                                <td><a href="commiteie_member.php?comm=scientific" type="button" class="btn btn-success disabled">Show Members</a></td>
                                            </tr>


                                            <!--PR-->
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td>PR</td>
                                                <td><?php 
                                                $commity = "PR";
                                                $position = "Head";
                                                $head_vice = select_head_vice("board",$commity,$position);

                                                echo $head_vice['name']; 
                                                
                                                ?></td>

                                                <td><?php 
                                                $commity = "PR";
                                                $position = "Vice Head";
                                                $head_vice = select_head_vice("board",$commity,$position);

                                                echo $head_vice['name']; 
                                                
                                                ?></td>
                                                <td>

                                                <?php echo count_comittee_members("id","members","PR") . " Members"; ?>
                                                </td>
                                                <td><a href="commiteie_member.php?comm=PR" type="button" class="btn btn-success">Show Members</a></td>
                                            </tr>


                                            <!--Media-->
                                            <tr>
                                                <td><?php echo $i++; ?></td>
                                                <td>Media</td>
                                                <td><?php 
                                                $commity = "Media";
                                                $position = "Head";
                                                $head_vice = select_head_vice("board",$commity,$position);

                                                echo $head_vice['name']; 
                                                
                                                ?></td>

                                                <td><?php 
                                                $commity = "Media";
                                                $position = "Vice Head";
                                                $head_vice = select_head_vice("board",$commity,$position);

                                                echo $head_vice['name']; 
                                                
                                                ?></td>
                                                <td>

                                                <?php echo count_comittee_members("id","members","Media") . " Members"; ?>
                                                </td>
                                                <td><a href="commiteie_member.php?comm=Media" type="button" class="btn btn-success">Show Members</a></td>
                                            </tr>

                                            
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

// }

// else{
//     header("location:signin.php");
// }
ob_end_flush();
require_once "./includes/template/footer.php";