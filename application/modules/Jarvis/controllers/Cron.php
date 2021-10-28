<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cron extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library(array('session', 'encryption', 'form_validation', 'security', 'email'));
        $this->load->model(array('Main_model'));
        $this->load->helper(array('admin', 'security'));
    }

    public function index() {

    }


    public function retopup($value='')
    {
        $users = $this->Main_model->get_records('tbl_users', array('retopup_status' => 0, 'paid_status >' => 0, 'user_id != ' => 'admin'), 'id,user_id,date(topup_date) as topup_date,retopup_date');
        // $users = $this->Main_model->get_records('tbl_users', array('topup_date >' => 0, 'paid_status' => 0), 'id,user_id,date(topup_date) as topup_date,retopup_date');
        foreach ($users as $key => $user) {
            $end = date('Y-m-d H:i:s');
            $start = $user['topup_date'];
            $diff = (strtotime($end)- strtotime($start))/24/3600; 
            if($diff >= 25.00){
                $set = ['paid_status' => 0, 'retopup_status' => 1, 'retopup_date' => date('Y-m-d H:i:s')];
                $this->Main_model->update('tbl_users', array('user_id' => $user['user_id']), $set);
            }
        }
    }


    public function deduction($value='')
    {
        $array = [
            0 => ['capping' => 1000, 'deduction' => 500, 'status' => 1],
            1 => ['capping' => 3000, 'deduction' => 1000, 'status' => 2],
            2 => ['capping' => 8000, 'deduction' => 2500, 'status' => 3],
            3 => ['capping' => 18000, 'deduction' => 5000, 'status' => 4],
        ];

        foreach ($array as $key => $value) {

            $query = $this->db->query('SELECT ifnull(sum(tbl_income_wallet.amount),0) as total_amount,tbl_income_wallet.user_id FROM tbl_income_wallet INNER JOIN tbl_users ON tbl_users.user_id = tbl_income_wallet.user_id WHERE tbl_income_wallet.amount > "0" AND tbl_users.deduction_status = "'.$key.'" AND tbl_income_wallet.type != "bank_transfer" GROUP by tbl_income_wallet.user_id HAVING total_amount >= "'.$value['capping'].'"');
            $users = $query->result_array();
            //$users = $this->Main_model->get_records('tbl_users', array('deduction_status' => $key), 'id,user_id,deduction_status');
            foreach ($users as $key2 => $value2) {
                if($value2['total_amount'] >= $value['capping']){
                    $deduction = [
                        'user_id' => $value2['user_id'],
                        'amount' => '-'.($value['deduction']),
                        'type' => 'shopping_wallet',
                        'description' => 'Shopping Wallet Deduction',
                    ];
                    $this->Main_model->add('tbl_income_wallet', $deduction);

                    $set = ['deduction_status' => $value['status']];
                    $this->Main_model->update('tbl_users', array('user_id' => $value2['user_id']), $set);

                    pr($value2);

                }
            }
        }
    }


    public function royalty_income(){

        $cron = $this->Main_model->get_single_record('tbl_cron',' date(created_at) = date(now()) and cron_name = "reward_cron"' ,'*');
        if(empty($cron)){
            $achievers = $this->Main_model->get_records('tbl_users', array('directs >=' => 25 ), 'id,user_id,name,phone');//$this->Main_model->rewards_users();
            $today_ids = $this->Main_model->get_single_record('tbl_users', 'date(topup_date) = date(now()) - 1', 'ifnull(sum(package_amount),0) as today_ids');
            echo ' Today Joings '.$today_ids['today_ids'].'<br>';
            $distributable_income = (($today_ids['today_ids'] * 2)/100);
            echo 'Today Rewards Income '.$distributable_income.'<br>';
            $per_pair_amount = $distributable_income / count($achievers);
            echo'per pair amount : ' .$per_pair_amount.'<br>';
            foreach($achievers as $key => $achiever){
                $income = array(
                    'user_id' => $achiever['user_id'],
                    'amount' => $per_pair_amount,
                    'type' => 'royalty_income',
                    'description' => 'Daily Royalty Income',
                );
                    pr($income);
               $this->Main_model->add('tbl_income_wallet', $income);
            }
            $this->Main_model->add('tbl_cron', array('cron_name' => 'reward_cron'));
        }else{
            echo'today cron already run';
        }
    }
    
    public function remove_roi_level(){
        // die('Stop');
        ini_set('max_execution_time', 0); 
        $achievers = $this->Main_model->checkRoiLevel();
        foreach($achievers as $key => $ac){
            for($i=1;$i<=6;$i++){
                $users = $this->Main_model->get_single_record('tbl_roi',array('user_id' => $ac['user_id'],'level' => $i),'*');
                if(!empty($users)){
                    $date1 = date('Y-m-d H:i:s');
                    $date2 = date('Y-m-d H:i:s',strtotime($users['created_at'].'+ 72 hours'));
                    $diff = strtotime($date1) - strtotime($date2);
                    //echo $diff . 'level '.$i.'<br>';
                    if($diff > 0){
                        $this->lapsLevel($users['id'],$ac['user_id'],$i);
                    }
                }else{
                    $i = 6;
                }
            }
        }
    }

    public function lapsLevel($id,$user_id,$level){
        $legArr = $this->config->item('single_leg');
        foreach($legArr as $key => $la){
            if($level == $key){
                $userdata = $this->Main_model->get_single_record('tbl_users',array('user_id' => $user_id, 'paid_status >' => 0),'directs');
                if($userdata['directs'] < $la['total_directs']){
                    $this->Main_model->update('tbl_roi',array('id' => $id,'level' => $level),array('days' => 0));
                }
            }
        }
    }


    public function calculate_roi_users(){
        echo 'Start: '.date('H:i:s');
        $last_id = $this->Main_model->get_single_record_desc('tbl_users',array(),'id');
        $achievers = $this->Main_model->get_records('tbl_users', array('paid_status' => 1, 'total_user_after_paid >=' => 100), 'id,user_id,sponser_id,directs,total_user_after_paid,single_leg_status');
        $legArr = $this->config->item('single_leg');
        foreach($achievers as $key => $achiever){
            $directs = $this->Main_model->get_single_record('tbl_users', array('sponser_id' => $achiever['user_id'] , 'paid_status' => 1), 'ifnull(count(id),0) as directs');
            foreach($legArr as $key2 => $la){
                if($achiever['single_leg_status'] < $key2){
                    $new_id = $last_id['id'] - $achiever['id'];
                    //if($directs['directs'] >= $la['direct_sponser'] && ($achiever['total_user_after_paid']) >= $la['winning_team']){
                    if($achiever['total_user_after_paid'] >= $la['winning_team']){
                        $roi_user = $this->Main_model->get_single_record('tbl_roi', array('user_id' => $achiever['user_id'] , 'level' => $key2), '*');
                        if(empty($roi_user)){
                            $roiArr = array(
                                'user_id' => $achiever['user_id'],
                                'amount' => $la['amount'],
                                'type' => 'single_leg_income',
                                'remark' =>'Single Leg Income for '.$key2.' Level',
                                'level' => $key2,
                                'days' => $la['day'],
                            );
                            pr($roiArr);
                            echo date('H:i:s');
                            $this->Main_model->add('tbl_roi', $roiArr);
                            $this->Main_model->update('tbl_users', array('user_id' => $achiever['user_id']), array('single_leg_status' => $key2));
                        }
                    }
                }
            }
        }
        echo 'Done'.date('H:i:s');
    }


    public function credit_roi_income(){
        $cron = $this->Main_model->get_single_record('tbl_cron','  date(created_at) = date(now()) and cron_name = "credit_roi_income"' ,'*');
        if(empty($cron)){   
            $legArr = $this->config->item('single_leg');
            for ($i=1; $i < 14; $i++) {
                $achievers = $this->Main_model->get_records('tbl_roi', array('days >' => 0, 'level' => $i), '*');
                foreach($achievers as $key => $achiever){
                    $user = $this->Main_model->get_single_record('tbl_users', array('user_id' => str_replace(' ','',$achiever['user_id'])), 'id,user_id,directs,single_leg_status,paid_status');

                    if($user['directs'] >= $legArr[$achiever['level']]['total_directs'] && $user['paid_status'] == 1){
                        $income = array(
                            'user_id' => $achiever['user_id'],
                            'amount' => $achiever['amount'],
                            'type' => $achiever['type'],
                            'description' => $achiever['remark'] .' At Day '.$achiever['days'],
                            'level' => $achiever['level'],
                        );

                        $this->Main_model->add('tbl_income_wallet', $income);
                       //}
                        pr($user);
                        $this->Main_model->update('tbl_roi', array('id' => $achiever['id']), array('days' => $achiever['days'] - 1));
                    // }
                }
            }
        }
            $this->Main_model->add('tbl_cron', array('cron_name' => 'credit_roi_income'));
            //$this->checkPoolEntry();
            echo 'Done';
        }else{
            echo'today cron already run';
        }
    }
    
}
