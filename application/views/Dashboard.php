<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if(isset($rec)){
	   foreach($rec as $row){
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
                        <li class="nav-item active"><a class="nav-link" href="<?php echo base_url()."index.php/Welcome/"?>">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="<?php echo base_url()."index.php/Welcome/all_cart"?>">Cart <span class="sr-only">(current)</span></a></li>
                         <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."index.php/Welcome/upload_book"?>">Upload Book <span class="sr-only">(current)</span></a></li>
                         <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."index.php/Welcome/all_books"?>">All Books <span class="sr-only">(current)</span></a></li>
                          <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."index.php/Welcome/inbox"?>">Inbox <span class="sr-only">(current)</span></a></li>
					</ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        <li>
                            <a href="<?php echo base_url()."index.php/Welcome/user_profile"?>">
                                <i style="font-size:15px;" class="fa fa-user-circle"></i><strong><?php echo $row->fname." ".$row->lname?></strong>
                            </a>
                        </li>
						 <li class="nav-item"><a class="nav-link" href="<?php echo base_url()."index.php/Welcome/logout"?>"><strong>Logout</strong> <span class="sr-only">(current)</span></a></li>

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
                    <h2>Add Your Book</h2>
                     
                </div>
            </div>
        </div>
    </div><br><br>
	</div><br><br>
	<?php
							    
		if($this->uri->segment(3)){
		?>
		
		<div class="col-sm-12"><div class="alert alert-primary"><?php echo $this->uri->segment(3)?> </div></div>
		<?php
		}
	 ?>
	
	
     <div class="container-fluid">
	    <div class="row w3-card">
	     
			   <div class="col-sm-5">
			     <img src="<?php echo base_url()?>././uploads/sty.png" class="img-fluid">
 			   </div>
			   <div class="col-sm-7">
 			      <?php
                 echo form_open("Welcome/add_book");
				 echo form_label("<strong>Book Quantity:</strong>");
				 $data = array("type"=>"text","name"=>"book_quantity","class"=>"form-control");
				 echo form_input($data);
				 echo "<br>";
				 echo form_label("<strong>Book Category:</strong>");
				  $options = array(
						'Competitive Exam'         => 'Competitive Exam',
						'Engineering'           => 'Engineering',
						'Medical'         => 'Medical',
						'Magazines'        => 'Magazines',
						'School Book'         => 'School Book',
						'Stories'        => 'Stories',
						'College Book'         => 'College Book',
						'Love Stories'           => 'Love Stories',
						'Sad Stories'         => 'Sad Stories',
						'Marriage Stories'        => 'Marriage Stories',
						'School Book'         => 'School Book',
						'Management'        => 'Management',
						 
				);
                $js = array(
                   'class'       => 'form-control',
                   'id' => 'dk'
                );
				$shirts_on_sale = array('Competitive Exam', 'Stories');
				echo form_dropdown('category', $options, 'large',$js);
				 echo "<br>";
				 echo form_label("<strong>Book Name:</strong>");
				 $data = array("type"=>"text","name"=>"book_name","class"=>"form-control");
				 echo form_input($data);
				 echo "<br>";
				 echo form_label("<strong>Book Author:</strong>");
				 $data = array("type"=>"text","name"=>"book_author","class"=>"form-control");
				 echo form_input($data);
				 echo "<br>";
				 echo form_label("<strong>Book Edition:</strong>");
				 $data = array("type"=>"text","name"=>"book_edition","class"=>"form-control");
				 echo form_input($data);
				 echo "<br>";
				 echo form_label("<strong>Book Amount:</strong>");
				 $data = array("type"=>"text","name"=>"book_amount","class"=>"form-control");
				 echo form_input($data);
				 echo "<br>";
				 echo form_label("<strong>Book Description:</strong>");
				 $textarea_options = array('class' => 'form-control','rows' =>3,   'cols' =>5);
                 echo form_textarea('description', set_value('vc_desc'),  $textarea_options);
				 echo "<br>";
				 $data = array("type"=>"submit","value"=>"submit","class"=>"btn btn-success");
				 echo form_submit($data);
				 echo form_close();
				   
              ?>
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
</body>

</html>
<?php
	   }
}
?>