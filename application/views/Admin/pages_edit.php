<!DOCTYPE html>
<html>
  <?php $this->load->view('Admin/include/header'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

       <?php $this->load->view('Admin/include/nav'); ?>

              <section class="content-header">
          <i class="fa fa-sliders" style="font-size:24px">&nbsp;&nbsp;Edit Page</i>
             <br>
             <br>
              
         
        </section>
        <br>
        <br>
        <?php if($result):?>
          <?php foreach($result as $row):?>
      <form class="form-horizontal" action="<?php echo site_url("Controlpanel/pages_edit/$id");?>" method="post">
            <fieldset>

                <div class="clear"><br/><br/></div>
                <!-- Text Title-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Title ( عربي )</label>
                    <div class="col-md-6">
                        <input id="textinput" value="<?php echo $row->titleAR ?>" name="titleAR" type="text"  class="form-control input-md">
                    </div>
                </div>
                
 
                     <!-- Text Link-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Title ( english )</label>
                    <div class="col-md-6">
                        <input id="textinput" value="<?php echo $row->titleEN?>" name="titleEN" type="text"  class="form-control input-md">
                    </div>
                </div>


                 <!-- File Image --> 
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">link</label>
                    <div class="col-md-6">
                        <input id="textinput" value="<?php echo $row->link ?>" name="link" type="text"  class="form-control input-md">
                    </div>
                </div>

                   <!-- File Image --> 
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Content ( عربي )</label>
                    <div class="col-md-6">
                        <textarea id="textinput" value="<?php echo $row->contentAR ?>" name="contentAR" type="text"  class="form-control"></textarea>
                    </div>
                </div>

                   <!-- File Image --> 
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Content ( english )</label>
                    <div class="col-md-6">
                        <textarea id="textinput" value="<?php echo $row->contentEN ?>" name="contentEN" type="text"  class="form-control"></textarea>
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

     
  


    </div><!-- ./wrapper -->
<?php endforeach ;?>
<?php endif ;?>
   <?php $this->load->view('Admin/include/footer'); ?>
  </body>
</html>
