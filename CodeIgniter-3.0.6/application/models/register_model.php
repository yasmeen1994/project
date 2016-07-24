<?php  
 class register_model extends CI_Model {  
      function insertdata($options = array()){  
           if(isset($options['username']))  
                $this->db->set('username',strip_tags($options['username']));  
            if(isset($options['email']))  
                $this->db->set('email',strip_tags($options['email']));  
           if(isset($options['password']))  
                $this->db->set('password',strip_tags($options['password']));
            if(isset($options['confpass']))  
                $this->db->set('confpass',strip_tags($options['confpass']));			
            if(isset($options['date']))  
                $this->db->set('date',strip_tags($options['date']));
			if(isset($options['phone']))  
                $this->db->set('phone',strip_tags($options['phone']));
			
			//if(isset($options['image']))  
                //$this->db->set('image',strip_tags($options['image']));
			
                $this->db->insert("users");  
           return $this->db->insert_id();  
      }  
 }  
 ?>  