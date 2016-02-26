<!DOCTYPE html>
<html>
  <?php $this->load->view('Admin/include/header'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

       <?php $this->load->view('Admin/include/nav'); ?>

              <section class="content-header">
          <i class="fa fa-openid" style="font-size:24px">&nbsp;&nbsp;Create New Product</i>
             <br>
             <br>
          
         
        </section>
        <br>
        <br>

      <form class="form-horizontal" action="<?php echo site_url('Controlpanel/products_create');?>" method="post">
            <fieldset>
                <div class="clear"><br/><br/></div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Select Section</label>
                    <div class="col-md-4">
                       
                        <select id="selectbasic" name="category_id" class="form-control">
                        	<option value="">Please Select Sections</option>
                            <option value="1">Men</option>
                            <option value="2">Women</option>
                            <option value="3">Kids</option>
                            <option value="4">mobiles</option>
                            <option value="5">Tablet</option>
                            <option value="6">Camera</option>
                        </select>
                    </div>
                </div>
            
                <!-- Text Title-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Name</label>
                    <div class="col-md-4">
                        <input id="textinput" name="product_name" type="text"  class="form-control input-md">
                    </div>
                </div>
                
 
                     <!-- Text Link-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Description</label>
                    <div class="col-md-4">
                        <input id="textinput" name="description" type="text"  class="form-control input-md">
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
                        <input type="submit" id="singlebutton" name="create" class="btn btn-primary" style="font-size: 20px"></input>
                    </div>
                </div>
            </fieldset>
           </form>
    </div><!-- ./wrapper -->

   <?php $this->load->view('Admin/include/footer'); ?>
  </body>
</html>
