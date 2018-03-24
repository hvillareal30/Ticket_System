<?php

class UserManagement extends CI_Model{

    //Read Data using username and password

    public function login($data){
        $condition = "user_name =" . "'" . $data['user_name'] . "' AND " . "user_password =" . "'" . $data['user_password'] . "'";
        $this->db->select('*');
        $this->db->from('usermanagement');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        
        if($query->num_rows() == 1){
            return true;
        } else{
            return false;
        }
    }

    //Read data from database to show data in admin page

    public function read_user_information($user_name){

        $condition = "user_name =" . "'" . $user_name . "'";
        $this->db->select('*');
        $this->db->from('usermanagement');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if($query->num_rows() == 1){
            return $query->result();

        }else{
            return false;
        }
    }

    public function get_usermanagementCRUD(){
        if(!empty($this->input->get("search"))){
            $this->db->like('full_user_name', $this->input->get("search"));
            $this->db->or_like('user_name', $this->input->get("search"));
        }
        $query = $this->db->get("usermanagement");
        return $query->result();
    }

    public function insert_user(){
        $data = array(
            'full_user_name' => $this->input->post('full_user_name'),
            'user_name' => $this->input->post('user_name'),
            'user_password' => $this->input->post('user_password'),
            'user_type' => $this->input->post('user_type')
        );

        return $this->db->insert('usermanagement', $data);
    }

    public function update_user($id){
        $data = array(
            'user_type' => $this->input->post('user_type')
        );

        if($id == 0){
            return $this->db->insert('usermanagement', $data);
        }else{
            $this->db->where('id', $id);
            return $this->db->update('usermanagement', $data);
        }
    }

    public function find_user($id){
        return $this->db->get_where('usermanagement', array('id' => $id))->row();
    }

    public function delete_user($id){
        return $this->db->delete('usermanagement', array('id' => $id));
    }
}

?>