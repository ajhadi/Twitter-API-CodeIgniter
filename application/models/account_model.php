<?php
class Account_model extends CI_Model{
 
    function show_account(){
        $this->db->select('*');
        $this->db->from('twitter_account');
        $this->db->join('users', 'users.id = twitter_account.created_by');

        $query = $this->db->get();
        return $query;
    }

    function show_account_user($user){
        $id = $user;
        return $this->db->get_where('twitter_account', array('created_by' => $id ));
    }


    function addTwitterAcc($data){
        $data = $data;
    $this->db->insert('twitter_account', $data);
    }

    function show_detail($id){
    	$id = $id;
    	return $this->db->get_where('twitter_account', array('account_id' => $id ));
    } 
    function deleteAccount($id)
    {
        //delete produk berdasarkan id
        $this->db->where('account_id', $id);
        $this->db->delete('twitter_account');
    }

    function show_twitter($id){
        $id = $id;
        return $this->db->get_where('twitter_account', array('account_id' => $id ));
    }

    function show_idaccount_admin_min(){
    	$this->db->select_min('account_id');
	    return $this->db->get('twitter_account');
    }
    function show_idaccount_user_min($user){
        $user = $user;
        $this->db->select_min('account_id');
        return $this->db->get_where('twitter_account', array('created_by' => $user ));
    }

}
?>