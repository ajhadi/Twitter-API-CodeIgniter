<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library(array('ion_auth', 'form_validation'));
		$this->load->helper(array('url', 'language'));

		$this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
		$_SESSION['iduser'] = $this->ion_auth->user()->row()->id;
		$this->lang->load('auth');
	}

 
	public function index()
	{	
		$this->session->unset_userdata('name');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('picture_url');
		$this->session->unset_userdata('access_token');
		$this->session->unset_userdata('access_token_secret');
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		else if($this->ion_auth->is_admin())// remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the login page
			redirect('dashboard/admin', 'refresh');
		}
		else
		{
			// redirect them to the login page
			redirect('dashboard/user', 'refresh');
		}
	}

	public function admin()
	{
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		else if($this->ion_auth->is_admin())// remove this elseif if you want to enable this for non-admins
		{
		$this->load->model('log_model');
		//highchart USERS
		$data['user_count'] = $this->log_model->user_all_log();
		$data['user_month_1'] = $this->log_model->user_all_log_1();
        $data['user_month_2'] = $this->log_model->user_all_log_2();
        $data['user_month_3'] = $this->log_model->user_all_log_3();
        $data['user_month_4'] = $this->log_model->user_all_log_4();
        $data['user_month_5'] = $this->log_model->user_all_log_5();
        $data['user_month_6'] = $this->log_model->user_all_log_6();
        $data['user_month_7'] = $this->log_model->user_all_log_7();
        $data['user_month_8'] = $this->log_model->user_all_log_8();
        $data['user_month_9'] = $this->log_model->user_all_log_9();
        $data['user_month_10'] = $this->log_model->user_all_log_10();
        $data['user_month_11'] = $this->log_model->user_all_log_11();
        $data['user_month_12'] = $this->log_model->user_all_log_12();
        //hisghchart ACCOUNT
        $data['account_count'] = $this->log_model->account_all_log();
		$data['account_month_1'] = $this->log_model->account_all_log_1();
        $data['account_month_2'] = $this->log_model->account_all_log_2();
        $data['account_month_3'] = $this->log_model->account_all_log_3();
        $data['account_month_4'] = $this->log_model->account_all_log_4();
        $data['account_month_5'] = $this->log_model->account_all_log_5();
        $data['account_month_6'] = $this->log_model->account_all_log_6();
        $data['account_month_7'] = $this->log_model->account_all_log_7();
        $data['account_month_8'] = $this->log_model->account_all_log_8();
        $data['account_month_9'] = $this->log_model->account_all_log_9();
        $data['account_month_10'] = $this->log_model->account_all_log_10();
        $data['account_month_11'] = $this->log_model->account_all_log_11();
        $data['account_month_12'] = $this->log_model->account_all_log_12();


		$this->load->view('header');
		$this->load->view('nav_admin');
		$this->load->view('dashboard_admin', $data);
		$this->load->view('footer');

		}
		else
		{	
			// redirect them to the login page
			redirect('dashboard/user', 'refresh');
		}
	}

	public function user($id=null)
	{
		$id = $id;
		if (!$this->ion_auth->logged_in())
		{
			// redirect them to the login page
			redirect('auth/login', 'refresh');
		}
		
		else if($this->ion_auth->is_admin())// remove this elseif if you want to enable this for non-admins
		{
			// redirect them to the login page
			redirect('dashboard/admin', 'refresh');
		}
		else
		{
			$user = $this->ion_auth->user()->row()->id;
			if (isset($id)) {
            $this->load->model('account_model');
            $data['info'] = $this->account_model->show_detail($id)->result();
	        }
	        else{
	        	
	            $this->load->model('account_model');
	            $data['account'] = $this->account_model->show_idaccount_user_min($user)->result();
	            foreach ($data['account'] as $acc) {
	                $id = $acc->account_id;
	            }
	            $data['info'] = $this->account_model->show_detail($id)->result();
	        }

	        foreach ($data['info'] as $profil) {
            $data['account_id'] = $profil->account_id;
            $data['name'] = $profil->name;
            $data['screen_name'] = $profil->screen_name;
        }if (empty($data['info'])) {
            redirect('twitter', 'refresh');
        }

		//get account list
        $this->load->model('account_model');
        $data['account'] = $this->account_model->show_account_user($user)->result();


			$this->load->model('log_model');
		$punya = $this->ion_auth->user()->row()->id;
        $data['month_1'] = $this->log_model->user_log_1($punya);
        $data['month_2'] = $this->log_model->user_log_2($punya);
        $data['month_3'] = $this->log_model->user_log_3($punya);
        $data['month_4'] = $this->log_model->user_log_4($punya);
        $data['month_5'] = $this->log_model->user_log_5($punya);
        $data['month_6'] = $this->log_model->user_log_6($punya);
        $data['month_7'] = $this->log_model->user_log_7($punya);
        $data['month_8'] = $this->log_model->user_log_8($punya);
        $data['month_9'] = $this->log_model->user_log_9($punya);
        $data['month_10'] = $this->log_model->user_log_10($punya);
        $data['month_11'] = $this->log_model->user_log_11($punya);
        $data['month_12'] = $this->log_model->user_log_12($punya);

		$this->load->view('header');
		$this->load->view('nav_user');
		$this->load->view('dashboard_user',$data);
		$this->load->view('footer');

		}
	}
}
