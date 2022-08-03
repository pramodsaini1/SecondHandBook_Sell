<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Decord extends CI_Model {
	
	public function check($email,$pass){
		  $this->db->select("*");
		  $this->db->from("admin");
		  $this->db->where("email",$email);
		  foreach($this->db->get()->result() as $row){
			  if($row->password==$pass){
				  return true;
			  }
			  else{
				  return "Invalid Passoword";
			  }
		  }
		  
	  }
	  public function display($email){
		  $this->db->select("*");
		  $this->db->from("admin");
		  $this->db->where("email",$email);
		  return $this->db->get()->result();
		  
	  }
	  public function insert_category($data){
		  
		  $this->db->insert("category",$data);
		  echo "success";
		  
	  }
	  public function update_category($code,$data){
		  $this->db->where("code",$code);
		  $this->db->update("category",$data);
		  echo "success";
		  
	  }
	  public function delete_category($code){
		  $this->db->where("code",$code);
		  $this->db->delete("category");
		  echo"success";
		  
	  }
	  public function display1(){
		  $this->db->select("*");
		  $this->db->from("user");
		  return $this->db->get()->result();
		  
		  
	  }
	  public function user_block($id){
		   $this->db->select("status");
		   $this->db->from("user");
		   $this->db->where("email",$id);
		   foreach($this->db->get()->result() as $row){
			   if($row->status==0){
				   $sta = array(
				   "status"=>1
				   );
				   $this->db->where("email",$id);
				   $this->db->update("user",$sta);
				   return "Block";
				    
			   }
			   else if($row->status==1){
				   $sta = array(
				   "status"=>0
				   );
				   $this->db->where("email",$id);
				   $this->db->update("user",$sta);
				   return "Unblock";
				   
			   }
			   
		   }
		  
	  }
	  public function user_delete($id){
		  $this->db->where("email",$id);
		  $this->db->delete("user");
		  return true;
		  
	  }
	
	
}
?>