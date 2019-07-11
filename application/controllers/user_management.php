<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class User_management extends CI_Controller {

    function __construct(){
        parent::__construct();
        // konfigurasi helper & library
        $this->load->helper('url');
        $this->load->library('pagination');
        $this->load->database();
        $_SESSION['iduser'] = $this->ion_auth->user()->row()->id;
    }
 
    function index(){
        if (!$this->ion_auth->logged_in())
        {
            // redirect them to the login page
            redirect('auth/login', 'refresh');
        }
        
        else if(!$this->ion_auth->is_admin())// remove this elseif if you want to enable this for non-admins
        {
            // redirect them to the login page
            redirect('auth', 'refresh');
        }
        else
        {
        if (!isset($_SESSION['user_ld'])) {
            $this->load->model('user_model');
            $data['user'] = $this->user_model->show_idaccount_admin_min()->result();
            foreach ($data['user'] as $acc) {
                $ld = $acc->id;
            }
        }else{
            $ld = $_SESSION['user_ld'];
        }
        $this->load->model('log_model');
        $punya = $ld;
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
        
        $config['base_url']=base_url()."index.php/user_management/index";
    	$header['title'] ='User Management';

    $config['total_rows']= $this->db->query("SELECT * FROM users inner join users_groups on users.id = users_groups.user_id;")->num_rows();
        $config['per_page']=6;
        $config['num_links'] = 2;
        $config['uri_segment']=3;
  
        //Tambahan untuk styling

        $config['full_tag_open'] = "<ul class='pagination'>";
        $config['full_tag_close'] ="</ul>";
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = "<li class='disabled'><li class='active'><a href='#'>";
        $config['cur_tag_close'] = "<span class='sr-only'></span></a></li>";
        $config['next_tag_open'] = "<li>";
        $config['next_tagl_close'] = "</li>";
        $config['prev_tag_open'] = "<li>";
        $config['prev_tagl_close'] = "</li>";
        $config['first_tag_open'] = "<li>";
        $config['first_tagl_close'] = "</li>";
        $config['last_tag_open'] = "<li>";
        $config['last_tagl_close'] = "</li>";
 
        $config['first_link']='< Fisrt ';
        $config['last_link']='Last > ';
        $config['next_link']='> ';
        $config['prev_link']='< ';
        $this->pagination->initialize($config);
        // konfigurasi model dan view untuk menampilkan data
        $this->load->model('user_model');
        $data['datausers']=$this->user_model->getAll($config);
        $this->load->view('header');
        $this->load->view('user_listing', $data);
        $this->load->view('footer');
    }
}
    public function deleteUser($id)
    {
        $this->user_model->deleteUser($id);
        redirect('user_management');
    }

    public function refresh($id)
    {
        $_SESSION['user_ld'] = $id;
        redirect('user_management');
    }

}