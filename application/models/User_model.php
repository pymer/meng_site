<?php
/**
 * Author: dongzhexue
 * Date: 2018/1/24
 * Desc:
 */

class User_model extends CI_Model
{
    /***
     * @param $mobile
     * @param $password
     */
    public function verifyMobilePassword($mobile, $password)
    {
        $sql = "select * from user where mobile = ? and password = ? and status = 1";
        $res = $this->db->query($sql, [$mobile, $password]);



    }

    public function getUrlId(string $url)
    {


    }


}