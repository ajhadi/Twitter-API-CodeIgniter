<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Twitter extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    include_once APPPATH."libraries/twitter-oauth-php/twitteroauth.php";
  }
  
   public function Index(){
    $userData = array();
    
    $consumerKey = 'ID70E5BXuzrAnGmjMFHjgB1EN'; //Insert_Twitter_API_Key
    $consumerSecret = 'ylD6QxsP1HMbLUwi3leDq44c4oUfNpLllYdef9MNengRI97rYU'; //Insert_Twitter_API_Secret
    $oauthCallback = base_url().'index.php/twitter/';
    
    $sessToken = $this->session->userdata('token');
    $sessTokenSecret = $this->session->userdata('token_secret');
    
    $sessStatus = $this->session->userdata('status');
    $sessUserData = $this->session->userdata('userData');
    
    if(isset($sessStatus) && $sessStatus == 'verified')
    {
      $connection = new TwitterOAuth($consumerKey, $consumerSecret, $sessUserData['accessToken']['oauth_token'], $sessUserData['accessToken']['oauth_token_secret']); 
      $data['tweets'] = $connection->get('statuses/user_timeline', array('screen_name' => $sessUserData['username'], 'count' => 5));
      $userData = $sessUserData;
    }
    elseif(isset($_REQUEST['oauth_token']) && $sessToken == $_REQUEST['oauth_token'])
    {
      $connection = new TwitterOAuth($consumerKey, $consumerSecret, $sessToken, $sessTokenSecret); 
      $accessToken = $connection->getAccessToken($_REQUEST['oauth_verifier']);
    
        $userInfo = $connection->get('account/verify_credentials');
    
        $name = explode(" ",$userInfo->name);
        $first_name = isset($name[0])?$name[0]:'';
        $last_name = isset($name[1])?$name[1]:'';
        $userData = array(
          'oauth_provider' => 'twitter',
          'oauth_uid' => $userInfo->id,
          'username' => $userInfo->screen_name,
          'first_name' => $first_name,
          'last_name' => $last_name,
          'locale' => $userInfo->lang,
          'profile_url' => 'https://twitter.com/'.$userInfo->screen_name,
          'picture_url' => $userInfo->profile_image_url
        );
        
        $_SESSION['name'] = $first_name.' '.$last_name;
        $_SESSION['username'] = $userInfo->screen_name;
        $_SESSION['picture_url'] = $userInfo->profile_image_url;
        $_SESSION['banner_url'] = $userInfo->profile_banner_url;
        $_SESSION['tweet_count'] = $userInfo->statuses_count;
        $_SESSION['follower_count'] = $userInfo->followers_count;
        $_SESSION['following_count'] = $userInfo->friends_count;

        $userData['accessToken'] = $accessToken;
        $this->session->set_userdata('status','verified');
        $this->session->set_userdata('userData',$userData);
        redirect('Social_account/addtw');
        die;
    }
    else
    {
      $this->session->unset_userdata('token');
      $this->session->unset_userdata('token_secret');
      
      $connection = new TwitterOAuth($consumerKey, $consumerSecret);
      $requestToken = $connection->getRequestToken($oauthCallback);
      
      $this->session->set_userdata('token',$requestToken['oauth_token']);
      $this->session->set_userdata('token_secret',$requestToken['oauth_token_secret']);
      
      $twitterUrl = $connection->getAuthorizeURL($requestToken['oauth_token']);
      $data['oauthURL'] = $twitterUrl;
        }

    $data['userData'] = $userData;
    $this->load->view('Twitterlogin',$data);
    }
}
