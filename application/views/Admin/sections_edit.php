<!DOCTYPE html>
<html>
  <?php $this->load->view('Admin/include/header'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

       <?php $this->load->view('Admin/include/nav'); ?>

              <section class="content-header">
          <i class="fa fa-database" style="font-size:24px">&nbsp;&nbsp;Edit Sections</i>
             <br>
             <br>
              
         
        </section>
        <br>
        <br>
        <?php if($result):?>
          <?php foreach ($result as $value):?>
      <form class="form-horizontal" action="<?php echo site_url("Controlpanel/sections_edit/$id");?>" method="post">
            <fieldset>

                <div class="clear"><br/><br/></div>
                <!-- Text Title-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Name</label>
                    <div class="col-md-4">
                        <input id="textinput" value="<?php echo $value->category_name?>" name="name" type="text"  class="form-control input-md">
                    </div>
                </div>
                
 
                     <!-- Text Link-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Description</label>
                    <div class="col-md-4">
                        <input id="textinput" value="<?php echo $value->description?>" name="description" type="text"  class="form-control input-md">
                    </div>
                </div>

                 <!-- File Image --> 
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Sort</label>
                    <div class="col-md-4">
                        <input  name="sort" value="<?php echo $value->sort?>" type="number"  class="form-control input-md">
                    </div>
                </div>

                <!-- Select Status -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Status</label>
                    <div class="col-md-4">
                        <select id="selectbasic" name="status" class="form-control">
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

     
  

<?php endforeach ;?>
<?php endif ;?>
    </div><!-- ./wrapper -->

   <?php $this->load->view('Admin/include/footer'); ?>
  </body>
</html>
