<?php
class User_model extends CI_Model {
    public function __construct()
    {
        $this->load->database();
    }

    public function get_user_single($email){
      $this->db->select('*');
      $this->db->from('userRegister');
      $this->db->where('email', $email);
      $query=$this->db->get();
      return $query->result_array();
    }

    public function is_available($email){
       $query = $this->db->get_where('userRegister',"email='$email'" );
       if ( $query->num_rows() == 1) {
         return TRUE;
       }
         return FALSE;
    }

    public function is_profile_completed($email){
      $query = $this->db->get_where('userRegister',"email='$email'" )->row()->profile_completed;
      if($query==1){
        return TRUE;
      }
      return FALSE;
    }

    public function check_access($email,$access_code){
       $this->db->where('email',$email);
       $query=$this->db->get('userRegister');
       $num_rows=$query->num_rows();
       if($num_rows == 1){
            $row = $query->row();
            if (password_verify($access_code, $row->user_hash)) {
                $data = array(
                    'email' => $row->email,
                    'validated' => TRUE
                );
                return TRUE;
            } else {
                return FALSE;
            }
            return TRUE;
        }
        return FALSE;
     }

     public function complete_signin($data){
       $data['google_user_name'] = $this->session->name;
       $this->db->where('email', $this->session->email);
       $this->db->update('userRegister', $data);
     }

}