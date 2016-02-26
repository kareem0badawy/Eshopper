<!DOCTYPE html>
<html>
<head>
</head>
   <?php $this->load->view('Admin/include/header'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <?php $this->load->view('Admin/include/nav'); ?>
              <section class="content-header">
          <i class="fa fa-database" style="font-size:24px">&nbsp;&nbsp;Sections</i>
             <br>
             <br>
               <a href="<?php echo site_url("Controlpanel/sections_create")?>" class="btn btn-primary">
              Careate Sections
               </a>
         
        </section>
        <br>
             <br>
    <table class="table table-striped table-hover">
    <thead style="background-color: #E74C3C; font-size: 15px">
      <tr class="active">
        <td>Number</td>
         <td>Name</td>
        <td>Parent Section</td>
        <td>Sort</td>
        <td>Status</td>
        <td>Actions</td>

      </tr>
    </thead>
    <tbody>
    <?php 
    foreach ($categories as $key => $row):?>
    
          <tr>
        <td>
        <?php echo ++$key ?>
        </td>
        <td style='width:150px'>
         
         <?php echo $row->category_name ?>
        </td>
        <td>
          <?php echo $row->parent_section ?>
        </td>
        <td>
          <?php echo $row->sort ?>
        </td>
        
        <td>
        <?php if($row->status==1) :?>
        <span class='label label-success'style="font-size: 15px">Active</span>
      <?php else: ?>
         <span class='label label-warning' style="font-size: 15px">Hidden</span>
       <?php endif;?>
        </td>
          <td>
              <a class="btn btn-primary" href="<?php echo site_url('Controlpanel/sections_edit/'.$row->category_id) ?>"><i class="fa fa-pencil-square-o"></i></a>
              <a class="btn btn-danger"  href="<?php echo site_url('Controlpanel/sections_delete/'.$row->category_id)?>"><i class="fa fa fa-trash"></i></a>
            </td>
      </tr>
         
        </tbody>
        <?php endforeach;?>
  </table>

     
      </div>

     <?php $this->load->view('Admin/include/footer'); ?>
  </body>
</html>
