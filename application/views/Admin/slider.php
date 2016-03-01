<!DOCTYPE html>
<html>
<head>
</head>
   <?php $this->load->view('Admin/include/header'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <?php $this->load->view('Admin/include/nav'); ?>
              <section class="content-header">
          <i class="fa fa-sliders" style="font-size:24px">&nbsp;&nbsp;Home Slider</i>
             <br>
             <br>
               <a href="<?php echo site_url("Controlpanel/slider_create")?>" class="btn btn-primary">
               Create Slider
               </a>
         
        </section>
        <br>
             <br>
    <table class="table table-striped table-hover">
    <thead style="background-color: #E74C3C; font-size: 15px">
      <tr class="active">
        <td>Number</td>
         <td>image</td>
        <td>Title</td>
        <td>Link</td>
        <td>Status</td>
        <td>Actions</td>

      </tr>
    </thead>
    <tbody>
    <?php 
    foreach ($slider as $key => $row):?>
    
          <tr>
        <td>
                <?php echo ++$key ?>
        </td>
        <td>

         <img style="width:150px;height:80px" src="<?php echo site_url('uploads/'.$row->pictures);?>" />
         
        </td>
 

        <td>
          <?php echo $row->title ?>
        </td>
        <td>
          <?php echo $row->link ?>
        </td>
      
        <td>
        <?php if($row->status==1) :?>
        <span class='label label-success'style="font-size: 15px">Active</span>
      <?php else: ?>
         <span class='label label-warning' style="font-size: 15px">Hidden</span>
       <?php endif;?>
        </td>
          <td>
              <a class="btn btn-primary" href="<?php echo site_url('Controlpanel/slider_edit/'.$row->id) ?>"><i class="fa fa-pencil-square-o"></i></a>
              <a class="btn btn-danger"  href="<?php echo site_url('Controlpanel/delete_slider/'.$row->id)?>"><i class="fa fa fa-trash"></i></a>
            </td>
      </tr>
         
        </tbody>
        <?php endforeach;?>
  </table>

     
      </div>

     <?php $this->load->view('Admin/include/footer'); ?>
  </body>
</html>
