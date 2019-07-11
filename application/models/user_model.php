<?php
class User_model extends CI_Model{
 
    function getAll($config){  
        $this->db->select('*');    
        $this->db->from('users');
        $this->db->join('users_groups', 'users.id = users_groups.user_id');
        $this->db->limit($config['per_page'], $this->uri->segment(3));
        $hasilquery=$this->db->get();
        if ($hasilquery->num_rows() > 0) {
            foreach ($hasilquery->result() as $value) {
                $data[]=$value;
            }
            return $data;
        }      
    } 

    function deleteUser($id)
    {
        //delete produk berdasarkan id
        $this->db->where('id', $id);
        $this->db->delete('users');
        $this->db->where('created_by', $id);
        $this->db->delete('twitter_account');
    }

    function ubah($data, $id){
        $this->db->where('user_id',$id);
        $this->db->update('users_groups', $data);
        return TRUE;
    }

    function addTwAcc($data){
        $data = $data;
    $this->db->insert('twitter_account', $data);
    }

    function show_detail($id){
        $id = $id;
        return $this->db->get_where('twitter_account', array('user_id' => $id ));
    }

    function show_idaccount_admin_min(){
        $this->db->select_min('id');
        return $this->db->get('users');
    }

}
?>