<?php

class CustomerPORTALModel extends CI_Model{

    public function insert_ticket(){
      $a = rand(100000,999999);
      
        $data = array(
            'ticket_uniqueid' => mdate("%Y%m%d".$a),
            'full_name' => $this->input->post('full_name'),
            'issue_title' => $this->input->post('issue_title'),
            'issue_description' => $this->input->post('issue_description'),
            'status' => 'open',
            'created_at' => mdate('%Y-%m-%d %H:%i:%s', now())
        );
        if($this->db->insert('inquiries',$data)){
            return $data;
        }else{
            return false;
        }
    }

   public function selectticket(){
      $query =  $this->db->order_by('ticket_id', "desc")
       ->limit(1)
       ->get('inquiries')
       ->row();

   }
   public function search_ticket($ticket_uniqueid){
      
        $this->db->like('ticket_uniqueid', $ticket_uniqueid);
        $query = $this->db->get("inquiries");
        return $query->result();
   }
    
    public function get_ticket(){
        if(!empty($this->input->get("search"))){
            $this->db->like('ticket_id', $this->input->get("search"));
            $this->db->or_like('issue_title', $this->input->get("search"));
        }
        $query = $this->db->get("inquiries");
        return $query->result();
    }

    public function update_ticket($ticket_id){
        $data = array(
            'operator' => $this->input->post('operator')
            
        );
        if($ticket_id == 0){
            return $this->db->insert('inquiries', $data);
        }else{
            $this->db->where('ticket_id', $ticket_id);
            return $this->db->update('inquiries', $data);
        }
    }

    public function update_ticket_operator($ticket_id){
        $data = array(
            'status' => $this->input->post('status'),
            'remarks'=> $this->input->post('remarks'),
            'updated_at' => mdate('%Y-%m-%d %H:%i:%s', now())
        );
        if($ticket_id == 0){
            return $this->db->insert('inquiries', $data);
        }else{
            $this->db->where('ticket_id', $ticket_id);
            return $this->db->update('inquiries', $data);
        }
    }

    public function find_ticket($ticket_id){
        return $this->db->get_where('inquiries', array('ticket_id' => $ticket_id))->row();
    }

    public function delete_ticket($ticket_id){
        return $this->db->delete('inquiries', array('ticket_id' => $ticket_id));
    }

    public function getoperators(){
        $query = $this->db->query('SELECT full_user_name,user_type from usermanagement where user_type = "operator"');

        return $query->result();
    }

    public function ticketcountall(){
        $query = $this->db->count_all_results('inquiries');

        return $query;
        }

    public function ticketcountday(){
        $dateNow = date("Y-m-d");
        $query = $this->db->where('created_at',$dateNow)->get('inquiries');
            
        $datecount = count($query->result_array());
            return $datecount;
        
    }

    public function ticketcountweek()
{
        $dateNow = date("Y-m-d" + strtotime("+7 day"));
    
        $query = $this->db->where('created_at', $dateNow)->get('inquiries');

        $datecount = count($query->result_array());
            return $datecount;
    }

    public function ticketcountmonth(){

        $dateNow = date("Y-m-d");
        
        
        $query = $this->db->where('created_at', $dateNow)->get('inquiries');

        $datecount = count($query->result_array());
            return $datecount;

    }

    
}

?>