<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Downline extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(array('session', 'encryption', 'form_validation', 'security', 'email'));
        $this->load->model(array('User_model'));
        $this->load->helper(array('user', 'birthdate', 'security', 'email'));
        date_default_timezone_set("Asia/Calcutta");
    }


    public function index($type='')
    {
        if (is_logged_in()) {
            if(empty($type)){
                $response['header'] = 'All Directs';
                $where = ['sponser_id' => $this->session->userdata['user_id']];
            }elseif($type == 1){
                $response['header'] = 'Active Directs';
                $where = ['sponser_id' => $this->session->userdata['user_id'], 'paid_status >' => 0];
            }elseif($type == 2){
                $response['header'] = 'Inactive Directs';
                $where = ['sponser_id' => $this->session->userdata['user_id'], 'paid_status' => 0];
            }
            $response['users'] = $this->User_model->get_records('tbl_users', $where, 'id,name,user_id,phone,email,created_at,topup_date,paid_status');
            $response['totalDirects'] = $this->User_model->get_single_record('tbl_users', $where, 'ifnull(count(id),0) as totalDirects');
            
            $this->load->view('directs', $response);
        }else{
            redirect('Member/Management/login');
        }
    }


    public function checkLeadership($type='')
    {
        if (is_logged_in()) {
            $response['header'] = 'Check Leadership Achivement';

            $where = ['sponser_id' => $this->session->userdata['user_id'], 'directs >=' => 5];
            $response['users'] = $this->User_model->get_records('tbl_users', $where, 'id,name,user_id,phone,email,created_at,topup_date,paid_status,sponser_id,directs');

            
            $this->load->view('checkLeadership', $response);
        }else{
            redirect('Member/Management/login');
        }
    }

    public function royaltyAchiver_list(){
        if (is_logged_in()) {

            $response['header'] = 'Royalty Achivers';
            $response['records'] = $this->User_model->get_records('tbl_users',array('royalty_status >' => 0), 'user_id,name'); 
            
            $this->load->view('royaltyAchiver_list', $response);
        }else{
            redirect('Member/Management/login');
        }

    }

    public function leadershipAchiver_list(){
        if (is_logged_in()) {

            $response['header'] = 'Leadership Achivers';
            $response['records'] = $this->User_model->get_records('tbl_users',array('leadership_status >' => 0), 'user_id,name');

            
            $this->load->view('leadershipAchiver_list', $response);
        }else{
            redirect('Member/Management/login');
        }
        
    }


    public function sponserDownline(){
        if (is_logged_in()) {
            $level = trim(addslashes($this->input->get('level')));
            $status = trim(addslashes($this->input->get('status')));
            $response['header'] = 'My Team Downline';
            if(!empty($level)){
                $query = $this->db->query('SELECT tbl_sponser_count.id,tbl_sponser_count.downline_id,tbl_sponser_count.user_id,tbl_users.name,tbl_users.email,tbl_users.sponser_id,tbl_users.paid_status,tbl_sponser_count.level FROM `tbl_sponser_count` INNER JOIN tbl_users ON tbl_users.user_id = tbl_sponser_count.downline_id WHERE tbl_sponser_count.user_id = "'.$this->session->userdata['user_id'].'" AND tbl_sponser_count.level = "'.$level.'" AND tbl_users.paid_status = "'.$status.'" ORDER by level ASC');
                $response['users'] = $query->result_array();
            }else{
                $query = $this->db->query('SELECT tbl_sponser_count.id,tbl_sponser_count.downline_id,tbl_users.name,tbl_users.email,tbl_sponser_count.user_id,tbl_users.sponser_id,tbl_users.paid_status,tbl_sponser_count.level FROM `tbl_sponser_count` INNER JOIN tbl_users ON tbl_users.user_id = tbl_sponser_count.downline_id WHERE tbl_sponser_count.user_id = "'.$this->session->userdata['user_id'].'" ORDER by level ASC');
                $response['users'] = $query->result_array();
            }

            
            $this->load->view('sponserDownline', $response);
        }else{
            redirect('Member/Management/login');
        }
        
    }


    
}