<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Config</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url('styles/bootstrap/css/bootstrap.min.css')?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('styles/dist/css/AdminLTE.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('styles/dist/css/AdminLTE.css')?>">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo base_url('styles/dist/css/skins/_all-skins.min.css')?>">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('styles/plugins/iCheck/flat/blue.css')?>">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url('styles/plugins/morris/morris.css')?>">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url('styles/plugins/jvectormap/jquery-jvectormap-1.2.2.css')?>">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url('styles/plugins/datepicker/datepicker3.css')?>">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url('styles/plugins/daterangepicker/daterangepicker-bs3.css')?>">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url('styles/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')?>">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

      <header class="main-header">
        <!-- Logo -->
        <a href="<?php echo base_url("Home/index")?>" class="logo">

          <!-- mini logo for sidebar mini 50x50 pixels -->

          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <i class="fa fa-user-secret" style="font-size: 24px">
          <span class="logo-lg"><b>Admin </b>Panel</span>
          </i>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
        
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <!--<img src="<?php echo base_url('styles/dist/img/user2-160x160.jpg')?>" class="img-circle" alt="User Image">-->
            </div>

          </div>
          <!-- search form -->

          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->

          <ul class="sidebar-menu">
           <!-- <li class="header">MAIN NAVIGATION</li>-->
            
           

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
                <i class="fa fa-sliders" style="font-size: 24px"></i> <span>&nbsp;&nbsp;Home Slider</span>
              </a>

              </li>
            <li class="treeview">
              <a href="<?php echo site_url("Controlpanel/bottom_links")?>">
                <i class="fa fa-keyboard-o"style="font-size: 24px"></i> <span>&nbsp;&nbsp;Footer Links</span>
              </a>

            </li>
           </li>
            <li class="treeview">
              <a href="<?php echo site_url("Controlpanel/pages")?>">
                <i class="fa fa-keyboard-o"style="font-size: 24px"></i> <span>&nbsp;&nbsp;Pages</span>
              </a>
            <!--StartDashboard-->
               <li class="treeview">
              <a href="<?php echo site_url("Controlpanel/panel")?>">
                <i class="fa fa-dashboard"></i> <span>Data</span><i class="fa fa-angle-left pull-right"></i>
              </a>

              <ul class="treeview-menu">
                <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Dashboard</a></li>

                <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
               <a href="#">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              </ul>
                <ul class="treeview-menu">
                <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
                <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
              </ul>
            </li>

            <!--EndtDashboard-->

      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <i class="fa fa-sliders" style="font-size: 24px">&nbsp;&nbsp;Footer Links</i>

        </section>

        <!-- Main content -->

<a href="">Create</a>
  <!-- Table -->
 <table class="table table-bordered" bgcolor="#000000">
    <thead>
      <tr>
        <td>#</td>
        <td>image</td>
        <td>Title</td>
        <td>Link</td>
        <td>Status</td>
        <td>Actions</td>
      </tr>
    </thead>
    <tbody>
          <tr>
        <td>1</td>
        <td style='width:150px'><img src="http://www.nerdsarena.com/wow/uploads/slider/vsNp4g.png.png" style='width:150px;height:100px;'></td>
        <td>New Slider</td>
        <td></td>
        <td><span class='label label-success'>active</span></td>
        <td>
                    <a class="btn btn-primary" href="http://www.nerdsarena.com/wow/panel/slider/1/edit"><span
                                class="fa fa-edit"></span></a>

                    <form method="post" action=" http://www.nerdsarena.com/wow/panel/slider/1/delete" style="display: inline;">
                        <input type="hidden" name="_token" value="j5Xm4PtqUcINm409wdyhEmRBQd9Liqg6oSNh9HAK">
                        <button class="btn btn-danger"><span class="fa fa-trash"></span></button>
                    </form>
                </td>
      </tr>
          <tr>
        <td>12</td>
        <td style='width:150px'><img src="http://www.nerdsarena.com/wow/uploads/slider/2p08vKaslide-img1.jpg.jpg" style='width:150px;height:100px;'></td>
        <td>New One</td>
        <td></td>
        <td><span class='label label-success'>active</span></td>
        <td>
                    <a class="btn btn-primary" href="http://www.nerdsarena.com/wow/panel/slider/12/edit"><span
                                class="fa fa-edit"></span></a>

                    <form method="post" action=" http://www.nerdsarena.com/wow/panel/slider/12/delete" style="display: inline;">
                        <input type="hidden" name="_token" value="j5Xm4PtqUcINm409wdyhEmRBQd9Liqg6oSNh9HAK">
                        <button class="btn btn-danger"><span class="fa fa-trash"></span></button>
                    </form>
                </td>
      </tr>
          <tr>
        <td>13</td>
        <td style='width:150px'><img src="http://www.nerdsarena.com/wow/uploads/slider/WV1fQvGslide-img2.jpg.jpg" style='width:150px;height:100px;'></td>
        <td>New Slider</td>
        <td></td>
        <td><span class='label label-success'>active</span></td>
        <td>
                    <a class="btn btn-primary" href="http://www.nerdsarena.com/wow/panel/slider/13/edit"><span
                                class="fa fa-edit"></span></a>

                    <form method="post" action=" http://www.nerdsarena.com/wow/panel/slider/13/delete" style="display: inline;">
                        <input type="hidden" name="_token" value="j5Xm4PtqUcINm409wdyhEmRBQd9Liqg6oSNh9HAK">
                        <button class="btn btn-danger"><span class="fa fa-trash"></span></button>
                    </form>
                </td>
      </tr>
          <tr>
        <td>14</td>
        <td style='width:150px'></td>
        <td>تجربة صورة</td>
        <td></td>
        <td><span class='label label-success'>active</span></td>
        <td>
                    <a class="btn btn-primary" href="http://www.nerdsarena.com/wow/panel/slider/14/edit"><span
                                class="fa fa-edit"></span></a>

                    <form method="post" action=" http://www.nerdsarena.com/wow/panel/slider/14/delete" style="display: inline;">
                        <input type="hidden" name="_token" value="j5Xm4PtqUcINm409wdyhEmRBQd9Liqg6oSNh9HAK">
                        <button class="btn btn-danger"><span class="fa fa-trash"></span></button>
                    </form>
                </td>
      </tr>
        </tbody>
  </table>
  <!--End Table>
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
         
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://www.nerdsarena.com/"target="_blank">Kareem badawy</a>.</strong> All rights reserved.
      </footer>


    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="<?php echo base_url('styles/plugins/jQuery/jQuery-2.1.4.min.js')?>"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="<?php echo base_url('styles/bootstrap/js/bootstrap.min.js')?>"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js')?>"></script>
    <script src="<?php echo base_url('styles/plugins/morris/morris.min.js')?>"></script>
    <!-- Sparkline -->
    <script src="<?php echo base_url('styles/plugins/sparkline/jquery.sparkline.min.js')?>"></script>
    <!-- jvectormap -->
    <script src="<?php echo base_url('styles/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')?>"></script>
    <script src="<?php echo base_url('styles/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')?>"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo base_url('styles/plugins/knob/jquery.knob.js')?>"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="<?php echo base_url('styles/plugins/daterangepicker/daterangepicker.js')?>"></script>
    <!-- datepicker -->
    <script src="<?php echo base_url('styles/plugins/datepicker/bootstrap-datepicker.js')?>"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="<?php echo base_url('styles/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')?>"></script>
    <!-- Slimscroll -->
    <script src="<?php echo base_url('styles/plugins/slimScroll/jquery.slimscroll.min.js')?>"></script>
    <!-- FastClick -->
    <script src="<?php echo base_url('styles/plugins/fastclick/fastclick.min.js')?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('styles/dist/js/app.min.js')?>"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo base_url('styles/dist/js/pages/dashboard.js')?>"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="d<?php echo base_url('styles/ist/js/demo.js')?>"></script>
  </body>
</html>
