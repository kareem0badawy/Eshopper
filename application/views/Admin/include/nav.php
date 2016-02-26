

        <!-- sidebar: style can be found in sidebar.less -->
<aside class="main-sidebar">
<section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">

          <ul class="sidebar-menu">

          <li>
              <a href="<?php echo site_url("Home/index")?>" target="_blank">
                <i class="fa fa-home" style="font-size: 24px"></i> <span>&nbsp;&nbsp;Home</span> <small class="label pull-right bg-green"></small>
              </a>
            </li>
            <li>
              <a href="<?php echo site_url("Controlpanel/panel")?>">
                <i class="fa fa-dashboard" style="font-size: 24px"></i>
                <span>&nbsp;&nbsp;Dashboard</span>
              </a>

            </li>
            <li class="treeview">
            <a href="<?php echo site_url("Controlpanel/config")?>">
              
                <i class="fa fa-laptop"style="font-size: 24px"></i>
                <span>&nbsp;&nbsp;App Configuration</span>
              </a>

            </li>
            <li class="treeview">
              <a href="<?php echo site_url("Controlpanel/slider")?>">
                <i class="fa fa-sliders"style="font-size: 24px"></i> <span>&nbsp;&nbsp;Home Slider</span>
              </a>

              </li>
            <li class="treeview">
              <a href="<?php echo site_url("Controlpanel/footer")?>">
                <i class="fa fa-keyboard-o"style="font-size: 24px"></i> <span>&nbsp;&nbsp;Footer Links</span>
              </a>

            </li>
           </li>
            <li class="treeview">
              <a href="<?php echo site_url("Controlpanel/pages")?>">
                <i class="fa fa-keyboard-o"style="font-size: 24px"></i> <span>&nbsp;&nbsp;Pages</span>
              </a>
              </li> 

            <!--StartDashboard-->
               <li class="treeview">
              <a href="<?php echo site_url("Controlpanel/panel")?>">
                <i class="fa fa-database" style="font-size: 24px"></i> <span>&nbsp;&nbsp;Sections</span><i class="fa fa-angle-left pull-right"></i>
              </a>

              <ul class="treeview-menu">
                <li><a href="<?php echo site_url('Controlpanel/sections');?>">All</a></li>
                <li><a href="<?php echo site_url('Controlpanel/sections_create');?>">Create</a></li>
              </ul>
              </li> 


              <li class="treeview">
              <a href="<?php echo site_url("Controlpanel/pages")?>">
                <i class="fa fa-openid"style="font-size: 24px"></i> <span>&nbsp;&nbsp;Products</span><i class="fa fa-angle-left pull-right"></i>
              </a>
               <ul class="treeview-menu">
                <li><a href="<?php echo site_url('Controlpanel/products');?>">All</a></li>

                <li><a href="<?php echo site_url('Controlpanel/products_create');?>">Create</a></li>
              </ul>
              </li> 

               <li class="treeview">
              <a href="<?php echo site_url("Controlpanel/pages")?>">
                <i class="fa fa-gift"style="font-size: 24px"></i> <span>&nbsp;&nbsp;Offers</span><i class="fa fa-angle-left pull-right"></i>
              </a>
               <ul class="treeview-menu">
                <li><a href="#">All</a></li>

                <li><a href="#">Create</a></li>
              </ul>
              </li> 

                <li class="treeview">
              <a href="<?php echo site_url("Controlpanel/pages")?>">
                <i class="fa fa-toggle-on"style="font-size: 24px"></i> <span>&nbsp;&nbsp;Orders</span><i class="fa fa-angle-left pull-right"></i>
              </a>
               <ul class="treeview-menu">
                <li>
                    <a href="<?php echo site_url('Controlpanel/orders');?>"><i class="fa fa-database">&nbsp;&nbsp;All</i></a>
                </li>

                <li>
                      <a href="#"><i class="fa fa-plus">&nbsp;&nbsp;New Orders</i></a>
                </li>
                <li>
                     <a href="#"><i class="fa fa-check">&nbsp;&nbsp;Delivered</i></a>
                </li>

                <li>
                      <a href="#"><i class="fa fa-truck">&nbsp;&nbsp;On Delivered</i></a>
                </li>
                   <li>
                        <a href="#"><i class="fa fa-reply">&nbsp;&nbsp;Delivered Back</i></a>
                   </li>
                  
              </ul>
              </li> 

                <li class="treeview">
              <a href="<?php echo site_url("Controlpanel/pages")?>">
                <i class="fa fa-support"style="font-size: 24px"></i> <span>&nbsp;&nbsp;Tickets</span><i class="fa fa-angle-left pull-right"></i>
              </a>
               <ul class="treeview-menu">
                <li>
                    <a href="#"><i class="fa fa-database">&nbsp;&nbsp;All</i></a>
                </li>

                <li>
                      <a href="#"><i class="fa fa-plus-circle">&nbsp;&nbsp;New Tickets</i></a>
                </li>
                <li>
                     <a href="#"><i class="fa fa-minus-circle">&nbsp;&nbsp;Old Tickets</i></a>
                </li>

                <li>
                      <a href="#"><i class="fa fa-trash">&nbsp;&nbsp;Trashed</i></a>
                </li>
              </ul>
              </li> 

              <li class="treeview">
              <a href="<?php echo site_url("Controlpanel/pages")?>">
                <i class="fa fa-magnet"style="font-size: 24px"></i> <span>&nbsp;&nbsp;Ads Manager</span><i class="fa fa-angle-left pull-right"></i>
              </a>
               <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-institution">&nbsp;&nbsp;All</i></a></li>

                <li><a href="#"><i class="fa fa-plus-circle">&nbsp;&nbsp;Create</i></a></li>
              </ul>
              </li>

              <li class="treeview">
              <a href="">
                <i class="fa fa-users"style="font-size: 24px"></i> <span>&nbsp;&nbsp;Users</span><i class="fa fa-angle-left pull-right"></i>
              </a>
               <ul class="treeview-menu">
                <li>
                    <a href="<?php echo site_url("Controlpanel/users")?>"><i class="fa fa-users">&nbsp;&nbsp;All</i></a>
                </li>

                <li>
                      <a href="<?php echo site_url("Controlpanel/manager")?>"><i class="fa fa-user-secret">&nbsp;&nbsp;Managers</i></a>
                </li>
                <li>
                     <a href="<?php echo site_url('Controlpanel/normal');?>"><i class="fa fa-user">&nbsp;&nbsp;User</i></a>
                </li>

                <li>
                      <a href="#"><i class="fa fa-arrows-h">&nbsp;&nbsp;User Address</i></a>
                </li>
              </ul>
              </li> 
      </aside>

