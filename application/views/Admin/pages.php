<!DOCTYPE html>
<html>
  <?php $this->load->view('Admin/include/header'); ?>



  <?php $this->load->view('Admin/include/nav'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
              <section class="content-header">
          <i class="fa fa-sliders" style="font-size:24px">&nbsp;&nbsp;Pages</i>
             <br>
             <br>
               <a href="<?php echo site_url('Controlpanel/editPage');?>" class="btn btn-danger">
               Create Pages
               </a>
         
        </section>
        <br>
             <br>
    <table class="table table-striped table-hover">   <thead style="background-color: #E74C3C; font-size: 15px">
     <tr class="active">
        <td>Number</td>
        <td>Title</td>
        <td>Title(عربى)</td>
        <td>Link</td>
        <td>Actions</td>
      </tr>
    </thead>
    <tbody>

    <?php
    foreach ($pages as $key => $row) :?>
     
          <tr>
           <td>
        <?php echo ++$key ?>
        </td>
        <td>
        <?php echo $row->titleEN ?>
        </td>
        <td style='width:150px'>
         <?php echo $row->titleAR ?>
        </td>
        <td>
        <?php echo $row->link ?>
        </td>
          <td>
              <a class="btn btn-primary" href="<?php echo site_url('Controlpanel/editPage/'.$row->id);?>"><i class="fa fa-pencil-square-o"></i></a>
              <a class="btn btn-danger"  href="<?php echo site_url('Controlpanel/deletePage/'.$row->id);?>"><i class="fa fa fa-trash"></i></a>
            </td>
      </tr>
         
        </tbody>
  <?php endforeach;?>
  </table>

     
      </div><!-- /.content-wrapper -->


     <?php $this->load->view('Admin/include/footer'); ?>

</html>
