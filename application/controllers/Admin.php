<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form','url'));
        $this->load->library(array('form_validation', 'email'));
        $this->form_validation->set_error_delimiters('<span style="color:red">', '</span>');
        $this->load->library('session');
    }
    public function change_status($user="",$sts="")
	{
	     if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    if($user=="" || $sts==""){
	        
	        $this->session->set_flashdata('error_message' , "Please Try Again");
            redirect('admin/manage_user','refresh');
	   
	    }else{
    	       $sts_data=array(
    	           'status'=>$sts
    	           );
    	           $this->db->where('user_name',$user);
    	           $this->db->where('status!=',$sts);
    	         $sts_updation= $this->db->update('user_role',$sts_data);
	           if($sts_updation){
	               
	               $this->session->set_flashdata('success_message' , "Status Updated Successfully ");
                   redirect('admin/manage_user','refresh');
	           }else{
	               $this->session->set_flashdata('error_message' , "Please Try Again");
                   redirect('admin/manage_user','refresh');
	           }
	        
            
	    }
	}
    public function test()
    {
        echo sprintf('%04u', "1");
        // $today = date("Y-m-d");
        //  $check = $this->db->where('date(entry_date)',$today)->where('remark','Interest')->count_all_results('wallet')+0;
        //  echo $check;
    }
    
    
    
    public function gen_interest()
    {
        if($this->session->userdata('bhpausertype') != 'a')
        redirect('admin','refresh');
        
        $today = date("Y-m-d");
        
        $check = $this->db->where('date(entry_date)',$today)->where('remark','Interest')->count_all_results('wallet')+0;
        
        if($check > 0)
        {
         $this->session->set_flashdata('error_message' , "Interest already generated");
         redirect('admin','refresh');
        }
        else
        {
        
            $interest = $this->db->group_by('user_id')->select('sum(credit) - sum(debit) as amount,user_id as user')->get('wallet')->result_array();
            
           foreach($interest as $gint)
            {
            
            $intst = $gint['amount']*8/100;
            
            $gen_int = array(
                
                'user_id' => $gint['user'],
                'credit' => $intst,
                'entry_date' => date('Y-m-d H:i:s'),
                'remark' => "Interest"
                
                );
            
             $in_int = $this->db->insert('wallet',$gen_int);
             
            }
             $this->session->set_flashdata('success_message' , "Interest generated");
             redirect('admin','refresh');
        }
       
    }
    
    
    
    
    public function compliant_reply()
    {
        if($this->session->userdata('bhpausertype') != 'a')
        redirect('admin','refresh');
        
        $this->form_validation->set_rules('reply', 'Reply', 'trim|required');
        
        if($this->form_validation->run() == TRUE)
        {
          
          $this->db->set('reply',$this->input->post('reply'));
          $this->db->set('status','Replied');
          $this->db->where('id',$this->input->post('id'));
          $comm = $this->db->update('complaints');
            
          if($comm)
          {
           $this->session->set_flashdata('success_message' , "Replied successfully");
           redirect('admin/complaints_history','refresh');
          }
          else
          {       
           $this->session->set_flashdata('error_message' , "Something went wrong. Please try again");
           redirect('admin/complaints_history','refresh');
         }
        } 
        else
        {
            $data['page_name'] = 'complaints_history';
            $this->load->view('admin/complaints_history');
        }
    }
    
    
    
    
    public function gen_game_parity_win()
    {
        $this->db->trans_begin();
        $game_id = $this->db->order_by('id','DESC')->where('game_type','Parity')->get('games')->row()->game_id;
        $gamecheck = $this->db->where('game_id',$game_id)->get('game')->row_array();
        log_message("error", $this->db->last_query()."resdrhftghjktrdhjk");
        if(!empty($gamecheck)) {
        // $gw = $this->db->select('sum(pet_amount) as amount, gcode')->group_by('gcode')->where('game_id',$game_id)->select_min('pet_amount')->get('game')->row()->gcode;
       
        $gzero= $this->db->select('sum(pet_amount) as amount')->like('gcode',0)->where('game_id',$game_id)->select_min('pet_amount')->get('game')->row()->amount+0;
        $gone= $this->db->select('sum(pet_amount) as amount')->like('gcode',1)->where('game_id',$game_id)->select_min('pet_amount')->get('game')->row()->amount+0;
        $gtwo= $this->db->select('sum(pet_amount) as amount')->like('gcode',2)->where('game_id',$game_id)->select_min('pet_amount')->get('game')->row()->amount+0;
        $gthree= $this->db->select('sum(pet_amount) as amount')->like('gcode',3)->where('game_id',$game_id)->select_min('pet_amount')->get('game')->row()->amount+0;
        $gfour= $this->db->select('sum(pet_amount) as amount')->like('gcode',4)->where('game_id',$game_id)->select_min('pet_amount')->get('game')->row()->amount+0;
        $gfive= $this->db->select('sum(pet_amount) as amount')->like('gcode',5)->where('game_id',$game_id)->select_min('pet_amount')->get('game')->row()->amount+0;
        $gsix= $this->db->select('sum(pet_amount) as amount')->like('gcode',6)->where('game_id',$game_id)->select_min('pet_amount')->get('game')->row()->amount+0;
        $gseven= $this->db->select('sum(pet_amount) as amount')->like('gcode',7)->where('game_id',$game_id)->select_min('pet_amount')->get('game')->row()->amount+0;
        $geight= $this->db->select('sum(pet_amount) as amount')->like('gcode',8)->where('game_id',$game_id)->select_min('pet_amount')->get('game')->row()->amount+0;
        $gnine= $this->db->select('sum(pet_amount) as amount')->like('gcode',9)->where('game_id',$game_id)->select_min('pet_amount')->get('game')->row()->amount+0;
       
        $gamearray[] = $pets = array("amount" => $gzero,"gcode" => 0);
        $gamearray[] = $pets = array("amount" => $gone,"gcode" => 1);
        $gamearray[] = $pets = array("amount" => $gtwo,"gcode" => 2);
        $gamearray[] = $pets = array("amount" => $gthree,"gcode" => 3);
        $gamearray[] = $pets = array("amount" => $gfour,"gcode" => 4);
        $gamearray[] = $pets = array("amount" => $gfive,"gcode" => 5);
        $gamearray[] = $pets = array("amount" => $gsix,"gcode" => 6);
        $gamearray[] = $pets = array("amount" => $gseven,"gcode" => 7);
        $gamearray[] = $pets = array("amount" => $geight,"gcode" => 8);
        $gamearray[] = $pets = array("amount" => $gnine,"gcode" => 9);
        
        $priority=$this->db->select('rewards')->where('type','game_win')->where('criteria','win')->get('master')->row()->rewards;
        
        if($priority=='low'){
          asort($gamearray);
        }
        if($priority=='high'){
           rsort($gamearray);
        }
        
        
        
        $sliced_array = array_slice($gamearray, 0, 2);
        
        $first = $sliced_array[0];
        $secound = $sliced_array[1];
        
        $winner = $first['gcode'];

        $this->db->set('wincode',$winner);
        $this->db->where('game_type','Parity');
        $this->db->where('game_id',$game_id);
        $this->db->update('games');
        
        
        // $this->db->set('status','Win');
        // $this->db->set('wincode',$winner);
        // $this->db->where('game_type','Parity');
        // $this->db->where('game_id',$game_id);
        // $this->db->update('game');
        
        $this->db->set('status','Win');
        $this->db->set('wincode',$winner);
        $this->db->like('gcode',$winner);
        $this->db->where('game_type','Parity');
        $this->db->where('game_id',$game_id);
        $this->db->update('game');
        log_message("error", 'win'.$this->db->last_query());
        
        // $this->db->set('status','Fail');
        // $this->db->set('wincode !',$winner);
        // $this->db->where('game_type','Parity');
        // $this->db->where('game_id',$game_id);
        // $this->db->update('game');
        
        $this->db->set('status','Fail');
        $this->db->set('wincode',"-");
        $this->db->where('status','--');
        $this->db->where('game_type','Parity');
        $this->db->where('game_id',$game_id);
        $this->db->update('game');
        log_message("error", 'not win'.$this->db->last_query());
        
        log_message("error", $this->db->last_query());
        if($first['amount']==$secound['amount']){
            
            $winner = array(0,5);
            shuffle($winner);
            $zero_users=$this->db->like('gcode',$winner[0])->where('game_id',$game_id)->get('game')->result_array();
            foreach($zero_users as $zu){
                $credit=$zu['pet_amount']*1.5;
                if($credit > 0){
                     $zu_data = array(
                    'user_id' => $zu['user_id'],
                    'credit' => $credit,
                    'entry_date' =>date('Y-m-d H:i:s'),
                    'remark' =>'Win Game'
                    );
                    
                    $this->db->insert('wallet',$zu_data);
                    log_message('error','x'.$this->db->last_query());
                }
               
            }

        }else{
            
            $win_users=$this->db->like('gcode',$winner)->where('game_id',$game_id)->get('game')->result_array();
            
            foreach($win_users as $w_user){
                if($w_user['g_color']!=""){
                     $win_credit=$w_user['pet_amount']*8;
                     
                    if($win_credit > 0){
                         $zu_data = array(
                        'user_id' => $w_user['user_id'],
                        'credit' => $win_credit,
                        'entry_date' =>date('Y-m-d H:i:s'),
                        'remark' =>'Win Game'
                        );
                        
                        $this->db->insert('wallet',$zu_data);
                          log_message('error','z'.$this->db->last_query());
                    }
                }else{
                    
                     $win_credit=$w_user['pet_amount']*2;
                     
                    if($win_credit > 0){
                     $zu_data = array(
                    'user_id' => $w_user['user_id'],
                    'credit' => $win_credit,
                    'entry_date' =>date('Y-m-d H:i:s'),
                    'remark' =>'Win Game'
                    );
                    
                    $this->db->insert('wallet',$zu_data);
                      log_message('error','a'.$this->db->last_query());
                    }
                
               
                }
            }
        
    //     $randwin=$this->db->order_by('id','DESC')->where('game_type','Parity')->where('status','Win')->get('game')->row()->wincode+1;
    //   log_message('error','a'.$this->db->last_query());
     
           
    //       $win_details = array(
                
    //             'status' =>'Win',
    //             'wincode' => $randwin.$b,
    //             'gcode'=>$b,
    //             'game_id'=>$game_id,
    //             'game_type'=>'Parity'
    //             );
    //     $this->db->insert('game',$win_details);
    //     log_message('error','a'.$this->db->last_query());
        
      
           
        }
        } else {
          $winnerrxx = rand(0,9);
            $this->db->set('wincode',$winnerrxx);
            $this->db->where('game_type','Parity');
            $this->db->where('game_id',$game_id);
            $this->db->update('games');
            log_message("error", $this->db->last_query()."xxxxxxxxxxxxxxxx");  
        }
        $game_id = $this->db->where('date(entry_date)',date('Y-m-d'))->where('game_type','Parity')->count_all_results('games')+1;
        
        
        $accept = array(
        'game_id' => date('Ymd').sprintf('%03u', $game_id),
        'game_type' => 'Parity',
        'entry_date' =>date('Y-m-d H:i:s'),
        'prices' => rand(2000,9999)
        );
        
        $this->db->insert('games',$accept);
        
       if($this->db->trans_status() == FALSE){
            
            $this->db->trans_rollback();
        } else {
            
            $this->db->trans_commit();

        } 
        
    }
    
    public function gen_game_sapre_win()
    {
        $this->db->trans_begin();
        $game_id = $this->db->order_by('id','DESC')->where('game_type','Sapre')->get('games')->row()->game_id;
        $gamecheck = $this->db->where('game_id',$game_id)->get('game')->row_array();
        log_message("error", $this->db->last_query()."resdrhftghjktrdhjk");
        if(!empty($gamecheck)) {
        
        
        // $gw = $this->db->select('sum(pet_amount) as amount, gcode')->group_by('gcode')->where('game_id',$game_id)->select_min('pet_amount')->get('game')->row()->gcode;
       
        $gzero= $this->db->select('sum(pet_amount) as amount')->like('gcode',0)->where('game_id',$game_id)->select_min('pet_amount')->get('game')->row()->amount+0;
        $gone= $this->db->select('sum(pet_amount) as amount')->like('gcode',1)->where('game_id',$game_id)->select_min('pet_amount')->get('game')->row()->amount+0;
        $gtwo= $this->db->select('sum(pet_amount) as amount')->like('gcode',2)->where('game_id',$game_id)->select_min('pet_amount')->get('game')->row()->amount+0;
        $gthree= $this->db->select('sum(pet_amount) as amount')->like('gcode',3)->where('game_id',$game_id)->select_min('pet_amount')->get('game')->row()->amount+0;
        $gfour= $this->db->select('sum(pet_amount) as amount')->like('gcode',4)->where('game_id',$game_id)->select_min('pet_amount')->get('game')->row()->amount+0;
        $gfive= $this->db->select('sum(pet_amount) as amount')->like('gcode',5)->where('game_id',$game_id)->select_min('pet_amount')->get('game')->row()->amount+0;
        $gsix= $this->db->select('sum(pet_amount) as amount')->like('gcode',6)->where('game_id',$game_id)->select_min('pet_amount')->get('game')->row()->amount+0;
        $gseven= $this->db->select('sum(pet_amount) as amount')->like('gcode',7)->where('game_id',$game_id)->select_min('pet_amount')->get('game')->row()->amount+0;
        $geight= $this->db->select('sum(pet_amount) as amount')->like('gcode',8)->where('game_id',$game_id)->select_min('pet_amount')->get('game')->row()->amount+0;
        $gnine= $this->db->select('sum(pet_amount) as amount')->like('gcode',9)->where('game_id',$game_id)->select_min('pet_amount')->get('game')->row()->amount+0;
       
        $gamearray[] = $pets = array("amount" => $gzero,"gcode" => 0);
        $gamearray[] = $pets = array("amount" => $gone,"gcode" => 1);
        $gamearray[] = $pets = array("amount" => $gtwo,"gcode" => 2);
        $gamearray[] = $pets = array("amount" => $gthree,"gcode" => 3);
        $gamearray[] = $pets = array("amount" => $gfour,"gcode" => 4);
        $gamearray[] = $pets = array("amount" => $gfive,"gcode" => 5);
        $gamearray[] = $pets = array("amount" => $gsix,"gcode" => 6);
        $gamearray[] = $pets = array("amount" => $gseven,"gcode" => 7);
        $gamearray[] = $pets = array("amount" => $geight,"gcode" => 8);
        $gamearray[] = $pets = array("amount" => $gnine,"gcode" => 9);
        
        $priority=$this->db->select('rewards')->where('type','game_win')->where('criteria','win')->get('master')->row()->rewards;
        
        if($priority=='low'){
          asort($gamearray);
        }
        if($priority=='high'){
           rsort($gamearray);
        }
        
        
        
        $sliced_array = array_slice($gamearray, 0, 2);
        
        $first = $sliced_array[0];
        $secound = $sliced_array[1];
        
        $winner = $first['gcode'];
        
        $this->db->set('wincode',$winner);
        $this->db->where('game_type','Sapre');
        $this->db->where('game_id',$game_id);
        $this->db->update('games');
        
        // $this->db->set('status','Win');
        // $this->db->set('wincode',$winner);
        // $this->db->where('game_type','Sapre');
        // $this->db->where('game_id',$game_id);
        // $this->db->update('game');
        
        $this->db->set('status','Win');
        $this->db->set('wincode',$winner);
        $this->db->like('gcode',$winner);
        $this->db->where('game_type','Sapre');
        $this->db->where('game_id',$game_id);
        $this->db->update('game');
        
        
        $this->db->set('status','Fail');
        $this->db->set('wincode',"-");
        $this->db->where('status','--');
        $this->db->where('game_type','Sapre');
        $this->db->where('game_id',$game_id);
        $this->db->update('game');
        
        
        log_message("error", $this->db->last_query());
        if($first['amount']==$secound['amount']){
            
            $winner = array(0,5);
            shuffle($winner);
            $zero_users=$this->db->like('gcode',$winner[0])->where('game_id',$game_id)->get('game')->result_array();
            foreach($zero_users as $zu){
                $credit=$zu['pet_amount']*1.5;
                if($credit > 0){
                     $zu_data = array(
                    'user_id' => $zu['user_id'],
                    'credit' => $credit,
                    'entry_date' =>date('Y-m-d H:i:s'),
                    'remark' =>'Win Game'
                    );
                    
                    $this->db->insert('wallet',$zu_data);
                    log_message('error','x'.$this->db->last_query());
                }
               
            }

        }else{
            
            $win_users=$this->db->like('gcode',$winner)->where('game_id',$game_id)->get('game')->result_array();
            
            foreach($win_users as $w_user){
                if($w_user['g_color']!=""){
                     $win_credit=$w_user['pet_amount']*8;
                     
                    if($win_credit > 0){
                         $zu_data = array(
                        'user_id' => $w_user['user_id'],
                        'credit' => $win_credit,
                        'entry_date' =>date('Y-m-d H:i:s'),
                        'remark' =>'Win Game'
                        );
                        
                        $this->db->insert('wallet',$zu_data);
                          log_message('error','z'.$this->db->last_query());
                    }
                }else{
                    
                     $win_credit=$w_user['pet_amount']*2;
                     
                    if($win_credit > 0){
                     $zu_data = array(
                    'user_id' => $w_user['user_id'],
                    'credit' => $win_credit,
                    'entry_date' =>date('Y-m-d H:i:s'),
                    'remark' =>'Win Game'
                    );
                    
                    $this->db->insert('wallet',$zu_data);
                      log_message('error','a'.$this->db->last_query());
                    }
                
               
                }
            }
        
    //     $randwin=$this->db->order_by('id','DESC')->where('game_type','Sapre')->where('status','Win')->get('game')->row()->wincode+1;
    //   log_message('error','a'.$this->db->last_query());
     
           
    //       $win_details = array(
                
    //             'status' =>'Win',
    //             'wincode' => $randwin.$b,
    //             'gcode'=>$b,
    //             'game_id'=>$game_id,
    //             'game_type'=>'Sapre'
    //             );
    //     $this->db->insert('game',$win_details);
    //     log_message('error','a'.$this->db->last_query());
        
      
           
        }
        } else {
            $winnerrrr = rand(0,9);
            $this->db->set('wincode',$winnerrrr);
            $this->db->where('game_type','Sapre');
            $this->db->where('game_id',$game_id);
            $this->db->update('games');
            log_message("error", $this->db->last_query()."xxxxxxxxxxxxxxxx");
        }
        
        $game_id = $this->db->where('date(entry_date)',date('Y-m-d'))->where('game_type','Sapre')->count_all_results('games')+1;
        
        
        $accept = array(
        'game_id' => date('Ymd').sprintf('%04u', $game_id),
        'game_type' => 'Sapre',
        'entry_date' =>date('Y-m-d H:i:s'),
        'prices' => rand(2000,9999)
        );
        
        $this->db->insert('games',$accept);
        
       if($this->db->trans_status() == FALSE){
            
            $this->db->trans_rollback();
        } else {
            
            $this->db->trans_commit();

        } 
        
    }
    
    public function update_bankcard()
    {
        
         if($this->session->userdata('bhpausertype') != 'a')
            redirect('admin','refresh');
        
        $this->form_validation->set_rules('acc_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('bank_name', 'Bank Name', 'required|trim');
        $this->form_validation->set_rules('ifsc', 'IFSC Code', 'required|trim');
        $this->form_validation->set_rules('acc_no', 'Account Number', 'required|numeric');
        $this->form_validation->set_rules('state', 'State', 'required|trim');
        $this->form_validation->set_rules('city', 'City', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('phone', 'Phone', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
         $this->form_validation->set_rules('upi', 'UPI', 'required|trim');
        $this->form_validation->set_rules('acc_phone', 'Phone', 'required|numeric|trim');
        
        if($this->form_validation->run() == TRUE)
        {
            
            $bank_details = array(
                
                'acc_name' => $this->input->post('acc_name'),
                'bank_name' => $this->input->post('bank_name'),
                'ifsc' => $this->input->post('ifsc'),
                'acc_no' => $this->input->post('acc_no'),
                'state' => $this->input->post('state'),
                'city' => $this->input->post('city'),
                'address' => $this->input->post('address'),
                'phone' => $this->input->post('phone'),
                'email' => $this->input->post('email'),
                'upi' => $this->input->post('upi'),
                'acc_phone' => $this->input->post('acc_phone'),
                
                );
            
            $update_bank = $this->db->where('bank_id',$this->input->post('bank_id'))->update('bank',$bank_details);
            
            if($update_bank){
                   $this->session->set_flashdata('success_message' , "Bank details updated successfully");
                   redirect('admin/manage_userbank','refresh');
               }else{
                   
                   $this->session->set_flashdata('error_message' , "Something went wrong. Please try again");
                   redirect('admin/manage_userbank','refresh');
               }
            
        }
        else
        {
          $data['page_name']='manage_userbank';    
          $this->load->view('admin/manage_userbank',$data);    
        }
    }
    
    
    
    
    public function winning_announcement()
    {
         if($this->session->userdata('bhpausertype') != 'a')
            redirect('admin','refresh');
            
            $datttt = date('i');
            $timeFirst  = strtotime(date('Y-m-d H:i:s'));
            $timeSecond = strtotime(date('Y-m-d H:'.(ceil(($datttt+0.1) / 3) * 3).':00'));
            $differenceInSeconds = $timeSecond - $timeFirst;
            
            if($gmae_type="Parity" && $differenceInSeconds>=30  ){
                $this->session->set_flashdata('error_message' , "Time Out");
                 redirect('admin/manage_winresult','refresh');
            }
            
                $datttt1 = date('s');
                $timeFirst1  = strtotime(date('Y-m-d H:i:s'));
                $timeSecond1= strtotime(date('Y-m-d H:i:'.(ceil(($datttt1+0.1) / 60) * 60).''));
                $differenceInSeconds1 = $timeSecond1 - $timeFirst1;
            
            if($gmae_type="Sapre" && $differenceInSeconds1 >=15  ){
                $this->session->set_flashdata('error_message' , "Time Out");
                 redirect('admin/manage_winresult','refresh');
            }
    
            $game_id=$this->input->post('hids');
            $number=$this->input->post('game_code');
            $gmae_type=$this->input->post('game');
            
            if($number!="" && $gmae_type!="" && $game_id){
            
                $win=$this->admin->winning_announcement($number,$gmae_type,$game_id);
                
                if($win==true){
                   $this->session->set_flashdata('success_message' , "Winning Details Announced Successfully");
                   redirect('admin/manage_winresult','refresh');
               }else{
                   
                   $this->session->set_flashdata('error_message' , "Please Try Again");
                   redirect('admin/manage_winresult','refresh');
               } 
           
            }else{
                $this->session->set_flashdata('error_message' , "Please Check Details & Submit Again");
               redirect('admin/manage_winresult','refresh');
            }
    }
    
    
    public function winner_priority_setting($priority="")
    {
        if($this->session->userdata('bhpausertype') != 'a')
        redirect('admin','refresh');
        
	    if($priority!=""){ 
	        
	     $upp = array(
            'rewards' => $priority,
            );
            $this->db->where('criteria','win');
            $this->db->where('type','game_win');
            $rem_up =$this->db->update('master',$upp);
            log_message('error',$this->db->last_query());
            if($rem_up){
                $this->session->set_flashdata('success_message','Priority Updated Successfully');
                redirect('admin/winner_setting','refresh');    
            }else{
                 $this->session->set_flashdata('error_message','Please Try Again');
                redirect('admin/winner_setting','refresh');  
            }
	    }else{
	          $this->session->set_flashdata('error_message','Please Try Again');
	        redirect('admin/winner_setting','refresh');  
	    }
        
        
    }
    
    public function winner_setting()
    {
        if($this->session->userdata('bhpausertype') != 'a')
        redirect('admin','refresh');
	    
        $data['page_name']='winner_setting';    
        $this->load->view('admin/winner_setting',$data);  
        
    }
    
    public function game_win()
    {
        if($this->session->userdata('bhpausertype') != 'a')
        redirect('admin','refresh');
	    
        $data['page_name']='game_win';    
        $this->load->view('admin/game_win',$data);  
        
    }


    
    public function update_roi()
    {
        
        if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
        
        if($_POST)
        {
           
           $this->form_validation->set_rules('reward', 'Reward', 'numeric|required'); 
           
             if($this->form_validation->run() == TRUE)
             {
                $roi = $this->admin->roi_update();
                
                if($roi)
                {
                $this->session->set_flashdata('success_message' , "ROI Updated successfully");
                   redirect('admin/update_roi','refresh'); 
                }
                else
                {
                   $this->session->set_flashdata('error_message' , "Something went wrong ROI not updated");
                   redirect('admin/update_roi','refresh');  
                }
             }
             else
             {
                 $data['page_name'] = 'update_roi';
                 $this->load->view('admin/update_roi',$data);
             }
            
        }
        else
        {
            $data['page_name'] = 'update_roi';
            $this->load->view('admin/update_roi',$data);
        }
    }
    
    
    public function gen_roi()
    {
        $roi_users=$this->db->select('sum(credit)-sum(debit) as balance,user_id')->group_by('user_id')->get('wallet')->result_array();
        
        log_message('error',$this->db->last_query());
        foreach($roi_users as $roi_user){
            
            if($roi_user['balance'] > 0){
                $rewards=$this->db->select('rewards')->where('criteria','roi')->where('type','ROI')->get('master')->row()->rewards;
                
                $credit=($roi_user['balance']*$rewards)/100;
            
                if($credit>0){
                    $roi_income = array(
                        'user_id' => $roi_user['user_id'],
                        'entry_date' => date("Y-m-d H:i:s"),
                        'credit' => number_format($credit,2),
                        'remark' =>'Interest'
             
                    );
                    $this->db->insert('wallet',$roi_income);
                }    
            }
            
        }
    }
    
    
   
    
    
    public function gen_gamesapre()
    {
        $game_id = $this->db->order_by('id','DESC')->where('game_type','Sapre')->get('games')->row()->game_id;
        $gw = $this->db->select('sum(pet_amount) as amount, gcode')->group_by('gcode')->where('game_id',$game_id)->select_min('pet_amount')->get('game')->row()->gcode;
        
        $this->db->set('status','Win');
        $this->db->where('game_type','Sapre');
        $this->db->where('gcode',$gw);
        $this->db->update('game');
        
        $game_id = $this->db->where('date(entry_date)',date('Y-m-d'))->where('game_type','Sapre')->count_all_results('games')+1;
        $accept = array(
        'game_id' => date('Ymd').$game_id,
        'game_type' => 'Sapre',
        'entry_date' =>date('Y-m-d H:i:s')
        );
        
        $this->db->insert('games',$accept);
        
    }
    

    
    
    public function update_upi()
    {
        if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
        
        
        if($_POST)
        {
            $this->form_validation->set_rules('title', 'Title', 'trim|required');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('acc_no', 'Account Number', 'trim|required|numeric');
            $this->form_validation->set_rules('web_link', 'Website Link', 'trim|required');
            $this->form_validation->set_rules('upi1', 'UPI ID 1', 'trim|required');
            $this->form_validation->set_rules('upi2', 'UPI ID 2', 'trim|required');
            $this->form_validation->set_rules('upi3', 'UPI ID 3', 'trim|required');
            $this->form_validation->set_rules('upi4', 'UPI ID 4', 'trim|required');
            $this->form_validation->set_rules('upi5', 'UPI ID 5', 'trim|required');
            $this->form_validation->set_rules('upi6', 'UPI ID 6', 'trim|required');
            $this->form_validation->set_rules('upi7', 'UPI ID 7', 'trim|required');
            $this->form_validation->set_rules('upi8', 'UPI ID 8', 'trim|required');
            $this->form_validation->set_rules('upi9', 'UPI ID 9', 'trim|required');
            $this->form_validation->set_rules('upi10', 'UPI ID 10', 'trim|required');
            
             if($this->form_validation->run() == TRUE)
             {
             
                 $upi = array(
                
                'title' => $this->input->post('title'),
                'email' => $this->input->post('email'),
                'acc_no' => $this->input->post('acc_no'),
                'web_link' => $this->input->post('web_link'),
                'upi_id1' => $this->input->post('upi1'),
                'upi_id2' => $this->input->post('upi2'),
                'upi_id3' => $this->input->post('upi3'),
                'upi_id4' => $this->input->post('upi4'),
                'upi_id5' => $this->input->post('upi5'),
                'upi_id6' => $this->input->post('upi6'),
                'upi_id7' => $this->input->post('upi7'),
                'upi_id8' => $this->input->post('upi8'),
                'upi_id9' => $this->input->post('upi9'),
                'upi_id10' => $this->input->post('upi10'),
                     
                );     
                
                
                $upi_in = $this->db->update('upi',$upi);
                
                if($upi_in)
                {
                   $this->session->set_flashdata('success_message' , "Updated successfully");
                   redirect('admin/website_management','refresh'); 
                }
                else
                {
                   $this->session->set_flashdata('error_message' , "Something went wrong UPI not updated");
                   redirect('admin/website_management','refresh');  
                }
            }
            else
            {
               $this->load->view('admin/website_management'); 
            }
        }
    }
    
    public function login()
	{
	if($_POST) 
        {
            $phone = $this->input->post('phone');
            $password = $this->input->post('password');
            log_message('error', $phone."phho");
            $check = $this->admin->login($phone,$password);
            if ($check !== false) {
                $this->session->set_userdata('bhpausername', $check['user_name']);
                $this->session->set_userdata('bhpaphone', $check['phone']);
                $this->session->set_userdata('bhpausertype', $check['user_type']);
                redirect('admin','refresh');
            } else {
                $this->session->set_flashdata('error_message' , "Please enter valid username and password");
                redirect('admin','refresh');
            }
        }
	}
    
	public function index()
	{
	    if($this->session->userdata('bhpausertype') == 'a')
	    {
	        $this->load->view('admin/index');
	    }
	    else
	    {
		$this->load->view('admin/login');
	    }
	}

    public function manage_adminuser()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'manage_adminuser';
		$this->load->view('admin/manage_adminuser',$data);
	}

	public function orders()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'orders';
		$this->load->view('admin/orders',$data);
	}

	public function manage_role()
	{
	     if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'manage_role';
		$this->load->view('admin/manage_role',$data);
	}

	public function manage_task()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'manage_task';
		$this->load->view('admin/manage_task',$data);
	}

	public function add_task()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'add_task';
		$this->load->view('admin/add_task',$data);
	}

	public function manage_banner()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'manage_banner';
		$this->load->view('admin/manage_banner',$data);
	}

	public function privacy_policy()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'privacy_policy';
		$this->load->view('admin/privacy_policy',$data);
	}

	public function riskagreement()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'riskagreement';
		$this->load->view('admin/riskagreement',$data);
	}

	public function website_management()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'website_management';
		$this->load->view('admin/website_management',$data);
	}

	public function manage_product()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'manage_product';
		$this->load->view('admin/manage_product',$data);
	}
	
	public function manage_specification()
	{
	   if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'manage_specification';
		$this->load->view('admin/manage_specification',$data);
	}
	
	public function add_specification()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'add_specification';
		$this->load->view('admin/add_specification',$data);
	}
	
	public function edit_specification()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'edit_specification';
		$this->load->view('admin/edit_specification',$data);
	}
	
	public function add_product()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'add_product';
		$this->load->view('admin/add_product',$data);
	}
	
	
	public function edit_product()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	     $data['page_name'] = 'edit_product';
		$this->load->view('admin/edit_product',$data);
	}

	public function manage_user()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'manage_user';
		$this->load->view('admin/manage_user',$data);
	}
	
	public function manage_userbank()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'manage_userbank';
		$this->load->view('admin/manage_userbank',$data);
	}

	public function manage_withdraw()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'manage_withdraw';
		$this->load->view('admin/manage_withdraw',$data);
	}

	public function manage_withdrawAccept()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'manage_withdrawAccept';
		$this->load->view('admin/manage_withdrawAccept',$data);
	}
	
	public function withdrawal_accept_reject()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	     $data['page_name'] = 'withdrawal_accept_reject';
		$this->load->view('admin/withdrawal_accept_reject');
	}
	

	public function manage_withdrawReject()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'manage_withdrawReject';
		$this->load->view('admin/manage_withdrawReject',$data);
	}

	public function manage_winresult()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'manage_winresult';
		$this->load->view('admin/manage_winresult',$data);
	}

	public function manage_parityhistory()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'manage_parityhistory';
		$this->load->view('admin/manage_parityhistory',$data);
	}

	public function manage_saprehistory()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'manage_saprehistory';
		$this->load->view('admin/manage_saprehistory',$data);
	}

	public function manage_bconehistory()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	     $data['page_name'] = 'manage_saprehistory';
		$this->load->view('admin/manage_bconehistory');
	}

	public function manage_emerdhistory()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	     $data['page_name'] = 'manage_emerdhistory';
		$this->load->view('admin/manage_emerdhistory',$data);
	}

	public function manage_tradehistory()
	{
	     if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'manage_tradehistory';
		$this->load->view('admin/manage_tradehistory',$data);
	}

	public function reward_system()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'reward_system';
		$this->load->view('admin/reward_system',$data);
	}

	public function manage_amount()
	{
	     if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'manage_amount';
		$this->load->view('admin/manage_amount',$data);
	}

	public function recharge_history()
	{
	     if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'recharge_history';
		$this->load->view('admin/recharge_history',$data);
	}
	
    public function recharge_details($id="")
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    if($_POST)
	    {
	        $this->form_validation->set_rules('utr', 'Transaction ID', 'trim|required');
            $this->form_validation->set_rules('amount', 'Amount', 'trim|required|numeric');
            $this->form_validation->set_rules('status', 'Status', 'trim|required');
            
              if($this->form_validation->run() == TRUE)
             {
             
                $upi_in = $this->admin->accept_req();
                
                if($upi_in)
                {
                   $this->session->set_flashdata('success_message' , "Updated successfully");
                   redirect('admin/recharge_history','refresh'); 
                }
                else
                {
                   $this->session->set_flashdata('error_message' , "Something went wrong UPI not updated");
                   redirect('admin/recharge_history','refresh');  
                }
            }
            else
            {
               $this->load->view('admin/recharge_details'); 
            }
          
            
	    }
	    
	    $data['page_name'] = 'recharge_details';
	    $data['req'] = $this->db->where('admin_request_id',$id)->get('admin_request')->row_array();
		$this->load->view('admin/recharge_details',$data);
	}

   public function deposit_update()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'deposit_update';
		$this->load->view('admin/deposit_update',$data);
	}

	public function manage_transaction()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'manage_transaction';
		$this->load->view('admin/manage_transaction',$data);
	}

	public function manage_support()
	{
	     if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	     $data['page_name'] = 'manage_support';
		$this->load->view('admin/manage_support',$data);
	}

	public function complaints_history()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'complaints_history';
		$this->load->view('admin/complaints_history',$data);
	}

	public function red_envolope()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	    $data['page_name'] = 'red_envolope';
		$this->load->view('admin/red_envolope',$data);
	}
	
	public function red_envolope_edit()
	{
	    if($this->session->userdata('bhpausertype') != 'a')
	    redirect('admin','refresh');
	    
	      $data['page_name'] = 'red_envolope_edit';
		$this->load->view('admin/red_envolope_edit',$data);
	}

public function logout()
	{
	  $this->session->set_userdata('bhpausername', '');
      $this->session->set_userdata('bhpaphone', '');
      $this->session->set_userdata('bhpausertype', '');
      redirect('admin','refresh');
	}





	
}
