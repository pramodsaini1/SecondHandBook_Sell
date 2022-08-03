<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="modal" id="myModal">
   <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="Background-color:green">
        <center><h4 class="modal-title" style="color:white;">Login</h4></center>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
         <?php
		      echo form_open("Welcome/submit");
			  echo form_label("Email:");
			  $data = array("type"=>"email","name"=>"email","class"=>"form-control","placeholder"=>"Enter Your Email-Id");
			  echo form_input($data);
			  echo"<br>";
			  echo form_label("Password:");
			  $data = array("type"=>"password","name"=>"pass","class"=>"form-control","placeholder"=>"Enter Your Password");
			  echo form_input($data);
			  echo"<br>";
			  $data = array("type"=>"submit","value"=>"Login","class"=>"btn btn-success");
			  echo form_submit($data);
			  echo form_close();
			  
		 
		 
		 
		 
		 
		 ?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>

<div class="modal" id="myModal1">
   <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header" style="Background-color:green;">
        <h4 class="modal-title" style="color:white;">Registration</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
	  <div id="record"></div>
      <div class="modal-body">
        <?php
		     echo form_open("Welcome/submit1");
			 echo form_label("First Name:");
			 $data = array("type"=>"text","name"=>"fname","class"=>"form-control");
			 echo form_input($data);
			 echo"<br>";
			 echo form_label("Last Name:");
			 $data = array("type"=>"text","name"=>"lname","class"=>"form-control");
			 echo form_input($data);
			 echo"<br>";
			 echo form_label("Email ID:");
			 $data = array("type"=>"email","name"=>"email","class"=>"form-control");
			 echo form_input($data);
			 echo"<br>";
			 echo form_label("Password:");
			 $data = array("type"=>"password","name"=>"pass","class"=>"form-control");
			 echo form_input($data);
			 echo"<br>";
			 echo form_label("Contact No:");
			 $data = array("type"=>"text","name"=>"contact","class"=>"form-control");
			 echo form_input($data);
			 echo"<br>";
		     $data = array("type"=>"submit","value"=>"submit","class"=>"btn btn-primary");
			 echo form_submit($data);
			 echo form_close(); 
		
		
		?>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>



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
    <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo base_url()?>assets/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/custom.css">
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
                    <a class="navbar-brand" href="index.html"><img src="<?php echo base_url()?>assets/images/logo.jpg" width="120" height="70" class="logo" alt=""></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="<?php echo base_url()."index.php/Welcome/index"?>">Home</a></li>


                        <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#myModal1">Register</a></li>
                         <li class="nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#myModal">Login <span class="sr-only">(current)</span></a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                         
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
                 <?php
				 echo form_open("Welcome/search1");
				 $data = array("type"=>"text","name"=>"txt","class"=>"form-control","placeholder"=>"Search");
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
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start Slider -->
       <!-- End Top Search -->
<div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Your Book Category Wise </h2>
                     
                </div>
            </div>
        </div>
    </div><br><br>
     <div class="container-fluid">
	    <div class="row">
 		       <?php
		          foreach($cpp as $row){
					  ?>
					    
					
					   <div class="col-sm-4">
									<table class="table table-borderless w3-card">
									<tr><td align=center style="height:160px"> <img src="<?php echo base_url()?>././uploads/<?php echo $row->code?>.jpg" class="img-fluid"></td></tr>
									<tr><td> <b><?php echo $row->book_name?> </b></td> </tr>
 									<tr><td>₹<?php echo $row->book_amount?>(Fixed) </td></tr> 
									</table>
								
 						</div>
	
						<?php
				  }
		        ?>

 			    
			    
		 </div>
  </div>
	     
   
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
                                    <p><i class="fas fa-map-marker-alt"></i>Address:M.P Colony<br>Sector-5, Bikaner <br> Pin 333304 </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+91-8905648522</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">pramodsaini25062000@gmail.com</a></p>
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
        <p class="footer-company">All Rights Reserved. &copy; 2022 <a href="#">BOOK HUB</a> Design By :
            <a href="https://html.design/">Support Team</a></p>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/popper.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="<?php echo base_url()?>assets/js/jquery.superslides.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap-select.js"></script>
    <script src="<?php echo base_url()?>assets/js/inewsticker.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootsnav.js."></script>
    <script src="<?php echo base_url()?>assets/js/images-loded.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/isotope.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/baguetteBox.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/form-validator.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/contact-form-script.js"></script>
    <script src="<?php echo base_url()?>assets/js/custom.js"></script>
</body>

</html>