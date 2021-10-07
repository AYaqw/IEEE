<div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="<?php echo "admin_dash.php";?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Content</div>
                            
                            <?php //if(isset($_SESSION['user_type']) && $_SESSION['user_type'] == 0){?>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts9" aria-expanded="false" aria-controls="collapseLayouts9">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Admins
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts9" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo "add_admin.php";?>">Add Admin</a>
                                    <a class="nav-link" href="<?php echo "all_admins.php";?>">Edit / Delete Admin</a>
                                </nav>
                            </div>
                            <?php // } ?>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts5" aria-expanded="false" aria-controls="collapseLayouts5">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Board
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts5" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo "add_board_member.php";?>">Add Board</a>
                                    <a class="nav-link" href="<?php echo "all_board.php";?>">Edit / Delete Board</a>
                                </nav>
                            </div>
                            


                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Events
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo "add_events.php";?>">Add Event</a>
                                    <a class="nav-link" href="<?php echo "all_events.php";?>">Edit / Delete Event</a>
                                </nav>
                            </div>

                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Members
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="<?php echo "add_member.php";?>">Add Member</a>
                                    <a class="nav-link" href="<?php echo "all_members.php";?>">Edit / Delete Member</a>
                                </nav>
                            </div>

                            <div class="sb-sidenav-menu-heading">Orders</div>
                            <a class="nav-link" href="<?php echo "commiteies.php";?>">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                All Committes
                            </a>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Payments History
                            </a>
                            <div style="letter-spacing: 1.5px;" class="sb-sidenav-menu-heading">Online Now</div>

                            <?php $admin = select_Admins(); 
                                foreach($admin as $online_admins){
                                    if($online_admins['state'] == 1){?>
                                                                    <a style="color: #fff !important;" class="nav-link">
                                <div class="sb-nav-link-icon"><span style="color:green">●</span></div>
                                <?php echo $online_admins['name']; ?>
                            </a>
                                    <?php }else{?>
                                      <a style="color: #888 !important;" class="nav-link">
                                        <div class="sb-nav-link-icon"><span style="color:red">●</span></div>
                                        <?php echo $online_admins['name']; ?>
                            </a>

                                    <?php }
                                }
                            ?>
                            
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as: </div>
                        IEEE فوووووووق
                    </div>
                </nav>
            </div>

