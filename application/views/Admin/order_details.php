
   <?php $this->load->view('Admin/include/header'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <?php //$this->load->view('Admin/include/nav'); ?>
           <!--   <section class="content-header">
          <i class="fa fa-toggle-on" style="font-size:24px">&nbsp;&nbsp;Orders</i>
             <br>
             <br>
        </section>
        <br>-->
             <br>
        <?php foreach ($orderdetails as $row):?>
       <div class="col-md-2">
        <br>
        <button class="btn btn-danger hidden-print" onclick="window.print();">
            <i class="fa fa-print"></i>
            Print Page
        </button>
    </div>
    <hr/>
    <div class="col-md-4">
        <h4>Main Data</h4>
        <table class="table table-bordered table-striped">
        <tr>
            <td>User</td>
            <td class="text-center">
            <?php echo $row->name; ?>
            </td>
        </tr>
        <tr>
            <td>Mobile</td>
            <td class="text-center">
             <?php echo $row->mobile; ?>
            </td>
        </tr>
        <tr>
            <td>phone</td>
            <td class="text-center">
            <?php echo $row->phone; ?>
            </td>
        </tr>
        <tr>
            <td>Payment Method</td>
            <td class="text-center">
            <?php echo $row->payment_method;?>
            </td>
        </tr>
        <tr>
            <td>Status</td>
            <td class="text-center">
            <span class='label label-warning'><?php echo $row->status_order?></span>
            </td>
        </tr>
        <tr>
            <td>Total</td>
            <td class="text-center">
                <?php echo $row->total;?>
            </td>
        </tr>
       
    </table>
    </div>
 <div class="col-md-4">
        <h4>Address Data</h4>
        <table class="table table-bordered table-striped">
            <tr>
                <td>Country</td>
                <td></td>
            </tr>
            <tr>
                <td>City</td>
                <td><?php echo $row->city ;?></td>
            </tr>
            <tr>
                <td>area</td>
                <td><?php echo $row->area ;?></td>
            </tr>
            <tr>
                <td>street</td>
                <td><?php echo $row->street_name ;?></td>
            </tr>
            <tr>
                <td>build</td>
                <td><?php echo $row->build ;?></td>
            </tr>
            <tr>
                <td>Floor Number</td>
                <td><?php echo $row->floor_number;?></td>
            </tr>
            <tr>
                <td>Float Number</td>
                <td><?php echo $row->float_number;?></td>
            </tr>
        </table>
    </div>
<!--
 <form  action="#" method="post">
        <input type="hidden" name="_token" value="">
        <h4>Update Status</h4>
        <div class="radio">
            <label>
                <input type="radio" name="status" value="0"  checked >
                
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="status" value="1" >
                On Delivered
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="status" value="2" >
                Delivered
            </label>
        </div>
        <div class="radio">
            <label>
                <input type="radio" name="status" value="3" >
                Returned
            </label>
        </div>
        <button class="btn btn-danger">Update</button>
    </form>

    <div class="col-md-12">
        <table class="table table-bordered table-striped">
            <tr>
                <td>Item Name</td>
                <td>Price</td>
                <td>Quantity</td>
                <td>Total</td>
            </tr>
                            <tr>
                    <td>موبل سامسونج</td>
                    <td>750</td>
                    <td>1</td>
                    <td>750</td>
                </tr>
                            <tr>
                    <td>نوت موبيل</td>
                    <td>4000</td>
                    <td>1</td>
                    <td>4000</td>
                </tr>
                    </table>
                    </div>-->
                <?php endforeach;?>
      </div>

     <?php $this->load->view('Admin/include/footer'); ?>


