<!DOCTYPE html>
<html>

  <?php $this->load->view('Admin/include/header'); ?>

  <body class="hold-transition skin-blue sidebar-mini">


    <div class="wrapper">


  <?php $this->load->view('Admin/include/nav'); ?>

      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            App Configuration  
         </h1>
        </section>
        <div >
          <p ><?php echo  $errors . validation_errors(); ?></p>
        </div>

        <!-- StartForm -->
        <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url('Controlpanel/config');?>" method="post">
            <fieldset>

                <div class="clear"><br/><br/></div>
                <!-- Text Title-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">site name</label>
                    <div class="col-md-4">
                        <input id="textinput" name="name" type="text"  class="form-control input-md">
                    </div>
                </div>
                
                <!-- Text Author-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">site description</label>
                    <div class="col-md-4">
                        <input id="textinput" name="description" type="text"  class="form-control input-md">
                    </div>
                </div>
                     <!-- Text Author-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">site keywords</label>
                    <div class="col-md-4">
                        <input id="textinput" name="keywords" type="text"  class="form-control input-md">
                    </div>
                </div>

                       <!-- Text Author-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">site email</label>
                    <div class="col-md-4">
                        <input id="textinput" name="email" type="text"  class="form-control input-md">
                    </div>
                </div>

                     <!-- Text Author-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">site phone</label>
                    <div class="col-md-4">
                        <input id="textinput" name="phone" type="text"  class="form-control input-md">
                    </div>
                </div>
                    <!-- Text Author-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">site top phone</label>
                    <div class="col-md-4">
                        <input id="textinput" name="topphone" type="text"  class="form-control input-md">
                    </div>
                </div>
                     <!-- Text Author-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">top policy title</label>
                    <div class="col-md-4">
                        <input id="textinput" name="policytitle" type="text"  class="form-control input-md">
                    </div>
                </div>

                     <!-- Text Author-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">top policy link</label>
                    <div class="col-md-4">
                        <input id="textinput" name="policylink" type="text"  class="form-control input-md">
                    </div>
                </div>

                     <!-- Text Author-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Return Purchases for free title</label>
                    <div class="col-md-4">
                        <input id="textinput" name="freetitle" type="text"  class="form-control input-md">
                    </div>
                </div>
                                     <!-- Text Author-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Return Purchases for free link</label>
                    <div class="col-md-4">
                        <input id="textinput" name="freelink" type="text"  class="form-control input-md">
                    </div>
                </div>
                 <!-- File Button --> 
                <div class="form-group">
                  <label class="col-md-4 control-label" for="filebutton">site logo</label>
                  <div class="col-md-4">
                    <input id="filebutton" name="logo" class="form-control" type="file">
                  </div>
                </div>

                  <!-- File Button --> 
                <div class="form-group">
                  <label class="col-md-4 control-label" for="filebutton">Site Favicon</label>
                  <div class="col-md-4">
                    <input id="filebutton" name="favicon" class="form-control" type="file">
                  </div>
                </div>
                <!-- Select Active Or Un Active -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Show Blog In Home Page</label>
                    <div class="col-md-4">
                        <select id="selectbasic" name="show" class="form-control">
                            <option value="1">Show</option>
                            <option value="0">Hide</option>

                        </select>
                    </div>
                </div>

                <!-- Button Add -->
                <div class="form-group">

                    <label class="col-md-4 control-label" for="singlebutton"></label>
                    <div class="col-md-4">
                        <input type="submit" id="singlebutton" value="Update" name="Update" class="btn btn-primary" style="font-size: 20px"></input>
                    </div>
                </div>
            </fieldset>
        </form>   
        <!--EndForm-->  
      </div><!-- /.content-wrapper -->


    <?php $this->load->view('Admin/include/footer'); ?>
  </body>
</html>
