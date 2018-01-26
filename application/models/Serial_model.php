<?php
/**
 * Author: dongzhexue
 * Date: 2018/1/21
 * Desc:
 */

class Serial_model extends CI_Model
{

    public function getList()
    {
        $res = $this->db->query('select * from serial limit 0, 10');
        echo '<pre>';
        print_r($res->result());
        exit;
    }



}