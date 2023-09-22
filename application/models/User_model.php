<?php
error_reporting(0);
defined('BASEPATH') or exit('No direct script access allowed');
class User_model extends CI_Model {
 
 
    public function game_amount($user_id="",$amount="")
    {
     $this->db->trans_begin();
     
     $date = date('Y-m-d H:i:s');
     
     $debit=($amount*5)/100;
     $bet_amount=$amount-$debit;
      $wallet = array(
            'user_id' => $user_id,
            'entry_date' => $date,
            'debit' => $debit,
            'remark' => 'Game Deduction'
            );
            
       $this->db->insert('wallet',$wallet);
       
       
       
        $wallet = array(
            'user_id' => $user_id,
            'entry_date' => $date,
            'debit' => $bet_amount,
            'remark'=>'Betting'
            );
            
       $this->db->insert('wallet',$wallet);
       
       $game_id = $this->db->order_by('id','DESC')->where('game_type',$this->input->post('game_Type'))->get('games')->row()->game_id;
        $g_numbers=$this->db->where('type','game')->where('criteria',$this->input->post('selected_value'))->get('master')->row_array();
         log_message('error',$this->db->last_query());
        if(!empty($g_numbers)){
            
          $g_color = $this->input->post('selected_value');
          $gcode=$g_numbers['level'];
          
          }else{
              
              $g_color="";
              $gcode=$this->input->post('selected_value');
          }
          log_message('error',$g_color);
           log_message('error',$gcode);
      $game = array(
          
          'entry_date'=> date('Y-m-d H:i:s'),
          'game_id' => $game_id,
          'game_type' => $this->input->post('game_Type'),
          'user_id' =>$user_id,
          'gcode' => $gcode,
          'g_color'=>$g_color,
          'pet_amount' => $bet_amount,
          'contract_amount'=> $amount,
          'contract_count' => $this->input->post('number'),
          
       );
       
      if($this->db->insert('game',$game)){
          
          // ++++++++++++++++ LEVEL INCOME CALCULATION STARTS ++++++++++++++++ //
          $user_detail=$this->db->where('user_name',$user_id)->get('user_role')->row_array();
          
                $parents = explode(',', $user_detail['team']);
                //  log_message('error', $user_detail['team']);
                
                if($user_detail['team'] != ""){
                    for($z=0; $z<min(3,count($parents)); $z++){
                        $level = ($z+1);
                        $rewards=$this->db->where('type','level')->where('criteria','level')->where('level',$level)->get('master')->row_array();
                        $credit=$bet_amount*$rewards['rewards']/100;
                        if($credit>0){
        
                            $level_income_data['user_id'] = $parents[$z];
                            $level_income_data['credit'] = number_format($credit,2);
                            $level_income_data['remark'] = 'Level';
                            $level_income_data['description'] = 'Level'.$level;
                            $level_income_data['entry_date'] = date("Y-m-d H:i:s");
                            $level_income_data['from_user'] = $user_id;
                            $this->db->insert('wallet',$level_income_data);
                            
                        }
                    } 
                } 
                   
            // ++++++++++++++++ LEVEL INCOME CALCULATION ENDS ++++++++++++++++ //
      }
        
      if($this->db->trans_status() == FALSE){
            
            $this->db->trans_rollback();
            return false;
        } else {
            
            $this->db->trans_commit();
            return true;
        } 
       
 }
 
    public function reset_otp($id="")
    {
    $otp = rand(1000,9999);
    log_message('error',$id);
    $this->db->set('otp',$otp);
    $this->db->set('otp_time',date('Y-m-d H:i:s'));
    $this->db->where('user_name',$this->session->userdata('bhpusername'));
    $this->db->where('email',$id);
    $this->db->update('user_role');
    
    //$mail = $this->db->select('email')->where('user_name',$this->session->userdata('bhpusername'))->get('user_role')->row()->email;
    
    $mail = $id;
    
    $from_email='noreply@backofficee.com';
    $from_name='Bharatpay';
    $to_email = $mail;
    $subject_email = 'Bharatpay OTP';
    $dataemail['otp']=$otp;
    $mesg = $this->load->view('user/mail_otp',$dataemail,true);
    $config = Array(
        'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
        'smtp_host' => 'backofficee.com', 
        'smtp_port' => 465,
        'mailtype' => 'html',// it can be text or html
        'wordwrap' => TRUE,
        'newline' => "\r\n",
        'charset' => 'utf-8',
        'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
        'smtp_timeout' => '4', //in seconds
    );
    $this->load->library('email');
    $this->email->initialize($config);
    $this->email->from($from_email, $from_name); 
    $this->email->to($to_email);
    $this->email->subject($subject_email); 
    $this->email->message("$mesg");   
   // $this->email->set_newline("\r\n");
    $this->email->send();
    // if(!$this->email->send()){
    //     $this->session->set_flashdata('success_message' , "OTP sent to your Mail ID");
    //     redirect('user/edit_profile1','refresh'); 
    // } else {
    //   $this->session->set_flashdata('error_message' , "Mail not sent. Please try after sometime");
    //     redirect('user/edit_profile1','refresh'); 
    // }
 }
 
    public function forgot_otp($id="")
    {
         $otp = rand(1000,9999);
        log_message('error',$id);
        $this->db->set('otp',$otp);
        $this->db->set('otp_time',date('Y-m-d H:i:s'));
        $this->db->where('email',$id);
        $this->db->update('user_role');
        
        //$mail = $this->db->select('email')->where('user_name',$this->session->userdata('bhpusername'))->get('user_role')->row()->email;
        
        $mail = $id;
        
        $from_email='noreply@backofficee.com';
        $from_name='Bharatpay';
        $to_email = $mail;
        $subject_email = 'Bharatpay OTP';
        $dataemail['otp']=$otp;
        $mesg = $this->load->view('user/mail_otp',$dataemail,true);
        $config = Array(
            'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
            'smtp_host' => 'backofficee.com', 
            'smtp_port' => 465,
            'mailtype' => 'html',// it can be text or html
            'wordwrap' => TRUE,
            'newline' => "\r\n",
            'charset' => 'utf-8',
            'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
            'smtp_timeout' => '4', //in seconds
        );
        $this->load->library('email');
        $this->email->initialize($config);
        $this->email->from($from_email, $from_name); 
        $this->email->to($to_email);
        $this->email->subject($subject_email); 
        $this->email->message("$mesg");   
       // $this->email->set_newline("\r\n");
        $this->email->send();
        // if(!$this->email->send()){
        //     $this->session->set_flashdata('success_message' , "OTP sent to your Mail ID");
        //     redirect('user/edit_profile1','refresh'); 
        // } else {
        //   $this->session->set_flashdata('error_message' , "Mail not sent. Please try after sometime");
        //     redirect('user/edit_profile1','refresh'); 
        // }
     }
 
    public function reg_otp($id="")
    {
            log_message('error',$id);
            
            $otp = rand(1000,9999);
            
            $inn = array(
            
            'email' => $id,
            'otp' => $otp,
            'entry_date' => date('Y-m-d H:i:s')
            );
            
            $this->db->insert('reg_otp',$inn);
            
            //$mail = $this->db->select('email')->where('user_name',$this->session->userdata('bhpusername'))->get('user_role')->row()->email;
            
            $mail = $id;
            
            $from_email='noreply@backofficee.com';
            $from_name='Bharatpay';
            $to_email = $mail;
            $subject_email = 'Bharatpay OTP';
            $dataemail['otp']=$otp;
            $mesg = $this->load->view('user/mail_otp',$dataemail,true);
            $config = Array(
                'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
                'smtp_host' => 'backofficee.com', 
                'smtp_port' => 465,
                'mailtype' => 'html',// it can be text or html
                'wordwrap' => TRUE,
                'newline' => "\r\n",
                'charset' => 'utf-8',
                'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
                'smtp_timeout' => '4', //in seconds
            );
            $this->load->library('email');
            $this->email->initialize($config);
            $this->email->from($from_email, $from_name); 
            $this->email->to($to_email);
            $this->email->subject($subject_email); 
            $this->email->message("$mesg");   
           // $this->email->set_newline("\r\n");
            $this->email->send();
            // if(!$this->email->send()){
            //     $this->session->set_flashdata('success_message' , "OTP sent to your Mail ID");
            //     redirect('user/edit_profile1','refresh'); 
            // } else {
            //   $this->session->set_flashdata('error_message' , "Mail not sent. Please try after sometime");
            //     redirect('user/edit_profile1','refresh'); 
            // }
        
       
    }
 
    public function transfer_epin()
    {
        $this->db->trans_begin();
        
       $epin =  $this->db->where('e_pin_code',$this->input->post('e_pin'))->get('e_pin')->row_array();
       $requested_user = $this->db->where('id',$this->input->post('hids'))->get('e_pin_request')->row_array();
    
       $transfer = array(
        
        'user_id' => $requested_user['user_id'],
        'remark' => 'transfered',
        'transfered_from' => $epin['user_id']
           
        );
        
        $this->db->where('e_pin_code',$this->input->post('e_pin'));
        $this->db->update('e_pin',$transfer);
        
        $status = array(
        
        'status' => 'Accepted',
        'transfered_epin' => $this->input->post('e_pin'),
        'accepted_date' => date('Y-m-d H:i:s')    
        );
        
        $this->db->where('id',$this->input->post('hids'));
        $this->db->update('e_pin_request',$status);
        
         if($this->db->trans_status() == FALSE){
            
            $this->db->trans_rollback();
            return false;
        } else {
            
            $this->db->trans_commit();
            return true;
        } 
        
    }
 
    public function randcoupon()
    {
        $uscode = "E".rand (1000000000 , 9999999999);
        $query = $this->db->get_where('e_pin', array('e_pin_code' => $uscode))->row_array();
        if (!empty($query)) {
            $this->randuser();
        }else{
           return $uscode; 
        }
        
    }
 
    public function gen_epin()
    {
        $this->db->trans_begin();
        
        $amount = $this->input->post('amount');
        $appro_date = date("Y-m-d H:i:s");
        
        $am = $amount / 500 ;
        
        for($i=0; $i<$am; $i++)
        {
            $code = $this->randcoupon();
               
            $data_buy['e_pin_code'] = $code;
            $data_buy['user_id'] = $this->session->userdata('mnsusername');
            $data_buy['e_pin_value'] = 500;
            $data_buy['entry_date'] = $appro_date;
            $this->db->insert('e_pin',$data_buy);
        }
        
        $pin = array(
        
        'user_id' => $this->session->userdata('mnsusername'),
        'debit' => $amount,
        'description' => "E-pin Generate",
        'entry_date' => $appro_date
            
        );
        
        $this->db->insert('pin',$pin);
        
        if($this->db->trans_status() == FALSE){
            
            $this->db->trans_rollback();
            return false;
        } else {
            
            $this->db->trans_commit();
            return true;
        } 
    }
 
    public function mail_forgot($pass,$mail)
    {
        
        $from_email='noreply@backofficee.com';
        $from_name='Manasuccess';
        $to_email = $mail;
        $subject_email = 'ManaSuccess New Password';
        //$dataemail['user']=$user;
        $dataemail['pass']=$pass;
        $dataemail['email']=$mail;
        $mesg = $this->load->view('user/mail_forgot',$dataemail,true);
        $config = Array(
            'protocol' => 'smtp', // 'mail', 'sendmail', or 'smtp'
            'smtp_host' => 'backofficee.com', 
            'smtp_port' => 465,
            'mailtype' => 'html',// it can be text or html
            'wordwrap' => TRUE,
            'newline' => "\r\n",
            'charset' => 'utf-8',
            'smtp_crypto' => 'ssl', //can be 'ssl' or 'tls' for example
            'smtp_timeout' => '4', //in seconds
        );
        $this->load->library('email');
        $this->email->initialize($config);
        $this->email->from($from_email, $from_name); 
        $this->email->to($to_email);
        $this->email->subject($subject_email); 
        $this->email->message("$mesg");   
       // $this->email->set_newline("\r\n");
        $this->email->send();
        if($this->email->send()){
            return true;
        } else {
           return false;
        }

    }
 
    public function get_all_child_by_level($tree,$parent,$level,$list_child=array()) 
    {
        $resultccc = $this->db->where('parent_id', $parent)->get($tree)->result_array();
        foreach ($resultccc as $key => $value) {
            $list_child[$level][]=$value['child_id'];
            if(count($resultccc) >= 0)
            {
                $list_child=$this->get_all_child_by_level($tree,$value['child_id'],$level+1,$list_child);
            }
        }
        return $list_child;
    }
 
    public function get_all_parent_users($table,$field,$child, $array)
    {

        $parents = $this->get_row_data($table,$field,$child);
        if(count($array) > 1){
            $myteam = explode(',',$child, $parents['team']);
        }else{
            $myteam = explode(',', $parents['team']);
        }
        
        return $myteam;
    }
 
    public function pay_amount()
    {
        $this->db->trans_begin();
        $paiddate =date('Y-m-d');
        $last_sunday = date('Y-m-d',strtotime('last sunday'));
        $next_sunday = date($last_sunday,strtotime("+7 days"));
        
        $user_id = $this->input->post('user_name');
        
         $pay = array(
               
            'user_id' => $user_id,
            'type' => 'joining',
            'remark' => $this->input->post('package'),
            'pay_mode' => $this->input->post('pay_mode'),
            'entry_date'=> date('Y-m-d H:i:s'),
            'wallet_value' => $this->input->post('amount'),
            'status' => 'Accepted'
            );
            
        $this->db->insert('admin_request',$pay);
        
        //pair match income 
        
                    //pair match income
            $parents = $this->get_all_parent_users('tree','child_id',$user_id,$res=array());
            log_message('error',"parent count : ".count($parents));
            for ($ii=0; $ii < count($parents); $ii++) { 
                $parent_details = $this->get_row_data('user_role', 'user_name',$parents[$ii]);
                $paidpair=$this->db->select_sum('paid_pair')->where('user_id',$parents[$ii])->get('account')->row()->paid_pair+0;
                log_message('error',"paid pair:".$paidpair);
                $tree_left =$this->db->select('child_id')->where('parent_id',$parents[$ii])->where('position','left')->get('tree')->row()->child_id; 
                $tree_right =$this->db->select('child_id')->where('parent_id',$parents[$ii])->where('position','right')->get('tree')->row()->child_id; 
                if($tree_left!="" && $tree_right!=""){
                    $user_detail1 = $this->get_row_data('user_role', 'user_name',$tree_left);
                    $l_pair = $this->db->like('team',$tree_left)->count_all_results('user_role')+1;
                    $r_pair = $this->db->like('team',$tree_right)->count_all_results('user_role')+1;

                    $pair_match=min($l_pair,$r_pair);
                    $binarypair= $pair_match-$paidpair;

                    // $pairreward = $this->db->where('level', 'pair')->get('master')->row_array();
                     $pairreward = 80;
                     $pair_limit = 80*100;
                    $amount_to_pay = $binarypair*$pairreward;
                    // log_message('error',"pair match:".$pair_match);
                    log_message('error',"binary:".$binarypair);
                    // ceiling check
                    $lastweek_paid=$this->db->select_sum('credit')->where('user_id',$parents[$ii])->where('remark','pair income')->where('date(entry_date) >',$last_sunday)->where('date(entry_date) >',$next_sunday)->get('account')->row()->credit+0;
                    log_message('error',"paid:".$lastweek_paid);
                    log_message('error',$this->db->last_query());
                    $payable_celing = $pair_limit-$lastweek_paid;
                    // $payable_celing = $pairreward['ceiling']-$lastweek_paid;
                    $today_to_pay = min($amount_to_pay,$payable_celing);
                    log_message('error',"to pay:".$today_to_pay);
                    log_message('error',"ceiling:".$payable_celing);
                    if ($binarypair > 0 && $today_to_pay >= 0) {
                        if($parent_details['color'] != "green"){
                            $today_to_pay=0;
                        }
                        $pair_earn = array(
                            'user_id' => $parents[$ii],
                            'credit' => $today_to_pay,
                            'entry_date'=> date('Y-m-d H:i:s'),
                            'remark' => "pair income", 
                            'paid_pair' => $binarypair,
                            'description' => "Admin");
                        if(!$this->db->insert('account', $pair_earn)){
                            return false;
                        }
                    }
                }
                
            }
        
        $this->db->set('payment_status','paid');
        $this->db->set('investment',$this->input->post('amount'));
        $this->db->set('color','orange');
        $this->db->where('user_name',$this->input->post('user_name'));
        $this->db->update('user_role');
          
        if($this->db->trans_status() == FALSE){
            
            $this->db->trans_rollback();
            return false;
        } else {
            
            $this->db->trans_commit();
            return true;
        
        }  
        
    }
 
    public function alphanumeric( $length = 8 ) 
    {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
    }
 
    public function update_profile()
    {
        $this->db->trans_begin();
        
        
        if($this->input->post('gender') == "Male")
            $ppic = "profile.jpg";
         else
            $ppic = "gprofile.jpg";
          
          
          
          
        $user_data = array(
        
        'pimage' => $this->input->post('idimage'),
        'name' => $this->input->post('name'),
        'gender' => $this->input->post('gender'),
        'phone' => $this->input->post('phone'),
        'email' => $this->input->post('email'),
        'address' => $this->input->post('address'),
        'pincode' => $this->input->post('pincode'),
        'n_name' => $this->input->post('n_name'),
        'n_relation' => $this->input->post('n_relation'),
        'n_address' => $this->input->post('n_address'),
        'name' => $this->input->post('name'),
        'pimage' => $ppic
        
        );
        
        $this->db->where('user_name',$this->session->userdata('mnsusername'));
        $this->db->update('user_role',$user_data);
        
        $bank_data = array(
        
        'acc_name' => $this->input->post('acc_name'),
        'acc_no' => $this->input->post('acc_no'),
        'bank_name' => $this->input->post('bank_name'),
        'ifsc' => $this->input->post('ifsc'),
        'branch' => $this->input->post('branch'),
        
        );
        
        $this->db->where('user_id',$this->session->userdata('mnsusername'));
        $this->db->update('bank',$bank_data);
        
        
        $kyc_data = array(
        
        'aadhar_no' => $this->input->post('aadhar_no'),
        'pan_no' => $this->input->post('pan_no'),
        
        );
        
        $this->db->where('user_id',$this->session->userdata('mnsusername'));
        $this->db->update('kyc',$kyc_data);
        
         if($this->db->trans_status() == FALSE){
            
            $this->db->trans_rollback();
            return false;
        } else {
            
            $this->db->trans_commit();
            return true;
        
        }
        
    }
 
    public function login($email='',$password='')
    {
        //log_message('error',sha1($password)); 
        $this->db->where('email',$email);
        $this->db->where('pwd',sha1($password));
        $this->db->where('status','Active');
        $this->db->where('user_type','u');
        $details = $this->db->get('user_role')->row_array();
        log_message('error',$this->db->last_query());   
        if (!empty($details)) {
            return $details;
        } else {
            return false;
        }
    }
 
    public function order_id()
    {
        $uscode = rand (100000000 , 999999999);
        $query = $this->db->get_where('admin_request', array('order_id' => $uscode))->row_array();
        if (!empty($query)) {
            $this->order_id();
        }else{
           return $uscode; 
        }
        
    }
 
    public function add_admin_request()
    {
        $order_id = $this->order_id();
        
        $data['user_id'] = $this->session->userdata('bhpusername');
        $data['order_id'] = $order_id;
        $data['wallet_value'] = $this->input->post('amount');
        $data['pay_mode'] = $this->input->post('pay_mode');
        $data['filename'] = $this->input->post('idimage');
        $data['utr'] = $this->input->post('utr');
        $data['type'] = 'investment';
        $data['ref_id'] = $this->db->select('ref_id')->where('user_name',$this->session->userdata('bhpusername'))->get('user_role')->row()->ref_id;
        
        $data['status'] = "Request";
        $data['entry_date'] = date("Y-m-d H:i:s");
        $this->db->insert('admin_request',$data);

        return true;
    }
 
    public function randuser()
    {
        $uscode = "BHP".rand (40000 , 99999);
        $query = $this->db->get_where('user_role', array('user_name' => $uscode))->row_array();
        if (!empty($query)) {
            $this->randuser();
        }else{
           return $uscode; 
        }
        
    }
    
    public function get_row_data($tablename, $where, $value = FALSE) 
    {

            $rowdata = $this->db->where($where, $value)->get($tablename)->row_array();
            return $rowdata;
        }
    
    public function get_genealogy($treeid)
    { 

    $user_detail = $this->get_row_data('user_role','user_name',$treeid);
    // if($user_detail['investment'] > 0 | $user_detail['user_type'] == 'a')
    //     $ccode="green";
    // else
    //     $ccode="red";
    
    if($user_detail['color'] == 'black')
    {
        $cccode = "black";
    }
    if($user_detail['color'] == 'orange')
    {
        $cccode = "orange";
    }
    if($user_detail['color'] == 'green')
    {
        $cccode = "green";
    }
    
     ?>
<div class="node" style="cursor: default;">
    
    <a href="<?=BASEURL?>user/genealogy/<?=$user_detail['user_name']?>">
        <img style="border:  3px solid <?=$cccode?>" class="tree_icon with_tooltip root_node" src="<?=PROFILEURL.$user_detail['pimage']?>" ondblclick="getGenologyTree('elangorp',event);"
            data-tooltip-content="#<?=$user_detail['user_name']?>">
        <p class="demo_name_style"><?=$user_detail['name']?></p>
    </a>
</div>

<div id="tooltip_div" style="display:none;">
    <div id="<?=$user_detail['user_name']?>" class="tree_img_tree">
        <?php 
        // $left_count =  $this->db->where('position','left')->where('parent_id',$user_detail['user_name'])->count_all_results("tree")+0;
        // $right_count =  $this->db->where('position','right')->where('parent_id',$user_detail['user_name'])->count_all_results("tree")+0;

        // if($left_count > 0){
        //     $tree_left_level =$this->db->select('child_id')->where('parent_id',$user_detail['user_name'])->where('position','left')->get('tree')->row()->child_id; 
        //     $left_user = $this->db->where('user_name',$tree_left_level)->get("users")->row_array();
        //     $team_lpv = $this->db->select_sum('pv')->like('team', $tree_left_level)->get('users')->row()->pv+0 ;
        //     $lpv = $this->db->select('pv')->where('user_name', $tree_left_level)->get('users')->row()->pv+0 ;
        //     $left_team_pvs =$team_lpv+$lpv;
           
        // }else{
        //     $left_team_pvs =0;
        // }
        // if($right_count > 0){
        //     $tree_right_level =$this->db->select('child_id')->where('parent_id',$user_detail['user_name'])->where('position','right')->get('tree')->row()->child_id; 
        //     $right_user = $this->db->where('user_name',$tree_right_level)->get("users")->row_array();
        //     $team_rpv = $this->db->select_sum('pv')->like('team', $tree_right_level)->get('users')->row()->pv+0 ;
        //     $rpv = $this->db->select('pv')->where('user_name', $tree_right_level)->get('users')->row()->pv+0 ;
        //     $right_team_pvs =$team_rpv+$rpv;
        // }else{
        //     $right_team_pvs =0;
        // }  
        ?>
        <div class="Demo_head_bg">
            <p><?=$user_detail['name']?></p>
        </div>
        <div class="body_text_tree">
            <ul class="list-group no-radius">
                <li class="list-group-item">
                    <div class="pull-left">User ID</div>
                    <div class="pull-right">: <?=$user_detail['user_name']?></div>
                </li>
                <li class="list-group-item">
                    <div class="pull-left">Join Date</div>
                    <div class="pull-right">: <?=date_format(date_create($user_detail['entry_date']),"d-M-Y");?></div>
                </li>
                <li class="list-group-item">
                    <div class="pull-left">Product Investment</div>
                    <div class="pull-right">: <?=$user_detail['investment']?></div>
                </li>
                <li class="list-group-item">
                    <div class="pull-left">Ref / Spo ID</div>
                    <div class="pull-right">: <?=$user_detail['ref_id']?></div>
                </li>
                <!--<li class="list-group-item">-->
                <!--    <div class="pull-left">Left Team Volume</div>-->
                   
                <!--    <div class="pull-right">: <?=$left_team_pvs;?></div>-->
                <!--</li>-->
                <!--<li class="list-group-item">-->
                <!--    <div class="pull-left">Right Team Volume</div>-->
                <!--    <div class="pull-right">: <?=$right_team_pvs?></div>-->
                <!--</li>-->
               
            </ul>
        </div>
    </div>
</div>

<?php }
 
    public function register_manage()
    {
         $this->db->trans_begin();
         
         $username = $this->randuser();
         $usertype = "u";
         $date = date('Y-m-d H:i:s');
         
         $ref_id = $this->input->post('ref_id');
         $parent_levels=$this->db->where('user_name',$ref_id)->get('user_role')->row_array();
         
           if($parent_levels['team'] !=""){
                $teams  = $ref_id.",".$parent_levels['team'];
            }else{
                $teams  = $ref_id;
            }
         $register = array(
             
        'user_name'=> $username,
        'phone' => $this->input->post('phone'),
        'email' => $this->input->post('email'),
        'ref_id' => $ref_id,
        'team' => $teams,
        'pwd' => sha1($this->input->post('password')),
        'pwd_hint' => $this->input->post('password'),
        'user_type' => $usertype,
        'entry_date' => $date
        );
        
        $this->db->insert('user_role',$register);


        if($this->db->trans_status() == FALSE){
            
            $this->db->trans_rollback();
            return false;
        } else {
            // $result[0] = true;
            // $result[1] = $username;
            // $result[2] = $this->input->post('password');
            // $result[3] = $this->input->post('email');
            // $result[4] = $this->input->post('name');
            // $result[5] = $usertype;
            $this->db->trans_commit();
            return true;
        
        }
    }
    
    public function extreme_end_autofill($tree,$parent,$child,$position,$paiddate)
    {
        $getparent = $this->get_extreme_end_child($tree,$parent,$position,$parent);
        if(!empty($getparent)){
            $autofill_team1 = $this->db->select('team')->where('child_id',$getparent)->get($tree)->row()->team;
            if(!empty($autofill_team1)){
                $autofillteams  = $getparent.",".$autofill_team1;
            }else{
                $autofillteams  = $getparent;
            }
            $data2['parent_id'] = trim($getparent);
            $data2['child_id'] = trim($child);
            $data2['entry_date'] = $paiddate;
            $data2['position'] = $position;
            $data2['ref_id'] = trim($getparent);
            $data2['team'] = str_replace(" ,",",",$autofillteams);
            if($this->db->insert($tree,$data2)){
                $this->db->where('user_name',$child);
                $this->db->update('user_role',array('team'=>str_replace(" ,",",",$autofillteams)));
                return true;
            }
            else{
                return false;
            }  
        }
    }
    
    public function get_extreme_end_child($tree="",$parent="",$pos="",$ch="")
    {
        $resultccc = $this->db->select('child_id')->where('parent_id', $parent)->where('position', $pos)->get($tree)->row()->child_id;
        if(!empty($resultccc)){
           $ch = $this->get_extreme_end_child($tree,$resultccc,$pos,$resultccc);
        }
        return $ch;
    }
    
}
?>
