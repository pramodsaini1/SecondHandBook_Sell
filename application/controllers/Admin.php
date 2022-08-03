<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
     public function __construct(){
		parent:: __construct();
		$this->load->helper("url");
		$this->load->helper("form");
		$this->load->model("Decord");
        $this->load->database();
		$this->load->helper("cookie");
        $this->load->library("session");
	 }
	 public function admin_login(){
		 $this->load->view("Admin_Login.php");
	 }
	 public function submit(){
		 $email = $this->input->post("email");
		  $pass = $this->input->post("pass");
		 if($this->Decord->check($email,$pass)){
			  set_cookie("Login",$email,3600 *24);
			  $this->session->set_userdata($email,$pass);
			  redirect(base_url()."index.php/Admin/profile"); 
		 } 
	 }
	 public function profile(){
		$email = get_cookie("Login");
		$sess=$this->session->userdata($email);
		if(isset($email) && isset($sess)){
			$recd["rec"]=$this->Decord->display($email);
			$this->load->view("Admin_Dashboard.php",$recd);
		}
		else{
			redirect(base_url()."index.php/Admin/admin_login");
		}
		
	}
	public function add_category(){
		if($this->input->post("cate")==""){
			echo "Empty";
		}
		else{
			$sn=0;
			  $code="";
			   $this->db->select_max('sn');
			   $query = $this->db->get("category");
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
				
				$data = array(
				"sn"=>$sn,
				"code"=>$code,
				"category"=>$this->input->post("cate")
				);
				$rr=$this->Decord->insert_category($data);
			    if($rr=="success"){
					echo "success";
				}
			
		}
		
		
	}
	public function update_category(){
		if($this->input->post("msg")==""){
			echo "Empty";
		}
		else{
			$code = $this->input->post("code");
			$data = array(
			"category"=>$this->input->post("msg")
			);
			$rec = $this->Decord->update_category($code,$data);
			if($rec=="success"){
				
				echo "success";
			}
			
		}
		
	}
	public function delete_category(){
		$code = $this->input->post("code");
		$rec= $this->Decord->delete_category($code);
		if($rec=="success"){
			echo"success";
		}
		
		
	}
	public function logout(){
		$email = get_cookie("Login");
		delete_cookie("Login");
		$this->session->unset_userdata($email);
		redirect(base_url()."index.php/Admin/admin_login");
		
	}
	public function all_user(){
		
		$email = get_cookie("Login");
		$sess  = $this->session->userdata($email);
		if(isset($email) && isset($sess)){
			$red["pic"] = $this->Decord->display1();
			$this->load->view("View_all_user.php",$red);
			
		}
		
	}
	public function block_user(){
		$id=$this->input->post("id");
		$email=get_cookie("Login");
		if(isset($email)){
			$rec = $this->Decord->user_block($id);
			if($rec=="Block"){
				echo "block";
				
			}
			else if($rec=="Unblock"){
				echo "unblock";
				
			}
			
		}
		
	}
	public function delete_user(){
		$id=$this->input->post("id");
		$email=get_cookie("Login");
		if(isset($email)){
			 if($this->Decord->user_delete($id)){
				echo "delete";
				
			}
			
		}
		
		
	}
	 
}
?>