<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Abraham\TwitterOAuth\TwitterOAuth;
class Tweet_Post extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
        $this->load->helper(array('url', 'language','form'));

  }
  
   public function Index(){
    require_once APPPATH.'libraries/twitteroauth/autoload.php';

    
     $key = $_POST['consumer_key'];
     $secret_key = $_POST['consumer_secret'];
     $token = $_POST['access_token'];
     $secret_token = $_POST['access_token_secret'];
     $_SESSION['account_id'] = $_POST['account_id'];
     $conn = new TwitterOAuth($key, $secret_key, $token, $secret_token);

     
     
  // data
  $status = $_POST['status'];

  // foto
  if (!empty($_FILES['foto'])) {
    # code...
    $temp = $_FILES['foto']['tmp_name'];
    $name = $_FILES['foto']['name'];
   $media = $conn->upload('media/upload', array('media'=>$temp));
   $datas = array(
    'status'=>$status,
    'media_ids' => implode(',', array($media->media_id_string)),
   );
   $result = $conn->post('statuses/update', $datas);

   if(isset($result->errors)){
    $response = 'Update Status Failed....';
   }else{
     $now = date('Y-m-d');
     $month = date('m');
        $data = array(
                'activity_type' => 'tweet',
                'activity_name' => $status,
                'activity_date' => $now,
                'month' => $month,
                'user_id' => $_SESSION['iduser'],
                'account_id' => $_SESSION['account_id'],
                );
        $this->load->model('Log_model');
        $this->Log_model->tweet($data);
    $response = 'Update Status Success !!!';
   }
  }else{
    $datas = array('status'=>$status);
   $result = $conn->post('statuses/update', $datas);

   if(isset($result->errors)){
    $response = 'Update  Failed....';
   }else{
     $now = date('Y-m-d');
     $month = date('m');
        $data = array(
                'activity_type' => 'tweet',
                'activity_name' => $status,
                'activity_date' => $now,
                'month' => $month,
                'account_id' => $_SESSION['account_id'],
                );
        $this->load->model('Log_model');
        $this->Log_model->tweet($data);
    $response = 'Update  Success !!!';
   }
  }
  

   

  
  $_SESSION['post'] = $response;
  unset($_SESSION['account_id']);
  redirect('social_account');
}
}