<!DOCTYPE html>
<html>
  <?php $this->load->view('Admin/include/header'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
              <section class="content-header">
          <i class="fa fa-sliders" style="font-size:24px">&nbsp;&nbsp;Bottom Links</i>
             <br>
             <br>
               <a href="<?php echo site_url('Controlpanel/footer_create');?>" class="btn btn-danger">
               Create Link
               </a>
         
        </section>
          <?php $this->load->view('Admin/include/nav'); ?>
        <br>
             <br>
    <table class="table table-striped table-hover">
    <thead style="background-color: #E74C3C; font-size: 15px">
      <tr class="active">
        <td>Number</td>
        <td>Title</td>
        <td>Parent</td>
        <td>Status</td>
        <td>Actions</td>
      </tr>
    </thead>
    <tbody>
    <?php
      foreach ($footer as $key => $row) :?>
        
    
        <tr>
        <td>
        <?php echo ++$key ?>
        </td>
        <td style='width:150px'>
        <?php echo $row->title ?>
        </td>
        <td>
        <?php if($row->parent==1):?>
        <span>Home</span>
        <?php else:?>
        <span>Test</span>          
        </td>
      <?php endif ;?>
          <td>
          <?php if($row->status==1):?>
         <span class='label label-success'style="font-size: 10px">Active</span>
       <?php else :?>
         <span class='label label-warning' style="font-size: 10px">Hidden</span>
            </td>
          <?php endif;?> 
        <td>

              <a class="btn btn-primary" href="<?php echo site_url('Controlpanel/footer_edit/'.$row->id) ;?>"><i class="fa fa-pencil-square-o"></i></a>
              <a class="btn btn-danger"  href="<?php echo site_url('Controlpanel/footer_delete/'.$row->id) ;?>"><i class="fa fa fa-trash"></i></a>

        </td>
       
      </tr>

        </tbody>
         <?php endforeach;?>
  </table>

     
      </div><!-- /.content-wrapper -->


      <!-- Control Sidebar -->

      


     <?php $this->load->view('Admin/include/footer'); ?>
  </body>
</html>
