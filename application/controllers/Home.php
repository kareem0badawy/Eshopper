<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
	 public function __construct()
   {
        parent::__construct();
        // Your own constructor code
       $this->load->model('Model_home');
   }
   //Controller
	public function index()
	{
		$slideshow=$this->Model_home->slidshow_db();
		$data['slideshow']=$slideshow;
		$this->load->view('index',$data);
	}

}


	/*
				

						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
											<div class="carousel-inner">
							
          	                  <div class="item <?php echo $item_class ?>">
                            	<img src="<?php echo base_url('uploads/products/'.$slider->product_image)?>" alt="" /> 
                            </div>
                            
							</div>
										<div class="product-overlay">
											<div class="overlay-content">
												<h2>$56</h2>
												<p>Easy Polo Black Edition</p>
												<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
											</div>
										</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>
						  <?php endforeach ;?> 
				*/