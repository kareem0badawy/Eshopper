<!DOCTYPE html>
<html>
  <?php $this->load->view('Admin/include/header'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

       <?php $this->load->view('Admin/include/nav'); ?>

              <section class="content-header">
          <i class="fa fa-sliders" style="font-size:24px">&nbsp;&nbsp;Create New Slider</i>
             <br>
             <br>
              
         
        </section>
        <br>
        <p><?php echo $errors?></p>
        <br>
        <?php if ($result) :?>
        	<?php foreach($result as $row): ?>
      <form class="form-horizontal" enctype="multipart/form-data" action="<?php echo site_url("Controlpanel/slider_edit/$id");?>" method="post">
            <fieldset>

                <div class="clear"><br/><br/></div>
                <!-- Text Title-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Title</label>
                    <div class="col-md-4">
                        <input value="<?php echo $row->title ;?>" id="textinput" name="title" type="text"  class="form-control input-md">
                    </div>
                </div>
                
                <!-- Text Content-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Content</label>
                    <div class="col-md-4">
                        <input value="<?php echo $row->content ;?>" id="textinput" name="content" type="text"  class="form-control input-md">
                    </div>
                </div>
                     <!-- Text Link-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Link</label>
                    <div class="col-md-4">
                        <input value="<?php echo $row->link ;?>" id="textinput" name="link" type="text"  class="form-control input-md">
                    </div>
                </div>
                 <!-- File Image --> 
                <div class="form-group">
                  <label class="col-md-4 control-label" for="filebutton">Image</label>
                  <div class="col-md-4">
                    <input value="<?php echo $row->pictures ;?>" name="pic" class="form-control"  type="file">
                  </div>
                </div>
                <!-- Select Status -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Status</label>
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
                        <input type="submit" id="singlebutton" name="edit" class="btn btn-primary" style="font-size: 20px"></input>
                    </div>
                </div>
            </fieldset>
           </form> 

     
<?php endforeach; ?>
<?php endif; ?>

    </div><!-- ./wrapper -->

   <?php $this->load->view('Admin/include/footer'); ?>
  </body>
</html>
