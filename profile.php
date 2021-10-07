<?php
    ob_start(); 
    session_start();
    $page_name = "Profile";
    $style = "seller_profile.css";
    $script = "seller_profile.js";
    require_once "init.php";
    
    if(isset($_GET['id']) && is_numeric($_GET['id'])){
      $id =(int)$_GET['id'];
      $message_data=select_by_id("members",$id);
    }
    $members=getAllData('members');
?>
<div class="container">
    <div class="main-body">
      <!---->
    <!-- <?php //foreach($members as $member)<?php }?>{?> -->
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="img/add_event.png" alt="Admin" class="rounded-circle" width="120">
                    <div class="mt-3">
                      <h4><?php echo $message_data['name']; ?></h4>
                      <p><i class="fas fa-users"></i> commity is: <?php echo $message_data['commity'];?></p>
                      <!-- <p class="text-secondary mb-1">motorcycle dealer</p>
                      <p class="text-muted font-size-sm">Shatby , Alexandria , Egypt </p> -->
                      <a href="delete_member.php" style="color: #fff;text-decoration: none;" class="btn btn-danger"><i class="fas fa-sign-out-alt"></i> Log Out</a>
                    </div><!-- logout.php -->
                  </div>
                </div>
              </div>
              <div class="card mt-3">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <a href="<?php echo $message_data['email']; ?>"  target="_blank"><h6 class="mb-0 mr-5 d-inline-block"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                    <span class="text-secondary "><?php echo $message_data['email']; ?></span></a>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <a href="<?php echo $message_data['linkedIn']; ?>"><h6 class="mb-0 mr-5 d-inline-block" target="_blank"><i class="fab fa-linkedin" width="24" height="24"></i> linkedIn</h6>
                    <span class="text-secondary"> <?php echo $message_data['linkedIn']; ?></span></a>
                  </li>
                  <!-- <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                    <span class="text-secondary">@Motors</span>
                  </li> -->
                  <!-- <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary">Motors</span>
                  </li> -->
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                  <a href="facebook.com"> <h6 class="mb-0 mr-5 d-inline-block"><i class="fab fa-facebook-f" target="_blank"></i> Facebook</h6>
                    <span class="text-secondary"><?php echo $message_data['facebook']; ?></span></a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-8">
            <div class="content">
                <div class="container">
                    <h3 class="content_heaader"><i class="fas fa-user-circle"></i> Your Profile</h3>
                    <?php if($message_data['img'] != "0"){?>
                      <div class="text-center m-5"><img src="./img/ieee-members/<?php echo $message_data['img'];?> "class="rounded"  width="100" height="100"></div>
                              <?php }else{?>
                              <div class="text-center m-5 "><img src="./img/icons8-user-50.png" class="rounded"  width="100" height="100"></div>
                              <?php } ?>
                             
                              <p><i class="fas fa-address-card"></i> <?php echo $message_data['about']; ?> </p>
                           <ul class="ml-5"> 
                                <li><i class="fas fa-phone text-secondary"></i> phone is :<?php echo $message_data['phone'];?></li>
                                <!-- <li><i class="fas fa-users"></i> commity is: <?php //echo $message_data['commity'];?></li> -->
                                <li><i class="fas fa-calendar-week text-secondary"></i> season is :<?php echo $message_data['season'];?></li>
                                <li><i class="fas fa-graduation-cap text-secondary"></i> college-year is : <?php echo $message_data['college-year'];?></li>
                                <li><i class="fas fa-university text-secondary"></i> college-name is :<?php echo $message_data['college-name'];?></li>
                               
                              </ul>
                    </div>
                </div>
            </div>

            </div>
          </div>
        </div>
    </div>
    

<?php 

require_once "./includes/template/footer.php";
ob_end_flush();