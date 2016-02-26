<!DOCTYPE html>
<html>
  <?php $this->load->view('Admin/include/header'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

       <?php $this->load->view('Admin/include/nav'); ?>

              <section class="content-header">
          <i class="fa fa-sliders" style="font-size:24px">&nbsp;&nbsp;Create New footer</i>
             <br>
             <br>
              
         
        </section>
        <br>
        <br>
      <form class="form-horizontal" action="<?php echo site_url('Controlpanel/footer_create');?>" method="post">
            <fieldset>

                <div class="clear"><br/><br/></div>
                <!-- Text Title-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Title</label>
                    <div class="col-md-4">
                        <input id="textinput" name="title" type="text"  class="form-control input-md">
                    </div>
                </div>
                
 
                     <!-- Text Link-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Link</label>
                    <div class="col-md-4">
                        <input id="textinput" name="link" type="text"  class="form-control input-md">
                    </div>
                </div>
                   <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Parent</label>
                    <div class="col-md-4">
                        <select id="selectbasic" name="parent" class="form-control" >
                            <option value="">Choose Parent</option>
                            <option value="1">Home</option>
                            <option value="0">Test</option>

                        </select>
                    </div>
                </div>

                 <!-- File Image --> 
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Sort</label>
                    <div class="col-md-4">
                        <input  name="sort" type="number"  class="form-control input-md">
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
                        <input type="submit" id="singlebutton" name="Create" class="btn btn-primary" style="font-size: 20px"></input>
                    </div>
                </div>
            </fieldset>
           </form> 

     
  


    </div><!-- ./wrapper -->

   <?php $this->load->view('Admin/include/footer'); ?>
  </body>
</html>
