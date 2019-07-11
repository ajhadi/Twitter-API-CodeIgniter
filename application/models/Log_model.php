<?php
class Log_model extends CI_Model{
 
    function Tweet($data){
        $data = $data;
    $this->db->insert('account_log', $data);
    }

    function Create_account($data){
        $data = $data;
    $this->db->insert('user_log', $data);
    }

    function Delete_account($data){
        $data = $data;
    $this->db->insert('user_log', $data);
    }


         /*|||||||||||||||||||||||||||||||||||||||| 
        ||   L O G   A C C O U N T   L o g i n  ||
        ||||||||||||||||||||||||||||||||||||||||*/
        
    function account_log_1($punya){$id = $punya;$query = $this->db->get_where('account_log', array('month' => '1', 'account_id' => $id));$total = $query->num_rows();return $total;}
    function account_log_2($punya){$id = $punya;$query = $this->db->get_where('account_log', array('month' => '2', 'account_id' => $id));$total = $query->num_rows();return $total;}
    function account_log_3($punya){$id = $punya;$query = $this->db->get_where('account_log', array('month' => '3', 'account_id' => $id));$total = $query->num_rows();return $total;}
    function account_log_4($punya){$id = $punya;$query = $this->db->get_where('account_log', array('month' => '4', 'account_id' => $id));$total = $query->num_rows();return $total;}
    function account_log_5($punya){$id = $punya;$query = $this->db->get_where('account_log', array('month' => '5', 'account_id' => $id));$total = $query->num_rows();return $total;}
    function account_log_6($punya){$id = $punya;$query = $this->db->get_where('account_log', array('month' => '6', 'account_id' => $id));$total = $query->num_rows();return $total;}
    function account_log_7($punya){$id = $punya;$query = $this->db->get_where('account_log', array('month' => '7', 'account_id' => $id));$total = $query->num_rows();return $total;}
    function account_log_8($punya){$id = $punya;$query = $this->db->get_where('account_log', array('month' => '8', 'account_id' => $id));$total = $query->num_rows();return $total;}
    function account_log_9($punya){$id = $punya;$query = $this->db->get_where('account_log', array('month' => '9', 'account_id' => $id));$total = $query->num_rows();return $total;}
    function account_log_10($punya){$id = $punya;$query = $this->db->get_where('account_log', array('month' => '10', 'account_id' => $id));$total = $query->num_rows();return $total;}
    function account_log_11($punya){$id = $punya;$query = $this->db->get_where('account_log', array('month' => '11', 'account_id' => $id));$total = $query->num_rows();return $total;}
    function account_log_12($punya){$id = $punya;$query = $this->db->get_where('account_log', array('month' => '12', 'account_id' => $id));$total = $query->num_rows();return $total;}


        /*|||||||||||||||||||||||||||||||||| 
        ||   L O G   d a s h   a d m i n  ||
        ||||||||||||||||||||||||||||||||||||*/
    function user_all_log(){$query = $this->db->get('users');$total = $query->num_rows();return $total;}
    function user_all_log_1(){$query = $this->db->get_where('user_log', array('month' => '1', ));$total = $query->num_rows();return $total;}
    function user_all_log_2(){$query = $this->db->get_where('user_log', array('month' => '2', ));$total = $query->num_rows();return $total;}
    function user_all_log_3(){$query = $this->db->get_where('user_log', array('month' => '3', ));$total = $query->num_rows();return $total;}
    function user_all_log_4(){$query = $this->db->get_where('user_log', array('month' => '4', ));$total = $query->num_rows();return $total;}
    function user_all_log_5(){$query = $this->db->get_where('user_log', array('month' => '5', ));$total = $query->num_rows();return $total;}
    function user_all_log_6(){$query = $this->db->get_where('user_log', array('month' => '6', ));$total = $query->num_rows();return $total;}
    function user_all_log_7(){$query = $this->db->get_where('user_log', array('month' => '7', ));$total = $query->num_rows();return $total;}
    function user_all_log_8(){$query = $this->db->get_where('user_log', array('month' => '8', ));$total = $query->num_rows();return $total;}
    function user_all_log_9(){$query = $this->db->get_where('user_log', array('month' => '9', ));$total = $query->num_rows();return $total;}
    function user_all_log_10(){$query = $this->db->get_where('user_log', array('month' => '10', ));$total = $query->num_rows();return $total;}
    function user_all_log_11(){$query = $this->db->get_where('user_log', array('month' => '11', ));$total = $query->num_rows();return $total;}
    function user_all_log_12(){$query = $this->db->get_where('user_log', array('month' => '12', ));$total = $query->num_rows();return $total;}

    function account_all_log(){$query = $this->db->get('twitter_account');$total = $query->num_rows();return $total;}
    function account_all_log_1(){$query = $this->db->get_where('account_log', array('month' => '1', ));$total = $query->num_rows();return $total;}
    function account_all_log_2(){$query = $this->db->get_where('account_log', array('month' => '2', ));$total = $query->num_rows();return $total;}
    function account_all_log_3(){$query = $this->db->get_where('account_log', array('month' => '3', ));$total = $query->num_rows();return $total;}
    function account_all_log_4(){$query = $this->db->get_where('account_log', array('month' => '4', ));$total = $query->num_rows();return $total;}
    function account_all_log_5(){$query = $this->db->get_where('account_log', array('month' => '5', ));$total = $query->num_rows();return $total;}
    function account_all_log_6(){$query = $this->db->get_where('account_log', array('month' => '6', ));$total = $query->num_rows();return $total;}
    function account_all_log_7(){$query = $this->db->get_where('account_log', array('month' => '7', ));$total = $query->num_rows();return $total;}
    function account_all_log_8(){$query = $this->db->get_where('account_log', array('month' => '8', ));$total = $query->num_rows();return $total;}
    function account_all_log_9(){$query = $this->db->get_where('account_log', array('month' => '9', ));$total = $query->num_rows();return $total;}
    function account_all_log_10(){$query = $this->db->get_where('account_log', array('month' => '10', ));$total = $query->num_rows();return $total;}
    function account_all_log_11(){$query = $this->db->get_where('account_log', array('month' => '11', ));$total = $query->num_rows();return $total;}
    function account_all_log_12(){$query = $this->db->get_where('account_log', array('month' => '12', ));$total = $query->num_rows();return $total;}

        /*|||||||||||||||||||||||||||||||||||||||||||||||||| 
        || LOG USER FOR userdashboard and user management ||
        ||||||||||||||||||||||||||||||||||||||||||||||||||*/
        
    function user_log_1($punya){$id = $punya;$query = $this->db->get_where('account_log', array('month' => '1', 'user_id' => $id));$total = $query->num_rows();return $total;}
    function user_log_2($punya){$id = $punya;$query = $this->db->get_where('account_log', array('month' => '2', 'user_id' => $id));$total = $query->num_rows();return $total;}
    function user_log_3($punya){$id = $punya;$query = $this->db->get_where('account_log', array('month' => '3', 'user_id' => $id));$total = $query->num_rows();return $total;}
    function user_log_4($punya){$id = $punya;$query = $this->db->get_where('account_log', array('month' => '4', 'user_id' => $id));$total = $query->num_rows();return $total;}
    function user_log_5($punya){$id = $punya;$query = $this->db->get_where('account_log', array('month' => '5', 'user_id' => $id));$total = $query->num_rows();return $total;}
    function user_log_6($punya){$id = $punya;$query = $this->db->get_where('account_log', array('month' => '6', 'user_id' => $id));$total = $query->num_rows();return $total;}
    function user_log_7($punya){$id = $punya;$query = $this->db->get_where('account_log', array('month' => '7', 'user_id' => $id));$total = $query->num_rows();return $total;}
    function user_log_8($punya){$id = $punya;$query = $this->db->get_where('account_log', array('month' => '8', 'user_id' => $id));$total = $query->num_rows();return $total;}
    function user_log_9($punya){$id = $punya;$query = $this->db->get_where('account_log', array('month' => '9', 'user_id' => $id));$total = $query->num_rows();return $total;}
    function user_log_10($punya){$id = $punya;$query = $this->db->get_where('account_log', array('month' => '10', 'user_id' => $id));$total = $query->num_rows();return $total;}
    function user_log_11($punya){$id = $punya;$query = $this->db->get_where('account_log', array('month' => '11', 'user_id' => $id));$total = $query->num_rows();return $total;}
    function user_log_12($punya){$id = $punya;$query = $this->db->get_where('account_log', array('month' => '12', 'user_id' => $id));$total = $query->num_rows();return $total;}


}
?>