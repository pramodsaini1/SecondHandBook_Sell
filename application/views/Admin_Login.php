 <?php
defined('BASEPATH') OR exit('No direct script access allowed');
 		    
 


?>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>




<section class="vh-100" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Admin Sign in</h3>
            <?php
			echo form_open("Admin/submit");
 			$data = array("type"=>"email","name"=>"email","class"=>"form-control","placeholder"=>"Enter Your Email-Id");
			echo form_input($data);
			echo "<br>";
 			$data = array("type"=>"password","name"=>"pass","class"=>"form-control","placeholder"=>"Enter Your Password");
			echo form_input($data);
			echo "<br>";
			$data = array("type"=>"submit","value"=>"submit","class"=>"btn btn-success");
			echo form_submit($data);
			echo form_close();
			
			
			
			?>
             
 
 
          </div>
        </div>
      </div>
    </div>
  </div>
</section>