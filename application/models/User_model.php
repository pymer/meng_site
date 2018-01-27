<?php
/**
 * Author: dongzhexue
 * Date: 2018/1/24
 * Desc:
 */

class User_model extends CI_Model
{
    /***
     * 验证用户登录的手机号码与密码是否正确
     * @param $mobile
     * @param $password
     *
     * @return bool
     */
    public function verifyMobilePassword($mobile, $password)
    {
        $sql = "select * from user where mobile = ? and status = 1 limit 0, 1;";
        $user_info = $this->db->query($sql, [$mobile])->first_row('array');
        if (empty($user_info)){
            $this->errorResponse(0,'请检查对应的用户名和密码');
        }
        if (md5(md5($user_info['salt']) . $password) != $user_info['password']){
            $this->errorResponse(0, '请检查对应的用户名和密码');
        }
        $this->saveLoginSession($user_info);
        return true;
    }

    /***
     * 存储用户登录的session信息
     * @param $user_info
     */
    public function saveLoginSession($user_info)
    {
        $user_info['is_login'] = true;
        $this->session->set_userdata($user_info);
    }



}