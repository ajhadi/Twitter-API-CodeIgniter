<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 use Abraham\TwitterOAuth\TwitterOAuth;
class Social_account extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper(array('url', 'language'));

        $this->form_validation->set_error_delimiters($this->config->item('error_start_delimiter', 'ion_auth'), $this->config->item('error_end_delimiter', 'ion_auth'));
        $_SESSION['iduser'] = $this->ion_auth->user()->row()->id;
        $this->lang->load('auth');
        require_once APPPATH.'libraries/twitteroauth/autoload.php';
    }


    public function index()
    {   

        
        //clear twitter session
        $this->session->unset_userdata('token');
        $this->session->unset_userdata('token_secret');
        $this->session->unset_userdata('status');
        $this->session->unset_userdata('userData');


        //admin or user
        if (!$this->ion_auth->logged_in())
        {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        }
        
        else if($this->ion_auth->is_admin())// remove this elseif if you want to enable this for non-admins
        {

            // redirect them to the login page
            redirect('Social_account/admin', 'refresh');
        }
        else
        {
            // redirect them to the login page
            redirect('Social_account/user', 'refresh');
        }
    }

    public function Admin($id=null){
        if (!$this->ion_auth->logged_in())
        {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        }
        
        else if(!$this->ion_auth->is_admin())// remove this elseif if you want to enable this for non-admins
        {
            // redirect them to the login page
            redirect('Social_account/user', 'refresh');
        }
        else
        {
        /*||||||||||||||||||||||||||||||||| 
        || G E T   P R O F I L   I N F O ||
        |||||||||||||||||||||||||||||||||*/
        if (isset($id)) {
            $this->load->model('account_model');
            $data['info'] = $this->account_model->show_detail($id)->result();
        }else{
            $this->load->model('account_model');
            $data['account'] = $this->account_model->show_idaccount_admin_min()->result();
            foreach ($data['account'] as $acc) {
                $id = $acc->account_id;
            }
            $data['info'] = $this->account_model->show_detail($id)->result();
        }
        if (empty($data['info'])) {
            redirect('twitter', 'refresh');
        }
        foreach ($data['info'] as $profil) {
            $data['account_id'] = $profil->account_id;
            $data['consumer_key'] = $profil->consumer_key;
            $data['consumer_secret'] = $profil->consumer_secret;
            $data['access_token'] = $profil->access_token;
            $data['access_token_secret'] = $profil->access_token_secret;
            $data['picture_url'] = $profil->picture_url;
            $data['banner_url'] = $profil->banner_url;
            $data['name'] = $profil->name;
            $data['screen_name'] = $profil->screen_name;
            $data['follower_count'] = $profil->follower_count;
            $data['following_count'] = $profil->following_count;
            $data['tweet_count'] = $profil->tweet_count;

        

            //get highchart count
        $this->load->model('log_model');
        $punya = $data['account_id'];
        $data['month_1'] = $this->log_model->account_log_1($punya);
        $data['month_2'] = $this->log_model->account_log_2($punya);
        $data['month_3'] = $this->log_model->account_log_3($punya);
        $data['month_4'] = $this->log_model->account_log_4($punya);
        $data['month_5'] = $this->log_model->account_log_5($punya);
        $data['month_6'] = $this->log_model->account_log_6($punya);
        $data['month_7'] = $this->log_model->account_log_7($punya);
        $data['month_8'] = $this->log_model->account_log_8($punya);
        $data['month_9'] = $this->log_model->account_log_9($punya);
        $data['month_10'] = $this->log_model->account_log_10($punya);
        $data['month_11'] = $this->log_model->account_log_11($punya);
        $data['month_12'] = $this->log_model->account_log_12($punya);
        }

        

        //get account list
        $this->load->model('account_model');
        $data['account'] = $this->account_model->show_account()->result();


        //view
        $this->load->view('header');
        $this->load->view('nav_admin');
        if (isset($_SESSION['post'])) {
            $note = $_SESSION['post'];
            echo $note;
        }
        $this->load->view('Social_account_admin', $data);
        $this->load->view('footer');
        unset($_SESSION['post']);
    }
    }

    public function user($id=null){
        if (!$this->ion_auth->logged_in())
        {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        }
        
        else if($this->ion_auth->is_admin())// remove this elseif if you want to enable this for non-admins
        {
            // redirect them to the login page
            redirect('Social_account/admin', 'refresh');
        }
        else
        {
        
        /*||||||||||||||||||||||||||||||||| 
        || G E T   P R O F I L   I N F O ||
        |||||||||||||||||||||||||||||||||*/
        if (isset($id)) {
            $this->load->model('account_model');
            $data['info'] = $this->account_model->show_detail($id)->result();
        }else{
            $this->load->model('account_model');
            $data['account'] = $this->account_model->show_idaccount_user_min($_SESSION['iduser'])->result();
            foreach ($data['account'] as $acc) {
                $id = $acc->account_id;
            }
            $data['info'] = $this->account_model->show_detail($id)->result();
        }if (empty($data['info'])) {
            redirect('twitter', 'refresh');
        }

        foreach ($data['info'] as $profil) {
            $data['account_id'] = $profil->account_id;
            $data['consumer_key'] = $profil->consumer_key;
            $data['consumer_secret'] = $profil->consumer_secret;
            $data['access_token'] = $profil->access_token;
            $data['access_token_secret'] = $profil->access_token_secret;
            $data['picture_url'] = $profil->picture_url;
            $data['banner_url'] = $profil->banner_url;
            $data['name'] = $profil->name;
            $data['screen_name'] = $profil->screen_name;
            $data['follower_count'] = $profil->follower_count;
            $data['following_count'] = $profil->following_count;
            $data['tweet_count'] = $profil->tweet_count;

            //get highchart count
        $this->load->model('log_model');
        $punya = $data['account_id'];
        $data['month_1'] = $this->log_model->account_log_1($punya);
        $data['month_2'] = $this->log_model->account_log_2($punya);
        $data['month_3'] = $this->log_model->account_log_3($punya);
        $data['month_4'] = $this->log_model->account_log_4($punya);
        $data['month_5'] = $this->log_model->account_log_5($punya);
        $data['month_6'] = $this->log_model->account_log_6($punya);
        $data['month_7'] = $this->log_model->account_log_7($punya);
        $data['month_8'] = $this->log_model->account_log_8($punya);
        $data['month_9'] = $this->log_model->account_log_9($punya);
        $data['month_10'] = $this->log_model->account_log_10($punya);
        $data['month_11'] = $this->log_model->account_log_11($punya);
        $data['month_12'] = $this->log_model->account_log_12($punya);
        }

        

        //get account list
        $user = $_SESSION['iduser'];
        $this->load->model('account_model');
        $data['account'] = $this->account_model->show_account_user($user)->result();


        //view
        $this->load->view('header');
        $this->load->view('nav_user');
        if (isset($_SESSION['post'])) {
            $note = $_SESSION['post'];
            echo $note;
        }
        $this->load->view('Social_account_user', $data);
        $this->load->view('footer');
        unset($_SESSION['post']);
    }
    }

    public function delete_account($id)
    {   
        $id = $id;
        $this->load->model('account_model');
        $twitter = $this->account_model->show_twitter($id)->result();
        foreach ($twitter as $profil) {
            $screen_name = $profil->screen_name;
        }
        $this->account_model->deleteAccount($id);
        $response = $screen_name.' has been deleted...';
        $_SESSION['post'] = $response;
        redirect('Social_account');
    } 
    //twitter login
    public function addtw()
    {
        $this->load->view('header');
        $this->load->view('addtw_form');
        $this->load->view('footer');
    } 

    //consumer token form and insert data to twitter_account table
    public function addTwitterAccount()
    {
        
        $now = date('Y-m-d');
        $data = array(
                'consumer_key' => $this->input->post('consumer_key'),
                'consumer_secret' => $this->input->post('consumer_secret'),
                'access_token' => $this->input->post('access_token'),
                'access_token_secret' => $this->input->post('access_token_secret'),
                'created_by' => $_SESSION['iduser'],
                'name' => $this->input->post('name'),
                'picture_url' => $this->input->post('picture_url'),
                'banner_url' => $this->input->post('banner_url'),
                'follower_count' => $this->input->post('follower_count'),
                'following_count' => $this->input->post('following_count'),
                'tweet_count' => $this->input->post('tweet_count'),
                'screen_name' => $this->input->post('screen_name'),
                'created_date' => $now,
                );
        $this->user_model->addTwAcc($data);

        $now = date('Y-m-d');
        $month = date('m');
        $file = array(
                'activity_type' => 'Create_Account',
                'activity_name' => $this->input->post('screen_name'),
                'activity_date' => $now,
                'month' => $month,
                'user_id' => $_SESSION['iduser'],
                );
        $this->load->model('Log_model');
        $this->Log_model->Create_account($file);


        redirect('Social_account');
    } 

}