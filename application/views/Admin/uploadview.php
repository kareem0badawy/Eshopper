  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Panel</title>
 	
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url('styles/bootstrap/css/bootstrap.min.css')?>">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   

  </head>

<div class="alert alert-warning"></div>
<div class="form-group">




<?php echo form_open_multipart();?>

<?php echo form_upload('file')?>

<?php echo form_submit('submit','upload')?>




<?php echo form_close();?>

</div>

