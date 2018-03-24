<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class CustomerPortal extends CI_Controller {

    public $CustomerPortal;
    public $usermanagement;
    


    /**
     *  Get All Data on this method
     * 
     * @return Response
     */
    public function __construct(){
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->helper('date');
        $this->load->model('CustomerPORTALModel');
        $this->load->model('UserManagement');

        $this->CustomerPortal = new CustomerPORTALModel;
        $this->usermanagement = new UserManagement;
    }   

    /**
     * Display homepage
     * 
     * @return Response
     */

    public function index(){
        $this->load->view('theme/header');
        $this->load->view('homepage');
        $this->load->view('theme/footer');
    }

    //public function create(){
        
      //  $this->load->view('theme/header');
        //$this->load->view('CustomerPortal/create');
      //  $this->load->view('theme/footer');
    //}

    public function store(){
        
        $this->form_validation->set_rules('full_name', 'Full_Name', 'required');
        $this->form_validation->set_rules('issue_title', 'Issue_Title', 'required');
        $this->form_validation->set_rules('issue_description', 'Issue_Description', 'required');


        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('CustomerPortal'));
        }
        else{
       $value["data"] = $this->CustomerPortal->insert_ticket();
     
            $this->load->view('theme/header');
            $this->load->view('CustomerPortal/ticketpage',$value);
            $this->load->view('theme/footer');
        }


    }

    public function ticketshow(){

        $this->load->view('theme/header');
        $this->load->view('CustomerPortal/view');
        $this->load->view('theme/footer');
    }

    public function ticketsearch(){
        $this->form_validation->set_rules('ticket_uniqueid', 'Ticket_Uniqueid', 'required');
       $ticket_uniqueid = $this->input->post('ticket_uniqueid');
        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('CustomerPortal/ticketshow'));
        }else{
       $data['results'] = $this->CustomerPortal->search_ticket($ticket_uniqueid);

       $this->load->view('theme/header');
       $this->load->view('CustomerPortal/ticketview', $data);
       $this->load->view('theme/footer');
        }
    }

    public function login(){

        $this->load->view('theme/header');
        $this->load->view('login');
        $this->load->view('theme/footer');
    }


    // For Admin //


    public function adminlogin(){
        $this->load->view('theme/header');
        $this->load->view('Login/adminlogin');
        $this->load->view('theme/footer');
    }
    
    public function admin_login_process(){
        $this->form_validation->set_rules('user_name', 'Username', 'required');
        $this->form_validation->set_rules('user_password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE){
            if(isset($this->session->userdata['logged_in'])){
                $this->load->view('Admin/adminheader');
                $this->load->view('Admin/adminview');
                $this->load->view('theme/footer');
            }else{
               
                $this->load->view('theme/header');
                $this->load->view('Login/adminlogin');
                $this->load->view('theme/footer');
            }
        } else{
            $data = array(
                'user_name' => $this->input->post('user_name'),
                'user_password' => $this->input->post('user_password')
            );
            $result = $this->usermanagement->login($data);
            if ($result == TRUE){
                $user_name = $this->input->post('user_name');
                $result = $this->usermanagement->read_user_information($user_name);
                if($result != false){
                    $session_data = array(
                        'user_name' => $result[0]->user_name
                    );
                    $this->session->set_userdata('logged_in', $session_data);
                    $this->load->view('Admin/adminheader');
                    $this->load->view('Admin/adminview');
                    $this->load->view('theme/footer');
                }
            } else{
               $data = array(
                   'error_message' => 'Invalid Username or Password'
               );
                $this->load->view('theme/header');
                $this->load->view('Login/adminlogin',$data);
                $this->load->view('theme/footer');

            }
        }
    }

    public function adminlogout(){
        $sess_array = array(
            'user_name' => ''
        );

        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'Successfully Logout';
        $this->load->view('theme/header');
        $this->load->view('Login/adminlogin', $data);
        $this->load->view('theme/footer');
    }

    public function usermanagementindex(){
        $data['data'] = $this->usermanagement->get_usermanagementCRUD();

        $this->load->view('Admin/adminheader');
        $this->load->view('Admin/adminusermanagementlist', $data);
        $this->load->view('theme/footer');
    }

    public function usermanagementshow($id){
        $usermanage = $this->usermanagement->find_user($id);

        $this->load->view('Admin/adminheader');
        $this->load->view('Admin/adminusermanagementshow', array('usermanage'=>$usermanage));
        $this->load->view('theme/footer');
    }

    public function usermanagementcreate(){
        $this->load->view('Admin/adminheader');
        $this->load->view('Admin/adminusermanagementcreate');
        $this->load->view('theme/footer');
    }

    public function usermanagementstore(){
        $this->form_validation->set_rules('full_user_name', 'Full_User_Name', 'required');
        $this->form_validation->set_rules('user_name', 'User_Name', 'required');
        $this->form_validation->set_rules('user_password', 'User_Password', 'required');
        $this->form_validation->set_rules('user_type', 'User_Type', 'required');

        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('CustomerPortal/usermanagementcreate'));
        }else{
            $this->usermanagement->insert_user();
            redirect(base_url('CustomerPortal/usermanagementindex'));
        }
    }

    public function usermanagementedit($id){
        
        $usermanage = $this->usermanagement->find_user($id);

        $this->load->view('Admin/adminheader');
        $this->load->view('Admin/adminusermanagementedit',array('usermanage' => $usermanage));
        $this->load->view('theme/footer');
    }

    public function usermanagementupdate($id){
        $this->form_validation->set_rules('user_type', 'User_Type', 'required');

        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('CustomerPortal/usermanagementedit/'. $id));
        }else{
            $this->usermanagement->update_user($id);
            redirect(base_url('CustomerPortal/usermanagementindex/'));
        }
    }

    public function usermanagementdelete($id){
        $usermanage = $this->usermanagement->delete_user($id);
        redirect(base_url('CustomerPortal/usermanagementindex'));
    }

    public function adminticketindex(){
        $data['data'] = $this->CustomerPortal->get_ticket();

        $this->load->view('Admin/adminheader');
        $this->load->view('Admin/adminticketlist', $data);
        $this->load->view('theme/footer');
    }

    public function adminticketshow($ticket_id){
        $adminticket = $this->CustomerPortal->find_ticket($ticket_id);

        $this->load->view('Admin/adminheader');
        $this->load->view('Admin/adminticketshow', array('adminticket' => $adminticket));
        $this->load->view('theme/footer');
    }

    public function adminticketedit($ticket_id){
        $adminticket = $this->CustomerPortal->find_ticket($ticket_id);

        $data['groups'] = $this->CustomerPortal->getoperators();
        $this->load->view('Admin/adminheader');
        $this->load->view('Admin/adminticketedit', array('adminticket' => $adminticket),$data);
        $this->load->view('theme/footer');
    }

    public function adminticketupdate($ticket_id){

        $this->form_validation->set_rules('operator', 'Operator', 'required');

        if($this->form_validation->run() == FALSE ){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('CustomerPortal/adminticketedit/'.$ticket_id));
        }else{
            $this->CustomerPortal->update_ticket($ticket_id);
            redirect(base_url('CustomerPortal/adminticketindex'));
        }
    }

    public function adminticketdelete($ticket_id){
        $adminticket = $this->CustomerPortal->delete_ticket($ticket_id);
        redirect(base_url('CustomerPortal/adminticketindex'));
    }

    public function adminticketreports(){

        $data["all"] = $this->CustomerPortal->ticketcountall();
        $data["day"] = $this->CustomerPortal->ticketcountday();
        $data["week"] = $this->CustomerPortal->ticketcountweek();
        $data["month"] = $this->CustomerPortal->ticketcountmonth();
        

        $this->load->view('Admin/adminheader');
        $this->load->view('Admin/adminreport',$data);
        $this->load->view('theme/footer');
    }






    // For Operator //
    public function operatorlogin(){
        $this->load->view('theme/header');
        $this->load->view('Login/operatorlogin');
        $this->load->view('theme/footer');
    }

    public function operator_login_process(){
        $this->form_validation->set_rules('user_name', 'Username', 'required');
        $this->form_validation->set_rules('user_password', 'Password', 'required');

        if ($this->form_validation->run() == FALSE){
            if(isset($this->session->userdata['logged_in'])){

                $data['data'] = $this->CustomerPortal->get_ticket();

                $this->load->view('Operator/operatorheader');
                $this->load->view('Operator/operatorticketlist', $data);
                $this->load->view('theme/footer');
            }else{
                $this->load->view('theme/header');
                $this->load->view('Login/operatorlogin');
                $this->load->view('theme/footer');
            }
        } else{
            $data = array(
                'user_name' => $this->input->post('user_name'),
                'user_password' => $this->input->post('user_password')
            );
            $result = $this->usermanagement->login($data);
            if ($result == TRUE){
                $user_name = $this->input->post('user_name');
                $result = $this->usermanagement->read_user_information($user_name);
                if($result != false){
                    $session_data = array(
                        'user_name' => $result[0]->user_name
                    );
                    $this->session->set_userdata('logged_in', $session_data);

                    $data['data'] = $this->CustomerPortal->get_ticket();
                    $this->load->view('Operator/operatorheader');
                    $this->load->view('Operator/operatorticketlist', $data);
                    $this->load->view('theme/footer');
                }
            } else{
                $data = array(
                    'error_message' => 'Invalid Username or Password'
                );
                $this->load->view('theme/header');
                $this->load->view('Login/operatorlogin', $data);
                $this->load->view('theme/footer');

            }
        }
    }

    public function operatorlogout(){
        $sess_array = array(
            'user_name' => ''
        );

        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'Successfully Logout';
        $this->load->view('theme/header');
        $this->load->view('Login/operatorlogin', $data);
        $this->load->view('theme/footer');
    }

    public function operatorindex(){
        $data['data'] = $this->CustomerPortal->get_ticket();

        $this->load->view('Operator/operatorheader');
        $this->load->view('Operator/operatorticketlist', $data);
        $this->load->view('theme/footer');
    }

    public function operatorshowticket($ticket_id){
        $operatorticket = $this->CustomerPortal->find_ticket($ticket_id);

        $this->load->view('Operator/operatorheader');
        $this->load->view('Operator/operatorshowticket', array('operatorticket' => $operatorticket));
        $this->load->view('theme/footer');
    }

    public function operatoreditticket($ticket_id){
        $operatorticket = $this->CustomerPortal->find_ticket($ticket_id);

        $this->load->view('Operator/operatorheader');
        $this->load->view('Operator/operatoreditticket', array('operatorticket' => $operatorticket));
        $this->load->view('theme/footer');
    }

    public function operatorupdateticket($ticket_id){
        $this->form_validation->set_rules('status', 'Status', 'required');
        $this->form_validation->set_rules('remarks', 'Remarks', 'required');

        if($this->form_validation->run() == FALSE){
            $this->session->set_flashdata('errors', validation_errors());
            redirect(base_url('CustomerPortal/operatorticketedit/'.$ticket_id));
        }else{
            $this->CustomerPortal->update_ticket_operator($ticket_id);
            redirect(base_url('CustomerPortal/operatorindex'));
        }
    }

}