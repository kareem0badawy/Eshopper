<!DOCTYPE html>
<html>
  <?php $this->load->view('Admin/include/header'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

       <?php $this->load->view('Admin/include/nav'); ?>

              <section class="content-header">
          <i class="fa fa-sliders" style="font-size:24px">&nbsp;&nbsp;Create New Pages</i>
             <br>
             <br>
              
         
        </section>
        <br>
        <br>
      <form class="form-horizontal" action="<?php echo site_url('Controlpanel/Pages_create');?>" method="post">
            <fieldset>

                <div class="clear"><br/><br/></div>
                <!-- Text Title-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Title ( عربي )</label>
                    <div class="col-md-4">
                        <input id="textinput" name="titleAR" type="text"  class="form-control input-md">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Title ( english )</label>
                    <div class="col-md-4">
                        <input id="textinput" name="titleEN" type="text"  class="form-control input-md">
                    </div>
                </div>
 
                     <!-- Text Link-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Link</label>
                    <div class="col-md-4">
                        <input id="textinput" name="link" type="text"  class="form-control input-md" placeholder="page/your_page_name">
                    </div>
                </div>


                 <!-- File Image --> 
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Content ( عربي )</label>
                    <div class="col-md-4">
                        <input id="textinput" name="contentAR" type="text"  class="form-control input-md">
                    </div>
                </div>

                          <!-- Text Link-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Content ( english )</label>
                    <div class="col-md-4">
                        <input id="textinput" name="contentEN" type="text"  class="form-control input-md">
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
