<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 		   foreach($cpp as $row){
		   
		   
		   
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
    <link rel="shortcut icon" href=" <?php echo base_url()?>assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="  <?php echo base_url()?>assets/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="  <?php echo base_url()?>assets/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="  <?php echo base_url()?>assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="  <?php echo base_url()?>assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="  <?php echo base_url()?>assets/css/custom.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

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
                    <a class="navbar-brand" href="index.html"><img src="  <?php echo base_url()?>assets/images/logo.jpg" width="120" height="70" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="<?php echo base_url()."index.php/Welcome/profile"?>">Home</a></li>
						  <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."index.php/Welcome/all_cart"?>">Cart<span class="sr-only">(current)</span></a></li>
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
                        <li >
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
                    <h2>Book Sell Details</h2>
                     
                </div>
            </div>
        </div>
    </div><br><br>
      <?php
							    
		if($this->uri->segment(4)){
		?>
		
		<div class="col-sm-12"><div class="alert alert-primary"><?php echo $this->uri->segment(4)?> </div></div>
		<?php
		}
	 ?>
	     
	 <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item active"> <img class="d-block w-100" src="<?php echo base_url()?>././uploads/<?php echo $row->code?>.jpg" class="img-fluid" alt="First slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="<?php echo base_url()?>././uploads/<?php echo $row->code?>.jpg" class="img-fluid" alt="Second slide"> </div>
                            <div class="carousel-item"> <img class="d-block w-100" src="<?php echo base_url()?>././uploads/<?php echo $row->code?>.jpg" class="img-fluid" alt="Third slide"> </div>
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev"> 
						<i class="fa fa-angle-left" aria-hidden="true"></i>
						<span class="sr-only">Previous</span> 
					</a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next"> 
						<i class="fa fa-angle-right" aria-hidden="true"></i> 
						<span class="sr-only">Next</span> 
					</a>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                                <img class="d-block w-100 img-fluid" src="<?php echo base_url()?>././uploads/<?php echo $row->code?>.jpg" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="1">
                                <img class="d-block w-100 img-fluid" src="<?php echo base_url()?>././uploads/<?php echo $row->code?>.jpg" alt="" />
                            </li>
                            <li data-target="#carousel-example-1" data-slide-to="2">
                                <img class="d-block w-100 img-fluid" src="<?php echo base_url()?>././uploads/<?php echo $row->code?>.jpg" alt="" />
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2><?php echo $row->book_name?></h2>
                        <h5>  &nbsp;&nbsp;&nbsp;&nbsp;???<?php echo $row->book_amount?></h5>
                              <h5><strong>Publisher:</strong>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $row->email?></h5>
                                <h4>Short Description:</h4>
                                <p><?php echo $row->description?></p>
                                <ul>
                                    <li>
                                         
                                    </li>
                                     
                                </ul>
								<h4>Message:</h4>
								<?php
                                  echo form_open("Welcome/message_submit/".$row->code);
								  $textarea_options = array('class' => 'form-control','rows' =>2,   'cols' =>2);
								  echo form_textarea('description', set_value('vc_desc'),  $textarea_options);
								  echo "<br>";
                                  $data = array("type"=>"submit","value"=>"Submit","class"=>"btn btn-success");
								  echo form_submit($data);
								  echo form_close();
								 
								 ?>
                    </div>
                </div>
            </div>
 

        </div>
    </div>  
 
<br><br><br>
    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Book Hub</h4>
                            <p>When it comes to searching for books, there is only one place to turn to ??? Book Hub.We have a veritable collection of books that span categories as diverse as you could possibly expect. From segments like accountancy, to parenting
                                and pregnancy, to banking and finance, to even topics on yoga and meditation ??? almost any category you seek ??? you will find with us
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
</body>

</html>
<?php
		   }
?>