<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 		   ?>
 
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Book Hub</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href=" <?php echo base_url()?>assets/<?php echo base_url()?>assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="  <?php echo base_url()?>assets/<?php echo base_url()?>assets/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="  <?php echo base_url()?>assets/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="  <?php echo base_url()?>assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="  <?php echo base_url()?>assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="  <?php echo base_url()?>assets/css/custom.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

 <script>
$(document).ready(function(){
	$("#list-view").hide();
	 $(".fa.fa-list-ul").click(function(){
		 $("#grid-view").hide();
		 $("#list-view").fadeIn(100);
	 });
	 $(".fa.fa-th").click(function(){
		 
		 $("#grid-view").fadeIn(100);
		 $("#list-view").hide();
	 });
	
});


</script>
</head>

<body>

    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.html"><img src="<?php echo base_url()?>assets/images/logo.jpg" width="120" height="70" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="<?php echo base_url()."index.php/Welcome/profile"?>">Home</a></li>
						 <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."index.php/Welcome/all_cart"?>">Cart <span class="sr-only">(current)</span></a></li>
                         <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."index.php/Welcome/upload_book"?>">Upload Book <span class="sr-only">(current)</span></a></li>
                         <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."index.php/Welcome/all_books"?>">All Books <span class="sr-only">(current)</span></a></li>
                          <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."index.php/Welcome/inbox"?>">Inbox <span class="sr-only">(current)</span></a></li>
					      <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."index.php/Welcome/logout"?>">Logout <span class="sr-only">(current)</span></a></li>
					</ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li  >
                            <a href="<?php echo base_url()."index.php/Welcome/user_profile"?>">
							<?php
							   $email = get_cookie("Login");
							?>
                                <i style="font-size:15px;" class="fa fa-user-circle"></i><strong><?php echo $email?></strong>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                        <li>

                        </li>
                        <li>

                        </li>
                        <li>

                        </li>
                        <li class="total">

                        </li>
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
				
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->
<div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>All Books</h2>
                     
                </div>
            </div>
        </div>
    </div><br><br>
	<?php
							    
		if($this->uri->segment(3)){
		?>
		
		<div class="col-sm-12"><div class="alert alert-primary"><?php echo $this->uri->segment(3)?> </div></div>
		<?php
		}
	 ?>
     <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="search-product">
						<?php
						   echo form_open("Welcome/search");
						   $data = array("type"=>"text","name"=>"txt","class"=>"form-control","placeholder"=>"Search here....");
						   echo form_input($data);
 						   $data = array(
							'name' => 'button',
							'id' => 'button',
							'value' => 'true',
							'type' => 'submit',
							'class'=>'btn btn-primary btn-sm icon-cancel-circle2',
							'content' => '<i class="fa fa-search"></i>'
						);

						echo form_button($data);
						   echo form_close();
						
						?>
                             
                        </div>
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Categories</h3>
                            </div>
                            <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                                <div class="list-group-collapse sub-men">
                                     
                                    <div class="collapse show" id="sub-men1" data-parent="#list-group-men">
                                        <div class="list-group">
										<?php
										  $this->db->select('category');
											$this->db->distinct();
											$query = $this->db->get('add_book');
											  foreach($query->result() as $row){
										
										?>
                                            <a href="#" class="list-group-item list-group-item-action active"><?php echo $row->category?></a>
                                         <?php
										  }
										  ?>
										 
										 </div>
                                    </div>
                                </div>
                                 
                             </div>
                        </div>
                         

                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-8 text-center text-sm-left">
                                <div class="toolbar-sorter-right">
                                    <span>Sort by </span>
                                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
									<option data-display="Select">Nothing</option>
									<option value="1">Popularity</option>
									<option value="2">High Price → High Price</option>
									<option value="3">Low Price → High Price</option>
									<option value="4">Best Selling</option>
								</select>
                                </div>
                                <p>Showing all 4 results</p>
                            </div>
                            <div class="col-12 col-sm-4 text-center text-sm-right">
                                <ul class="nav nav-tabs ml-auto">
                                    <li>
                                        <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="row product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">
                                        <?php
										  foreach($btu as $row){

										
										?>
										<div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                            <div class="products-single fix">
                                                <div class="box-img-hover">
                                                    <div class="type-lb">
                                                        <p class="sale">Sale</p>
                                                    </div>
                                                    <img src="<?php echo base_url()?>././uploads/<?php echo $row->code?>.jpg" class="img-fluid" alt="Image">
                                                    
													<div class="mask-icon">
                                                        <ul>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                            <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                        </ul>
                                                         <a class="cart" href="<?php echo base_url()."index.php/Welcome/add_cart/".$row->code?>">Add to Cart</a>
                                                    </div>
                                                </div>
                                                <div class="why-text">
                                                    <h4><?php echo $row->book_name?></h4>
                                                    <h5>₹<?php echo $row->book_amount?></h5><a style="flaot:right;"href="<?php echo base_url()."index.php/Welcome/sell_book/".$row->code?>">View Details</a>
                                                </div>
                                            </div>
                                        </div>
                                            <?php
											
										  }
                                          ?>										  
											  
											  
                                        </div>
                                          
                                    </div>
                                </div>
								
                                <div role="tabpanel" class="tab-pane fade" id="list-view">
                                    <div class="list-view-box">
                                        <div class="row">
										<?php
										foreach($btu as $row){
										?>
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            <p class="new">New</p>
                                                        </div>
                                                        <img src="<?php echo base_url()?>././uploads/<?php echo $row->code?>.jpg" class="img-fluid" alt="Image">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                            </ul>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                <div class="why-text full-width">
                                                    <h4><?php echo $row->book_name?></h4>
                                                    <h5> <del>₹ <?php echo $row->book_amount?></h5>
                                                    <p><?php echo $row->description?> </p>
                                                    <a class="btn hvr-hover" href="<?php echo base_url()."index.php/Welcome/add_cart/".$row->code?>">Add to Cart</a>
                                                </div>
                                            </div>
											<?php
										}
										?>
                                        </div>
                                    </div>
                                     
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Shop Page -->
    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Book Hub</h4>
                            <p>When it comes to searching for books, there is only one place to turn to – Book Hub.We have a veritable collection of books that span categories as diverse as you could possibly expect. From segments like accountancy, to parenting
                                and pregnancy, to banking and finance, to even topics on yoga and meditation – almost any category you seek – you will find with us
                            </p>
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="https://www.indiabookstore.net/">Details</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Mussoorie, Diversion Road<br>Makka Wala, Uttarakhand <br> Pin 248008 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+91-7891766450</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">bookhub2020@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2021 <a href="#">BOOK HUB</a> Design By :
            <a href="https://html.design/">Support Team</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="  <?php echo base_url()?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="  <?php echo base_url()?>assets/js/popper.min.js"></script>
    <script src="  <?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="  <?php echo base_url()?>assets/js/jquery.superslides.min.js"></script>
    <script src="  <?php echo base_url()?>assets/js/bootstrap-select.js"></script>
    <script src="  <?php echo base_url()?>assets/js/inewsticker.js"></script>
    <script src="  <?php echo base_url()?>assets/js/bootsnav.js."></script>
    <script src="  <?php echo base_url()?>assets/js/images-loded.min.js"></script>
    <script src="  <?php echo base_url()?>assets/js/isotope.min.js"></script>
    <script src="  <?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
    <script src="  <?php echo base_url()?>assets/js/baguetteBox.min.js"></script>
    <script src="  <?php echo base_url()?>assets/js/form-validator.min.js"></script>
    <script src="  <?php echo base_url()?>assets/js/contact-form-script.js"></script>
    <script src="  <?php echo base_url()?>assets/js/custom.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery-ui.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.nicescroll.min.js"></script>
</body>

</html>