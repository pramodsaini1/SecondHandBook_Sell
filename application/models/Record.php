<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Record extends CI_Model {
	  public function insert_record($data){
		  $this->db->insert("user",$data);
		  return true;
	  }
	  public function book_data(){
		  $this->db->select("*");
		  $this->db->from("add_book");
		   
		  return $this->db->get()->result();  
	  }
	  public function display1($email){
		  $this->db->select("*");
		  $this->db->from("user");
		  $this->db->where("email",$email);
		  return $this->db->get()->result();
		  
	  }
	  public function display2($email){
		  $this->db->select("*");
		  $this->db->from("user");
		  $this->db->where("email",$email);
		  return $this->db->get()->result();
		  
	  }
	  public function delete_cart($code){
		  $this->db->where("code",$code);
		  $this->db->delete("cart");
		  redirect(base_url()."index.php/Welcome/all_cart/cart_deleted");
		  
	  }
	  public function update_pass($email,$data){
		   $this->db->where("email",$email);
		   $this->db->update("user",$data);
		   redirect(base_url()."index.php/Welcome/user_profile/updated_pass");  
	  }
	  public function record_update($data,$email){
		  $this->db->where("email",$email);
		  $this->db->update("user",$data);
		  redirect(base_url()."index.php/Welcome/user_profile");  
	  }
	  public function check($email,$pass){
		  $this->db->select("*");
		  $this->db->from("user");
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
		  $this->db->from("user");
		  $this->db->where("email",$email);
		  return $this->db->get()->result();
		  
	  }
	  public function insert_book($data){
		   $this->db->insert("add_book",$data);	 
			return true;  
	  }
	  public function book_record($email){
		   $this->db->select("*");
		  $this->db->from("add_book");
		  $this->db->where("email",$email);
		  return $this->db->get()->result();
	  }
	  public function book_record1($code){
		  $this->db->select("*");
		  $this->db->from("add_book");
		  $this->db->where("code",$code);
		  return $this->db->get()->result();
		  
	  }
	  public function update_book($data,$code){
		  $this->db->where("code",$code);
		  $this->db->update("add_book",$data);
		  redirect(base_url()."index.php/Welcome/upload_book");
		  
	  }
	  public function user_book_delete($data,$code){
		  $this->db->where("code",$code);
		  $this->db->update("add_book",$data);
		  redirect(base_url()."index.php/Welcome/upload_book");
		  
	  }
	  public function all_book_get($email){
		  $this->db->select("*");
		  $this->db->from("add_book");
		  $this->db->where_not_in("email",$email);
 		  return $this->db->get()->result();   
	  }
	  public function bubb($code){
		   $this->db->select("*");
		   $this->db->from("add_book");
		   $this->db->where("code",$code);
		   return $this->db->get()->result();
		   
	   }
	   public function insert_cart($data){
		   $this->db->insert("cart",$data);
		   return true;
	   }
	   public function get_cart($email){
		   $this->db->select("*");
		   $this->db->from("cart");
		   $this->db->where("email",$email);
		   return $this->db->get()->result();
	   }
	   public function get_info($code){
		   $this->db->select("*");
		   $this->db->from("add_book");
		   $this->db->where("code",$code);
		   return $this->db->get()->result();
		   
	   }
	   public function insert_message($data){
		   $this->db->insert("message",$data);
		   return true;
		   
		   
	   }
	   public function veg($email){
		     $this->db->select("*");
			 $this->db->from("message");
			 $this->db->where("temail",$email);
 			  
			  return $this->db->get()->result();
		   
	   }
	   public function delete_mess($code){
		   $this->db->where("code",$code);
		   $this->db->delete("message");
		   redirect(base_url()."index.php/Welcome/inbox/message_deleted");
	   }
	   public function insert_reply($data){
		   $this->db->insert("reply",$data);
		   return true;
		   
	   }
	   public function search_book($txt){
		   $this->db->select('*');
			$this->db->from('add_book');
			$this->db->like('book_name',$txt);
			return $this->db->get()->result();  
	   }
	   public function search_book1($txt){
		   $this->db->select('*');
			$this->db->from('add_book');
			$this->db->like('book_name',$txt);
			return $this->db->get()->result();  
	   }
	   public function all_get_book($cat){
		   $this->db->select("*");
		   $this->db->from("add_book");
		   $this->db->where("category",$cat);
		   return $this->db->get()->result();
		   
	   }
	  
}
?>