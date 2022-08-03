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
                    <h2>Your Uploaded Book</h2>
                     
                </div>
            </div>
        </div>
    </div><br><br>
     <div class="container-fluid">
	    <div class="row">
 		       <?php
		          foreach($rs as $row){
					   $status=0;
						   $this->db->select("*");
						   $this->db->from("user");
						   foreach($this->db->get()->result() as $row2){
							   $status=$row2->status;
						   }
						   if($status==0){
 					  ?>
					   <div class="modal" id="myModal">
					  <div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">

						  <!-- Modal Header -->
						  <div class="modal-header" style="background-color:green;">
							<h4 class="modal-title" style="color:white;">Edit Image</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						  </div>

						  <!-- Modal body -->
						  <div class="modal-body">
							 <?php echo form_open_multipart('Welcome/edit_upload/'.$row->code);?>
                    
							<input type="file" class="form-control" name="userfile" size="20" />

							<br /><br />

							<input type="submit" class="btn btn-success" value="upload" />

							</form>
						  </div>

						  <!-- Modal footer -->
						  <div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						  </div>

						</div>
					  </div>
					</div>
					
					   <div class="col-sm-4">
									<table class="table table-borderless w3-card">
									<tr><td align=center style="height:160px"><img src="<?php echo base_url()?>././uploads/<?php echo $row->code?>.jpg" class="img-fluid"></td></tr>
									<tr><td> <b><?php echo $row->book_name?> </b>(<?php echo $row->book_author?> <i data-toggle="modal" data-target="#myModal" style="float:right;font-size:25px;cursor:pointer;color:blue;" class="fa fa-image"></i></td></tr>
									<tr><td><button><?php echo $row->category?></td><td><a href="<?php echo base_url()."index.php/Welcome/edit_book/".$row->code?>"><i style="float:right;font-size:20px;color:blue;" class="fa fa-edit"></i></a></tr>
									<tr><td><?php echo $row->book_amount?>(Fixed)</td><td><a href="<?php echo base_url()."index.php/Welcome/delete_book/".$row->code?>"><i style="float:right;font-size:20px;color:red;" class="fa fa-trash"></i></a></td></tr> 
									</table>
								
 						</div>
	
						<?php
						   }
					  
				  }
		        ?>

 			    
			    
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