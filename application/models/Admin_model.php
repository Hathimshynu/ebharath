<?php
error_reporting(0);
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_model extends CI_Model {
    
    public function winning_announcement($number,$gmae_type,$game_id)
    {
         $this->db->trans_begin();
         
        //  $game_id = $this->db->order_by('id','DESC')->where('game_type',$gmae_type)->get('games')->row()->game_id;
         
          $zero_users=$this->db->like('gcode',$number)->where('game_id',$game_id)->get('game')->result_array();
          log_message('error',$this->db->last_query());
            foreach($zero_users as $zu){
                
                if($zu['g_color']!=""){
                    $master=$this->db->where('type','win')->where('criteria',$zu['g_color'])->get('master')->row_array();
                    log_message('error',$this->db->last_query());
                    $credit=$zu['pet_amount']*$master['rewards'];
                    if($credit > 0){
                         $zu_data = array(
                        'user_id' => $zu['user_id'],
                        'credit' => $credit,
                        'entry_date' =>date('Y-m-d H:i:s'),
                        'remark' =>'Win Game'
                        );
                        
                        $win=$this->db->insert('wallet',$zu_data);
                        log_message('error',$this->db->last_query());
                    }
                    
                }else{
                    $master=$this->db->where('type','win')->where('criteria','number')->get('master')->row_array();
                    log_message('error',$this->db->last_query());
                    $credit=$zu['pet_amount']*$master['rewards'];
                    if($credit > 0){
                         $zu_data = array(
                        'user_id' => $zu['user_id'],
                        'credit' => $credit,
                        'entry_date' =>date('Y-m-d H:i:s'),
                        'remark' =>'Win Game'
                        );
                        
                      $win=  $this->db->insert('wallet',$zu_data);
                      log_message('error',$this->db->last_query());
                    }
                }
                
                
                
            }
            if(!empty($zero_users)){
                $this->db->set('status','Win');
                $this->db->where('wincode',$number);
                $this->db->where('game_id',$game_id);
                $this->db->update('game');
                log_message("error", 'win'.$this->db->last_query());
                
                $this->db->set('status','Fail');
                $this->db->where('wincode !=',$number);
                $this->db->where('game_id',$game_id);
                $this->db->update('game');
                log_message("error", 'not win'.$this->db->last_query());
            }else{
                $data1['status']='Win';
                $data1['gcode']=$number;
                $data1['wincode']=$number;
                $data1['game_id']=$game_id;
                $data1['game_type']=$gmae_type;
                $this->db->insert('game',$data1);

            }
        if($this->db->trans_status() == FALSE){
            
            $this->db->trans_rollback();
            return false;
        } else {
            
            $this->db->trans_commit();
            return true;
        
        } 
    }
    
    public function roi_update()
    {
    
        $this->db->trans_begin();
        
         $this->db->set('rewards',$this->input->post('reward'));
         $this->db->where('criteria','roi');
         $this->db->update('master');
         
        $roi_update = array(
            
            'rewards' => $this->input->post('reward'),
            'entry_date' => date('Y-m-d H:i:s'),
            'updated_by' => $this->session->userdata('bhpausername')
            
            );
            
        $this->db->insert('roi_updates',$roi_update);
        
        if($this->db->trans_status() == FALSE){
            
            $this->db->trans_rollback();
            return false;
        } else {
            
            $this->db->trans_commit();
            return true;
        
        } 
        
    
    }
    
    public function accept_req()
    {
        $this->db->trans_begin();
        
        $date = date("Y-m-d H:i:s");
        
        if($this->input->post('status') == "Accepted"){
            
            $accept = array(
            'user_id' => $this->input->post('user_id'),
            'entry_date' => $date,
            'credit' => $this->input->post('amount'),
            );
            
            if($this->db->insert('wallet',$accept)){
                
                // ++++++++++++++++ REFERRAL INCOME CALCULATION STARTS ++++++++++++++++ //
                $user_detail=$this->db->where('user_name',$this->input->post('user_id'))->get('user_role')->row_array();
                // log_message('error',$this->db->last_query());
                $rewards=$this->db->select('rewards')->where('criteria','referral')->where('type','REF')->get('master')->row()->rewards;
                // log_message('error',$this->db->last_query());
                
                    $credit=($this->input->post('amount')*$rewards)/100;
            
                    if($credit>0){
                        $ref_income = array(
                            'user_id' => $user_detail['ref_id'],
                            'entry_date' => date("Y-m-d H:i:s"),
                            'credit' => number_format($credit,2),
                            'remark' =>'Referral',
                            'description'=>$this->input->post('user_id')
                 
                        );
                        $this->db->insert('wallet',$ref_income);
                    }    
                // ++++++++++++++++ REFERRAL INCOME CALCULATION ENDS ++++++++++++++++ //
                
                
            $this->db->set('status','Accepted');
            $this->db->where('admin_request_id',$this->input->post('admin_req_id'));
            $this->db->update('admin_request');    
            }
            
           
        }else{
            $this->db->set('status',$this->input->post('status'));
            $this->db->where('admin_request_id',$this->input->post('admin_req_id'));
            $this->db->update('admin_request');
        }
        
        if($this->db->trans_status() == FALSE){
            
            $this->db->trans_rollback();
            return false;
        } else {
            
            $this->db->trans_commit();
            return true;
        
        } 
        
    }
    
    
    
    // public function get_all_child_by_level($tree,$parent,$level,$list_child=array()) 
    // {
    //     $resultccc = $this->db->where('parent_id', $parent)->get($tree)->result_array();
    //     foreach ($resultccc as $key => $value) {
    //         $list_child[$level][]=$value['child_id'];
    //         if(count($resultccc) >= 0)
    //         {
    //             $list_child=$this->get_all_child_by_level($tree,$value['child_id'],$level+1,$list_child);
    //         }
    //     }
    //     return $list_child;
    // }
    
   
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
    
    
    
    public function pay_amount($id='')
    {
        $this->db->trans_begin();
        $paiddate =date('Y-m-d');
        $last_sunday = date('Y-m-d',strtotime('last sunday'));
        $next_sunday = date($last_sunday,strtotime("+7 days"));
        
       $user_details = $this->db->where('admin_request_id',$id)->get('admin_request')->row_array();
        
        //$user_id = $this->input->post('user_name');
        
         $this->db->set('status','Accepted');
         $this->db->set('approve_date',date('Y-m-d H:i:s'));
         $this->db->where('admin_request_id',$id);
         $this->db->update('admin_request');
        
        //pair match income 
        
                    //pair match income
            $parents = $this->get_all_parent_users('tree','child_id',$user_details['user_id'],$res=array());
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
                        
                    $tot_pair = $paidpair+$binarypair;
                        
                    $reward_count = $this->db->where('user_id',$parents[$ii])->count_all_results('rewards')+0;
                    
                    if($reward_count <= 9)
                    {
                      $master = $this->db->where('master_id',$reward_count+1)->get('master')->row_array();
                       
                       if($master['criteria'] <= $tot_pair)
                       {
                          $us_data = array(
                            
                            'user_id' => $parents[$ii],
                            'reward' => $master['reward'],
                            'entry_date' => date('Y-m-d H:i:s') 
                              
                            );
                            
                          $this->db->insert('rewards',$us_data);
                       }
                    }
                        
                    }
                }
                
            }
        
        $this->db->set('payment_status','paid');
        $this->db->set('investment',$user_details['wallet_value']);
        $this->db->set('color','orange');
        $this->db->where('user_name',$user_details['user_id']);
        $this->db->update('user_role');
          
        if($this->db->trans_status() == FALSE){
            
            $this->db->trans_rollback();
            return false;
        } else {
            
            $this->db->trans_commit();
            return true;
        
        }  
        
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
    
    // public function randcoupon()
    // {
    //     $uscode = "E".rand (1000000000 , 9999999999);
    //     $query = $this->db->get_where('e_pin', array('e_pin_code' => $uscode))->row_array();
    //     if (!empty($query)) {
    //         $this->randuser();
    //     }else{
    //       return $uscode; 
    //     }
        
    // }
    
    
    public function user_aprroval($id='')
    {
        $this->db->trans_start();
        $appro_date = date('Y-m-d H:i:s');
        $approved_user =$this->db->where('admin_request_id',$id)->get('admin_request')->row_array();
        
        // $amount = $approved_user['wallet_value']; 
        
        // $am = $amount / 500 ;
        
        // for($i=0; $i<$am; $i++)
        // {
        //     $code = $this->randcoupon();
               
        //     $data_buy['e_pin_code'] = $code;
        //     $data_buy['user_id'] = $approved_user['user_id'];
        //     $data_buy['e_pin_value'] = 500;
        //     $data_buy['entry_date'] = $appro_date;
        //     $this->db->insert('e_pin',$data_buy);
        // }
        
        //log_message('error',$am."///");
        $this->db->where('admin_request_id',$id);
        $this->db->update('admin_request',array('status'=>'Accepted','approve_date'=>$appro_date));
        
        $data_buy['user_id'] = $approved_user['user_id'];
        $data_buy['description'] = 'Load Investment';
        $data_buy['entry_date'] = $appro_date;
        $data_buy['credit'] = $approved_user['wallet_value'];
        $this->db->insert('pin',$data_buy);
    
            $this->db->set("investment",'investment'+$approved_user['wallet_value'],FALSE);
            $this->db->where('user_name',$approved_user['user_id']);
            $this->db->update('user_role');
        
        $this->db->trans_complete();
        if($this->db->trans_status() == FALSE){
            return false;
        } else {
            return true;
        }
    
    }
    
    
    
    
    public function del_category($id="")
    {
        $this->db->trans_begin();
        
        $this->db->where('category_id',$id)->delete('category');
        
        $this->db->where('category_id',$id)->delete('sub_category');
        
        $this->db->where('category_id',$id)->delete('course');
        
        if($this->db->trans_status() == FALSE){
            
            $this->db->trans_rollback();
            return false;
        } else {
            
            $this->db->trans_commit();
            return true;
        
        }
        
        
    }
    
    
    public function del_subcategory($id="")
    {
        $this->db->trans_begin();
        
        $this->db->where('scategory_id',$id)->delete('sub_category');
        
        $this->db->where('scategory_id',$id)->delete('course');
        
        if($this->db->trans_status() == FALSE){
            
            $this->db->trans_rollback();
            return false;
        } else {
            
            $this->db->trans_commit();
            return true;
        
        }
        
        
    }
    
    
    public function login($phone='',$password='')
    {
        log_message('error',$password); 
        $this->db->where('phone',$phone);
        // $this->db->or_where('email',$username);
        $this->db->where('pwd',sha1($password));
        $details = $this->db->get('user_role')->row_array();
        log_message('error',$this->db->last_query());   
        if (!empty($details)) {
            return $details;
        } else {
            return false;
        }
    }
    
    
    public function new_course()
    {
        $this->db->trans_begin();
        
        $date = date('Y-m-d H:i:s');
        
        $course_data = array(
        
        'course_name' => $this->input->post('course'),
        'image' => $this->input->post('idimage'),
        'entry_date' => $date
            
        );
        
        $this->db->insert('course',$course_data);
        
        $category = array(
          
          'category_name' => $this->input->post('category'),
          'course_name' => $this->input->post('course'),
          'entry_date' => $date
          
        );
        
        $this->db->insert('category',$category);
        
        $sub_category = array(
            
            'sub_category_name' => $this->input->post('sub_category'),
            'category_name' => $this->input->post('category'),
            'video_link' => $this->input->post('video_link'),
            'entry_date' => $date
            
        );
        
        $this->db->insert('sub_category',$sub_category);
        
        if($this->db->trans_status() == FALSE){
            
            $this->db->trans_rollback();
            return false;
        } else {
            
            $this->db->trans_commit();
            return true;
        
        }
        
    }
    
    
    
     public function add_buy_package()
    {
        $this->db->trans_begin();

       
        $approved_user = $this->get_row_data('user_role','username',$this->input->post('user_id'));
       
        $user_detail = $this->get_row_data('user_role','username',$approved_user['user_id']);
        $ref_details = $this->get_row_data('user_role','username',$user_detail['ref_id']);

        $appro_date = date('Y-m-d H:i:s');
        $this->global_auto_fill("tree",'ILS1000',$approved_user['user_id'],2);
        
        //+++++++++++++++++++++++++++++++ REFERRAL INCOME CALCULATION STARTS +++++++++++++++++++++++++++++++ //
                $rewards=$this->db->select('rewards')->where('type','referral')->get('master')->row()->rewards;
                
                $credit=$approved_user['wallet_value']*$rewards/100;
                $refincome_data=array(
                    'user_id'=>$user_detail['ref_id'],
                    'credit'=>$credit,
                    'entry_date'=>$appro_date,
                    'remark'=>'Referral Income',
                    'description'=>$approved_user['user_id']
                    );
                $this->db->insert('account',$refincome_data);
                
        //+++++++++++++++++++++++++++++++ REFERRAL INCOME CALCULATION ENDS +++++++++++++++++++++++++++++++ //
                
        //+++++++++++++++++++++++++++++++ 2MATRIX INCOME CALCULATION STARTS +++++++++++++++++++++++++++++++ //
                $user_team=$this->db->select('team')->where('child_id',$approved_user['user_id'])->get('tree')->row()->team;
                
                $splittedstring=explode(",", $user_team);
    
                 for ($i=0; $i < min(10,count($splittedstring)); $i++){
                    
                    $eligible=$this->db->like('team',$splittedstring[$i])->count_all_results('tree')+0;
                    $level_rewards=$this->db->select('rewards')->where('type','2matrix')->where('criteria',$eligible)->get('master')->row()->rewards;
                    
                    if($level_rewards!=""){
                        
                        $eligible_child_user=$this->db->select('child_id')->like('team',$splittedstring[$i])->get('tree')->row()->child_id+0;
                        $investment_amount=$this->db->select_sum('wallet_value')->where_in('user_id',$eligible_child_user)->where('status','Accepted')->where('packgae_type','join')->get('admin_request')->row()->wallet_value+0;
                        $amount=$investment_amount*$level_rewards/100;
                    
                    if( $amount>0){
                   
                        $credit=$amount*50/100;
                        $dataearnlevel = array(
                           'user_id' => $splittedstring[$i],
                           'credit' => $credit,
                           'entry_date'=> date('Y-m-d H:i:s'),
                           'remark' => 'level',
                           'description' => 'Level'.($i+1));
                           $this->db->insert('account', $dataearnlevel);
                        
                        log_message("error", $this->db->last_query());
                        
                        $upgrade_wallet = array(
                           'user_id' => $splittedstring[$i],
                           'credit' => $credit,
                           'entry_date'=> date('Y-m-d H:i:s'),
                           'remark' => 'level',
                           'description' => 'Level'.($i+1));
                           $this->db->insert('upgrade_wallet', $upgrade_wallet);
                           
                        log_message("error", $this->db->last_query());
                        
                    }
                  
                    }
                 }
                 $eligible_nxt_user=$this->db->where('description','Level10')->get('upgrade_wallet')->row_array();
                 $this->global_auto_fill_for_3matrix("3matrix_tree",'ILS1000',$eligible_nxt_user['user_id'],3);
            //+++++++++++++++++++++++++++++++ 2MATRIX INCOME CALCULATION ENDS +++++++++++++++++++++++++++++++ //
     
     
        $data_buy['sender_id'] =$this->session->userdata('username'); 
        $data_buy['user_id'] = $approved_user['username'];
        $data_buy['description'] = 'Package Active';
        $data_buy['entry_date'] = $appro_date;
        $data_buy['debit'] = $this->session->userdata('package');
        $this->db->insert('pin',$data_buy);
        
        if($this->db->trans_status() == FALSE){
            $this->db->trans_rollback();
            return false;
        } else {
            $this->db->trans_commit();
            return true;
        
        }
    } 
        
        
        
        
    public function roi_income(){
         //+++++++++++++++++++++++++++++++ ROI INCOME CALCULATION STARTS +++++++++++++++++++++++++++++++ //
            //  $roi=$this->db->where('type','roi')->where('start_amount >= ',$approved_user['wallet_value'])->where('end_amount <= ',$approved_user['wallet_value'])->get('master')->row_array();
                
                $roi=$this->db->where('type','roi')-> where($approved_user['wallet_value'].' BETWEEN start_amount AND end_amount')->get('master')->row_array();
             
                  log_message('error',$this->db->last_query());   
                    log_message('error',$roi);
                 $roiamount = ($approved_user['wallet_value']*$roi['rewards'])/100;
                    
                    log_message('error',$roiamount);
                    
                        $data_roi['user_id'] = $approved_user['user_id'];
                        $data_roi['amount'] =  $roiamount;
                        $data_roi['tdays'] = $roi['duration'];
                        $data_roi['entry_date'] = date("Y-m-d H:i:s");
                        $data_roi['type'] = 'ROI';
                        $data_roi['inves_id'] = $id;
                        $this->db->insert('roi',$data_roi);
                       
            //+++++++++++++++++++++++++++++++ ROI INCOME CALCULATION ENDS +++++++++++++++++++++++++++++++ //
              
    }
    
              
    
      
     //+++++++++++++++++++++++++++++++ 3MATRIX TREE INSERTION START  +++++++++++++++++++++++++++++++++//
  public function global_auto_fill_for_3matrix($tree,$parent,$child,$matrix)
 {
    $check_child = $this->db->where('child_id',$child)->count_all_results($tree)+0;
    
   
   
    
            if($check_child == 0 && $child!='ILS1000'){
                $last_parents = $this->db->select('parent_id')->order_by('tree_id',"DESC")->limit(1)->get($tree)->row()->parent_id;
                if(empty($last_parents)){
                    $last_parent = 'ILS1000';
                }else{
                    $last_parent = $last_parents;
                }    
                $child_count = $this->db->where('parent_id',$last_parent)->count_all_results($tree)+0;
                    //log_message("error", $this->db->last_query());
                if($child_count < $matrix){
                    
                    if($child_count ==0){
                        
                        $position='left';
                    }else{
                        $position='right';
                    }
                    
                     $team_data=$this->db->select('team')->where('child_id',$last_parent)->get('tree')->row()->team;
    
                    $users_admin_data = $this->db->count_all_results('tree');
                    		
                
                    		if($users_admin_data<1){
                    		    
                    		   $team =$last_parent;
                    		}else{
                    		    
                    		    $team =$last_parent.",".$team_data;
                    		}
    		
    		
                    $treedata = array(
                        'parent_id' => $last_parent,
                        'child_id' => $child,
                        'position' =>$position,
                        'team'  =>$team,
                        'entry_date'=> date('Y-m-d H:i:s'));
                        
                    $this->db->insert($tree, $treedata);
                     
                $last_tree_id = $this->db->insert_id();   
                //+++++++++++++++++++++++++++++++ 3MATRIX LEVEL INCOME CALCULATION STARTS +++++++++++++++++++++++++++++++ //
                $user_detail=$this->db->where('tree_id',$last_tree_id)->get('3matrix_tree')->row_array();

                $splittedstring=explode(",", $user_detail['team']);
    
                 for ($i=0; $i < min(7,count($splittedstring)); $i++){
                    
                    $eligible=$this->db->like('team',$splittedstring[$i])->count_all_results('3matrix_tree')+0;
                    $level_rewards=$this->db->select('rewards')->where('type','2matrix')->where('criteria',$eligible)->get('master')->row()->rewards;
                    
                    if($level_rewards!=""){
                        
                        $eligible_child_user=$this->db->select('child_id')->like('team',$splittedstring[$i])->get('3matrix_tree')->row()->child_id+0;
                        $investment_amount=$this->db->select_sum('credit')->where_in('user_id',$eligible_child_user)->where('remark','level')->get('upgrade_wallet')->row()->credit+0;
                        $amount=$investment_amount*$level_rewards/100;
                    
                    if( $amount>0){
                   
                        $credit=$amount*50/100;
                        $dataearnlevel = array(
                           'user_id' => $splittedstring[$i],
                           'credit' => $credit,
                           'entry_date'=> date('Y-m-d H:i:s'),
                           'remark' => '3matrix level',
                           'description' => 'Level'.($i+1));
                           $this->db->insert('account', $dataearnlevel);
                        
                        log_message("error", $this->db->last_query());
                        
                        $upgrade_wallet = array(
                           'user_id' => $splittedstring[$i],
                           'credit' => $credit,
                           'entry_date'=> date('Y-m-d H:i:s'),
                           'remark' => '3matrix level',
                           'description' => 'Level'.($i+1));
                           $this->db->insert('upgrade_wallet', $upgrade_wallet);
                           
                        log_message("error", $this->db->last_query());
                        
                    }
                    
                    }
                    
                 }
                 $eligible_nxtxx_user=$this->db->where('remark','3matrix')->where('description','Level7')->get('upgrade_wallet')->row_array();
                 $this->global_auto_fill_for_5matrix("5matrix_tree",'ILS1000',$eligible_nxt_user['user_id'],5);
                //+++++++++++++++++++++++++++++++ 3MATRIX LEVEL INCOME CALCULATION ENDS +++++++++++++++++++++++++++++++ //
                   
                } else {
                    $last_parent = $this->db->select('parent_id')->order_by('tree_id',"DESC")->limit(1)->get($tree)->row()->parent_id;
                    
                    $tree_id = $this->db->select('tree_id')->where('child_id',$last_parent)->order_by('tree_id',"DESC")->limit(1)->get($tree)->row()->tree_id;
                        //log_message("error", $this->db->last_query());
                        
                    $nextparent = $this->db->select('child_id')->where('tree_id',($tree_id+1))->get($tree)->row()->child_id;
                    
                    $nextparent_count = $this->db->where('parent_id',$nextparent)->count_all_results($tree)+0;
                    
                        //log_message("error", $this->db->last_query());
                        
                      if($nextparent_count ==0){
                        
                        $position='left';
                    }else{
                        $position='right';
                    }
                     $team_data=$this->db->select('team')->where('child_id',$nextparent)->get('tree')->row()->team;
    
                    $users_admin_data = $this->db->count_all_results('tree');
                    		
                
                    		if($users_admin_data<1){
                    		    
                    		   $team = $last_parent;
                    		}else{
                    		    
                    		    $team = $last_parent." ,".$team_data;
                    		}
    		
                    $treedata = array(
                        'parent_id' => $nextparent,
                        'child_id' => $child,
                        'position' =>$position,
                        'team'  =>$team,
                        'entry_date'=> date('Y-m-d H:i:s'));
                   $this->db->insert($tree, $treedata);
                $last_tree_id = $this->db->insert_id();   
                //+++++++++++++++++++++++++++++++ 3MATRIX LEVEL INCOME CALCULATION STARTS +++++++++++++++++++++++++++++++ //
                $user_detail=$this->db->where('tree_id',$last_tree_id)->get('3matrix_tree')->row_array();

                $splittedstring=explode(",", $user_detail['team']);
    
                 for ($i=0; $i < min(7,count($splittedstring)); $i++){
                    
                    $eligible=$this->db->like('team',$splittedstring[$i])->count_all_results('3matrix_tree')+0;
                    $level_rewards=$this->db->select('rewards')->where('type','2matrix')->where('criteria',$eligible)->get('master')->row()->rewards;
                    
                    if($level_rewards!=""){
                        
                        $eligible_child_user=$this->db->select('child_id')->like('team',$splittedstring[$i])->get('3matrix_tree')->row()->child_id+0;
                        $investment_amount=$this->db->select_sum('credit')->where_in('user_id',$eligible_child_user)->where('remark','level')->get('upgrade_wallet')->row()->credit+0;
                        $amount=$investment_amount*$level_rewards/100;
                    
                    if( $amount>0){
                   
                        $credit=$amount*50/100;
                        $dataearnlevel = array(
                           'user_id' => $splittedstring[$i],
                           'credit' => $credit,
                           'entry_date'=> date('Y-m-d H:i:s'),
                           'remark' => '3matrix level',
                           'description' => 'Level'.($i+1));
                           $this->db->insert('account', $dataearnlevel);
                        
                        log_message("error", $this->db->last_query());
                        
                        $upgrade_wallet = array(
                           'user_id' => $splittedstring[$i],
                           'credit' => $credit,
                           'entry_date'=> date('Y-m-d H:i:s'),
                           'remark' => '3matrix level',
                           'description' => 'Level'.($i+1));
                           $this->db->insert('upgrade_wallet', $upgrade_wallet);
                           
                        log_message("error", $this->db->last_query());
                        
                    }
                    
                    }
                    
                 }
                 $eligible_nxtxx_user=$this->db->where('remark','3matrix')->where('description','Level7')->get('upgrade_wallet')->row_array();
                 $this->global_auto_fill_for_5matrix("5matrix_tree",'ILS1000',$eligible_nxt_user['user_id'],5);
                //+++++++++++++++++++++++++++++++ 3MATRIX LEVEL INCOME CALCULATION ENDS +++++++++++++++++++++++++++++++ //
                    
                }
            } else {
               return false; 
           }
}
    //+++++++++++++++++++++++++++++++ 3MATRIX TREE INSERTENDS +++++++++++++++++++++++++++++++//
    
      //+++++++++++++++++++++++++++++++ 5MATRIX TREE INSERTION START  +++++++++++++++++++++++++++++++++//
   public function global_auto_fill_for_5matrix($tree,$parent,$child,$matrix)
 {
    $check_child = $this->db->where('child_id',$child)->count_all_results($tree)+0;
    
   
   
    
            if($check_child == 0 && $child!='ILS1000'){
                $last_parents = $this->db->select('parent_id')->order_by('tree_id',"DESC")->limit(1)->get($tree)->row()->parent_id;
                if(empty($last_parents)){
                    $last_parent = 'ILS1000';
                }else{
                    $last_parent = $last_parents;
                }    
                $child_count = $this->db->where('parent_id',$last_parent)->count_all_results($tree)+0;
                    //log_message("error", $this->db->last_query());
                if($child_count < $matrix){
                    
                    if($child_count ==0){
                        
                        $position='left';
                    }else{
                        $position='right';
                    }
                    
                     $team_data=$this->db->select('team')->where('child_id',$last_parent)->get('tree')->row()->team;
    
                    $users_admin_data = $this->db->count_all_results('tree');
                    		
                
                    		if($users_admin_data<1){
                    		    
                    		   $team =$last_parent;
                    		}else{
                    		    
                    		    $team =$last_parent.",".$team_data;
                    		}
    		
    		
                    $treedata = array(
                        'parent_id' => $last_parent,
                        'child_id' => $child,
                        'position' =>$position,
                        'team'  =>$team,
                        'entry_date'=> date('Y-m-d H:i:s'));
                        
                    $this->db->insert($tree, $treedata);
                     
                $last_tree_id = $this->db->insert_id();   
                //+++++++++++++++++++++++++++++++ 3MATRIX LEVEL INCOME CALCULATION STARTS +++++++++++++++++++++++++++++++ //
                $user_detail=$this->db->where('tree_id',$last_tree_id)->get('3matrix_tree')->row_array();

                $splittedstring=explode(",", $user_detail['team']);
    
                 for ($i=0; $i < min(5,count($splittedstring)); $i++){
                    
                    $eligible=$this->db->like('team',$splittedstring[$i])->count_all_results('5matrix_tree')+0;
                    $level_rewards=$this->db->select('rewards')->where('type','2matrix')->where('criteria',$eligible)->get('master')->row()->rewards;
                    
                    if($level_rewards!=""){
                        
                        $eligible_child_user=$this->db->select('child_id')->like('team',$splittedstring[$i])->get('5matrix_tree')->row()->child_id+0;
                        $investment_amount=$this->db->select_sum('credit')->where_in('user_id',$eligible_child_user)->where('remark','3matrix level')->get('upgrade_wallet')->row()->credit+0;
                        $amount=$investment_amount*$level_rewards/100;
                    
                    if( $amount>0){
                   
                        $dataearnlevel = array(
                           'user_id' => $splittedstring[$i],
                           'credit' => $amount,
                           'entry_date'=> date('Y-m-d H:i:s'),
                           'remark' => '5matrix level',
                           'description' => 'Level'.($i+1));
                           $this->db->insert('account', $dataearnlevel);
                        
                        log_message("error", $this->db->last_query());
                      
                    }
                    
                    }
                    
                 }
               
                //+++++++++++++++++++++++++++++++ 5MATRIX LEVEL INCOME CALCULATION ENDS +++++++++++++++++++++++++++++++ //
                   
                } else {
                    $last_parent = $this->db->select('parent_id')->order_by('tree_id',"DESC")->limit(1)->get($tree)->row()->parent_id;
                    
                    $tree_id = $this->db->select('tree_id')->where('child_id',$last_parent)->order_by('tree_id',"DESC")->limit(1)->get($tree)->row()->tree_id;
                        //log_message("error", $this->db->last_query());
                        
                    $nextparent = $this->db->select('child_id')->where('tree_id',($tree_id+1))->get($tree)->row()->child_id;
                    
                    $nextparent_count = $this->db->where('parent_id',$nextparent)->count_all_results($tree)+0;
                    
                        //log_message("error", $this->db->last_query());
                        
                      if($nextparent_count ==0){
                        
                        $position='left';
                    }else{
                        $position='right';
                    }
                     $team_data=$this->db->select('team')->where('child_id',$nextparent)->get('tree')->row()->team;
    
                    $users_admin_data = $this->db->count_all_results('tree');
                    		
                
                    		if($users_admin_data<1){
                    		    
                    		   $team = $last_parent;
                    		}else{
                    		    
                    		    $team = $last_parent." ,".$team_data;
                    		}
    		
                    $treedata = array(
                        'parent_id' => $nextparent,
                        'child_id' => $child,
                        'position' =>$position,
                        'team'  =>$team,
                        'entry_date'=> date('Y-m-d H:i:s'));
                   $this->db->insert($tree, $treedata);
                $last_tree_id = $this->db->insert_id();   
                //+++++++++++++++++++++++++++++++ 5MATRIX LEVEL INCOME CALCULATION STARTS +++++++++++++++++++++++++++++++ //
                $user_detail=$this->db->where('tree_id',$last_tree_id)->get('5matrix_tree')->row_array();

                $splittedstring=explode(",", $user_detail['team']);
    
                 for ($i=0; $i < min(5,count($splittedstring)); $i++){
                    
                    $eligible=$this->db->like('team',$splittedstring[$i])->count_all_results('5matrix_tree')+0;
                    $level_rewards=$this->db->select('rewards')->where('type','2matrix')->where('criteria',$eligible)->get('master')->row()->rewards;
                    
                    if($level_rewards!=""){
                        
                        $eligible_child_user=$this->db->select('child_id')->like('team',$splittedstring[$i])->get('5matrix_tree')->row()->child_id+0;
                        $investment_amount=$this->db->select_sum('credit')->where_in('user_id',$eligible_child_user)->where('remark','3matrix level')->get('upgrade_wallet')->row()->credit+0;
                        $amount=$investment_amount*$level_rewards/100;
                    
                    if( $amount>0){
                   
                        $credit=$amount*50/100;
                        $dataearnlevel = array(
                           'user_id' => $splittedstring[$i],
                           'credit' => $credit,
                           'entry_date'=> date('Y-m-d H:i:s'),
                           'remark' => '5matrix level',
                           'description' => 'Level'.($i+1));
                           $this->db->insert('account', $dataearnlevel);
                        
                        log_message("error", $this->db->last_query());
                        
                        $upgrade_wallet = array(
                           'user_id' => $splittedstring[$i],
                           'credit' => $credit,
                           'entry_date'=> date('Y-m-d H:i:s'),
                           'remark' => '5matrix level',
                           'description' => 'Level'.($i+1));
                           $this->db->insert('upgrade_wallet', $upgrade_wallet);
                           
                        log_message("error", $this->db->last_query());
                        
                    }
                    
                    }
                    
                 }
                 
                //+++++++++++++++++++++++++++++++ 5MATRIX LEVEL INCOME CALCULATION ENDS +++++++++++++++++++++++++++++++ //
                    
                }
            } else {
               return false; 
           }
}
    //+++++++++++++++++++++++++++++++ 5MATRIX TREE INSERTENDS +++++++++++++++++++++++++++++++//
    //  public function user_aprroval($id='')
    // {
    //     $this->db->trans_start();
    //     $appro_date = date('Y-m-d H:i:s');
    //     $approved_user =$this->get_row_data('admin_request','admin_request_id',$id);

    //     $this->db->where('admin_request_id',$id);
    //     $this->db->update('admin_request',array('status'=>'Accepted','approve_date'=>$appro_date));
        
    //     $data_buy['user_id'] = $approved_user['user_id'];
    //     $data_buy['description'] = 'Load Investment';
    //     $data_buy['entry_date'] = $appro_date;
    //     $data_buy['credit'] = $approved_user['wallet_value'];
    //     $this->db->insert('pin',$data_buy);
    
    //         $this->db->set("investment",'investment'+$approved_user['wallet_value'],FALSE);
    //         $this->db->where('username',$approved_user['user_id']);
    //         $this->db->update('user_role');
        
    //     $this->db->trans_complete();
    //     if($this->db->trans_status() == FALSE){
    //         return false;
    //     } else {
    //         return true;
    //     }
    
    // }
    //+++++++++++++++++++++++++++++++ INVESTMENT APPROVAL END ++++++++++++++++++++++++++++++++//
    
     //+++++++++++++++++++++++++++++++ TREE INSERTION START  +++++++++++++++++++++++++++++++++//
  public function global_auto_fill($tree,$parent,$child,$matrix)
 {
    $check_child = $this->db->where('child_id',$child)->count_all_results($tree)+0;
    
   
   
    
            if($check_child == 0 && $child!='ILS1000'){
                $last_parents = $this->db->select('parent_id')->order_by('tree_id',"DESC")->limit(1)->get($tree)->row()->parent_id;
                if(empty($last_parents)){
                    $last_parent = 'ILS1000';
                }else{
                    $last_parent = $last_parents;
                }    
                $child_count = $this->db->where('parent_id',$last_parent)->count_all_results($tree)+0;
                    //log_message("error", $this->db->last_query());
                if($child_count < $matrix){
                    
                    if($child_count ==0){
                        
                        $position='left';
                    }else{
                        $position='right';
                    }
                    
                     $team_data=$this->db->select('team')->where('child_id',$last_parent)->get('tree')->row()->team;
    
                    $users_admin_data = $this->db->count_all_results('tree');
                    		
                
                    		if($users_admin_data<1){
                    		    
                    		   $team =$last_parent;
                    		}else{
                    		    
                    		    $team =$last_parent.",".$team_data;
                    		}
    		
    		
                    $treedata = array(
                        'parent_id' => $last_parent,
                        'child_id' => $child,
                        'position' =>$position,
                        'team'  =>$team,
                        'entry_date'=> date('Y-m-d H:i:s'));
                        
                    $this->db->insert($tree, $treedata);
                        
                     
                   
                } else {
                    $last_parent = $this->db->select('parent_id')->order_by('tree_id',"DESC")->limit(1)->get($tree)->row()->parent_id;
                    
                    $tree_id = $this->db->select('tree_id')->where('child_id',$last_parent)->order_by('tree_id',"DESC")->limit(1)->get($tree)->row()->tree_id;
                        //log_message("error", $this->db->last_query());
                        
                    $nextparent = $this->db->select('child_id')->where('tree_id',($tree_id+1))->get($tree)->row()->child_id;
                    
                    $nextparent_count = $this->db->where('parent_id',$nextparent)->count_all_results($tree)+0;
                    
                        //log_message("error", $this->db->last_query());
                        
                      if($nextparent_count ==0){
                        
                        $position='left';
                    }else{
                        $position='right';
                    }
                     $team_data=$this->db->select('team')->where('child_id',$nextparent)->get('tree')->row()->team;
    
                    $users_admin_data = $this->db->count_all_results('tree');
                    		
                
                    		if($users_admin_data<1){
                    		    
                    		   $team = $last_parent;
                    		}else{
                    		    
                    		    $team = $last_parent." ,".$team_data;
                    		}
    		
                    $treedata = array(
                        'parent_id' => $nextparent,
                        'child_id' => $child,
                        'position' =>$position,
                        'team'  =>$team,
                        'entry_date'=> date('Y-m-d H:i:s'));
                   $this->db->insert($tree, $treedata);
                }
            } else {
               return false; 
           }
}
    //+++++++++++++++++++++++++++++++ TREE INSERTENDS +++++++++++++++++++++++++++++++//
    

     //Pay to users generated amount
	public function payall()
	{
        	$this->db->trans_start();
        
        	$pusers = $this->input->post('puser');
        	
            foreach ($pusers as $key => $puser) {
                	log_message('error',$puser);
                
                $withdetails = $this->db->order_by('id',"DESC")->limit(1)->where('user_id',$puser)->where('status','Request')->get('withdraw_request')->row_array();
                log_message('error',$this->db->last_query());   

                $dataearn = array(
                    'status'=>'Paid',
                    'approve_date'=>date('Y-m-d H:i:s')
                );
                   
            
                $dataacc = array(
                    'user_id' => $withdetails['user_id'],
                    'debit' => $withdetails['amount'],
                    'entry_date'=> ('Y-m-d H:i:s'),
                    'remark' => "Paid",
                    'description' => $withdetails['id']);
                $this->db->insert('account', $dataacc);
                    
                $this->db->where('id',$withdetails['id']);
                $this->db->update('withdraw_request',$dataearn);

            }

        	$this->db->trans_complete(); 
        	if($this->db->trans_status() == FALSE){
                return false;
            } else {
                return true;
            }
        
    }
   

    //+++++++++++++++++++++++++++++++ LOGIN PROCESS ++++++++++++++++++++++++++++++++//

    // public function login($username='',$password='')
    // {
    //     $this->db->where('username',$username);
    //     $this->db->where('pwd',sha1($password));

    //     $this->db->where('status','Active');
    //     $details = $this->db->get('user_role')->row_array();
    //     log_message('error',$this->db->last_query());   
    //     if (!empty($details)) {
    //         return $details;
    //     } else {
    //         return false;
    //     }
    // }

    //+++++++++++++++++++++++++++++++ LOGIN PROCESS END ++++++++++++++++++++++++++++++++//

    //+++++++++++++++++++++++++++++++ Setup Process ++++++++++++++++++++++++++++++++//

    public function setup_manage()
    {
        $this->db->trans_start();
        $userdata = array(
            'username' => $this->input->post('username'),
            'ref_id' => 1,
            'pwd' => sha1($this->input->post('pwd')),
            'user_type' => 'a',
            'rank' => 'Admin',
            'user_id' => $this->input->post('user_id'),
            'entry_date' =>date("Y-m-d")
        );
        $this->db->insert('user_role', $userdata);
        $child_id = $this->db->insert_id();
        $profile_data  =  array(
        'profile_id' => $child_id,   
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'phone' => $this->input->post('phone'),
        'entry_date' =>date("Y-m-d"),
        'door'=> $this->input->post('door'),
        'street'=> $this->input->post('street'),
        'city'=> $this->input->post('city'),
        'district'=> $this->input->post('district'),
        'state'=> $this->input->post('state'),
        'pin'=> $this->input->post('pin')
        );
        $this->db->insert('profile', $profile_data);
                        
        $setupdata = array(
            'company_name' => $this->input->post('name'),
            'gst' => $this->input->post('gst'),
            'tin' => $this->input->post('tin'),
            'currency' => $this->input->post('currency')
        );
        $this->db->insert('setup', $setupdata);
        
        $this->db->trans_complete();
        if($this->db->trans_status() == FALSE){
            return false;
        } else {
            return true;
        }
    }

    //+++++++++++++++++++++++++++++++ Setup Process End ++++++++++++++++++++++++++++++++//

    //+++++++++++++++++++++++++++++++ Get Specified Table Row ++++++++++++++++++++++++++++++++//


    public function get_row_data($tablename, $where, $value = FALSE) 
    {
        $rowdata = $this->db->where($where, $value)->get($tablename)->row_array();
        return $rowdata;
    }

    //+++++++++++++++++++++++++++++++ Get Specified Table Row End ++++++++++++++++++++++++++++++++//

    //+++++++++++++++++++++++++++++++ Get Specified Table  ++++++++++++++++++++++++++++++++//

    public function get_tabledata($tablename,$where=FALSE,$value=FALSE)
    {
        if ($where!=FALSE && $value!=FALSE) {
            $this->db->where($where, $value);
        }
        $tabledata = $this->db->get($tablename)->result_array();
        return $tabledata;
    }
    //+++++++++++++++++++++++++++++++ Get Specified Table End ++++++++++++++++++++++++++++++++//

    //+++++++++++++++++++++++++++++++ Get All Child By Level  ++++++++++++++++++++++++++++++++//

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

    //+++++++++++++++++++++++++++++++ Get All Child By Level End  ++++++++++++++++++++++++++++++++//

    //+++++++++++++++++++++++++++++++ REGISTRATION PROCESS ++++++++++++++++++++++++++++++++//

    public function randuser()
    {
        $uscode = "IL".(1000+($this->db->order_by('user_role_id',"DESC")->limit(1)->get('user_role')->row()->user_role_id+0));
        return $uscode;
    }
    
     public function trans_pass( $length = 8 ) {
    // $chars = "0123456789";
    // log_message('error',$length);
    $password = substr( str_shuffle( '0123456789' ), 0, $length );
    return $password;
}
    
   
    public function alphanumeric( $length = 16 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$&()_;:,.?";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}

    public function register_manage()
    {
        $this->db->trans_start();
            $user_id =$this->randuser();
            $pass = $this->alphanumeric();
            $trans_pass = $this->trans_pass();

            $userdata = array(
                'username' => $user_id,
                'name' => $this->input->post('name'),
                'ref_id' => $this->input->post('ref_id'),
                'email' => $this->input->post('email'),
                'phone' => $this->input->post('phone'),
                'tpwd' => sha1($trans_pass),
                'pwd' => sha1($pass),
                'pwd_hint' => $pass,
                'tpwd_hint' =>$trans_pass,
                'user_type' => 'u',
                'entry_date' =>date("Y-m-d H:i:s")
            );
            $this->db->insert('user_role', $userdata);
           // log_message("error", $this->db->last_query());
              
        $parents = $this->user->get_all_parent('tree',$user_id,$res=array());
        
        //  for ($i=0; $i < count($parents); $i++) { 
        //     $this->db->set("left_count",'left_count+1',FALSE);
        //     $this->db->where('username',$parents[$i]);
        //     $this->db->update('user_role');
        //     log_message("error", $this->db->last_query());
            
        // }
        $this->db->trans_complete();
        if($this->db->trans_status() != FALSE){
            $emaildata['user'] = $user_id;
            $emaildata['pass'] = $pass;
            $emaildata['tpass'] = $trans_pass;
            $this->sendmail($this->input->post('email'),$user_id,$this->input->post('pwd'),"Welcome from Infinity Loops","admin/mail_welcome","Infinity Loops");
            $values[0] = 'true';
            $values[1] = $emaildata['user'];
            $values[2] = $emaildata['pass'];
            $values[3] = $emaildata['tpass'];
            return $values;
        } else {
            return false;
        }
    }
    
    //+++++++++++++++++++++++++++++++ REGISTRATION PROCESS END ++++++++++++++++++++++++++++++++//

    //+++++++++++++++++++++++++++++++ REGISTRATION DETAILS VIA EMAIL ++++++++++++++++++++++++++++++++//

public function sendmail($email,$user,$pass){

    $config['mailtype'] = 'html';    

    $dataemail['user']=$user;

    $dataemail['pass']=$pass;

    $this->load->library('email'); 

    $this->email->from('novelxshibin@gmail.com', 'Infinity Loops'); 

    $this->email->to($email);

    $this->email->set_header('Content-Type', 'text/html');

    $this->email->subject('Welcome Mail'); 

    $this->email->message($this->load->view('admin/mail_welcome',$dataemail,true));   

    $this->email->send();

}

    //+++++++++++++++++++++++++++++++ REGISTRATION DETAILS VIA EMAIL END ++++++++++++++++++++++++++++++++//

    //+++++++++++++++++++++++++++++++ GENERATING USER ID ++++++++++++++++++++++++++++++++//

    // public function randuser()
    // {
    //     $uscode = "HPG".rand (1000000 , 9999999);
    //     $query = $this->db->get_where('user_role', array('username' => $uscode))->row_array();
    //     if (!empty($query)) {
    //         $this->randuser("HPG".rand (1000000 , 9999999));
    //     }
    //     return $uscode;
    // }

    //+++++++++++++++++++++++++++++++ GENERATING USER ID END ++++++++++++++++++++++++++++++++//
   
    //+++++++++++++++++++++++++++++++ COUNT CHILDREN ++++++++++++++++++++++++++++++++//

    public function countChildren($tree, $parentId, $Nlevel = 0, $legPosition = 0, $tempLevel = 0)
    {
        if ($Nlevel) {
            if ($tempLevel < $Nlevel) {
                $tempLevel = $tempLevel + 1;
                if ($tempLevel == 1 && $legPosition) {
                    $children =$this->db->where('parent_id', $parentId)->where('position', $legPosition)->get($tree)->result_array();
                } else {
                    $children = $this->db->where('parent_id', $parentId)->get($tree)->result_array();
                }
                $count = count($children);
                foreach ($children as $key => $userId) {
                    $count += $this->countChildren($tree, $userId['child_id'], $Nlevel, $legPosition, $tempLevel);
                    log_message("error", $this->db->last_query());
                }
                return $count;
            }
        } else {
            if ($legPosition) {
                $children = $this->db->where('parent_id', $parentId)->where('position', $legPosition)->get($tree)->result_array();
            } else {
                $children = $this->db->where('parent_id', $parentId)->get($tree)->result_array();
            }
            $count = count($children);
            foreach ($children as $key =>  $userId) {
                $count += $this->countChildren($tree, $userId['child_id']);
            }
            return $count;
        }
    }

    //+++++++++++++++++++++++++++++++ COUNT CHILDREN END ++++++++++++++++++++++++++++++++//

    //+++++++++++++++++++++++++++++++ INVESTMENT PROCESS  ++++++++++++++++++++++++++++++++//

    public function add_admin_request()
    {
        $this->db->trans_start();
        
        $data['user_id'] = $this->input->post('hids');
        $data['wallet_value'] = $this->input->post('amount');
        
        $data['sender_wallet_address'] = $this->db->order_by('id',"DESC")->limit(1)->where('status','Active')->where('user_id',$this->session->userdata('ausername'))->get('admin_wallet')->row()->wallet;
        $data['receiver_wallet_address'] = $this->input->post('wallet');
        $data['ref_id'] = $this->db->select('ref_id')->where('username',$this->input->post('hids'))->get('user_role')->row()->ref_id;
        $data['status'] = "Accepted";
        $data['type'] = 'investment';
        $data['entry_date'] = date("Y-m-d H:i:s");
        $data['approve_date'] = date("Y-m-d H:i:s");
        $this->db->insert('admin_request',$data);

        $this->db->trans_complete();
        if($this->db->trans_status() == FALSE)
            return true;
        else
            return false;
    }

    //+++++++++++++++++++++++++++++++ INVESTMENT PROCESS END ++++++++++++++++++++++++++++++++//

    //+++++++++++++++++++++++++++++++ INVESTMENT APPROVAL ++++++++++++++++++++++++++++++++//

   
    
    
    
    //+++++++++++++++++++++++++++++++ GET LEVEL OF A PARENT  ++++++++++++++++++++++++++++++++//
    
    public function getparentatlevel($tree,$parent,$level,$list_child) 
    {
        //for binary only 
        // $resultccc = $this->db->where('parent_id', $parent)->order_by('position', 'ASC')->get($tree)->result_array();
        
        $resultccc = $this->db->where('parent_id', $parent)->get($tree)->result_array();
        foreach ($resultccc as $key => $value) {
            $list_child[]=array($level=>$value['child_id']);
            if(count($resultccc) >= 0)
            {
                $list_child=$this->getparentatlevel($tree,$value['child_id'],$level+1,$list_child);
            }
        }
        return $list_child;
    }
    //+++++++++++++++++++++++++++++++ GET LEVEL OF A PARENT END ++++++++++++++++++++++++++++++++//
    
    //+++++++++++++++++++++++++++++++ GET CHILDREN COUNT OF A PARENT  ++++++++++++++++++++++++++++++++//
    
     public function get_children($tree, $parent, $level){
        $resultccc = $this->db->where('parent_id', $parent)->get($tree)->result_array();
        $count = array(0=>0);
        foreach ($resultccc as $key => $row) {
            $count[0]++;
            $children= $this->get_children($tree,$row['child_id'],$level+1);
            $index=1;
            foreach ($children as $child)
            {
                if ($child==0)
                    continue;
                if (isset($count[$index]))
                    $count[$index] += $child;
                else    
                    $count[$index] = $child;
                $index++;
            }
        }  
        return $count; 
    }
    
    //+++++++++++++++++++++++++++++++ GET CHILDREN COUNT OF A PARENT END  ++++++++++++++++++++++++++++++++//

    //+++++++++++++++++++++++++++++++ TREE REGISTRATION (UNI LEVEL) PROCESS  ++++++++++++++++++++++++++++++++//

    // public function autofill($tree,$parent,$child){

    //     $childcount = $this->db->where('child_id',$child)->count_all_results($tree)+0;
    //     if($childcount < 1){
    //         $data2['parent_id'] = $parent;
    //         $data2['child_id'] = $child;
    //         $data2['entry_date'] = date('Y-m-d');
    //         if($this->db->insert($tree,$data2)) {
    //             return true;
    //         } else {
    //             return false;
    //         } 
    //     }
    // }
    
    //+++++++++++++++++++++++++++++++ TREE REGISTRATION (UNI LEVEL) PROCESS END ++++++++++++++++++++++++++++++++//
    
    //+++++++++++++++++++++++++++++++ TREE REGISTRATION (THREE MATRIX) PROCESS ++++++++++++++++++++++++++++++++//
    
    public function autofill($tree,$parent,$child){
        if($this->db->where('child_id',$child)->count_all_results($tree)+0 == 0){
            $childcount = $this->db->where('parent_id',$parent)->where('parent_id ',1)->count_all_results($tree)+0;
            if($childcount < 3){
                $data2['parent_id'] = $parent;
                $data2['child_id'] = $child;
                $data2['entry_date'] = date('Y-m-d');
                if($this->db->insert($tree,$data2)) {
                    return true;
                } else {
                    return false;
                } 
            } else {
                $levelcounts = $this->get_children($tree,$parent,0);
                for ($i=0; $i <= count($levelcounts); $i++) { 
                    if($levelcounts[$i] != pow(3,$i+1))
                    {
                        $alllevelcounts = $this->getparentatlevel($tree,$parent,1,$list_child=array());
                        $childarray = array();
                        for ($j=0; $j < count($alllevelcounts); $j++) { 
                            if($alllevelcounts[$j][$i] != '') {
                                $childarray[] = $alllevelcounts[$j][$i];
                            }
                            foreach ($childarray as $key => $ccc) {
                                $childcount = $this->db->where('parent_id',$ccc)->count_all_results($tree);
                                if($childcount < 3){
                                    $data2['parent_id'] = $ccc;
                                    $data2['child_id'] = $child;
                                    $data2['entry_date'] = date('Y-m-d');
                                    if($this->db->insert($tree,$data2)) {
                                        return true;
                                    } else {
                                        return false;
                                    } 
                                }
                            }
                        }
                    }
                } 
            }
        } else {
            return false;
        }
    }

   //+++++++++++++++++++++++++++++++ TREE REGISTRATION (THREE MATRIX) PROCESS END ++++++++++++++++++++++++++++++++//

    //+++++++++++++++++++++++++++++++ GET ALL PARENT OF USER  ++++++++++++++++++++++++++++++++//

    public function get_all_parent($tree, $catId,$raws)
    {
        $roi_users = $this->db->where('child_id',$catId)->get($tree)->result_array();
        foreach ($roi_users as $key => $value)
        {
            array_push($raws,$value['parent_id']);
            $raws = $this->get_all_parent($tree, $value['parent_id'],$raws);
        }
        return $raws;
    }

    //+++++++++++++++++++++++++++++++ GET ALL PARENT OF USER END ++++++++++++++++++++++++++++++++//

    //+++++++++++++++++++++++++++ SEND FORGOT PASSWORD ON MAIL  ++++++++++++++++++++++++++++//

    public function send_forgotpass($email_id,$pass){

        $message = '
        <!DOCTYPE html>
        <html>

        <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        </head>

        <body style="background-color: #f4f4f4; margin: 0 !important; padding: 0 !important;">
        <!-- HIDDEN PREHEADER TEXT -->
        <div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: '."'Lato'".', Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;"> We'."'".'re thrilled to have you here! Get ready ! Be Secure ! Be Safe. </div>
        <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <!-- LOGO -->
        <tr>
        <td bgcolor="#FFA73B" align="center">
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
        <tr>
        <td align="center" valign="top" style="padding: 40px 10px 40px 10px;"> </td>
        </tr>
        </table>
        </td>
        </tr>
        <tr>
        <td bgcolor="#FFA73B" align="center" style="padding: 0px 10px 0px 10px;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
        <tr>
        <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: '."'Lato'".', Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;">
        <h1 style="font-size: 48px; font-weight: 400; margin: 2;">Forgot Password!</h1> <h3>NXTMLM</h3>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        <tr>
        <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
        <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
        <tr>
        <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 40px 30px; color: #666666; font-family: '."'Lato'".', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
        <p style="margin: 0;">Please Use this (';
        $message .=$pass;
       

        $message .=') Password for Login!</p>
        </td>
        </tr> <!-- COPY -->
        </table>
        </td>
        </tr>

        </table>
        </body>

        </html>';


        $to = $email_id;
        $subject = 'Forgot Password';
        if (mail($to, $subject, $message))
            log_message('error',"send");
        else 
            log_message('error',"Not send");

        return "ok"; 
    }

    //++++++++++++++++++++++++++++ SEND FORGOT PASSWORD ON MAIL END +++++++++++++++++++++++++++++//

    //+++++++++++++++++++++++++++++++ BANK APPROVE PROCESS  ++++++++++++++++++++++++++++++++//


    public function bank_approve()
    {
        $this->db->trans_start();
        $bank_request = $this->get_row_data('bank_request','bank_request_id',$this->input->post('hids'));
        $bankdata = array(
            'acc_name' => $bank_request['acc_name'],
            'acc_no' => $bank_request['acc_no'],
            'acc_branch' => $bank_request['acc_branch'],
            'acc_bank' => $bank_request['acc_bank'],
            'acc_ifsc' => $bank_request['acc_ifsc'],
            'cfile' => $bank_request['cfile'],
            'status' => 'Verified'
        );
        $this->db->where('user_id',$bank_request['user_id']);
        $this->db->update('bank', $bankdata);
        $this->db->where('bank_request_id',$this->input->post('hids'));
        $this->db->update('bank_request',array('status' => 'Accepted'));
        $this->db->trans_complete();
        if($this->db->trans_status() == FALSE){
            return false;
        } else {
            return true;
        }
    }

    //+++++++++++++++++++++++++++++++ BANK APPROVE PROCESS END ++++++++++++++++++++++++++++++++//

    //+++++++++++++++++++++++++++++++ KYC APPROVE PROCESS  ++++++++++++++++++++++++++++++++//

    public function kyc_approve()
    {
        $this->db->trans_start();
        $kyc_request = $this->get_row_data('kyc_request','kyc_request_id',$this->input->post('hids'));
        $kycdata = array(
            'aadhar' => $kyc_request['aadhar'],
            'pan' => $kyc_request['pan'],
            'afile' => $kyc_request['afile'],
            'pfile' => $kyc_request['pfile'],
            'status' => 'Verified'

        );
        $this->db->where('user_id',$kyc_request['user_id']);
        $this->db->update('kyc', $kycdata);
        $this->db->where('kyc_request_id',$this->input->post('hids'));
        $this->db->update('kyc_request',array('status' => 'Accepted'));
        $this->db->trans_complete();
        if($this->db->trans_status() == FALSE){
            return false;
        } else {
            return true;
        }
    }

    //+++++++++++++++++++++++++++++++ KYC APPROVE PROCESS END ++++++++++++++++++++++++++++++++//

    //+++++++++++++++++++++++++++++++ ADD WITHRAW REQUEST  ++++++++++++++++++++++++++++++++//

    public function add_withdraw_request($user_id)
    {
        $user = $this->get_row_data('user_role','user_role_id',$user_id);
        $data['user_id'] = $user_id;
        $data['amount'] = $this->input->post('amount');
        $data['status'] = "Request";
        $data['date'] = date("Y-m-d H:i:s");
        $this->db->insert('withdraw_request',$data);
        return true;
    }

    //+++++++++++++++++++++++++++++++ ADD WITHRAW REQUEST END ++++++++++++++++++++++++++++++++//

    //+++++++++++++++++++++++++++++++ APPROVE WITHRAW REQUEST ++++++++++++++++++++++++++++++++//

    public function approve_withdraw_request()
    {
        $this->db->trans_start();
        $withdetails = $this->db->get_where('withdraw_request',array('id'=>$this->input->post('hids')))->row_array();
        $dataearn = array(
            'status'=>'Paid',
            'approve_date'=>date('Y-m-d H:i:s')
        );

         $this->db->where('id',$this->input->post('hids'));
        $this->db->update('withdraw_request',$dataearn);

        $this->db->trans_complete();
        if($this->db->trans_status() == FALSE){
            return false;
        } else {
                return true;
        }
    }

    //+++++++++++++++++++++++++++++++ APPROVE WITHRAW REQUEST END ++++++++++++++++++++++++++++++++//
    
    public function tree_testing(){
	    for ($j=1; $j<=1000; $j++) {

	            $parent =1;
	            $child =   $j+1;
	      
            if($this->db->where('child_id',$j+1)->count_all_results('tree') == 0 ){
                $this->autofill("tree",$parent,$child);
              
            }

    	}
	}

}

?>
