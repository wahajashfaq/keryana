<!-- Navigation -->
<style type="text/css">
  .badge{

    position: relative;
    top : -20px;
    background-color : red;
    font-size: 12px;
    opacity: 0.7;
  }

  #notification{
    position: absolute;
  }

  #cartIco , #MsgIco{
    position: relative;
    font-size : 25px;
    right: 20px;
    top : 15px;
  }
</style>
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html">Keryana(ADMIN)</a>
  </div>
  <!-- /.navbar-header -->

  <?php 

  $CI =& get_instance();
  $CI->load->model('Order');
  $CI->load->model('Contact');

  ?>
  <ul class="nav navbar-top-links navbar-right">
    <li class="dropdown">
      <a class="dropdown-toggle"  href="<?php echo base_url('admin/AllOrders') ?>">
        <span id="notification"><i  id="cartIco" class="fa fa-shopping-cart fa-fw"></i><span class="badge"><span id="order_label"><?php echo $CI->Order->totalViewed(); ?></span></span></span>
      </a>
      <!-- /.dropdown-messages -->
    </li>

    <li >
      <a class="dropdown-toggle"  href="<?php echo base_url('admin/Message') ?>">
       <span id="notification"><i id="MsgIco" class="fa fa-envelope fa-fw"></i><span class="badge"><span id="message_label"><?php echo $CI->Contact->totalViewed(); ?></span></span></span>
     </a>
     <!-- /.dropdown-messages -->
   </li>

   <!-- /.dropdown -->
                <!-- <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    /.dropdown-alerts
                  </li> -->
                  <!-- /.dropdown -->
                  <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                      <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                      <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                      </li>
                      <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                      </li>
                      <li class="divider"></li>
                      <li><a href="<?php echo base_url('admin/login/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                      </li>
                    </ul>
                    <!-- /.dropdown-user -->
                  </li>
                  <!-- /.dropdown -->
                </ul>
                <!-- /.navbar-top-links -->

                <div class="navbar-default sidebar" role="navigation">
                  <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                      <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                          <input type="text" class="form-control" placeholder="Search..." disabled>
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                              <i class="fa fa-search"></i>
                            </button>
                          </span>
                        </div>
                        <!-- /input-group -->
                      </li>
                      <li>
                        <a href=""><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                      </li>

                      <li>
                        <a href="#"><i class="fa fa-plus-square-o fa-fw"></i>Add New<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                          <li>
                            <a href="<?php echo base_url('admin/resources/add/categories') ?>">Categories</a>
                          </li>
                          <li>
                            <a href="<?php echo base_url('admin/Product/Add') ?>">Product</a>
                          </li>
                          <li>
                            <a href="<?php echo base_url('admin/resources/add/brand') ?>">Brand</a>
                          </li>
                          <li>
                            <a href="<?php echo base_url('admin/resources/add/CategoryImages') ?>">Category Images</a>
                          </li>
                          <li>
                            <a href="<?php echo base_url('admin/resources/sliders') ?>">Sliders</a>
                          </li>
                        </ul>
                        <!-- /.nav-second-level -->
                      </li>

                      <li>
                        <a href="#"><i class="fa fa-eye fa-fw"></i>View<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                          <li>
                            <a href="<?php echo base_url('admin/category/allCategories') ?>">Categories</a>
                          </li>
                          <li>
                            <a href="<?php echo base_url('admin/product/allProduct') ?>">Products</a>
                          </li>
                          <li>
                            <a href="<?php echo base_url('admin/resources/sliders/all') ?>">Sliding Banners</a>
                          </li>
                          <li>
                            <a href="<?php echo base_url('') ?>">Brands</a>
                          </li>
                        </ul>
                        <!-- /.nav-second-level -->
                      </li>
                      <li>
                        <a href="#"><i class="fa fa-camera fa-fw"></i>Banner<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                          <li>
                            <a href="<?php echo base_url('admin/resources/sliders/sidebanner') ?>">Side Banners</a>
                          </li>
                          <li>
                            <a href="<?php echo base_url('admin/resources/sliders/threebanner') ?>">3 Banners</a>
                          </li>
                          <li>
                            <a href="<?php echo base_url('admin/resources/sliders/bottombanner') ?>">Bottom Banners</a>
                          </li>
                        </ul>
                        <!-- /.nav-second-level -->
                      </li>

                      <li>
                        <a href="<?php echo base_url('admin/Offers') ?>"><i class="fa fa-camera fa-fw"></i>Offers</a>
                        <!-- /.nav-second-level -->
                      </li>

                      
                      <li>
                        <a href="<?php echo base_url('admin/KeryanaCoupon') ?>"><i class="fa fa-tags fa-fw"></i>Coupon</span></a>

                      </li>


                      <li>
                        <a href="#"><i class="fa fa-envelope fa-fw"></i>Messages<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                          <li>
                            <a href="<?php echo base_url('admin/Message/compose') ?>">Compose</a>
                          </li>
                          <li>
                            <a href="<?php echo base_url('admin/Message') ?>">View All</a>
                          </li>
                        </ul>
                        <!-- /.nav-second-level -->
                      </li>



                      <li>
                        <a href="<?php echo base_url('admin/AllOrders') ?>"><i class="fa fa-bar-chart-o fa-fw"></i> Orders</a>
                        <!-- /.nav-second-level -->
                      </li>

                      <li>
                        <a href="<?php echo base_url('admin/KeryanaCustomers') ?>"><i class="fa fa-user" ></i> Customer Details</a>
                        <!-- /.nav-second-level -->
                      </li>


                      <li>
                        <a href="<?php echo base_url('admin/FileUpload') ?>"><i class="fa fa-refresh fa-fw"></i> Update Products</a>
                        <!-- /.nav-second-level -->
                      </li>


                      <li>
                        <a href="<?php echo base_url('admin/HotDeals') ?>"><i class="fa fa-tag fa-fw"></i>Hot Deals</a>
                        <!-- /.nav-second-level -->
                      </li>
                      <li>
                        <a href="<?php echo base_url('admin/BestSellings') ?>"><i class="fa fa-opencart fa-fw"></i>Best Sellings</a>
                        <!-- /.nav-second-level -->
                      </li>
                      <li>
                        <a href="<?php echo base_url('admin/NewArrivals') ?>"><i class="fa fa-paper-plane-o fa-fw"></i>New Arrivals</a>
                        <!-- /.nav-second-level -->
                      </li>

<!-- 
                        <li>
                            <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="flot.html">Flot Charts</a>
                                </li>
                                <li>
                                    <a href="morris.html">Morris.js Charts</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                           <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>
                       </li>
                       <li>
                           <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>
                       </li>
                       <li>
                           <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>
                           <ul class="nav nav-second-level">
                               <li>
                                   <a href="panels-wells.html">Panels and Wells</a>
                               </li>
                               <li>
                                   <a href="buttons.html">Buttons</a>
                               </li>
                               <li>
                                   <a href="notifications.html">Notifications</a>
                               </li>
                               <li>
                                   <a href="typography.html">Typography</a>
                               </li>
                               <li>
                                   <a href="icons.html"> Icons</a>
                               </li>
                               <li>
                                   <a href="grid.html">Grid</a>
                               </li>
                           </ul>
                           /.nav-second-level
                       </li>
                       <li>
                           <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                           <ul class="nav nav-second-level">
                               <li>
                                   <a href="#">Second Level Item</a>
                               </li>
                               <li>
                                   <a href="#">Second Level Item</a>
                               </li>
                               <li>
                                   <a href="#">Third Level <span class="fa arrow"></span></a>
                                   <ul class="nav nav-third-level">
                                       <li>
                                           <a href="#">Third Level Item</a>
                                       </li>
                                       <li>
                                           <a href="#">Third Level Item</a>
                                       </li>
                                       <li>
                                           <a href="#">Third Level Item</a>
                                       </li>
                                       <li>
                                           <a href="#">Third Level Item</a>
                                       </li>
                                   </ul>
                                   /.nav-third-level
                               </li>
                           </ul>
                           /.nav-second-level
                       </li>
                       <li>
                           <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>
                           <ul class="nav nav-second-level">
                               <li>
                                   <a href="blank.html">Blank Page</a>
                               </li>
                               <li>
                                   <a href="login.html">Login Page</a>
                               </li>
                           </ul>
                           /.nav-second-level
                         </li> -->
                       </ul>
                     </div>
                     <!-- /.sidebar-collapse -->
                   </div>
                   <!-- /.navbar-static-side -->
                 </nav>

                 <script>

                  function load_unseen_notification()
                  {

                     $.ajax({

                        url:"<?php echo base_url(); ?>" + "admin/Message/total_view",
                        method:"POST",
                        dataType:"json",
                        success:function(data)

                        {

                          if(data.message_c>$('#message_label').html() || data.order_c >  $('#order_label').html()){

                             var audio = new Audio('<?php echo base_url("assets/notifi.mp3"); ?>');
                             audio.play();

                          }
                          $('#message_label').html(data.message_c);
                          $('#order_label').html(data.order_c);

                        }

                     });

                  }

                  setInterval(function(){
                    load_unseen_notification();
                  }, 5000);


                </script>