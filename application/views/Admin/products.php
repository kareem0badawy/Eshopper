<!DOCTYPE html>
<html>
<head>
</head>
   <?php $this->load->view('Admin/include/header'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <?php $this->load->view('Admin/include/nav'); ?>
              <section class="content-header">
          <i class="fa fa-openid" style="font-size:24px">&nbsp;&nbsp;Products</i>
             <br>
             <br>
               <a href="<?php echo site_url("Controlpanel/Products_create")?>" class="btn btn-primary">
              Careate Product
               </a>
         
        </section>
        <br>
             <br>
    <table class="table table-striped table-hover">
    <thead style="background-color: #E74C3C; font-size: 15px">
      <tr class="active">
        <td>#</td>
         <td>Name</td>
        <td>icon</td>
        <td>Section</td>
        <td>Sort</td>
        <td>Actions</td>

      </tr>
    </thead>
    <tbody>
    <?php 
    foreach ($products as $key => $row):?>
    
          <tr>
        <td>
        <?php echo ++$key ?>
        </td>
        <td style='width:150px'>
         
         <?php echo $row->product_name?>
        </td>
        <td>
         <img style="width:150px;height:80px" src="<?php echo site_url('uploads/products/'.$row->product_image);?>" />
        </td>
        <td>
          <?php echo $row->category_name?>
        </td>
        <td>
         <?php echo $row->sort_product?>
        </td>
        
      
          <td>
              <a class="btn btn-primary" href="<?php echo site_url('Controlpanel/products_edit/'.$row->product_id) ?>"><i class="fa fa-pencil-square-o"></i></a>
              <a class="btn btn-danger"  href="<?php echo site_url('Controlpanel/products_delete/'.$row->product_id)?>"><i class="fa fa fa-trash"></i></a>
            </td>
      </tr>
         
        </tbody>
        <?php endforeach;?>
  </table>

     
      </div>

     <?php $this->load->view('Admin/include/footer'); ?>
  </body>
</html>
