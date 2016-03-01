
   <?php $this->load->view('Admin/include/header'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <?php $this->load->view('Admin/include/nav'); ?>
              <section class="content-header">
          <i class="fa fa-toggle-on" style="font-size:24px">&nbsp;&nbsp;Orders</i>
             <br>
             <br>
               
         
        </section>
        <br>
             <br>
    <table class="table table-striped table-hover">
    <thead style="background-color: #E74C3C; font-size: 15px">
      <tr class="active">
        <td>#</td>
         <td>Order ID</td>
        <td>User</td>
        <td>Payment Method</td>
        <td>Total</td>
        <td>Stats</td>

      </tr>
    </thead>
    <tbody>

  <?php
   foreach($order as $key => $row):?>   
    <tr>
    <td>
        <?php echo ++$key ?>
        </td>
          <td>
           <a href="<?php echo site_url('Controlpanel/orderDetails/'.$row->order_id);?>"><?php echo $row->order_name; ?></a> 
          </td>
          <td>
           <?php echo $row->name; ?>
          </td>
          <td>
            <?php echo $row->payment_method; ?>
          </td>
          <td>
             <?php echo $row->total; ?>
          </td>
       
           <td>
        <?php if($row->status_order==1) :?>
        <span class='label label-success'style="font-size: 15px">New</span>
        <?php elseif($row->status_order==2):?>
         <span class='label label-warning' style="font-size: 15px">On Delivered</span>
       <?php elseif($row->status_order==3):?>
         <span class='label label-danger' style="font-size: 15px">Delivered</span>
       <?php else:?>
         <span class='label label-info' style="font-size: 15px">Returned</span>
       <?php endif;?>
        </td>

    </tr>
         
        </tbody>
<?php endforeach;?>
  </table>

     
      </div>

     <?php $this->load->view('Admin/include/footer'); ?>

