<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
     public function __construct(){
		parent:: __construct();
		$this->load->helper("url");
		$this->load->helper("form");
		$this->load->model("Record");
        $this->load->database();
		$this->load->helper("cookie");
        $this->load->library("session");
		$this->load->helper('date');
	 }
	public function index()
	{
		$recs["rts"] = $this->Record->book_data();
	    $this->load->view("welcome_message.php",$recs);
	}
	public function user_profile(){
		$email = get_cookie("Login");
		   $sess  = $this->session->userdata($email);
		   if(isset($email) && isset($sess)){
				$recd["rr"]=$this->Record->display1($email);
				$this->load->view("user_profile.php",$recd);
			}
			else{
				redirect(base_url());
			}
	}
	public function Edit(){
			 $email = get_cookie("Login");
		   $sess  = $this->session->userdata($email);
		   if(isset($email) && isset($sess)){
				$recd["ra"]=$this->Record->display2($email);
				$this->load->view("user_Edit.php",$recd);
			}
			else{
				redirect(base_url());
			}
			
		}
		public function Update(){
			$email = get_cookie("Login");
		   $sess  = $this->session->userdata($email);
		   $data = array(
		   "fname"=>$this->input->post("fname"),
		   "lname"=>$this->input->post("lname"),
		   "contact"=>$this->input->post("contact")
		   );
		   $this->Record->record_update($data,$email);
			 
		}
		public function change_pass(){
			$email = get_cookie("Login");
			$this->db->select("*");
		    $this->db->from("user");
		    $this->db->where("email",$email);
			$cp = $this->input->post("cp");
			$np = $this->input->post("np");
			$rp = $this->input->post("rp");
			$data = array(
			"password"=>$rp
			);
 				foreach ($this->db->get()->result() as $row){
				   if($row->password==$cp){
					   if($np==$rp){
						   $this->Record->update_pass($email,$data);
						   redirect(base_url()."index.php/Welcome/user_profile/updated_pass");
					   }
					   else{
						   redirect(base_url()."index.php/Welcome/user_profile/mismatch_pass");
					   }
				   }
				   else{
					   redirect(base_url()."index.php/Welcome/user_profile/invalid_pass");
				   }	
			   }
		}
	public function submit1(){
		$status=0;
		$data = array(
		"fname"=>$this->input->post("fname"),
		"lname"=>$this->input->post("lname"),
		"email"=>$this->input->post("email"),
		"password"=>$this->input->post("pass"),
		"contact"=>$this->input->post("contact"),-
		"status"=>$status
		);
		if($this->Record->insert_record($data)){
			  redirect(base_url());
		}	
	}
	public function submit(){
		$email = $this->input->post("email");
		  $pass = $this->input->post("pass");
		 if($this->Record->check($email,$pass)){
			  set_cookie("Login",$email,3600 *24);
			  $this->session->set_userdata($email,$pass);
			  redirect(base_url()."index.php/Welcome/profile"); 
		 }	
	}
	public function profile(){
		$email = get_cookie("Login");
		$sess=$this->session->userdata($email);
		if(isset($email) && isset($sess)){
			$recd["rec"]=$this->Record->display($email);
			$this->load->view("Dashboard.php",$recd);
		}
		else{
			redirect(base_url());
		}
		
	}
	public function logout(){
		$email = get_cookie("Login");
		delete_cookie("Login");
		$this->session->unset_userdata($email);
		redirect(base_url());
		
	}
	public function add_book(){
		$sn=0;
		  $code="";
		   $this->db->select_max('sn');
		   $query = $this->db->get("add_book");
		   foreach($query->result() as $row){
			  $sn  = $row->sn;
		   }
		   $sn++;
		  
		  $a = array() ;
			for($i = 'A';$i<='Z';$i++){
				  array_push($a,$i) ;
				    if($i=='Z') 
					   break ;
			}
			for($i = 'a';$i<='z';$i++){
				  array_push($a,$i) ;
				    if($i=='z') 
					   break ;
			}
			for($i = 0;$i<=9;$i++){
				  array_push($a,$i) ;
			}
			$b = array_rand($a,6) ;
			for($i=0;$i<sizeof($b);$i++){
				$code = $code.$a[$b[$i]] ;
			}
			$code = $code."_".$sn ;
			
			$status=0;
			$email = get_cookie("Login");
		 $data = array(
		 "sn"=>$sn,
		 "code"=>$code,
		 "email"=>$email,
		 "category"=>$this->input->post("category"),
		 "book_quantity"=>$this->input->post("book_quantity"),
		 "book_name"=>$this->input->post("book_name"),
		 "book_author"=>$this->input->post("book_author"),
		 "book_edition"=>$this->input->post("book_edition"),
		 "book_amount"=>$this->input->post("book_amount"),
		 "description"=>$this->input->post("description"),
		 "status"=>$status
		 );
		  
		 if($this->Record->insert_book($data)){
			 redirect(base_url()."index.php/Welcome/Image_upload/".$code);
		 }			
	}
	public function Image_upload(){
		$code= $this->uri->segment(3);
		if(isset($code)){
		   $this->load->view("book_image",$code);	
		}		   
	}
	public function do_upload()
	{
		$code = $this->uri->segment(3);
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048000;
			$config['file_name']           = $code;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile'))
			{
				$error = array('error' => $this->upload->display_errors());

				$this->load->view('upload_img', $error);
			}
			else
			{
				//$data = array('upload_data' => $this->upload->data());

				redirect(base_url()."index.php/Welcome/profile/booksuccess");
				//$this->load->view('upload_book', array('error' => ' ' ));
			}
	}
	public function upload_book(){
		$email = get_cookie("Login");
		   $sess  = $this->session->userdata($email);
		   if(isset($email) && isset($sess)){
				$recd["rs"]=   $this->Record->book_record($email);
				$this->load->view("user_all_book.php",$recd);
			}
			else{
				redirect(base_url());
			}	
	}
	public function edit_book(){
		$code = $this->uri->segment(3);
		    if(isset($code)){
				 $recc["rtt"] = $this->Record->book_record1($code);
				 $this->load->view("user_edit_book",$recc);
			}
			else{
				redirect(base_url()."index.php/Welcome/upload_book/code_err");
				
			}
		
	}
	public function update_book(){
		$code = $this->uri->segment(3);
		$data = array(
			"book_quantity"=>$this->input->post("book_quantity"),
			"category"=>$this->input->post("category"),
			"book_name"=>$this->input->post("book_name"),
			"book_author"=>$this->input->post("book_author"),
			"book_edition"=>$this->input->post("book_edition"),
            "book_amount"=>$this->input->post("book_amount"),
            "description"=>$this->input->post("description")
			);
			$this->Record->update_book($data,$code);	
	}
	public function delete_book(){
		$code = $this->uri->segment(3);
			$status=1;
			$data = array(
			"status"=>$status
			);
			$this->Record->user_book_delete($data,$code);
		
		
	}
	public function edit_upload()
	{
		$code = $this->uri->segment(3);
			$config['upload_path']          = './uploads/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['max_size']             = 2048000;
			$config['file_name']           = $code;

			$this->load->library('upload', $config);

			if ( ! $this->upload->do_upload('userfile'))
			{
				$error = array('error' => $this->upload->display_errors());

				$this->load->view('upload_img', $error);
			}
			else
			{
				//$data = array('upload_data' => $this->upload->data());

				redirect(base_url()."index.php/Welcome/profile/booksuccess");
				//$this->load->view('upload_book', array('error' => ' ' ));
			}
	}
	public function all_books(){
	       $email = get_cookie("Login");
		   $sess  = $this->session->userdata($email);
		   if(isset($email) && isset($sess)){
				$rtu["btu"] = $this->Record->all_book_get($email);
				$this->load->view("show_all_book.php",$rtu);
		   }
		   else{
			   redirect(base_url());
		   }
  }
  public function book_info(){
			 $code = $this->uri->segment(3);
			 $email = get_cookie("Login");
		   $sess  = $this->session->userdata($email);
		   if(isset($email) && isset($sess) && isset($code)){
			 $pll["dpp"] = $this->Record->bubb($code);
			 $this->load->view("view_book.php",$pll);
		   }
		   else{
			   redirect(base_url());
		   }			 
 }
 public function add_cart(){

	      $book_code = $this->uri->segment(3);
		  $cc="";
		  $bname="";
		  $ba="";
		  $this->db->select("*");
		  $this->db->from("add_book");
		  $this->db->where("code",$book_code);
		  foreach($this->db->get()->result() as $row){
			  $bname= $row->book_name;
			  $ba = $row->book_amount;
		  }
 		  $this->db->select("*");
		  $this->db->from("cart");
		  $this->db->where("book_code",$book_code);
		  foreach($this->db->get()->result() as $row){
			  $cc = $row->book_code;
			  $bname=$row->book_name;
			  $ba = $row->book_amount;
		  }
		  if($book_code==$cc){
			  redirect(base_url()."index.php/Welcome/all_books/already_cart_added");
		  }
		  else{
				  $sn=0;
				  $code="";
				   $this->db->select_max('sn');
				   $query = $this->db->get("cart");
				   foreach($query->result() as $row){
					  $sn  = $row->sn;
				   }
				   $sn++;
				  
				  $a = array() ;
					for($i = 'A';$i<='Z';$i++){
						  array_push($a,$i) ;
							if($i=='Z') 
							   break ;
					}
					for($i = 'a';$i<='z';$i++){
						  array_push($a,$i) ;
							if($i=='z') 
							   break ;
					}
					for($i = 0;$i<=9;$i++){
						  array_push($a,$i) ;
					}
					$b = array_rand($a,6) ;
					for($i=0;$i<sizeof($b);$i++){
						$code = $code.$a[$b[$i]] ;
					}
					$code = $code."_".$sn ;
					
					$status=0;
					$email = get_cookie("Login");
					
					$data = array(
					 "sn"=>$sn,
					 "code"=>$code,
					 "email"=>$email,
					 "book_code"=>$book_code,
					 "book_name"=>$bname,
					 "book_amount"=>$ba,
					 "status"=>$status
					);
			 
					if($this->Record->insert_cart($data)){
						redirect(base_url()."index.php/Welcome/all_books/cart_added");
					}
					else{
						redirect(base_url()."index.php/Welcome/all_books/cart_not_added");
					}
		  }
			 					
 }
 public function all_cart(){
	 $email = get_cookie("Login");
	 $sess = $this->session->userdata($email);
	 if(isset($email) && isset($sess)){
		 $ruu["oop"] = $this->Record->get_cart($email);
		 $this->load->view("user_all_cart.php",$ruu);
	 }
	 else{
		 redirect(base_url());
	 }
	 
 }
 public function cart_delete(){
	$code = $this->uri->segment(3);
    if(isset($code)){
       $this->Record->delete_cart($code);
    }	
	 
 }
 public function sell_book(){
	 $code = $this->uri->segment(3);
	 if(isset($code)){
		 $rvv["cpp"] = $this->Record->get_info($code);
		 $this->load->view("selling_book.php",$rvv);
	 }
	 
	 
 }
 public function message_submit(){
	         $t_code = $this->uri->segment(3);
			 $t_email="";
			 $contact="";
			 $f_email = get_cookie("Login");
			 $name="";
			 $msg = $this->input->post("description");
 			 $this->db->select("*");
			 $this->db->from("add_book");
			 $this->db->where("code",$t_code);
			   foreach($this->db->get()->result() as $row){
				   $t_email = $row->email ;
			   }
			   $this->db->select("*");
			   $this->db->from("user");
			   $this->db->where("email",$f_email);
			   foreach($this->db->get()->result() as $row){
				   $name = $row->fname." ".$row->lname ;
				   $contact= $row->contact;
			   }
			    
			   $f_code="";
			   $this->db->select("*");
			   $this->db->from("add_book");
			   $this->db->where("email",$f_email);
			   foreach($this->db->get()->result() as $row){
				   $f_code = $row->code ;
			   }
               	$sn=0;
			  $code="";
			   $this->db->select_max('sn');
			   $query = $this->db->get("message");
			   foreach($query->result() as $row){
				  $sn  = $row->sn;
			   }
			   $sn++;
			  
			  $a = array() ;
				for($i = 'A';$i<='Z';$i++){
					  array_push($a,$i) ;
						if($i=='Z') 
						   break ;
				}
				for($i = 'a';$i<='z';$i++){
					  array_push($a,$i) ;
						if($i=='z') 
						   break ;
				}
				for($i = 0;$i<=9;$i++){
					  array_push($a,$i) ;
				}
				$b = array_rand($a,6) ;
				for($i=0;$i<sizeof($b);$i++){
					$code = $code.$a[$b[$i]] ;
				}
				$code = $code."_".$sn ;
                $time = date("Y-m-d");
               $data = array(
                "sn"=>$sn,
                "code"=>$code,
				"name"=>$name,
				"contact"=>$contact,
                "tcode"=>$t_code,
                "temail"=>$t_email,
                "fcode"=>$f_code,
                "femail"=>$f_email,
                "msg"=>$msg,
                "dt"=>$time
                );
              				
			  if($this->Record->insert_message($data)){
				  redirect(base_url()."index.php/Welcome/sell_book/".$t_code."/Message_sent/");
			  }
			  else{
				  redirect(base_url()."index.php/Welcome/sell_book/".$t_code."/again_sent/");
				  
			  } 
   }
   public function inbox(){
			  $email = get_cookie("Login");
			  $sess = $this->session->userdata($email);
			  if(isset($email) && isset($sess)){
				  $rvv["spp"]=$this->Record->veg($email);
				  $this->load->view("user_send_message.php",$rvv);
			  }
			  else{
				  redirect(base_url());
			  }
			  
			  
 }
 public function delete_message(){
	 $code = $this->uri->segement(3);
	 $this->Record->delete_mess($code);
	 
	 
 }
 public function reply(){
			 $code = $this->uri->segment(3);
			 if(isset($code)){
			     $this->load->view("user_reply.php",$code);
			 }
}
public function reply_submit(){
	       $comm_code = $this->uri->segment(3);
			 $msg = $this->input->post("description");
			 $sn=0;
			  $code="";
			   $this->db->select_max('sn');
			   $query = $this->db->get("reply");
			   foreach($query->result() as $row){
				  $sn  = $row->sn;
			   }
			   $sn++;
			  
			  $a = array() ;
				for($i = 'A';$i<='Z';$i++){
					  array_push($a,$i) ;
						if($i=='Z') 
						   break ;
				}
				for($i = 'a';$i<='z';$i++){
					  array_push($a,$i) ;
						if($i=='z') 
						   break ;
				}
				for($i = 0;$i<=9;$i++){
					  array_push($a,$i) ;
				}
				$b = array_rand($a,6) ;
				for($i=0;$i<sizeof($b);$i++){
					$code = $code.$a[$b[$i]] ;
				}
				$code = $code."_".$sn ;
                $time = date("Y-m-d");
				
				$data = array(
				"sn"=>$sn,
				"code"=>$code,
				"msg"=>$msg,
				"comment_code"=>$code,
				"dt"=>$time
				);
				
				if($this->Record->insert_reply($data)){
					redirect(base_url()."index.php/Welcome/reply/".$comm_code."/Message_reply");
					
				}
	
	
}
public function search(){
	  $email = get_cookie("Login");
	  $sess = $this->session->userdata($email);
	  if(isset($email) && isset($sess)){
			    $txt = $this->input->post("txt");
				$rvb["rfg"] = $this->Record->search_book($txt);
				$this->load->view("search_book.php",$rvb);
	  }
			 
}
public function search_data(){
	   
			    $txt = $this->input->post("txt");
				$rvb["rfg"] = $this->Record->search_book1($txt);
				$this->load->view("search_data.php",$rvb);
			 
}
public function see_all_book(){
	 $cat = $this->uri->segment(3);
	 if(isset($cat)){
		    $kll["cpp"] = $this->Record->all_get_book($cat);
			$this->load->view("sell_all_book_show.php",$kll);
		 
	 }
}
	
}
?>