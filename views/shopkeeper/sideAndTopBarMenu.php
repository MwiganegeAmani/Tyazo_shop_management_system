 
<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="../shopkeeper/dashboard.php" class="site_title"><i style="color: #000" class="fa fa-home"></i> <span style="color: #000;">Tyazo Mdodo</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="../../resource/images/img.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span style="color: #000">Welcome,</span>
                <h2><?php echo  $_SESSION['userName']; ?></h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                
                    <li>
                        <a><i class="fa fa-money"></i> Transactions <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                             <li><a href="../shopkeeper/addcash.php"> Add Cash</a></li>
                            <li><a href="../shopkeeper/viewpurchase.php">View All Purchase</a></li>
                            <li><a href="../shopkeeper/viewsale.php">View All Sales</a></li>
                        </ul>
                    </li>

                    <li>
                        <a><i class="fa fa-users"></i> Vendors <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="../shopkeeper/viewvendor.php">View All Vendors</a></li>
                        </ul>
                    </li>
                       <li>
                        <a><i class="fa fa-list"></i> Items <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="../shopkeeper/viewitem.php">View All items</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
         
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Support" href="../../src/common/support.php">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="../../src/store/Logout.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>

<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-user"></i> Shopkeeper
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                        <li><a href="../shopkeeper/changepassword.php"> Change Password</a></li>
                        <li><a href="../../src/store/Logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>
                </li>
<!-- 
                <li role="presentation" class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                        <?php 
                        $query = "select * from messages where status = 0 order by messageID desc";
                          $run = mysqli_query($con,$query);
                       
                        ?>
                        <i class="fa fa-envelope"></i>
                        <span class="badge bg-green"><?php echo mysqli_num_rows($run); ?> </span>
                    </a>
        
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
<?php while ($row = mysqli_fetch_array($run)) {  ?>
                        <li>
                            <a>
                                <span>
                                  <span><b><?php echo $row['title']; ?></b></span>
                                  <span class="time"><?php echo $row['time']; ?></span>
                                </span>
                                <span class="message">
                                <?php echo $row['content']; ?>
                               </span>
                            </a>
                        </li>
                    <?php } ?>
                        <li>
                            <div class="text-center">
                                <a href="../liveEvent/liveEvent.php">
                                    <strong>See All Alerts</strong>
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </li>
                    </ul>
                </li> -->
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->