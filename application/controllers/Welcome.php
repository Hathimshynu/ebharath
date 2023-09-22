<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('form','url'));
        $this->load->library(array('form_validation', 'email'));
        $this->form_validation->set_error_delimiters('<span style="color:red">', '</span>');
        $this->load->library('session');
    }

	public function index()
	{
	    
		$this->load->view('index');
	}
	public function test()
	{
	   if ($this->session->userdata('bhpusertype') != 'u')
       redirect('user','refresh');
	    
	    $this->load->view('test');
	}
	public function winxxx()
	{

	    $this->load->view('win_x');
	}
	
	public function win()
	{
	   if ($this->session->userdata('bhpusertype') != 'u')
       redirect('user','refresh');
	    
	    $this->load->view('win');
	}
	
	public function login()
	{
	    if ($this->session->userdata('bhpusertype') != 'u')
       redirect('user','refresh');
	    
	    $this->load->view('login');
	}
	
	public function product()
	{
	    if ($this->session->userdata('bhpusertype') != 'u')
      redirect('user','refresh');
	    
	   $this->load->view('product');
	}
}