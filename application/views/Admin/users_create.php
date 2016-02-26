<!DOCTYPE html>
<html>
  <?php $this->load->view('Admin/include/header'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">

       <?php $this->load->view('Admin/include/nav'); ?>

        <br>
        <br>

      <form class="form-horizontal" action="<?php echo site_url('Controlpanel/users_create');?>" method="post">
            <fieldset>

                <div class="clear"><br/><br/></div>
                <!-- Text Title-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Name</label>
                    <div class="col-md-4">
                        <input id="textinput" name="name" type="text"  class="form-control input-md">
                    </div>
                </div>
                
                <!-- Text Content-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Username</label>
                    <div class="col-md-4">
                        <input id="textinput" name="username" type="text"  class="form-control input-md">
                    </div>
                </div>
                     <!-- Text Link-->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput">Email</label>
                    <div class="col-md-4">
                        <input id="textinput" name="email" type="text"  class="form-control input-md">
                    </div>
                </div>
               <!-- Password input-->

				<div class="form-group">
				  <label class="col-md-4 control-label" for="passwordinput">Password</label>
				  <div class="col-md-4">
				    <input id="passwordinput" name="password" type="password" class="form-control input-md">
				  </div>
				</div>

             <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Role</label>
                    <div class="col-md-4">
                        <select id="selectbasic" name="role" class="form-control">
                            <option value="Normal User">Normal User</option>
                            <option value="User Administrator">User Administrator</option>

                        </select>
                    </div>
                </div>

                <!-- Select Status -->
                <div class="form-group">
                    <label class="col-md-4 control-label" for="selectbasic">Status</label>
                    <div class="col-md-4">
                        <select id="selectbasic" name="active" class="form-control">
                            <option value="0">De Active</option>
                            <option value="1">Active</option>
                            <option value="2">Blocked</option>

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
