<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

     public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form','url'));
        $this->load->library(array('form_validation', 'email'));
        $this->form_validation->set_error_delimiters('<span style="color:red">', '</span>');
        $this->load->library('session');
    }
    
    public function withdrawal_history()
    {
      if ($this->session->userdata('bhpusertype') != 'u')
      redirect('user','refresh');
      
      $this->load->view('user/withdrawal_history');
    }
    
    public function active_tab()
    {
       $name = $this->input->post('act_id');
       $this->session->set_userdata('act_name', $name);
       
       //log_message('error',$this->session->userdata('act_name'));
    }
    
    
    public function add_bankcard()
     {
       if ($this->session->userdata('bhpusertype') != 'u')
      redirect('user','refresh');
      
      $this->load->view('user/add_bankcard');
     }
     
     public function commission_income()
     {
       if ($this->session->userdata('bhpusertype') != 'u')
      redirect('user','refresh');
      
      $this->load->view('user/commission_income');
     }
    
    
     public function complaints()
     {
       if ($this->session->userdata('bhpusertype') != 'u')
      redirect('user','refresh');
      
      $this->load->view('user/complaints');
     }
   
   
    
      public function account_check()
      {
        $check = $this->db->where('acc_no',$this->input->post('ubank_account'))->count_all_results('bank')+0;
        
        if($check > 0)
        {
            $this->form_validation->set_message('account_check', 'Account number already exist');
           return FALSE;
        }
        else
        {
            return true;
        }
      }

    
    
    public function add_bank()
    {
        
        if ($this->session->userdata('bhpusertype') != 'u')
      redirect('user','refresh');
        
        $this->form_validation->set_rules('ubank_holder_name', 'Name', 'trim|required');
        $this->form_validation->set_rules('ubank_name', 'Bank Name', 'required|trim');
        $this->form_validation->set_rules('ubank_ifsc', 'IFSC Code', 'required|trim');
        $this->form_validation->set_rules('ubank_account', 'Account Number', 'required|numeric|callback_account_check');
        $this->form_validation->set_rules('state', 'State', 'required|trim');
        $this->form_validation->set_rules('city', 'City', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required');
        $this->form_validation->set_rules('w_phone', 'Phone', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim');
         $this->form_validation->set_rules('upi', 'UPI', 'required|trim');
        $this->form_validation->set_rules('phone', 'Phone', 'required|numeric|trim');
        
        if($this->form_validation->run() == TRUE)
        {
            $add = array(
            
            'user_id' => $this->session->userdata('bhpusername'),
            'acc_name' => $this->input->post('ubank_holder_name'),
            'ifsc' => $this->input->post('ubank_ifsc'),
            'bank_name' => $this->input->post('ubank_name'),
            'acc_no' => $this->input->post('ubank_account'),
            'state' => $this->input->post('state'),
            'city' => $this->input->post('city'),
            'address' => $this->input->post('address'),
            'phone' => $this->input->post('w_phone'),
            'email' => $this->input->post('email'),
            'upi' => $this->input->post('upi'),
            'acc_phone' => $this->input->post('phone')
            );
            
            $add_bank = $this->db->insert('bank',$add);
            
            if($add_bank)
            {
            $this->session->set_flashdata('success_message', 'Bank account added');
			redirect('user/edit_profile','refresh');
            }
            else
            {
            $this->session->set_flashdata('error_message', 'Something went wrong! Bank not added');
			redirect('user/edit_profile','refresh'); 
            }
        }
        else
        {
            $this->load->view('user/edit_profile');
        }
    }
    
    
	public function share_income()
	{
	    if ($this->session->userdata('bhpusertype') != 'u')
        redirect('user','refresh');
        
	    $data['page_name']='share_income';
		$this->load->view('user/share_income',$data);
	}
	
	
	public function wallet_history()
	{
	    if ($this->session->userdata('bhpusertype') != 'u')
        redirect('user','refresh');
        
	    $data['page_name']='wallet_history';
		$this->load->view('user/wallet_history',$data);
	}
	
	
      public function join_game_sapre()
    {
      if ($this->session->userdata('bhpusertype') != 'u')
      redirect('user','refresh');
      
      
      $user_id = $this->session->userdata('bhpusername');
        $amount = $this->input->post('amount');
       $bal = $this->db->select('sum(credit)-sum(debit) as balance')->where('user_id',$user_id)->get("wallet")->row()->balance+0;
       

       if($amount < $bal && $amount > 0 && $this->input->post('selected_value') !="")
       {
         $de = $this->user->game_amount($user_id,$amount);
         
         if($de)
         {
            $this->session->set_flashdata('success_message', 'Amount added');
			redirect('welcome/win','refresh');
         }
         else
         {
            $this->session->set_flashdata('error_message', 'Error');
			redirect('welcome/win','refresh');
         }
         
       }
       else
       {
          $this->session->set_flashdata('error_message', 'Insufficient amount');
	      redirect('welcome/win','refresh');
       }
       
    }
    
    public function join_game()
    {
      if ($this->session->userdata('bhpusertype') != 'u')
      redirect('user','refresh');
      
      
      $user_id = $this->session->userdata('bhpusername');
        $amount = $this->input->post('amount');
       $bal = $this->db->select('sum(credit)-sum(debit) as balance')->where('user_id',$user_id)->get("wallet")->row()->balance+0;
       

        if($amount <= $bal && $amount > 0 && $this->input->post('selected_value') >= 0){
            
            $de = $this->user->game_amount($user_id,$amount);
         
            if($de){
                $this->session->set_flashdata('success_message', 'Amount added');
    			redirect('welcome/win','refresh');
            }else{
                $this->session->set_flashdata('error_message', 'Error');
    			redirect('welcome/win','refresh');
            }
         
       }else{
          $this->session->set_flashdata('error_message', 'Insufficient amount');
	      redirect('welcome/win','refresh');
       }
       
    }
    
    
    
    
    
    
    
    public function checkutr()
    {
        $check = $this->db->where('utr',$this->input->post('utr'))->count_all_results('admin_request')+0;
        
        if($check > 0)
        {
            $this->form_validation->set_message('checkutr', 'Transaction hash already exist');
           return FALSE;
        }
        else
        {
            return true;
        }
    }
    
    
    public function admin_request()
	{
	    
	  if ($this->session->userdata('bhpusertype') != 'u')
      redirect('user','refresh');
       
       log_message('error',$this->input->post('utr'));
       
		if ($_POST) {
			$this->form_validation->set_rules('utr', 'utr', 'callback_checkutr');

			if($this->form_validation->run()==true) {
				if($this->user->add_admin_request($this->session->userdata('username'))) {
					$this->session->set_flashdata('success_message', 'Request Successfully');
					redirect('user/online_recharge','refresh');
				} else {
					$this->session->set_flashdata('error_message', 'check your details');
					redirect('user/online_recharge','refresh');
				} 
			} else {
				// $this->session->set_flashdata('error_message', 'check your details');
				// 	redirect('user/online_recharge','refresh');
				$this->load->view('user/online_recharge');
			}
		}
	}
    
    
    public function update_upload()  
	{  
		if(isset($_FILES["update_upload"]["name"]))  
		{  
			$config['file_name'] = time();
			$config['upload_path'] = 'assets/receipt';  
			$config['allowed_types'] = 'jpg|jpeg|png|gif';  
			$config['overwrite'] = false;
			$this->load->library('upload', $config);  
			if(!$this->upload->do_upload('update_upload'))  
			{  
				echo $this->upload->display_errors();  
			}  
			else  
			{  
				$data = $this->upload->data();  
				echo $data["file_name"];  
			}  
		}  
	}
    
    
    public function reset_mail_check()
    {
        
        $check = $this->db->where('user_name',$this->session->userdata('bhpusername'))->where('email',$this->input->post('email'))->count_all_results('user_role')+0;
        
        log_message('error',$check);
        
        if($check > 0)
        {
            if($this->user->reset_otp($this->input->post('email')));
        	echo "success";
		} else {
		    
			echo "empty";
		
		}
    }
    
    
    
    
    public function forgot_mail_check()
    {
        
        $check = $this->db->where('email',$this->input->post('email'))->count_all_results('user_role')+0;
        
        log_message('error',$check);
        
        if($check > 0)
        {
            if($this->user->forgot_otp($this->input->post('email')));
        	echo "success";
		} else {
		    
			echo "empty";
		
		}
    }
    
    
    
   public function new_check()
    {
        $check = $this->db->where('email',$this->input->post('email'))->count_all_results('user_role')+0;
        
        log_message('error',$check);
        
        if($check > 0)
        {
        	echo "empty";
		} else {
		    if($this->user->reg_otp($this->input->post('email')));
			echo "success";
		
		}
    }
    
    
    public function test()
    {
    $username = "0,2,4,6";
        
     $fstchar = substr($username, -1);
    }
    
    public function otp_check()
    {
        $check = $this->db->where('user_name',$this->session->userdata('bhpusername'))->where('otp',$this->input->post('otp'))->get('user_role')->row_array();
        
         $date = $check['otp_time'];
         $newtimestamp = strtotime($date. ' + 5 minute');
         $newdate = date('Y-m-d H:i:s', $newtimestamp);
         $now_date = date('Y-m-d H:i:s');
            
        if(!empty($check) && $newdate > $now_date)
        {
            return true;
        }
        else
        {
           $this->form_validation->set_message('otp_check', 'OTP not valid');
           return FALSE;
        }
    }
    
    
    public function change_password()
    {
        if($_POST)
        {
            $this->form_validation->set_rules('otp', 'OTP', 'trim|required|callback_otp_check');
            $this->form_validation->set_rules('n_pass', 'New Password', 'trim|required');
            
             if($this->form_validation->run() == TRUE)
              {
                
                $this->db->set('pwd',sha1($this->input->post('n_pass')));
                $this->db->set('pwd_hint',$this->input->post('n_pass'));
                $this->db->where('user_name',$this->session->userdata('bhpusername'));
                $new_pass = $this->db->update('user_role');
                
                if($new_pass)
                {
                $this->session->set_flashdata('success_message' , "Your Password Changed successfully");
                redirect('user/edit_profile1','refresh'); 
                }
                else
                {
                $this->session->set_flashdata('error_message' , "Something went wrong Password not changed");
                redirect('user/edit_profile1','refresh'); 
                }
                  
              }
              else
              {
                 $this->load->view('user/edit_profile1');   
              }
        }
    }
    
    
    
    public function mail_check()
    {
        $check = $this->db->where('user_name',$this->session->userdata('bhpusername'))->where('email',$this->input->post('email'))->count_all_results('user_role')+0;
        
        if($check > 0)
        {
            return true;
        }
        else
        {
           $this->form_validation->set_message('mail_check', 'Enter Valid Mail ID');
           return FALSE;
        }
    }
    
    
    public function send_otp()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|callback_mail_check');
        
        if($this->form_validation->run() == TRUE)
        {
            $otp = rand(1000,9999);
            
            $this->db->set('otp',$otp);
            $this->db->set('otp_time',date('Y-m-d H:i:s'));
            $this->db->where('user_name',$this->session->userdata('bhpusername'));
            $this->db->update('user_role');
            
            //$mail = $this->db->select('email')->where('user_name',$this->session->userdata('bhpusername'))->get('user_role')->row()->email;
            
            $mail = $this->input->post('email');
            
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
            if(!$this->email->send()){
                $this->session->set_flashdata('success_message' , "OTP sent to your Mail ID");
                redirect('user/edit_profile1','refresh'); 
            } else {
               $this->session->set_flashdata('error_message' , "Mail not sent. Please try after sometime");
                redirect('user/edit_profile1','refresh'); 
            }
        }
        else
        {
           $this->load->view('user/edit_profile1'); 
        }

    }
    
    
    
	public function index()
	{
	    if($this->session->userdata('bhpusertype') == 'u')
	    {
	        $this->load->view('user/dashboard');
	    }
	    else
	    {
		$this->load->view('user/login');
	    }
	}

	public function game_report()
	{
	    if ($this->session->userdata('bhpusertype') != 'u')
      redirect('user','refresh');
	    
		$this->load->view('user/game_report');
	}

	public function referral ()
	{
	    if ($this->session->userdata('bhpusertype') != 'u')
      redirect('user','refresh');
	    
		$this->load->view('user/referral');
	}

	public function online_recharge_history()
	{
	    if ($this->session->userdata('bhpusertype') != 'u')
        redirect('user','refresh');
	    
		$this->load->view('user/online_recharge_history');
	}


	public function online_recharge()
	{
	    if ($this->session->userdata('bhpusertype') != 'u')
        redirect('user','refresh');
	    
		$this->load->view('user/online_recharge');
	}
	
	public function reference()
	{
	    if ($this->session->userdata('bhpusertype') != 'u')
        redirect('user','refresh');
      
		$this->load->view('user/reference');
	}

	public function withdrawal()
	{
	    if ($this->session->userdata('bhpusertype') != 'u')
        redirect('user','refresh');
	    
		$this->load->view('user/withdrawal');
	}
	

	
	public function edit_profile()
	{
	    if ($this->session->userdata('bhpusertype') != 'u')
        redirect('user','refresh');
	    
		$this->load->view('user/edit_profile');
	}
	
	public function edit_address()
	{
	    if ($this->session->userdata('bhpusertype') != 'u')
        redirect('user','refresh');
	    
	    if($_POST)
	    {
	        $this->form_validation->set_rules('city', 'City', 'trim|required');
	        $this->form_validation->set_rules('state', 'State', 'trim|required');
	        $this->form_validation->set_rules('pincode', 'Pincode', 'numeric|trim|required');
	        $this->form_validation->set_rules('address', 'Address', 'trim|required');
	        
	        if($this->form_validation->run() == TRUE)
            {
                $address = array(
                
                'city' => $this->input->post('city'),
                'state' => $this->input->post('state'),
                'pincode' => $this->input->post('pincode'),
                'address' => $this->input->post('address')
                
                );
                
                $add_address = $this->db->where('user_name',$this->session->userdata('bhpusername'))->update('user_role',$address);
                
                if($add_address)
                {
                  $this->session->set_flashdata('success_message' , "Address Updated");
                redirect('user/edit_address','refresh'); 
                } else {
                $this->session->set_flashdata('error_message' , "Please try again address not updated");
                redirect('user/edit_address','refresh'); 
                 }
            }
            else
            {
              	$this->load->view('user/edit_address');
            }
	    }
	    
		$this->load->view('user/edit_address');
	}
	
	public function edit_profile1()
	{
	    if ($this->session->userdata('bhpusertype') != 'u')
        redirect('user','refresh');
	    
	    if ($this->session->userdata('bhpusertype') != 'u')
        redirect('user','refresh');
	    
		$this->load->view('user/edit_profile1');
	}
	
	public function query()
	{
	    if ($this->session->userdata('bhpusertype') != 'u')
        redirect('user','refresh');
        
        if($_POST){
            
            $rand=rand(11111,99999);
            
            $com_id = date('Ymdhis').rand(1111,9999);
            
           $message=array(
             'complaint_id' =>$com_id,
             'out_id'=>$this->input->post('out_id'),
             'user_id'=>$this->session->userdata('bhpusername'),
            'description'=>$this->input->post('message'),
             'phone'=>$this->input->post('whatsapp'),
             'type'=>$this->input->post('type'),
             'entry_date'=> date('Y-m-d H:i:s')
            );
            $success=$this->db->insert('complaints',$message);
            
            if($success)
            
            {
            $this->session->set_flashdata('success', "YOUR COMPLAINT RAISED SUCCESSFULLY");
            $this->load->view('user/query','refresh');
            }
            
            else
            {
                
            $this->session->set_flashdata('Error', "TRY AGAIN");
            $this->load->view('user/query','refresh');
            }
        }
	    else{
		$this->load->view('user/query');
	    }
	}
	
	
	
	public function privacy ()
	{
	    if ($this->session->userdata('bhpusertype') != 'u')
        redirect('user','refresh');
	    
		$this->load->view('user/privacy');
	}
	
	public function risk()
	{
	    if ($this->session->userdata('bhpusertype') != 'u')
        redirect('user','refresh');
        
		$this->load->view('user/risk');
	}
	
	public function login()
	{
	if($_POST) 
        {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            log_message('error', $phone."phho");
            $check = $this->user->login($email,$password);
            if ($check !== false) {
                // log_message('error', $check['user_name']."dsfdsf");
                // log_message('error', $check['phone']);
                // log_message('error', $check['user_type']);
                $this->session->set_userdata('bhpusername', $check['user_name']);
                $this->session->set_userdata('bhpphone', $check['phone']);
                $this->session->set_userdata('bhpusertype', $check['user_type']);
                 $this->session->set_userdata('bhpemail', $check['email']);
                redirect('user','refresh');
            } else {
                $this->session->set_flashdata('error_message' , "Please enter valid username and password");
                redirect('user','refresh');
            }
        }
	}
	
    public function phone_check()
   {
       $phone = $this->db->where('phone',$this->input->post('phone'))->count_all_results('user_role')+0;
       
       if($phone > 0)
       {
           $this->form_validation->set_message('phone_check', 'Phone number already exists');
           return FALSE;
       }
       else
       {
           return TRUE;
       }
   }
	
	public function reg_otp_check()
	{

	   $count = $this->db->order_by('entry_date','desc')->where('email',$this->input->post('email'))->where('otp',$this->input->post('otp'))->get('reg_otp')->row_array();
	   log_message("error", $this->db->last_query());
    	 $date = $count['entry_date'];
         $newtimestamp = strtotime($date. ' + 5 minute');
         $newdate = date('Y-m-d H:i:s', $newtimestamp);
          $now_date = date('Y-m-d H:i:s');
          
	    log_message('error',$newdate."newdate");
	    log_message('error',$now_date."nowdate");
	     log_message('error',date("H:i:s")."nowdate");
	   if(!empty($count) && $newdate > $now_date)
	   {
	       return TRUE;
	   }
	   else
	   {
	       $this->form_validation->set_message('reg_otp_check', 'OTP not valid');
	       return FALSE;
	   }
	   
	}
	
	
	
	public function register($parent_ids="")
	{
	    
	    if($_POST)
	    {
           $this->form_validation->set_rules('phone', 'Phone', 'trim|min_length[10]|max_length[10]|numeric|required|callback_phone_check');
           $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
           $this->form_validation->set_rules('otp', 'OTP', 'required|callback_reg_otp_check');
           $this->form_validation->set_rules('password', 'Password', 'required');
           $this->form_validation->set_rules('ref_id', 'Referral ID', 'trim|required');
           
           log_message('error',$this->input->post('phone'));
           
             if($this->form_validation->run()==true) 
             {
                $reg = $this->user->register_manage();
                
                if($reg)
                {
                    $this->session->set_flashdata('success_message','Registered successfully');
                    redirect('user','refresh');
                }
                else
                {
                    $this->session->set_flashdata('error_message','Something went wrong! Data not inserted');
                    redirect('user','refresh');
                }
	         }
	         else
	         {
	            $this->load->view('user/register');
	         }
	    }
	    else
	    {
	    
	     $parent_id = hex2bin($parent_ids);
        // log_message('error',$parent_id);
            if (!empty($parent_id)){
                $plid_check = $this->db->get_where('user_role',array('user_name'=>$parent_id))->row_array();
                if ($plid_check) {
                    $data['ref'] = $plid_check['user_name'];
                    // log_message('error',$plid_check['user_name']."eeee");
                } else {
                    $data['ref'] = $this->db->get_where('user_role',array('user_role_id'=>1))->row()->user_name;
                }
            } else {
                $data['ref'] = $this->db->get_where('user_role',array('user_role_id'=>1))->row()->user_name;
            }
            
	        
		$this->load->view('user/register',$data);
	    }
	}
	
	public function forgot_otp_check()
	{
	    $count = $this->db->where('email',$this->input->post('email'))->where('otp',$this->input->post('otp'))->get('user_role')->row_array();
	    log_message("error", $this->db->last_query());
    	 $date = $count['otp_time'];
         $newtimestamp = strtotime($date. ' + 5 minute');
         $newdate = date('Y-m-d H:i:s', $newtimestamp);
          $now_date = date('Y-m-d H:i:s');
          
	    log_message('error',$newdate."newdate");
	    log_message('error',$now_date."nowdate");
	     log_message('error',date("H:i:s")."nowdate");
	   if(!empty($count) && $newdate > $now_date)
	   {
	       return TRUE;
	   }
	   else
	   {
	       $this->form_validation->set_message('reg_otp_check', 'OTP not valid');
	       return FALSE;
	   }
	}
	
	
	
	
	public function forgot_password()
	{
	    if($_POST)
	    {
	       $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
           $this->form_validation->set_rules('otp', 'OTP', 'required|callback_forgot_otp_check');
           $this->form_validation->set_rules('password', 'Password', 'required');
           
           if($this->form_validation->run()==true) 
           {
              $this->db->set('pwd',sha1($this->input->post('password')));
              $this->db->set('pwd_hint',$this->input->post('password'));
              $this->db->where('email',$this->input->post('email'));
             $pass = $this->db->update('user_role');
              
              if($pass)
              {
                  $this->session->set_flashdata('success_message','Password changed successfully');
                  redirect('user','refresh');
              }
              else
              {
                  $this->session->set_flashdata('error_message','Something went wrong, Password not changed');
                  redirect('user/forgot_password','refresh');
              }
              
           }
           else
           {
               $this->load->view('user/forgot_password');
           }
           
	    }
	    else
	    {
		$this->load->view('user/forgot_password');
	    }
	}
	
	public function logout()
	{
	  $this->session->set_userdata('bhpusername', '');
      $this->session->set_userdata('bhpphone', '');
      $this->session->set_userdata('bhpusertype', '');
      $this->session->set_userdata('act_name', '');
      redirect('user','refresh');
	}
	
	public function roi()
	{
	    
	    if ($this->session->userdata('bhpusertype') != 'u')
        redirect('user','refresh');
	    
	    $this->load->view('user/roi');
	}

	
}

