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


<?php echo form_open_multipart('upload/do_upload');?>


 <input type="file" class="form_control" name="pic" size="20">

<br /><br />

 <input type="submit" name="submit" class="btn- btn-primary" value="upload">


<?php echo form_close();?>

</div>

<div class="carousel-inner">
							<?php foreach ($slideshow as $slider):
									$i = 1; $item_class = ($i == 1) ? 'active' : '';?>
                            <div class="item <?php echo $item_class ?>">
                            	<img src="<?php echo base_url('uploads/'.$slider->pictures)?>" alt="" /> 
                            </div>
                            <?php endforeach ;?>  
							</div>
			