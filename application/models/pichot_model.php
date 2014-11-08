<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pichot_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this -> load -> database();
    }


    public function addnum($group, $pic, $step = 1){

        $query = $this -> db -> get_where('pichot', array('group' => $group, 'pic' => $pic), 1);
        $result = $query -> row_array();
        $data = array(
            'num' => $result['num'] + $step,
        );
        $this -> db -> where(array('group' => $group, 'pic' => $pic));
        return $this -> db -> update('pichot', $data);
    }

    /*

    public function insertUser($uid, $email){

        $data = array(
            'weiboId' => $uid,
            'email' => $email,
            'addTime' => time(),
            'status' => 2,
        );

        return $this -> db -> insert('user', $data);
    }

    public function getUser($uid){
        $query = $this -> db -> get_where('user', array('weiboId' => $uid, 'status' => 2), 1);
        return $query -> result_array();
    }

    //获取人数
    public function getsum(){
        $now = $this->db->count_all_results('user');
        $old = 10732;
        $total = $now + $old;
        return $total;
    }

    */


}
